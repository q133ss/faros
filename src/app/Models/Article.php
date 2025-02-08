<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    protected $guarded = [];

    protected $casts = [
        'content_list' => 'array'
    ];

    public function author(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Author::class, 'id', 'author_id');
    }

    public function seo(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Seo::class, 'seable');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ArticleCategory::class, 'id', 'category_id');
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(ArticleTag::class, 'articles_tag', 'article_id', 'tag_id');
    }

    public function scopeWithFilters($query, Request $request)
    {
        return $query
            ->when(
                $request->query('tags'),
                function (Builder $query, $tags) {
                    // Разбиваем теги по запятой и преобразуем их в массив ID
                    $tags_list = array_map('trim', explode(',', $tags)); // Удаляем лишние пробелы

                    // Проверяем, что список тегов не пустой
                    if (empty($tags_list)) {
                        return $query; // Если теги не указаны, возвращаем оригинальный запрос
                    }

                    // Фильтрация записей по тегам
                    $query->whereHas('tags', function ($query) use ($tags_list) {
                        $query->whereIn('article_tags.id', $tags_list);
                    });

                    // Сортировка записей по количеству совпадений с тегами
                    $query->withCount(['tags as tags_count' => function ($query) use ($tags_list) {
                        $query->whereIn('article_tags.id', $tags_list);
                    }]);

                    // Добавляем условие для сортировки по количеству совпадений
                    $query->orderByDesc('tags_count');
                }
            )
            ->when($request->query('search'),
                function (Builder $query, $search) {
                    return $query->whereAny(['list_name', 'post_name', 'slug'], 'LIKE', "%{$search}%");
            })
            ->when($request->query('category'), function (Builder $query, $category) {
                return $query->where('category_id', $category);
            })
            ->when($request->query('sort'), function (Builder $query, $sort) {
                switch ($sort) {
                    case 'new':
                        return $query->orderBy('created_at', 'desc');
                        break;
                    case 'old':
                        return $query->orderBy('created_at', 'asc');
                        break;
                    case 'popular':
                        return $query->orderBy('views', 'desc');
                        break;
                }
            });
    }
}

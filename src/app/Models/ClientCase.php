<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientCase extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Находим максимальное значение поля 'order'
            $maxOrder = static::max('order');

            // Устанавливаем значение поля 'order' для новой записи
            $model->order = $maxOrder + 1;
        });
    }

    public function scopeWithFilters($query, Request $request)
    {
        return $query
            ->when(
                $request->query('tags'),
                function (Builder $query, $tags) {
                    $tags_list = explode(',', $tags);

                    // Фильтрация записей по тегам с указанием таблицы
                    $query->whereExists(function ($query) use ($tags_list) {
                        $query->select(DB::raw(1))
                            ->from('case_tags')
                            ->join('case_tag', 'case_tags.id', '=', 'case_tag.tag_id')
                            ->whereColumn('client_cases.id', 'case_tag.case_id')
                            ->whereIn('case_tags.id', $tags_list);
                    })
                        // Сортировка записей по количеству совпадений с тегами с указанием таблицы
                        ->withCount(['tags' => function ($query) use ($tags_list) {
                            $query->whereIn('case_tags.id', $tags_list);
                        }])
                        ->orderBy('tags_count', 'desc')
                        ->orderBy('order', 'asc');
                }
            )
            ->when($request->query('search'),
            function (Builder $query, $search) {
                return $query->whereAny(['list_name', 'post_name', 'slug'], 'LIKE', "%{$search}%");
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

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(CaseTag::class, 'case_tag', 'case_id', 'tag_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}

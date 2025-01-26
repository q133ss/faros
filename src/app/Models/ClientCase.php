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
        // просто через ,
        // http://127.0.0.1:8000/case?tags=8,9
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
            );
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(CaseTag::class, 'case_tag', 'case_id', 'tag_id');
    }
}

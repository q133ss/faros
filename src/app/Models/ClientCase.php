<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(CaseTag::class, 'case_tag', 'case_id', 'tag_id');
    }
}

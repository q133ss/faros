<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id', 'id');
    }

    public function seo(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Seo::class, 'seable');
    }

    /**
     * Аксессор для поля img
     */
    public function getImgAttribute($value)
    {
        return $this->replaceSpaces($value);
    }

    /**
     * Вспомогательный метод для замены пробелов на %20
     */
    private function replaceSpaces($value)
    {
        return $value ? str_replace(' ', '%20', $value) : null;
    }
}

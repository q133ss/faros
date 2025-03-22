<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Smi extends Model
{
    protected $guarded = [];

    public function scopeWithSort($query, Request $request)
    {
        return $query
            ->when(
                $request->query('new'),
                function (Builder $query) {
                    return $query->orderBy('created_at', 'desc');
                }
            )
            ->when(
                $request->query('old'),
                function (Builder $query) {
                    return $query->orderBy('created_at', 'asc');
                }
            )->when(
                $request->query('popular'),
                function (Builder $query) {
                    return $query->orderBy('views', 'desc');
                }
            );
    }

    public function scopeWithSortDefault($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function seo(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Seo::class, 'seable');
    }

    /**
     * Аксессор для поля logo
     */
    public function getLogoAttribute($value)
    {
        return $this->replaceSpaces($value);
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

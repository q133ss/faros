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
}

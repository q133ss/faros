<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $casts = [
        'advantages' => 'array',
        'how_it_works' => 'array',
        'why_choose_us' => 'array'
    ];

    public function seo(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Seo::class, 'seable');
    }
}

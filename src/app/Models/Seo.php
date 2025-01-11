<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $guarded = [];

    public function seable()
    {
        return $this->morphTo();
    }
}

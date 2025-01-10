<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    # TODO в этих 2х шаблонах убрать CDN и тд
    public function index()
    {
        return view('article.index');
    }

    public function show(string $slug)
    {
        return view('article.show');
    }
}

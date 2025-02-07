<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ClientCase;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $lastCase = ClientCase::orderBy('created_at', 'desc')->first();
        $cases = ClientCase::orderBy('order', 'desc')->limit(5)->get();
        $articles = Article::orderBy('created_at', 'desc')->limit(6)->get();
        $categories = ArticleCategory::get();
        return view('index', compact('lastCase','cases', 'articles', 'categories'));
    }

    public function filter(Request $request)
    {
        $articles = Article::withFilters($request)->limit(8)->get();
        return view('article.indexFilter', compact('articles'))->render();
    }

    public function form()
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(8);
        return view('article.index', compact('articles'));
    }

    public function show(string $slug)
    {
        $post = Article::where('slug', $slug)->firstOrFail();
        return view('article.show', compact('post'));
    }

    public function more(string $page)
    {
        $page = is_numeric($page) ? (int)$page : 1;
        $articles = Article::paginate(8, ['*'], 'page', $page);
        return view('article.more', compact('articles'))->render();
    }
}

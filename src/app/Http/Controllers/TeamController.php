<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleTag;
use App\Models\Author;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Author::where('list_show', true)->orderBy('created_at', 'asc')->get();
        $counter = 0;
        return view('team.index', compact('teams', 'counter'));
    }

    public function show(string $slug)
    {
        $author = Author::where('slug', $slug)->firstOrFail();
        $categories = ArticleCategory::leftJoin('articles', 'articles.category_id', 'article_categories.id')
            ->where('articles.author_id', $author->id)
            ->distinct()
            ->select('article_categories.*')
            ->get();
        $posts = $author->articles;
        $tags = ArticleTag::get();
        return view('team.show', compact('author', 'categories', 'posts', 'tags'));
    }

    public function filters(Request $request)
    {
        $articles = Article::where('author_id', $request->author_id)->withFilters($request)->limit(12)->get();
        return view('team.filter', compact('articles'))->render();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleTag;
use Illuminate\Container\Attributes\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(8);
        $tags = ArticleTag::all();
        $categories = ArticleCategory::all();
        return view('article.index', compact('articles', 'tags', 'categories'));
    }

    public function show(string $slug)
    {
        $post = Article::where('slug', $slug)->firstOrFail();
        $relation = Article::where('id', '!=', $post->id)->inRandomOrder()->limit(7)->get();
        return view('article.show', compact('post', 'relation'));
    }

    public function more(string $page)
    {
        $page = is_numeric($page) ? (int)$page : 1;
        $articles = Article::paginate(8, ['*'], 'page', $page);
        return view('article.more', compact('articles'))->render();
    }

    public function filters(Request $request)
    {
        $articles = Article::withFilters($request)->limit(8)->get();
        return view('article.filters', compact('articles'))->render();
    }

    public function reset()
    {
        # TODO
        $cases = Article::orderBy('order', 'asc')->get();
        $mainCases = $cases->slice(0, 5);
        $otherCases = $cases->slice(5);
        $tags = CaseTag::all();
        return view('case.reset', compact('mainCases', 'otherCases', 'tags'))->render();
    }
}

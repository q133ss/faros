<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ClientCase;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $lastCase = ClientCase::orderBy('created_at', 'desc')->first();
        $cases = ClientCase::orderBy('order', 'desc')->limit(5)->get();
        $articles = Article::orderBy('created_at', 'desc')->limit(6)->get();
        return view('index', compact('lastCase','cases', 'articles'));
    }

    public function filter(Request $request)
    {

    }

    public function form()
    {
        //
    }
}

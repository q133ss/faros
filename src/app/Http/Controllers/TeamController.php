<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Author::orderBy('created_at', 'asc')->get();
        $counter = 0;
        return view('team.index', compact('teams', 'counter'));
    }

    public function show(string $slug)
    {
        $author = Author::where('slug', $slug)->firstOrFail();
        return view('team.show', compact('author'));
    }
}

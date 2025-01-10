<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('team.index');
    }

    public function show(string $slug)
    {
        return view('team.show');
    }
}

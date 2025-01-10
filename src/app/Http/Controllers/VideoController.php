<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return view('video.index');
    }

    public function show(string $slug)
    {
        return view('video.show');
    }
}

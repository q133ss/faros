<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('created_at', 'asc')->get();
        return view('video.index', compact('videos'));
    }

    public function show(string $slug)
    {
        $video = Video::where('slug', $slug)->firstOrFail();
        return view('video.show', compact('video'));
    }
}

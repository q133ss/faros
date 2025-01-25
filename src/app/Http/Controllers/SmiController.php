<?php

namespace App\Http\Controllers;

use App\Models\Smi;
use App\Models\Video;
use Illuminate\Http\Request;

class SmiController extends Controller
{
    public function index()
    {
        $smi = Smi::withSortDefault()->get();
        return view('smi.index', compact('smi'));
    }

    public function show(string $slug)
    {
        $post = Smi::where('slug', $slug)->firstOrFail();
        $post->increment('views');
        $videos = Video::inRandomOrder()->take(8)->get();
        return view('smi.show', compact('post', 'videos'));
    }

    public function sort(Request $request)
    {
        $smi = Smi::withSort($request)->get();
        return view('smi.sort', compact('smi'))->render();
    }
}

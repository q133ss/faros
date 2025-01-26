<?php

namespace App\Http\Controllers;

use App\Models\CaseTag;
use App\Models\ClientCase;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index(Request $request)
    {
        $cases = ClientCase::orderBy('order', 'asc')->get();
        $mainCases = $cases->slice(0, 5);
        $otherCases = $cases->slice(5);
        $tags = CaseTag::all();
        return view('case.index', compact('mainCases', 'otherCases', 'tags'));
    }

    public function show(string $slug)
    {
        return view('case.show');
    }
}

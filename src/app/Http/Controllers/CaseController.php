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
        $case = ClientCase::where('slug', $slug)->firstOrFail();
        $case->increment('views');
        $tags = CaseTag::all();
        $related = ClientCase::where('slug', '!=', $slug)->orderBy('order', 'asc')->take(6)->get();
        return view('case.show', compact('case', 'tags', 'related'));
    }

    public function filters(Request $request)
    {
        $mainCases = ClientCase::withFilters($request)->get();
        return view('case.filters', compact('mainCases'))->render();
    }

    public function reset()
    {
        $cases = ClientCase::orderBy('order', 'asc')->get();
        $mainCases = $cases->slice(0, 5);
        $otherCases = $cases->slice(5);
        $tags = CaseTag::all();
        return view('case.reset', compact('mainCases', 'otherCases', 'tags'))->render();
    }
}

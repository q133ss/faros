<?php

namespace App\Http\Controllers;

use App\Models\Smi;
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
        return view('smi.show');
    }

    public function sort(Request $request)
    {
        $smi = Smi::withSort($request)->get();
        return view('smi.sort', compact('smi'))->render();
    }
}

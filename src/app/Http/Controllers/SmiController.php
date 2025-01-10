<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmiController extends Controller
{
    public function index()
    {
        return view('smi.index');
    }

    public function show(string $slug)
    {
        return view('smi.show');
    }
}

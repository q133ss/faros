<?php

namespace App\Http\Controllers;

use App\Models\ClientCase;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $lastCase = ClientCase::orderBy('created_at', 'desc')->first();
        return view('index', compact('lastCase'));
    }
}

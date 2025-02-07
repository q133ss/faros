<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallRequest;
use Illuminate\Http\Request;

class CallbackController extends Controller
{
    public function index()
    {
        $callbacks = CallRequest::orderBy('created_at', 'desc')->get();
        return view('admin.callback.index', compact('callbacks'));
    }
}

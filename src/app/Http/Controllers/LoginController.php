<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginController\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        Auth::login($user);
        return to_route('admin.index');
    }
}

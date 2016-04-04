<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $credentials = $request->only(['name', 'email', 'password']);
        $credentials['password'] = bcrypt($credentials['password']);

        $user = User::create($credentials);
        Auth::login($user);

        return $user;
    }
}

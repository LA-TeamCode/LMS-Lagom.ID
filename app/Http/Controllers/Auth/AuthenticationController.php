<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    /**
     * Show the application login form.
     */
    public function login()
    {
        return view('Auth.login');
    }
}

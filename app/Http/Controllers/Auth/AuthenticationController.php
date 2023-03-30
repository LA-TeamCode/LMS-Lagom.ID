<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    /**
     * Show the application login form.
     */
    public function login()
    {
        return view('Auth.login');
    }
    /**
     * Handle an authentication attempt.
     */
    public function loginAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credentials = $request->only('email', 'password');
        if (auth('admin')->attempt($credentials, ($request->remember == 'on' ? true : false))) {
            return redirect()->intended('master');
        }
        return redirect()->back()->with('error', 'Email or password is incorrect.');
    }
    function logout()
    {
        auth('admin')->logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}

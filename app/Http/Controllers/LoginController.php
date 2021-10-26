<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_account(Request $request) 
    {
        $credentialsAfterVerified = array(
            'email' => $request->get('login_username'),
            'password' => $request->get('login_password')
        );

        if (Auth::attempt($credentialsAfterVerified)) {
            $request->session()->regenerate();
            return redirect()->intended(route('mainForum'));
        }

        return redirect()->route('home')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

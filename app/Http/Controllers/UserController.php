<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /* public function __construct() */
    /* { */
    /*     $this->middleware(['auth','verified']); */
    /* } */

    public function view_home()
    {
        return view('front-end.pages.home');
    }

    public function view_login()
    {
        return view('front-end.pages.login');
    }

    public function save_register(Request $request) 
    {
        /* return $request->input(); */
        $user = new User;
        $user->name = $request->input('register_username') ;
        $user->email= $request->input('register_email') ;
        $user->password= Hash::make($request->input('register_password'));
        
        /* $request->input('register_password_repeat'); */

        $request->validate([
            'register_username' => ['required', 'max:50', 'unique:users'],
            'register_email' => ['required', 'email', 'max:255', 'unique:users'],
            'register_password' => ['required', 'min:8', 'max:255']
            /* 'register_password_repeat' => ['required', 'min:8', 'max:255'] */
        ]);

        $user->save();

        return view('front-end.pages.login');
    }

    public function login_account(Request $request) 
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min:8', 'max:255'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
            /* return redirect()->intended('front-end.pages.home'); */
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    public function view_forum()
    {
        return view('front-end.pages.main-forum');
    }

    public function view_listTopic()
    {
        return view('front-end.pages.list-topics');
    }

    public function view_diskusiTopic()
    {
        return view('front-end.pages.diskusiTopik');
    }
}

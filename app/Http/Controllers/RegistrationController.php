<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
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
            'register_password' => ['required', 'min:8', 'max:255'],
            'register_password_repeat' => ['required', 'min:8', 'max:255']
        ]);

        $user->save();

        return view('front-end.pages.login');
    }
}

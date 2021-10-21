<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view_home()
    {
        return view('front-end.pages.home');
    }

    public function view_login()
    {
        return view('front-end.pages.login');
    }
}

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerUser()
    {
        return view('registerPage');
    }

    public function loginUser()
    {
        return view('loginPage');
    }
}

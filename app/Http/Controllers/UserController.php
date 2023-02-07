<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function storeUser(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->password_confirmation = Hash::make($request->password_confirmation);
        $user->adress = $request->adress;
        $user->adress_number = $request->adress_number;
        $user->phone = $request->phone;
        $user->cpf = $request->cpf;
        $user->cep = $request->cep;
        $user->save();
        Auth::login($user);

        return redirect()->route('home');
    }
}

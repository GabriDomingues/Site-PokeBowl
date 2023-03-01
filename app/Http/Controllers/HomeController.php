<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function redirects()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == '1')
        {
            return view('admin.dashboard');
        }

        else
        {
            return view('home');
        }
    }

    public function rotaPedidos()
    {
        return view('admin.pedidos');
    }

    public function rotaProdutos()
    {
        return view('admin.produtos');
    }

    public function rotaClientes()
    {
        return view('admin.clientes');
    }
}

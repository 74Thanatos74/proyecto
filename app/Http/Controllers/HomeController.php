<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function usuarios(Request $request)
    {
        $data = User::select('*')->get();   

        //return view('usuarios')->with(['data' => $data]);
        return view('usuarios', compact('data'));
    }

    public function editar_usuario()
    {
        return view('editar_usuario');
    }

    public function crear_usuario()
    {
        return view('crear_usuario');
    }
}

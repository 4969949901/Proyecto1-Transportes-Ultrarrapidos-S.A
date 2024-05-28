<?php

namespace App\Http\Controllers;
use App\Models\Dato;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    public function home ()
    {
        // Obtener el usuario autenticado
        $user =Auth::user();

        // Pasar el nombre del usuario a la vista
        return view('layouts.home', ['user' => $user]);


        // Obtener los datos adicionales
        $dato = Dato::all();

        // Pasar los datos y el usuario a la vista
        return view('layouts.home', ['user' => $user, 'datos' => $dato]);
    }

    public function index()
    {
        return view('layouts.home');
    }
}

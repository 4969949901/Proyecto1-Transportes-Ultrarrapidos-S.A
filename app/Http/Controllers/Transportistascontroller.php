<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;

class Transportistascontroller extends Controller
{
    public function index()
    {
        $datos=transportista::all();
        return view('layouts.home',compact('datos'));
    }

    public function create(){
        return view('layouts.agregarTransportista');
    }
    public function store(Request  $request){

    }

    public function Show( Transportista $trasportista){

    }

    public function edit(Transportista $transportista){

    }

    public function update(Request $request,Transportista $transportista){

    }
    public function destroy(Transportsta $transportsta){

    }
}

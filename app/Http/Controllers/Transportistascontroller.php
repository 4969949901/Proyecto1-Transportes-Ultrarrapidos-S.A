<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Transportistascontroller extends Controller
{
    public function index()
    {
        $datos=Transportista::all();
        return view('layouts.home',compact('datos'));
    }

    public function create(){
        return view('layouts.registroTransportista');
    }
    public function store (Request  $request){
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'correo_electronico' => 'required|email|max:255',
        ]);
        $transportistas = new Transportista();
        $transportistas -> nombre = $request ->post('nombre');
        $transportistas -> direccion = $request->post('direccion');
        $transportistas -> telefono= $request->post('telefono');
        $transportistas -> correo_electronico = $request->post('correo_electronico');
        $transportistas -> save();
        Alert::toast('Registrado','success');
        return redirect() -> route('transportista.index')->with('status', 'Transportista registrado exitosamente');
    }

    public function Show( $id_transportistas){
        $transportistas = Transportistas::find($id_transportistas);
        return view('layouts.eliminarTransportista', compact('transportistas'));

    }

    public function edit ($id_transportista){
       $transportista = Transportista::findOrFail($id_transportista);
        return view('layouts.actualizarTransportista', compact('transportista'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'correo_electronico' => 'required|email|max:255|unique:transportistas,correo_electronico,' . $id,
        ]);

        $transportista = Transportista::find($id);
        $transportista -> nombre = $request -> post('nombre');
        $transportista -> direccion = $request->post('direccion');
        $transportista -> telefono = $request->post('telefono');
        $transportista -> correo_electronico = $request->post('correo_electronico');
        $transportista -> save();
        Alert::toast('Actualizado!','info');
        return redirect() -> route('transportista.index');
    }
    public function destroy($id_transportistas){
        $transportistas = Transportista::find($id_transportistas);
        $transportistas -> delete();
        Alert::toast('Eliminado con éxito', 'error');
        return redirect()->route("transportista.index");
    }
}

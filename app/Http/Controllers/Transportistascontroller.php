<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class Transportistascontroller extends Controller
{
    public function index()
    {
        $datos = Transportista::orderBy('id_transportistas', 'asc')->paginate(6);
       // $datos = DB::table('transportistas')->paginate(10);
        //$datos=Transportista::all();
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

    public function Show(){
        $transportistas = DB::table('transportistas');
        //$transportista = Transportista::find($id_transportistas);
        return view('layouts.eliminarTransportista', compact('transportistas'));

    }

    public function edit ($id_transportistas){
       $transportistas = Transportista::findOrFail($id_transportistas);
        return view('layouts.actualizarTransportista', compact('transportistas'));
    }

    public function update(Request $request,$id_transportistas){

        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'correo_electronico' => 'required|email|max:255|unique:transportistas,correo_electronico,' . $id_transportistas,
        ]);

        $transportistas = Transportista::find($id_transportistas);
        $transportistas -> nombre = $request -> post('nombre');
        $transportistas -> direccion = $request->post('direccion');
        $transportistas -> telefono = $request->post('telefono');
        $transportistas -> correo_electronico = $request->post('correo_electronico');
        $transportistas -> save();
        Alert::toast('Actualizado!','info');
        return redirect() -> route('transportista.index');
    }
    public function destroy($id_transportistas)
    {
        $transportista = Transportista::findOrFail($id_transportistas);
        $transportista->delete();
        return redirect()->route('transportista.index')->with('success', 'Transportista eliminado correctamente.');
    }
}

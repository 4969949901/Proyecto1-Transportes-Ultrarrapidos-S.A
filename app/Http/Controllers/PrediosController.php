<?php

namespace App\Http\Controllers;

use App\Models\Pilotos;
use App\Models\Predio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PrediosController extends Controller
{
    public function index()
    {
        $predios = Predio::orderBy('id', 'asc')->paginate(6);
        return view('layouts.tablaPredio',compact('predios'));
    }


    public function mostrarTablaPiloto()
    {
        $pilotos = Pilotos::paginate(10); // Ejemplo de consulta para obtener los predios
        return view('layouts.tablaPiloto', compact('pilotos'));
    }

    public function create(){
        return view('layouts.agregarPredio');
    }

    public function store(Request $request){
      $validatedData=$request->validate([
            'pais'=> 'required|integer',
            'ciudad'=> 'required|integer',
            'direccion'=> 'required|string|max:255',
        ]);
      $predios= new Predio();
      $predios->pais=$request->post('pais');
      $predios->ciudad=$request->post('ciudad');
      $predios->direccion=$request->post('direccion');
      $predios->save();
      Alert::toast('Registrado','sucess');
        return redirect()->route('predio.index')->with('status','predio registrado correctamente');
    }



    public function show()
    {
        $predios= DB::table('predios');
        return view('layouts.actualizarPredio',compact('predios'));
    }


    public function edit($id){
        $predios = Predio::find($id);

        if (!$predios) {
            return abort(404);
        }

        return view('layouts.editarPredio', compact('predios'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'pais' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'direccion' => 'required|string|max:15',
        ]);

        $predios = Predio::find($id);
        $predios->pais = $request->post('pais');
        $predios->ciudad= $request->post('ciudad');
        $predios->direccion = $request->post('direccion');
        $predios->save();
        Alert::toast('Actualizado!', 'info');
        return redirect()->route('predio.index');

    }


    public function delete($id)
    {
        /** @var TYPE_NAME $predios */
        $predios = Predio::findOrFail($id);
        // Eliminar los camiones relacionados primero
        Predio::where('id', $id)->delete();

        if ($predios) {
            $predios->delete();
            return redirect()->route('predio.index')->with('success', 'Transportista eliminado exitosamente');
        }

        return redirect()->route('predio.index')->with('error', 'Transportista no encontrado');
    }
}

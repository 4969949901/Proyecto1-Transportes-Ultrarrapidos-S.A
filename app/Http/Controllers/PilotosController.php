<?php

namespace App\Http\Controllers;

use App\Models\Pilotos;
use App\Models\Predio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\RedirectResponse;




class PilotosController extends Controller
{
    public function index()
    {

        $pilotos = Pilotos::orderBy('id', 'asc')->paginate(6);
        return view('layouts.tablaPiloto', compact('pilotos'));
    }

    public function mostrarTablaPredio()
    {
        $predios = Predio::paginate(10); // Ejemplo de consulta para obtener los predios
        return view('layouts.tablaPredio', compact('predios'));
    }

    public function create(){
        return view('layouts.agregarPiloto');
    }

    public function edit($id)
    {
        $pilotos = Pilotos::findOrFail($id);

        if (!$pilotos) {
            return abort(404);
        }

        return view('layouts.editarPiloto', compact('pilotos'));
    }



        public function store(Request $request)
    {
        // Validar los datos de la solicitud
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'numero_dpi' => 'required|string|max:255',
            'numero_licencia' => 'required|string|max:255',
            // Añade otras validaciones necesarias aquí
        ]);
          Pilotos::created($validatedData);

        return redirect()->route('piloto.index')->with('success', 'Piloto creado correctamente');
    }

    public function show()
    {

    }

    public function delete($id)
    {
     $pilotos=Pilotos::find($id);

     if ($pilotos){
         $pilotos->delete();
         return redirect()->route('piloto.index')->with('sucess','piloto eliminado correctamente');

     }
     return redirect()->route('piloto.index')->with('error','piloto no encontrado ');
    }

    public function update(Request $request,$id)
    {
        // Validar los datos de la solicitud
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'edad' => 'required|integer|min:18',
            'licencia' => 'required|string|max:255|unique:pilotos,licencia',
            // Añade otras validaciones necesarias aquí
        ]);

         $pilotos=Pilotos::find($id);

         if (!$pilotos){
             return abort(404);
         }

         $pilotos->update($validatedData);

         return redirect()->route('piloto.index')->with('sucess','piloto actualizado correctamente');
    }

}

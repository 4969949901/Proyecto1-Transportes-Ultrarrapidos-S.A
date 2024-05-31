<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use Illuminate\Http\Request;

class CamionesController extends Controller
{
    public function index()
    {
        $camion = Camion::all();
        return view('layouts.tablacamiones', compact('camion'));
    }

    public function create()
    {
        return view('layouts.agregarcamiones');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'placa' => 'required|integer',
            'marca' => 'required|string|max:255',
            'modelo' => 'required|integer',
            'capacidad' => 'required|string|max:255',
            'id_transportista' => 'required|integer',
        ]);

        Camion::create($validatedData);

        return redirect()->route('camion.index')->with('success', 'Camion creado correctamente.');
    }

    public function show(Camion $camion)
    {

    }

    public function edit($id)
    {
        $camion = Camion::find($id);

        if (!$camion) {
            return abort(404);
        }

        return view('layouts.editarcamiones', compact('camion'));
    }
    public
    function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'placa' => 'required|integer',
            'marca' => 'required|string|max:255',
            'modelo' => 'required|integer',
            'capacidad' => 'required|string|max:255',
            'id_transportista' => 'required|integer',
        ]);

        $camion = Camion::find($id);

        if (!$camion) {
            return abort(404);
        }

        $camion->update($validatedData);

        return redirect()->route('camion.index')->with('success', 'Camiones actualizada correctamente.');
    }


    public function delete($id)
    {
        // Encuentra el camión por su ID
        $camion = Camion::find($id);

        // Si el camión existe, elimínalo
        if ($camion) {
            $camion->delete();
            return redirect()->route('camion.index')->with('success', 'Camión eliminado exitosamente');
        }

        // Si el camión no se encuentra, redirige con un mensaje de error
        return redirect()->route('camion.index')->with('error', 'Camión no encontrado');
    }
}

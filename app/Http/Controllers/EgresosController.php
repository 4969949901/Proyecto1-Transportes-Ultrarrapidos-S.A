<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use Illuminate\Http\Request;

class EgresoController extends Controller
{
    public function index()
    {
        $egresos = Egreso::all();
        return view('egreso.index', compact('egresos'));
    }

    public function create()
    {
        return view('egreso.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_camion' => 'required|integer',
            'id_bodega_egreso' => 'required|integer',
            'fecha_hora_egreso' => 'required|date_format:Y-m-d\TH:i',
            'destino' => 'required|string|max:255',
            'carga' => 'required|string|max:255',
        ]);

        Egreso::create($validatedData);

        return redirect()->route('egresos.index')->with('success', 'Egreso creado correctamente.');
    }

    public function show(Egreso $egreso)
    {
        return view('egreso.show', compact('egreso'));
    }

    public function edit(Egreso $egreso)
    {
        return view('egreso.edit', compact('egreso'));
    }

    public function update(Request $request, Egreso $egreso)
    {
        $validatedData = $request->validate([
            'id_camion' => 'required|integer',
            'id_bodega_egreso' => 'required|integer',
            'fecha_hora_egreso' => 'required|date_format:Y-m-d\TH:i',
            'destino' => 'required|string|max:255',
            'carga' => 'required|string|max:255',
        ]);

        $egreso->update($validatedData);

        return redirect()->route('egresos.index')->with('success', 'Egreso actualizado correctamente.');
    }

    public function destroy(Egreso $egreso)
    {
        $egreso->delete();

        return redirect()->route('egresos.index')->with('success', 'Egreso eliminado correctamente.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegasController extends Controller
{
    public function index()
    {
        $bodegas = Bodega::all();
        return view('bodegas.index', compact('bodegas'));
    }

    public function create()
    {
        return view('bodegas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_predio' => 'required|integer',
            'numero' => 'required|integer',
        ]);

        Bodega::create($validatedData);

        return redirect()->route('bodegas.index')->with('success', 'Bodega creada correctamente.');
    }

    public function show(Bodega $bodega)
    {

    }

    public function edit($id)
    {
        $bodega = Bodega::find($id);

        if (!$bodega) {
            return abort(404);
        }

        return view('bodegas.edit', compact('bodega'));
    }
        public
        function update(Request $request, $id)
        {
            $validatedData = $request->validate([
                'id_predio' => 'required|integer',
                'numero' => 'required|integer',
            ]);

            $bodega = Bodega::find($id);

            if (!$bodega) {
                return abort(404);
            }

            $bodega->update($validatedData);

            return redirect()->route('bodegas.index')->with('success', 'Bodega actualizada correctamente.');
        }


        public function destroy($id)
    {
        $bodega = Bodega::find($id);

        if (!$bodega) {
            return abort(404);
        }

        $bodega->delete();

        return redirect()->route('bodegas.index')->with('success', 'Bodega eliminada correctamente.');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use App\Models\Camion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\RedirectResponse;

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
       // $transportistas = DB::table('transportistas');
        //$transportista = Transportista::find($id_transportistas);
       // return view('layouts.eliminarTransportista', compact('transportistas'));

    }

    public function edit ($id_transportistas){
       $transportistas = Transportista::findOrFail($id_transportistas);
        return view('layouts.actualizarTransportista', compact('transportistas'));
    }

    public function update (Request $request, $id_transportistas)
    {
        /*
        $request->validate([
            'id_transportistas' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'correo_electronico' => 'required|email|max:255|unique:transportistas,correo_electronico,' . $id_transportistas . ',id_transportistas',
        ]);

        $transportistas = Transportista::find($id_transportistas);
        $transportistas->update($request->all());

        if (!$transportistas) {
            return redirect()->back()->withErrors(['error' => 'Transportista no encontrado']);
        }*/

        /*
        $transportistas->id_transportistas = $request->post('id_transportistas');
        $transportistas->nombre = $request->post('nombre');
        $transportistas->direccion = $request->post('direccion');
        $transportistas->telefono = $request->post('telefono');
        $transportistas->correo_electronico = $request->post('correo_electronico');
        $transportistas->save();
        Alert::toast('Actualizado!', 'info');
        return redirect() -> route('transportista.index')->with('status', 'Transportista actualizado exitosamente');
        */

        // Validar los datos recibidos
        $validatedData =$request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'correo_electronico' => 'required|email|max:255',
        ]);

        // Encontrar el modelo y actualizarlo
        $transportistas = Transportista::findOrFail($id_transportistas);

        // Actualizar solo los campos que necesitan ser actualizados
        $transportistas->update($request->only('nombre', 'direccion', 'telefono', 'correo_electronico'));

        // Redirigir con un mensaje de éxito
        $transportistas->update($validatedData);
        return redirect()->route('transportista.index')->with('success', 'Transportista actualizado correctamente.');

    }


    /* public function delete ($id_transportistas)
     {
         /*$transportista = Transportista::find($id_transportistas);

         // Si el camión existe, elimínalo
         if ($transportista) {
             $transportista->delete();
             return redirect()->route('transportista.index')->with('success', 'Transportista eliminado exitosamente');
         }

         // Si el camión no se encuentra, redirige con un mensaje de error
         return redirect()->route('transportista.index')->with('error', 'Transportista no encontrado');
         }
    */

    public function delete($id_transportistas)
    {
        /** @var TYPE_NAME $transportistas */
        $transportistas = Transportista::findOrFail($id_transportistas);
        // Eliminar los camiones relacionados primero
        Camion::where('id_transportistas', $id_transportistas)->delete();

        if ($transportistas) {
            $transportistas->delete();
            return redirect()->route('transportista.index')->with('success', 'Transportista eliminado exitosamente');
        }

        return redirect()->route('transportista.index')->with('error', 'Transportista no encontrado');
    }


}

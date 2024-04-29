<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VuelosController extends Controller
{
    public function index(){
        $vuelos = Vuelo::all();
        return view('vuelos', compact('vuelos'));
    }


    public function agregarVuelo(){
        return view('nuevoVuelo');
    }

    public function crearVuelo(Request $request){
        $existeVuelo = Vuelo::where('numeroVuelo', $request->numeroVuelo)
                        ->where('fechaSalida', $request->fechaSalida)
                        ->exists();
        if(!$existeVuelo){
        $crearVuelo = new Vuelo();
        $crearVuelo->numeroVuelo = $request->input('numeroVuelo');
        $crearVuelo->origen = $request->input('origen');
        $crearVuelo->destino = $request->input('destino');
        $crearVuelo->numeroAsientos = $request->input('numeroAsientos');
        $crearVuelo->fechaSalida = $request->input('fechaSalida');
        $crearVuelo->cantidad = $request->input('cantidad');
        $crearVuelo->save();

        $crearVuelo = Vuelo::all();
        return view('inicio');
        }
        return "numero de vuelo y fecha ya existen";

        
    }

    public function editar($id){
        $vuelo = Vuelo::find($id);
        return view('editarVuelo', compact('vuelo'));
    }
    
    public function eliminar($id){
        $vuelo = Vuelo::find($id);
        $vuelo->delete();
        return redirect('/');
    }

    public function actualizar(Request $request, $id){
        $nvovuelo = Vuelo::find($id);
        $nvovuelo->origen = $request->input('origen');
        $nvovuelo->destino = $request->input('destino');
        $nvovuelo->save();
        return redirect('/');
    }




}

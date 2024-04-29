<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use App\Models\Vuelo_asiento;
use Illuminate\Http\Request;

class Vuelos_AsientosController extends Controller
{
    public function agregarAsiento($id){
        $buscarVuelo = Vuelo::find($id);      
        return view('agregarAsiento', compact('buscarVuelo'));

    }

    public function actualizarAsiento(Request $request, $id){
        $buscarAsiento = Vuelo::find($id);
        $asiento =  new Vuelo_asiento();
        $asiento->numeroVuelo = $buscarAsiento->numeroVuelo;
        $asiento->numeroAsiento = $request->input('numeroAsiento');
        $asiento->idTipoAsiento = $request->input('idTipoAsiento');
        $asiento->save();
        return redirect('/');
    }

    
    public function verAsiento(){
        $ver = Vuelo_asiento::all();
        return view('vueloAsientos', compact('ver'));

    }
}

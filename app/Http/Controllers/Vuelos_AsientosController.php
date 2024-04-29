<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use App\Models\Vuelo_asiento;
use Illuminate\Http\Request;

class Vuelos_AsientosController extends Controller
{
    public function agrearAsiento($id, $fecha){
        $buscarVuelo = Vuelo::where('numeroVuelo', $id)
                ->where('fechaSalida', $fecha);        
        return view('agregarAsiento', compact('$buscarVuelo'));

    }

    public function verAsiento(){

    }
}

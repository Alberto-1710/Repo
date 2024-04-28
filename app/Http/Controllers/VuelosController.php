<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VuelosController extends Controller
{
    public function vuelos(){
        $vuelo = Vuelo::all();
        return view('vuelos', compact('vuelo'));
    }

    public function agregarVuelo(){
        return view('nuevoVuelo');
    }
}

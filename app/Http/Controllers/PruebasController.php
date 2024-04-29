<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function index(){
        $pruebas = Prueba::where('prueba', 'hola');
        return view('vuelos', compact('pruebas'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TipoAsiento;
use Illuminate\Http\Request;

class TipoAsientoController extends Controller
{
    public function tipoAsientos(){
        $tipoAsiento = TipoAsiento::where('estado', 'A')->get();
        return view('tipoAsientos', compact('tipoAsiento'));
    }

    public function crearTipoAsientos(){
        return view('agregarTipoAsiento');
    }

    public function agregarTipoAsiento(Request $request){
        $nvoTipoAsiento = new TipoAsiento();
        $nvoTipoAsiento->descripcion = $request->input('descripcion');
        $nvoTipoAsiento->precio = $request->input('precio');
        $nvoTipoAsiento->estado = $request->input('estado');
        $nvoTipoAsiento->save();

        $nvoTipoAsiento = TipoAsiento::all();
        return view('inicio');
    }

    public function editar($id){
        $tipoAsiento = TipoAsiento::find($id);
        return view('editarAsiento', compact('tipoAsiento'));
    }

    public function eliminar($id){
        $tipoAsiento = TipoAsiento::find($id);
        $tipoAsiento->estado='I';
        $tipoAsiento->save();
        return view('inicio');
    }

    public function actualizar(Request $request, $id){
        $tipoAsientoActualizar = TipoAsiento::find($id);
        $tipoAsientoActualizar->descripcion = $request->input('descripcion');
        $tipoAsientoActualizar->precio = $request->input('precio');
        $tipoAsientoActualizar->estado = $request->input('estado');
        $tipoAsientoActualizar->save();
        return redirect('/');
    }
    
}

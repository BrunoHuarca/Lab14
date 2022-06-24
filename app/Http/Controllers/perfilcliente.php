<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class perfilcliente extends Controller
{
    public function index($id)
    {
        $perfil = User::find($id);
        //dd($perfil);
        return view('perfilcliente.perfil')->with('perfil',$perfil);
    }
    public function modify(Request $request,$id)
    {
        $perfil = User::find($id);
        //dd($perfil);
        $perfil ->apellido = $request->apellido;
        $perfil ->direccion = $request->direccion;
        $perfil ->telefono = $request->telefono;
        $perfil ->save();
        return redirect('/home');
    }
}

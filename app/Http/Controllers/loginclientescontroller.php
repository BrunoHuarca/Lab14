<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\loginclientes;

class loginclientescontroller extends Controller
{
    public function index(request $request)
    {
        $usuario =loginclientes::where('usuario',$request->usuario)
            ->where('password',$request->password)
            ->first();
        if ($usuario){
            return response([
                'mensaje'=> 'Usuario validado correctamente',
                'usuario'=> $usuario
            ]);
        }
        else
        {
            return response([
                'mensaje'=> 'Usuario o clave incorrecta'],
                401
            );
        }
    }
}

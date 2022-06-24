<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carritos;
use App\Models\productos;


class carritocontroller extends Controller
{
    public function index()
    {
        return view('carrito.vistacarrito');
    }
}

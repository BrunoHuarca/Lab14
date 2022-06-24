@extends('home')
@section('contenido')
    <div class="card-details">
        <div class="card-details-son">
            <div class="card-details-img">
                <img src="{{asset($producto->imagen)}}" class="card-img-top" alt="...">
            </div>
            <div class="card-details-content">
                <div>
                    <h1>{{$producto->nombre}}</h1>
                    <p>Descripcion :<br>{{$producto->descripcion}}</p>
                    <p>stock :{{$producto->stock}}</p>
                    <p>precio :{{$producto->precio}}</p>
                    <button>Añadir carrito</button>
                    <button>Comprar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

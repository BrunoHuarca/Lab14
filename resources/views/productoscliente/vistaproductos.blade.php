@extends('home')
@section('contenido')
    <div class="container">
        @foreach($producto as $productos)
            <div class="card">
                <a href="home/{{$productos->_id}}/detalleproductos">
                    <img src="{{$productos->imagen}}" ><br>
                    <h4>{{$productos->nombre}}</h4>
                    <p >{{$productos->precio}}</p>
                    <a href="/home/{{$productos->_id}}/añadircarrito" >Añadir carrito</a>
                    <a href="/home/{{$productos->_id}}/carrito" >Comprar</a>
                </a>
            </div>
        @endforeach
    </div>
@endsection

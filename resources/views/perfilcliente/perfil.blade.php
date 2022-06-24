@extends('home')
@section('contenido')
    <div  class="profile">
        <h1>Perfil</h1>
        <div class="form-father">
            <form action="/home/{{$perfil->_id}}/modify" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="nombre" value="{{$perfil->name}}" disabled aria-describedby="emailHelp">
                </div>
                <div class="form">
                    <label for="exampleInputPassword1">Apellido</label>
                    <input type="text" name="apellido" value="{{$perfil->apellido}}">
                </div>
                <div class="form">
                    <label for="exampleInputPassword1">Telefono</label>
                    <input type="number" name="telefono" value="{{$perfil->telefono}}">
                </div>
                <div class="form">
                    <label for="exampleInputPassword1">Direccion</label>
                    <input type="text" name="direccion" value="{{$perfil->direccion}}">
                </div>
                <button class="button" type="submit" >Editar</button>
                <button class="button" href="/home" >Cancelar</button>
            </form>
        </div>
        <div class="img-father">
            <img src="https://www.pinpng.com/pngs/m/361-3615083_juguetes-png-cubos-infantiles-transparent-png.png" alt="">
        </div>
    </div>
@endsection

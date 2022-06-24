
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
    <form action="/admin/producto/editar/{{$producto->_id}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" value="{{$producto->nombre}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{$producto->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock" value="{{$producto->stock}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="formFileSm" >Imagen</label>
            <input class="form-control" type="file" name="imagen" required value="{{$producto->imagen}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio" value="{{$producto->precio}}">
        </div>
        <button type="submit" class="btn btn-success">Editar</button>
        <a class="btn btn-danger" href="/admin/producto">Cancelar</a>
    </form>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@stop
@section('js')
@stop




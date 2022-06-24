@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Producto</h1>
@stop

@section('content')
    <form action="/admin/producto/insert" enctype="multipart/form-data" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="exampleInputEmail1" >Nombre</label>
            <input class="form-control" type="text" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label" >Categoria</label>
            <select class="form-select" aria-label="Default select example" name="categoria_id" required>
                <option selected>Seleccione la categoria</option>
                @foreach($categorias as $categorias)
                    <option value="{{$categorias->_id}}">{{$categorias->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="exampleInputPassword1" >Descripcion</label>
            <input class="form-control" type="text"  name="descripcion">
        </div>
        <div class="mb-3">
            <label class="form-label" for="exampleInputPassword1" >Stock</label>
            <input class="form-control" type="number"  name="stock">
        </div>
        <div class="mb-3">
            <label class="form-label" for="exampleInputPassword1" >Precio</label>
            <input class="form-control" type="number" name="precio">
        </div>
        <div class="mb-3">
            <label class="form-label" for="formFileSm" >Imagen</label>
            <input class="form-control" type="file" name="imagen" required>
        </div>
        <button class="btn btn-success" type="submit">Crear</button>
        <a class="btn btn-danger" href="/admin/producto">Cancelar</a>
    </form>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@stop

@section('js')
@stop




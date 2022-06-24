@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')

    <form action="/admin/categorias/update/{{$categorias->_id}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{$categorias->nombre}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{$categorias->descripcion}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/admin/categorias" class="btn btn-danger">Cancelar</a>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop



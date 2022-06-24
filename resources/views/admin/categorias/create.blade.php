@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nueva Categoria</h1>
@stop

@section('content')
    <form action="/admin/categorias/insert" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
        <a href="/categorias" class="btn btn-danger">Cancelar</a>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop



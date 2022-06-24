@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
    <a class=" btn btn-success" href="/admin/producto/create" style="margin-bottom:20px ">Nuevo</a>
    <table id="example" class="table table-dark table-striped" >
        <thead >
        <tr >
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr >
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->categorias->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
                <td><a class="btn btn-warning" href="/admin/producto/{{$producto->_id}}/editar">Editar</a>
                    <a class="btn btn-danger" href="/admin/producto/{{$producto->_id}}/delete">Eliminar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@stop




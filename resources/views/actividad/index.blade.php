@extends('adminlte::page')

@section('title', 'Actividades')

@section('content_header')
    <h1>Lista de Actividades</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <a href="actividades/create" class="btn btn-primary mb-4">Crear Actividad</a>

    <table id="actividades" class="table table-dark table-striped shadow-lg mt-4" style="width:100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Num. Unidad</th>
                <th scope="col">Tipo</th>
                <th scope="col">Fecha</th>
                <th scope="col">Estatus</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($misactividades as $miactividad)
                <tr>
                    <td>{{$miactividad->id}}</td>
                    <td>{{$miactividad->titulo}}</td>
                    <td>{{$miactividad->descripcion}}</td>
                    <td>{{$miactividad->numunidad}}</td>
                    <td>{{$miactividad->tipounidad}}</td>
                    <td>{{$miactividad->created_at}}</td>
                    <td>{{$miactividad->estatus}}</td>
                    <td>
                        <a href="/actividades/{{$miactividad->id}}/edit" class="btn btn-primary">Ver Detalle</a>
                        <!-- <button class="btn btn-danger">Borrar</button> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#actividades').DataTable({
                "lengthMenu": [[5,10,50, -1],[5,10,50,"All"]]
            });
        });
    </script>
@stop
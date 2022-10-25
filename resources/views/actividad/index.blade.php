@extends('layouts.plantillabase');

@section('contenido')
    <h1>Vista INDEX</h1>
    <a href="actividades/create" class="btn btn-primary">Crear Actividad</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Num. Unidad</th>
                <th scope="col">Tipo</th>
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
                    <td>{{$miactividad->estatus}}</td>
                    <td>
                        <a href="/actividades/{{$miactividad->id}}/edit" class="btn btn-primary">Ver Detalle</a>
                        <!-- <button class="btn btn-danger">Borrar</button> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($misactividades as $miactividad)
    <div class="card text-dark bg-light mb-3 mt-5" style="max-width: 50rem;">
        
            <div class="card-header">
                Num. Actividad:
                <p class="card-text">{{$miactividad->id}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Titulo</h5>
                <p class="card-text">{{$miactividad->titulo}}</p>
                <h6 class="card-title">Descripcion</h6>
                <p class="card-text">{{$miactividad->descripcion}}</p>
                <h6 class="card-title">Tipo de Unidad</h6>
                <p class="card-text">{{$miactividad->tipounidad}}</p>
                <h6 class="card-title">Num. Unidad</h6>
                <p class="card-text">{{$miactividad->numunidad}}</p>
                <h6 class="card-title">Estado</h6>
                <p class="card-text">{{$miactividad->estatus}}</p>
                <a href="/actividades/{{$miactividad->id}}/edit" class="btn btn-primary">Ver Detalle</a>
                <!-- <button class="btn btn-danger">Borrar</button> -->
            </div>
    </div>
    @endforeach
@endsection
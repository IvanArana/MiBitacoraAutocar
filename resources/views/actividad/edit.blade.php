@extends('adminlte::page')

@section('title', 'Editar Actividad')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
<h2>Detalles de Actividad - Editar</h2>
    <div class="d-flex justify-content-center">
        <div class="card text-dark bg-light mb-3 mt-5" style="min-width: 50rem;" id="actividades">
        
            <div class="card-header d-flex justify-content-between">
                <div class="d-flex justify-content-start">
                    <div>
                        <h5>
                            <b>Actividad: </b>
                        </h5>
                    </div>
                    <div>
                        <h5 class="card-text">
                            <b class="text-primary">{{$miactividad->id}}</b>
                        </h5>
                    </div>
                </div>
                
                <div class="d-flex justify-content-start">
                    <div>
                        <h5>
                            <b>Fecha:</b>
                        </h5>
                    </div>
                    <div>
                        <h5 class="card-text">
                            <b class="text-primary">{{$miactividad->created_at}}</b>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="/actividades/{{$miactividad->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titulo</label>
                    <input name="titulo" type="text" class="form-control"  value="{{$miactividad->titulo}}" id="InputTitle" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Descripción</label>
                    <input name="descripcion" type="text" class="form-control" value="{{$miactividad->descripcion}}" id="InputDescription">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Num. Unidad</label>
                    <input name="numunidad" type="number" class="form-control" value="{{$miactividad->numunidad}}" id="inputUnitnumber">
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="validationCustom04" class="form-label">Tipo de Unidad</label>
                        <select name="tipounidad" class="form-select" value="{{$miactividad->tipounidad}}" id="validationCustom04" required>
                            <option selected disabled value="">{{$miactividad->tipounidad}}</option>
                            <option value="Zona Urbana">Zona Urbana</option>
                            <option value="Zona Hotelera">Zona Hotelera</option>
                        </select>
                    </div>
                    <div class="col mb-3">
                        <label for="validationCustom04" class="form-label">Estado</label>
                        <select name="estatus" class="form-select" value="{{$miactividad->estatus}}" id="validationCustom04" required>
                            
                            <option selected disabled value="">{{$miactividad->estatus}}</option>
                            <option value="Sin Realizar">Sin Realizar</option>
                            <option value="En Proceso">En Proceso</option>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Realizado">Realizado</option>
                        </select>
                    </div>

                </div>
                <a href="/actividades" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Submit</button>
                </form>

            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
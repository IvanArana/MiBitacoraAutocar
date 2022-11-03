@extends('adminlte::page')

@section('title', 'Crear Nueva Actividad')

@section('content_header')
    <h1>Crear Nueva Actividad</h1>
@stop

@section('content')
    <h1>Crear un nueva actividad</h1>
    <form action="/actividades" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo</label>
            <input name="titulo" type="text" class="form-control" id="InputTitle" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripción</label>
            <input name="descripcion" type="text" class="form-control" id="InputDescription">
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="validationCustom04" class="form-label">Tipo de Unidad</label>
                <select name="tipounidad" class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Selecciona una opción...</option>
                    <option value="Zona Urbana">Zona Urbana</option>
                    <option Value="Zona Hotelera">Zona Hotelera</option>
                </select>
            </div>
            <div class="col mb-3">
                <label for="exampleInputPassword1" class="form-label">Num. Unidad</label>
                <input name="numunidad" type="number" class="form-control" id="inputUnitnumber">
            </div>
        </div>
        <div class="mb-3">
            <label for="validationCustom04" class="form-label">Estado</label>
            <select name="estatus" class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Selecciona una opción...</option>
                <option value="Sin Realizar">Sin Realizar</option>
                <option value="En Proceso">En Proceso</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Realizado">Realizado</option>
            </select>
        </div>
        <a href="/actividades" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Submit</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
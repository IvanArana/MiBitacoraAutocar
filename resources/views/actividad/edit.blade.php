@extends('layouts.plantillabase');

@section('contenido')
    <h2>Detalles de Actividad - Editar</h2>
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
        <div class="row">
            <div class="col mb-3">
                <label for="validationCustom04" class="form-label">Tipo de Unidad</label>
                <select name="tipounidad" class="form-select" value="{{$miactividad->tipounidad}}" id="validationCustom04" required>
                    <option selected disabled value="">Selecciona una opción...</option>
                    <option>Zona Urbana</option>
                    <option>Zona Hotelera</option>
                </select>
            </div>
            <div class="col mb-3">
                <label for="exampleInputPassword1" class="form-label">Num. Unidad</label>
                <input name="numunidad" type="number" class="form-control" value="{{$miactividad->numunidad}}" id="inputUnitnumber">
            </div>
        </div>
        <div class="mb-3">
            <label for="validationCustom04" class="form-label">Estado</label>
            <select name="estatus" class="form-select" value="{{$miactividad->estatus}}" id="validationCustom04" required>
                
                <option selected disabled value="">Selecciona una opción...</option>
                <option>Sin Realizar</option>
                <option>En Proceso</option>
                <option>Pendiente</option>
                <option>Realizado</option>
            </select>
        </div>
        <a href="/actividades" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Submit</button>
    </form>
@endsection
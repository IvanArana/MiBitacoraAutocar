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

                <div id="signature-pad" class="m-signature-pad">
                    <div class="m-signature-pad--body">
                        <canvas style="border: 2px dashed #ccc"></canvas>
                    </div>

                    <div class="m-signature-pad--footer">
                        <button type="button" class="btn btn-sm btn-warning" data-action="clear">Clear</button>
                        <button type="button" class="btn btn-sm btn-primary" data-action="save">Save</button>
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
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

<script>
    $(function () {
    var wrapper = document.getElementById("signature-pad"),
    clearButton = wrapper.querySelector("[data-action=clear]"),
    saveButton = wrapper.querySelector("[data-action=save]"),
    canvas = wrapper.querySelector("canvas"),
    signaturePad;

  // Adjust canvas coordinate space taking into account pixel ratio,
  // to make it look crisp on mobile devices.
  // This also causes canvas to be cleared.
    window.resizeCanvas = function () {
    var ratio =  window.devicePixelRatio || 1;
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
    }

    resizeCanvas();

    signaturePad = new SignaturePad(canvas);

    clearButton.addEventListener("click", function(event) {
    signaturePad.clear();
    });

    saveButton.addEventListener("click", function(event) {
    event.preventDefault();

    if (signaturePad.isEmpty()) {
        alert("Por favor añada su firma.");
    } else {
    var dataUrl = signaturePad.toDataURL();
    var image_data = dataUrl.replace(/^data:image\/(png|jpg);base64,/, "");

    $.ajax({
        url: '/save-signature',
        type: 'POST',
        data: {
        image_data: image_data,
        },
        }).done(function() {
        //
        });
    }
    });
});
</script>
@stop
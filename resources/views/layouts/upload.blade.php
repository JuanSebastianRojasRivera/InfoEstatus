@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">

        <div class="text-center">
            <h1>Gestion de Archivos</h1>
        </div>
         

        @if(Session::has('Cargado'))
         <div class="col-10 mt-4 mb-4">
             <div class="alert alert-success">
                 <strong>{{ Session::get('Cargado') }}</strong>
             </div>
         </div>
        @endif

        @if(Session::has('CargaFallida'))
         <div class="col-10 mt-4 mb-4">
             <div class="alert alert-warning">
                
                 <strong>{{ Session::get('CargaFallida') }}</strong>
             </div>
         </div>
        @endif

        <div class="row mt-4">
            <div class="col-md-5 center-text">
                <p class="">Seleccion:</p>
                <select id="options" class="form-select col-md-3">
                    <option value="aldia">Aldia</option>
                    <option value="bluelogistics">Bluelogistics</option>
                    <option value="deprisa">Deprisa</option>
                    <option value="gle">Gle</option>
                    <option value="servientrega">Servientrega</option>
                    <option value="solistica">Solistica</option>
                    <option value="tcc">Tcc</option>
                </select>
            </div>
            <div class="col-md-7">
                <p>Archivo:</p>
                <form action="" method="post" enctype="multipart/form-data" class="d-inline" id="form-upload">
                    <div class="">
                        @csrf
                        <input class="form-control" type="file" name="documento">
                    </div> 
                </form>
            </div>
            <div>
                <form action="" method="post" enctype="multipart/form-data" class="d-inline" id="form-add">
                    @csrf
                </form>
            </div>
        </div>

        <div class="row">
            <div class="my-4">
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary ">Volver</a>
                <button class="btn btn-warning btn-bloqueo" type = "button" onclick="selectionAdd()">Agregar</button>
                <button class="btn btn-success btn-bloqueo" type = "button" onclick="selection()">Importar</button>
            </div>
        </div>

    </div>
    <div>
        <h2>Otros Datos</h2>
        <span>
            <a href="{{route('holidays.index')}}" class="btn btn-primary">Festivos</a>
        </span>
    </div>
</div>
@endsection

@section('js')
<script>
function selection(){
    var select = document.getElementById('options');
    var option = select.value;
    var form = document.getElementById('form-upload');

    Swal.fire({
        title: "Seguro?",
        text: "Se cargara el archivo seleccionado a "+ option,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Subir el archivo",
        cancelButtonText: "No, cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            switch (option) {
                case 'aldia':
                    alert("prtueba");
                    form.action = "{{url('upload/aldia')}}";
                    break;
                case 'bluelogistics':
                    form.action = "{{url('upload/bluelogistics')}}";
                    break;
                case 'deprisa':
                    form.action = "{{url('upload/deprisa')}}";
                    break;
                case 'gle':
                    form.action = "{{url('upload/gle')}}";
                    break;
                case 'servientrega':
                    form.action = "{{url('upload/servientrega')}}";
                    break;
                case 'solistica':
                    form.action = "{{url('upload/solistica')}}";
                    break;
                case 'tcc':
                    form.action = "{{url('upload/tcc')}}";
                    break;
            }

            form.submit();
        }    
    });        
}

function selectionAdd(){
    var select = document.getElementById('options');
    var option = select.value;
    var form = document.getElementById('form-add');

    Swal.fire({
        title: "Seguro?",
        text: "Se ingresara el archivo de " + option + " al infoestatus",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, ingresar",
        cancelButtonText: "No, cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            switch (option) {
                case 'aldia':
                    alert("prtueba");
                    form.action = "{{url('upload/ingresar-aldia')}}";
                    break;
                case 'bluelogistics':
                    form.action = "{{url('upload/ingresar-bluelogistics')}}";
                    break;
                case 'deprisa':
                    form.action = "{{url('upload/ingresar-deprisa')}}";
                    break;
                case 'gle':
                    form.action = "{{url('upload/ingresar-gle')}}";
                    break;
                case 'servientrega':
                    form.action = "{{url('upload/ingresar-servientrega')}}";
                    break;
                case 'solistica':
                    form.action = "{{url('upload/ingresar-solistica')}}";
                    break;
                case 'tcc':
                    form.action = "{{url('upload/ingresar-tcc')}}";
                    break;
            }

            form.submit();
        }    
    });          
}
</script>
@endsection

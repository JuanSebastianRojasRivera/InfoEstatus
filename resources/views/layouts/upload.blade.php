@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="text-center">
            <h1>Carge de archivos transaportadoras</h1> 
        </div>
        <div class=".container-lg mt-4 mb-4">
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary ">Volver</a>
        </div>

        @if(Session::has('Cargado'))
         <div class="col-12 mt-4 mb-4">
             <div class="alert alert-success">
                 <strong>{{ Session::get('Cargado') }}</strong>
             </div>
         </div>
        @endif

        @if(Session::has('CargaFallida'))
         <div class="col-12 mt-4 mb-4">
             <div class="alert alert-warning">
                 <strong>{{ Session::get('CargaFallida') }}</strong>
             </div>
         </div>
        @endif

        <div class="row">
            <div class="col">
                <div class="mb-4 col-4">
                    <h2>INFOESTATUS</h2>
                    <div class="p-3 border border-2 bg-secundary">
                        <form action="{{url('upload/infoestatus')}}" method="post" enctype="multipart/form-data" class="d-inline" id="form-infoestatus">
                            <div class="clo-md-6 br-1 d-inline">
                                @csrf
                                <input type="file" name="documento">
                            </div> 
                            <div class="clo-md-6 d-inline">
                                <button class="btn btn-success btn-bloqueo" type = "submit" onclick="bloquearBoton('form-infoestatus')">Importar</button>
                            </div> 
                        </form>
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-4 col">
                <h2>ALDIA</h2>
                <div class="p-3 border border-2 bg-secundary">
                    <form action="{{url('upload/aldia')}}" method="post" enctype="multipart/form-data" class="d-inline" id="form-aldia">
                        <div class="clo-md-6 br-1 d-inline">
                            @csrf
                            <input type="file" name="documento">
                        </div> 
                        <div class="clo-md-6 d-inline">
                            <button class="btn btn-primary btn-bloqueo" type = "submit" onclick="bloquearBoton('form-aldia')">Cargar</button>
                        </div> 
                    </form>
                </div>
            </div>
            <div class="mb-4 col">
                <h2>BLUELOGISTICS</h2>
                <div class="p-3 border border-2 bg-secundary">
                    <form action="{{url('upload/bluelogistics')}}" method="post" enctype="multipart/form-data" class="d-inline" id="form-bluelogistics">
                        <div class="clo-md-6 br-1 d-inline">
                            @csrf
                            <input type="file" name="documento">
                        </div> 
                        <div class="clo-md-6 d-inline">
                            <button class="btn btn-primary btn-bloqueo" type = "submit" onclick="bloquearBoton('form-bluelogistics')">Cargar</button>
                        </div> 
                    </form>
                </div>    
            </div>
            <div class="mb-4 col">
                <h2>DEPRISA</h2>
                <div class="p-3 border border-2 bg-secundary">
                    <form action="{{url('upload/deprisa')}}" method="post" enctype="multipart/form-data" class="d-inline" id="form-deprisa">
                        <div class="clo-md-6 br-1 d-inline">
                            @csrf
                            <input type="file" name="documento">
                        </div> 
                        <div class="clo-md-6 d-inline">
                            <button class="btn btn-primary btn-bloqueo" type ="submit" onclick="bloquearBoton('form-deprisa')">Cargar</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-4 col">
                <h2>SERVIENTREGA</h2>
                <div class="p-3 border border-2 bg-secundary">
                    <form action="{{url('upload/servientrega')}}" method="post" enctype="multipart/form-data" class="d-inline" id="form-servientrega">
                        <div class="clo-md-6 br-1 d-inline">
                            @csrf
                            <input type="file" name="documento">
                        </div> 
                        <div class="clo-md-6 d-inline">
                            <button class="btn btn-primary btn-bloqueo" type = "submit" onclick="bloquearBoton('form-servientrega')">Cargar</button>
                        </div> 
                    </form>
                </div>    
            </div>
            <div class="mb-4 col">
                <h2>SOLISTICA</h2>
                <div class="p-3 border border-2 bg-secundary">
                    <form action="{{url('upload/solistica')}}" method="post" enctype="multipart/form-data" class="d-inline " id="form-solistica">
                        <div class="clo-md-6 br-1 d-inline">
                            @csrf
                            <input type="file" name="documento">
                        </div> 
                        <div class="clo-md-6 d-inline">
                            <button class="btn btn-primary btn-bloqueo" type = "submit" id="solistica" onclick="bloquearBoton('form-solistica')">Cargar</button>
                        </div> 
                    </form>
                </div>
            </div>
            <div class="mb-4 col">
                <h2>TCC</h2>
                <div class="p-3 border border-2 bg-secundary">
                    <form action="{{url('upload/tcc')}}" method="post" enctype="multipart/form-data" class="d-inline " id="form-tcc">
                        <div class="clo-md-6 br-1 d-inline">
                            @csrf
                            <input type="file" name="documento">
                        </div> 
                        <div class="clo-md-6 d-inline">
                            <button class="btn btn-primary btn-bloqueo" type = "submit" onclick="bloquearBoton('form-tcc')">Cargar</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
   function bloquearBoton(formulario) {
        document.getElementById(formulario).addEventListener('submit', function () {
            // Deshabilita el botón antes de enviar el formulario
            Boton();
            // Aquí puedes agregar alguna lógica adicional antes de enviar el formulario, si es necesario
        });
    }

    function Boton(){
        var botones = document.getElementsByClassName('btn-bloqueo');
        
        for (var i = 0; i < botones.length; i++) {
            botones[i].disabled = true;
        }
    };
</script>
@endsection

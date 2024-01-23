@extends('layouts.app')
@section('content')
<div class="container ">
   <div>
        <div class="text-center">
            <h1>Creación de Causal de Cambio</h1>
        </div>
        <div class="px-2 mx-2">          
            <form action="{{route('changes-clients.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nombre Corto:</strong>
                                <input id='short_name' type="text" class="form-control" name="short_name" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Nombre Antiguo:</strong>
                                <input id='old_name' type="text" name="old_name" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-secondary mx-3" href="{{route('changes-clients.index')}}">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection

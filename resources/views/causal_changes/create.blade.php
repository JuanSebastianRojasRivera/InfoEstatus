@extends('layouts.app')
@section('content')
<div class="container ">
   <div>
        <div class="text-center">
            <h1>Creación de Causal de Cambio</h1>
        </div>
        <div class="row mb-3">          
            <form action="{{route('causal-changes.store')}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong>Amplicion Causal:</strong>
                            <input id='causal_operators' class="form-control" name="causal_operators" required></input>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong>Estado Causal:</strong>
                            <input id='causal_status' type="text" name="causal_status" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong>Responsable:</strong>
                            <input type="text" name="responsible" class="form-control" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong>Operador:</strong>
                            <input id='operator' type="text" name="operator" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div>
                    <a type="button" class="btn btn-secondary" href="{{route('causal-changes.index')}}">Cancelar</a>
                    <button type="submit" class="btn btn-success mx-2">Crear</button>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection

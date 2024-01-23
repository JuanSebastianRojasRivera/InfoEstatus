@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center">
        <h5 >Edición de Causal de Cambio</h5>
    </div>
    <div class="">          
        <form action="{{route('causal-changes.update', $causal_change)}}" method="POST">
            @csrf
            @method('PUT')
            <class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Amplicion Causal:</strong>
                        <input id='causal_operators' class="form-control" name="causal_operators" value="{{$causal_change->causal_operators}}" required></input>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Estado Causal:</strong>
                        <input id='causal_status' type="text" name="causal_status" class="form-control" value="{{$causal_change->causal_status}}" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Responsable:</strong>
                        <input type="text" name="responsible" class="form-control" value="{{$causal_change->responsible}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Operador:</strong>
                        <input id='operator' type="text" name="operator" class="form-control" value="{{$causal_change->operator}}" required>
                    </div>
                </div>
                <div class="mt-3">
                    <a type="button" class="btn btn-secondary" href="{{route('causal-changes.index')}}">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
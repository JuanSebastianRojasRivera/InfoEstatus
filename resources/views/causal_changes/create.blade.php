@extends('layouts.app')
@section('content')
<div class="container ">
   <div>
        <div class="text-center">
            <h1>Creación de Causal de Cambio</h1>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Algo Fue mal :/ !</strong> Valida la siguiente informacion:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="px-2 mx-2">          
            <form action="{{route('causal-changes.store')}}" method="POST">
                @csrf
                <div class="row">
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
                    <div class="mt-3" style="justify-content: center;">
                        <a type="button" class="btn btn-secondary" href="{{route('causal-changes.index')}}">Cancelar</a>
                        <button type="submit" class="btn btn-success">Crear</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection

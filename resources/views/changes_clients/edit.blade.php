@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center">
        <h1>Edición Cambio cliente</h1>
    </div>
    <div class="mx-auto">          
        <form action="{{route('changes-clients.update', $changes_client)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3 px-2">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre Corto:</strong>
                        <input id='short_name' type="text" class="form-control" name="short_name" value="{{$changes_client->short_name}}" required>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Nombre Antiguo:</strong>
                        <input id='old_name' type="text" name="old_name" class="form-control" value="{{$changes_client->old_name}}"  required>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-secondary mx-3" href="{{route('changes-clients.index')}}">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection

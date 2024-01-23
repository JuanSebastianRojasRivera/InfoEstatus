@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center">
        <h1>Edición Cambio cliente</h1>
    </div>
    <div class="mx-auto">          
        <form action="{{route('guide-clients.update', $guide_client)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Guia:</strong>
                        <input id='guide1' type="text" class="form-control" name="guide1" value="{{$guide_client->guide1}}" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Cliente:</strong>
                        <input id='client1' type="text" name="client1" class="form-control" value="{{$guide_client->client1}}" required>
                    </div>
                </div>
            </div>
            <div>
                <a class="btn btn-secondary mx-3" href="{{route('guide-clients.index')}}">Cancelar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection

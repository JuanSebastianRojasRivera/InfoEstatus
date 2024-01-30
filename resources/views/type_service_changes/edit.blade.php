@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center">
        <h1>Edición Cambio cliente</h1>
    </div>
    <div class="mx-auto">          
        <form action="{{route('type-service.update', $type_service)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-xs-12 col-sm-12 col-md-12  mt-2">
                    <div class="form-group">
                        <strong>Tipo Servicio:</strong>
                        <input id='typeofservice' type="text" class="form-control" name="typeofservice" value="{{$type_service->typeofservice}}" required>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Servicio GLe:</strong>
                        <input id='servicegle' type="text" name="servicegle" class="form-control" value="{{$type_service->servicegle}}"  required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>aGile:</strong>
                        <input id='agile' type="text" name="agile" class="form-control" value="{{$type_service->agile}}"  >
                    </div>
                </div>
            </div>
            <div>
                <a class="btn btn-secondary" href="{{route('type-service.index')}}">Cancelar</a>
                <button type="submit" class="btn btn-warning mx-2">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container ">
   <div>
        <div class="text-center">
            <h1>Creación de Cambio de tipo de Servicio</h1>
        </div>
        <div class="row mb-3">          
            <form action="{{route('type-service.store')}}" method="POST">
                @csrf
                <div>
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Tipo Servicio:</strong>
                                <input id='typeofservice' type="text" class="form-control" name="typeofservice" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Servicio GLE:</strong>
                                <input id='servicegle' type="text" name="servicegle" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>aGile:</strong>
                                <input id='agile' type="text" name="agile" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-secondary" href="{{route('type-service.index')}}">Cancelar</a>
                        <button type="submit" class="btn btn-success mx-2">Crear</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection

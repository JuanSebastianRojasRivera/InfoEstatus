@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center">
        <h1>Edición Cambio cliente</h1>
    </div>
    <div class="mx-auto">          
        <form action="{{route('guide-status.update', $guide_status)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3 px-2">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Estado Guia:</strong>
                        <input id='state_guide' type="text" class="form-control" name="state_guide" value="{{$guide_status->state_guide}}" required>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Estado GLe:</strong>
                        <input id='state_gle' type="text" name="state_gle" class="form-control" value="{{$guide_status->state_gle}}"  required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>aGile:</strong>
                        <input id='agile1' type="text" name="agile1" class="form-control" value="{{$guide_status->agile1}}"  required>
                    </div>
                </div>
            </div>
            <div class="d-flex ">
                <a class="btn btn-secondary mx-3" href="{{route('guide-status.index')}}">Cancelar</a>
                <button type="submit" class="btn btn-warning">Editar</button>
            </div>
        </form>
    </div>
</div>
@endsection

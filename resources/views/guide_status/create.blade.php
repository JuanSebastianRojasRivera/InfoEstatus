@extends('layouts.app')
@section('content')
<div class="container ">
   <div>
        <div class="text-center">
            <h1>Creación de Estado de Guia</h1>
        </div>
        <div class="row mb-3">          
            <form action="{{route('guide-status.store')}}" method="POST">
                @csrf
                <div>
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Estado Guia:</strong>
                                <input id='state_guide' type="text" class="form-control" name="state_guide" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Estado GLE:</strong>
                                <input id='state_gle' type="text" name="state_gle" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>aGile:</strong>
                                <input id='agile1' type="text" name="agile1" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-secondary" href="{{route('guide-status.index')}}">Cancelar</a>
                        <button type="submit" class="btn btn-success mx-2">Crear</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection

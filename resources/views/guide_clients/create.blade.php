@extends('layouts.app')
@section('content')
<div class="container ">
   <div>
        <div class="text-center">
            <h1>Creación de Guia del Cliente</h1>
        </div>
        <div class="px-2 mx-2">          
            <form action="{{route('guide-clients.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Guia:</strong>
                                <input id='guide1' type="text" class="form-control" name="guide1" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Cliente:</strong>
                                <input id='client1' type="text" name="client1" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-secondary mx-3" href="{{route('guide-clients.index')}}">Cancelar</a>
                        <button type="submit" class="btn btn-success">Crear</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection

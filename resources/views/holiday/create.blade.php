@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Holiday
@endsection

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="">
                        <h1 class="text-center">Creacion de Festivos</h1>
                    </div>
                    <div class="">
                        <form method="POST" action="{{ route('holidays.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                    <div class="form-group">
                                        <strong>Año:</strong>
                                        <input id='year' type="text" class="form-control" name="year" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                    <div class="form-group">
                                        <strong>fecha:</strong>
                                        <input id='date' type="date" name="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                    <div class="form-group">
                                        <strong>Detalle:</strong>
                                        <input id='detail' type="text" name="detail" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-secondary" href="{{route('holidays.index')}}">Cancelar</a>
                                <button type="submit" class="btn btn-success mx-2">Crear</button>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')
@section('content')
<div class="container-xxl">
    <div class="col-12">
        <div >
            <div class="">
                <h1 class="mb-4 text-center">Estado de Guia</h1>
                <div class="p-2 mb-4  bg-secundary d-inline">
                    <form action="{{url('guide-status/upload')}}" method="post" enctype="multipart/form-data" class="d-inline text-start" id="form-infoestatus">
                        <div class="clo-md-6 br-1 d-inline border border-2 p-3 me-4 ">
                            @csrf
                            <input type="file" name="documento">
                        </div> 
                        <div class="clo-md-6 d-inline">
                            <button class="btn btn-success" type ="submit">Importar</button>
                        </div>  
                    </form>
                </div>
                <a href="{{ route('guide-status.create')}}" class="btn btn-primary">Crear</a>
            </div>
            @if(Session::has('Completado'))
            <div class="col-12 mt-4">
                <div class="alert alert-success">
                    <strong>{{ Session::get('Completado') }}</strong>
                </div>
            </div>
            @endif
            @if(Session::has('CargaFallida'))
         <div class="col-12 mt-4 mb-4">
             <div class="alert alert-warning">
                
                 <strong>{{ Session::get('CargaFallida') }}</strong>
             </div>
         </div>
        @endif
            <div class="col-12 mt-4 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="">
                        <tr class="thead">
                            <th scope="col">Estado Guia</th>
                            <th scope="col">Estado GLE</th>
                            <th scope="col">aGlie</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @if(isset($guide_statuses) && $guide_statuses->count() > 0)
                            @foreach($guide_statuses as $guide_status)
                                <tr>
                                    <td>{{ $guide_status->state_guide}}</td>
                                    <td>{{ $guide_status->state_gle}}</td>
                                    <td>{{ $guide_status->agile1}}</td>
                                    <td class="">
                                        <div class="d-inline">
                                        <a href="{{ route('guide-status.edit', $guide_status->id) }}" class="btn btn-warning d-inline">Editar</a>
                                        <form action="{{route('guide-status.destroy', $guide_status)}}" method="post" class="d-inline" id="form_delete">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" onclick="mensajeEliminacion('form_delete')">Eliminar</button>
                                        </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="30">No hay registros disponibles</td>
                            </tr>
                        @endif
                                
                    </tbody> 
                </table>
            </div>
            {{ $guide_statuses->links() }}
        </div>
    </div>
</div>
@endsection



@extends('layouts.app')
@section('content')
<div class="container-xxl">
    <div class="col-12">
        <div >
            <div>
                <h1 class="text-center mb-4">Causales de Cambio</h1>
                <div class="p-3 mb-4  bg-secundary d-inline">
                    <form action="{{url('causal-changes/upload')}}" method="post" enctype="multipart/form-data" class="d-inline" id="form-infoestatus">
                        <div class="clo-md-6 br-1 d-inline border border-2 p-3 me-4 ">
                            @csrf
                            <input type="file" name="documento">
                        </div> 
                        <div class="clo-md-6 d-inline">
                            <button class="btn btn-success btn-bloqueo" type = "submit">Importar</button>
                        </div> 
                    </form>
                </div>
                <a class="btn btn-primary" href="{{route('causal-changes.create')}}">Crear</a>
            </div>
            @if(Session::has('Completado'))
            <div class="col-12 mt-4">
                <div class="alert alert-success">
                    <strong>{{ Session::get('Completado') }}</strong>
                </div>
            </div>
            @endif
            <div class="col-12 mt-4 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="">
                        <tr class="thead">
                            <th scope="col">Amplicación Causal</th>
                            <th scope="col">Estado Causal</th>
                            <th scope="col">Responsable</th>
                            <th scope="col">Operador</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @if(isset($causal_changes) && $causal_changes->count() > 0)
                            @foreach($causal_changes as $causal_change)
                                <tr>
                                    <td>{{ $causal_change->causal_operators}}</td>
                                    <td>{{ $causal_change->causal_status}}</td>
                                    <td>{{ $causal_change->responsible}}</td>
                                    <td>{{ $causal_change->operator}}</td>
                                    <td class="">
                                        <div class="d-inline">
                                            <a href="{{ route('causal-changes.edit', $causal_change->id) }}" class="btn btn-warning d-inline">Editar</a>
                                            <form action="{{ route('causal-changes.destroy', $causal_change->id) }}" method="post" class="d-inline" id="form_delete">
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
            {{ $causal_changes->links() }}
        </div>
    </div>
</div>
@endsection

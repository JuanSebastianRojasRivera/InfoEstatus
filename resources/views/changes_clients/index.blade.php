@extends('layouts.app')
@section('content')
<div class="container-xxl">
    <div class="col-12">
        <div >
            <div class="">
                <h1 class="mb-4 text-center">Cambios de Clientes</h1>
                <div class="p-3 mb-4  bg-secundary d-inline">
                    <form action="{{url('changes-clients/upload')}}" method="post" enctype="multipart/form-data" class="d-inline text-start" id="form-infoestatus">
                        <div class="clo-md-6 br-1 d-inline border border-2 p-3 me-4 ">
                            @csrf
                            <input type="file" name="documento">
                        </div> 
                        <div class="clo-md-6 d-inline">
                            <button class="btn btn-success" type ="submit">Importar</button>
                        </div>  
                    </form>
                </div>
                <a href="{{ route('changes-clients.create')}}" class="btn btn-primary">Crear</a>
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
                            <th scope="col">Nombre Corto</th>
                            <th scope="col">Nombre Antiguo</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @if(isset($changes_clients) && $changes_clients->count() > 0)
                            @foreach($changes_clients as $changes_client)
                                <tr>
                                    <td>{{ $changes_client->short_name}}</td>
                                    <td>{{ $changes_client->old_name}}</td>
                                    <td class="">
                                        <div class="d-inline">
                                        <a href="{{ route('changes-clients.edit', $changes_client->id) }}" class="btn btn-warning d-inline">Editar</a>
                                        <form action="{{route('changes-clients.destroy', $changes_client)}}" method="post" class="d-inline" id="form_delete">
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
            {{ $changes_clients->links() }}
        </div>
    </div>
</div>
@endsection



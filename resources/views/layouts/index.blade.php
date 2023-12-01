@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white"><img src="assets/logogle.png"></h2>
        </div>
        <div>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">Generar Guía</a>
        </div>
        <div class="container">
         <br/>
          <div class="row">
            <div class="clod-md-4">
            <div class="clod-md-6">
                <div class="row">
                    <form action="{{url('import/importar')}}" method="post" enctype="multipart/form-data" >
                       <div class="clo-md-6">
                        @csrf
                            <input type="file" name="documento">
                       </div> 
                       <div class="clo-md-6">
                            <button class="btn btn-primary" type = "submit" >Importar</button>
                       </div> 

                    </form>
            </div>
            <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="{{ url('export/exportar') }}" method="get">
            <!-- Aquí podrías agregar campos adicionales si es necesario -->
            <button type="submit" class="btn btn-success">Exportar</button>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>

    </div>

    @if(Session::has('Completado'))
         <div class="col-12 mt-4">
             <div class="alert alert-danger">
                 <strong>{{ Session::get('Completado') }}</strong>
             </div>
         </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Tarea</th>
                <th>Descripción</th>
                <th>Acción</th>
            </tr>
            
            @if(isset($tasks) && $tasks->count() > 0)
                @foreach($tasks as $task)
                <tr>
                    <td class="fw-bold">{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>

                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">No hay tareas disponibles</td>
                </tr>
            @endif
        </table>
        {{ $tasks->links() }}
    </div>
</div>
@endsection
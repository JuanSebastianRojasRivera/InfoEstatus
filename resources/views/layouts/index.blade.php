@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div>
            <div>
                <a href="{{ route('tasks.create') }}" class="btn btn-primary">Generar Guía</a>
            </div>
            <div class="d-inline">
                <form action="{{url('import/importar')}}" method="post" enctype="multipart/form-data" class="d-inline ">
                        <div class="clo-md-6 br-1 d-inline">
                            @csrf
                                <input type="file" name="documento">
                        </div> 
                        <div class="clo-md-6 d-inline">
                                <button class="btn btn-primary" type = "submit" >Importar</button>
                        </div> 

                </form>
            </div>
            <div class="d-inline">
                <form action="{{ url('export/exportar') }}" method="get" class="d-inline">
                    <!-- Aquí podrías agregar campos adicionales si es necesario -->
                    <button type="submit" class="btn btn-success">Exportar</button>
                </form>
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
                <thead class="table-primary">
                <tr class="text-secondary">
                    <th>Guia</th>
                    <th>Transportadora</th>
                    <th>Cliente</th>
                    <th>Fecha Elaboracion</th>
                    <th>Origen</th>
                    <th>Doc Cliente</th>
                    <th>Div</th>
                    <th>Destinatario</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Ciudad Destino</th>
                    <th>Valor Declarado</th>
                    <th>Piezas</th>
                    <th>Tipo Envio</th>
                    <th>Tipo Trayecto</th>
                    <th>Dias de entrega</th>
                    <th>Fecha Programada</th>
                    <th>Fecha de Presentacion</th>
                    <th>Citas de Entrega</th>
                    <th>Estado de Entrega</th>
                    <th>Descripcion Causal</th>
                    <th>Ampliacion Causal</th>
                    <th>Ampliacion Causal 2</th>
                    <th>Responsable</th>
                    <th>Tiempo</th>
                    <th>Estado de retorno cumplido</th>
                    <th>Fecha de retorno cumplido</th>
                    <th>Departamento de origen</th>
                    <th>Departamento de destino</th>
                    <th>Peso</th>
                    <th>Accion</th>
                </tr>
                </thead>
                @if(isset($tasks) && $tasks->count() > 0)
                    @foreach($tasks as $task)
                    <tr>
                        <td class="fw-bold">{{ $task->guide }}</td>
                        <td>{{ $task->conveyor }}</td>
                        <td>{{ $task->client }}</td>
                        <td>{{ $task->elaboration_date }}</td>
                        <td>{{ $task->origin }}</td>
                        <td>{{ $task->client_documentation}}</td>
                        <td>{{ $task->viv }}</td>
                        <td>{{ $task->addressee }}</td>
                        <td>{{ $task->address }}</td>
                        <td>{{ $task->phone }}</td>
                        <td>{{ $task->destination_city }}</td>
                        <td>{{ $task->declared_value }}</td>
                        <td>{{ $task->parts }}</td>
                        <td>{{ $task->shipment_type }}</td>
                        <td>{{ $task->type_route}}</td>
                        <td>{{ $task->delivery_days }}</td>
                        <td>{{ $task->scheduled_date }}</td>
                        <td>{{ $task->presentation_date }}</td>
                        <td>{{ $task->delivery_appointments }}</td>
                        <td>{{ $task->delivery_status }}</td>
                        <td>{{ $task->causal_description }}</td>
                        <td>{{ $task->causal_amplification }}</td>
                        <td>{{ $task->causal_amplification2 }}</td>
                        <td>{{ $task->responsible }}</td>
                        <td>{{ $task->time}}</td>
                        <td>{{ $task->return_status_fulfilled }}</td>
                        <td>{{ $task->return_date_fulfilled}}</td>
                        <td>{{ $task->department_of_origin}}</td>
                        <td>{{ $task->destination_department}}</td>
                        <td>{{ $task->weight}}</td>

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
                        <td colspan="30">No hay tareas disponibles</td>
                    </tr>
  @endif
            </table>
            {{ $tasks->links() }}
        </div>
    </div>
</div>
@endsection
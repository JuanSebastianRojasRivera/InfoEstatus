@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="col-12">
        <div class="text-center">
            <div class="d-inline">
                <a href="{{ route('upload') }}" class="btn btn-warning">Importar archivos</a>
            </div>
            <div class="d-inline">
                <a href="{{ route('tasks.create') }}" class="btn btn-primary">Generar Guía</a>
            </div>

            <div class="d-inline">
                <form action="{{ url('export/exportar') }}" method="get" class="d-inline">
                    <button type="submit" class="btn btn-success">Exportar</button>
                </form>
            </div>
            
            
            <div class="clo-md-6 d-inline">
                <form action="{{ url('crosing/actualizarTabla') }}" method="post" enctype="multipart/form-data" class="d-inline">
                    @method('DELETE') 
                    @csrf 
                    <button class="btn btn-primary" type="submit">Cruces de datos</button>
                </form>
            </div> 
        </div>
        <div class="tb-padding">
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
                                <td class="fw-bold">{{ $task->Guide }}</td>
                                <td>{{ $task->Conveyor}}</td>
                                <td>{{ $task->Client}}</td>
                                <td>{{ $task->Elaboration_Date }}</td>
                                <td>{{ $task->Origin}}</td>
                                <td>{{ $task->Client_Documentation}}</td>
                                <td>{{ $task->Div}}</td>
                                <td>{{ $task->Addressee}}</td>
                                <td>{{ $task->Address}}</td>
                                <td>{{ $task->Phone}}</td>
                                <td>{{ $task->Destination_City}}</td>
                                <td>{{ $task->Declared_Value }}</td>
                                <td>{{ $task->Parts}}</td>
                                <td>{{ $task->Shipment_Type }}</td>
                                <td>{{ $task->Type_Route}}</td>
                                <td>{{ $task->Delivery_Days }}</td>
                                <td>{{ $task->Scheduled_Date }}</td>
                                <td>{{ $task->Presentation_Date }}</td>
                                <td>{{ $task->Delivery_Appointments }}</td>
                                <td>{{ $task->Delivery_Status }}</td>
                                <td>{{ $task->Causal_Description }}</td>
                                <td>{{ $task->Causal_Amplification }}</td>
                                <td>{{ $task->Causal_Amplification2 }}</td>
                                <td>{{ $task->Responsible }}</td>
                                <td>{{ $task->Time}}</td>
                                <td>{{ $task->Return_Status_Fulfilled }}</td>
                                <td>{{ $task->Return_Date_Fulfilled}}</td>
                                <td>{{ $task->Department_Of_Origin}}</td>
                                <td>{{ $task->Destination_Department}}</td>
                                <td>{{ $task->Weight}}</td>
                                <td class="p-2">
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning m-2">Editar</a>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="post" class="m-2">
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
                
            </div>
            {{ $tasks->links() }}
        </div>
    
    </div>
</div>
@endsection

@section('css')
<style>
    .tb-padding {
        padding-left: 20px;
        padding-right: 20px;
    }

    .thead th{
        background: #2C597F;
        color: #ffff;
        text-align: center;
    }
</style>
@endsection
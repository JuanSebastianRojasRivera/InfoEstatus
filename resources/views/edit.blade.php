@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div>
            <h2>Editar Guia</h2>
        </div>
        <div>
            <a href="{{route('tasks.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>




    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Algo Fue mal :/ !</strong> Valida la siguiente informacion:<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{route('tasks.update', $task)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Guia:</strong>
                    <input type="text" name="guide" class="form-control" placeholder="Tarea" value="{{$task->guide}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Transportadora:</strong>
                    <input type="text" name="conveyor" class="form-control" placeholder="Tarea" value="{{$task->conveyor}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Cliente:</strong>
                    <input type="text" name="client" class="form-control" placeholder="Tarea" value="{{$task->client}}">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Fecha de Elaboracion:</strong>
                    <input type="text" name="elaboration_date" class="form-control" placeholder="Tarea" value="{{$task->elaboration_date}}">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Origen:</strong>
                    <input type="text" name="origin" class="form-control" placeholder="Tarea" value="{{$task->origin}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Documentacion del cliente: </strong>
                    <input type="text" name="client_documentation" class="form-control" placeholder="Tarea" value="{{$task->client_documentation}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Div:</strong>
                    <input type="text" name="viv" class="form-control" placeholder="Tarea" value="{{$task->viv}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Destinatario:</strong>
                    <input type="text" name="addressee" class="form-control" placeholder="Tarea" value="{{$task->addressee}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Direccion:</strong>
                    <input type="text" name="address" class="form-control" placeholder="Tarea" value="{{$task->address}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Telefono:</strong>
                    <input type="text" name="phone" class="form-control" placeholder="Tarea" value="{{$task->phone}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Cuidad Destino:</strong>
                    <input type="text" name="destination_city" class="form-control" placeholder="Tarea" value="{{$task->destination_city}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Valor declarado:</strong>
                    <input type="text" name="declared_value" class="form-control" placeholder="Tarea" value="{{$task->declared_value}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Piezas:</strong>
                    <input type="text" name="parts" class="form-control" placeholder="Tarea" value="{{$task->parts}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Tipo de Envio:</strong>
                    <input type="text" name="shipment_type" class="form-control" placeholder="Tarea" value="{{$task->shipment_type}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Tipo de Ruta:</strong>
                    <input type="text" name="type_route" class="form-control" placeholder="Tarea" value="{{$task->type_route}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Dias de Entrega:</strong>
                    <input type="text" name="delivery_days" class="form-control" placeholder="Tarea" value="{{$task->delivery_days}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Fecha Programada:</strong>
                    <input type="text" name="scheduled_date" class="form-control" placeholder="Tarea" value="{{$task->scheduled_date}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Fecha de Presentacion:</strong>
                    <input type="text" name="presentation_date" class="form-control" placeholder="Tarea" value="{{$task->presentation_date}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Citas de entrega:</strong>
                    <input type="text" name="delivery_appointments" class="form-control" placeholder="Tarea" value="{{$task->delivery_appointments}}">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>:</strong>
                    <input type="text" name="delivery_status" class="form-control" placeholder="Tarea" value="{{$task->delivery_status}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection
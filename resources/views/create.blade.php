@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
        <h1>Crear Guia</h1>
    </div>
    <div class="row">
        <form action="{{route('tasks.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Guia:</strong>
                            <input id="Guide" type="text" name="Guide" class="form-control" required>
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Transportadora:</strong>
                            <input id="Conveyor" type="text" name="Conveyor" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            <input id="Client" type="text" name="Client" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Fecha Elaboracion:</strong>
                            <input id="Elaboration_Date" type="text" name="Elaboration_Date" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Origen:</strong>
                            <input id="Origin" type="text" name="Origin" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Doc Client:</strong>
                            <input id="Client_Documentation" type="text" name="Client_Documentation" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Div:</strong>
                            <input id="Div" type="text" name="Div" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Destinatario:</strong>
                            <input id="Addressee" type="text" name="Addressee" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            <input id="Address" type="text" name="Address" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            <input id="Phone" type="text" name="Phone" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Ciudad Destino:</strong>
                            <input id="Destination_City" type="text" name="Destination_City" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Valor Declarado:</strong>
                            <input id="Declared_Value" type="text" name="Declared_Value" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Piezas:</strong>
                            <input id="Parts" type="text" name="Parts" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Tipo Envio:</strong>
                            <input id="Shipment_Type" type="text" name="Shipment_Type" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Tipo Trayecto:</strong>
                            <input id="Type_Route" type="text" name="Type_Route" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Dias de Entrega:</strong>
                            <input id="Delivery_Days" type="text" name="Delivery_Days" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Fecha Programada:</strong>
                            <input id="Scheduled_Date" type="text" name="Scheduled_Date" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Fecha de Presentacion:</strong>
                            <input id="Presentation_Date" type="text" name="Presentation_Date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Citas de Entregas:</strong>
                            <input id="Delivery_Appointments" type="text" name="Delivery_Appointments" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Estado de Entrega:</strong>
                            <input id="Delivery_Status" type="text" name="Delivery_Status" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Descripcion Causal:</strong>
                            <input id="Causal_Description" type="text" name="Causal_Description" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Ampliacion Causal:</strong>
                            <input id="Causal_Amplification" type="text" name="Causal_Amplification" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Ampliacion Causal2:</strong>
                            <input id="Causal_Amplification2" type="text" name="Causal_Amplification2" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Responsable:</strong>
                            <input id="Responsible" type="text" name="Responsible" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Tiempo:</strong>
                            <input id="Time" type="text" name="Time" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Estado de Retorno Cumplido:</strong>
                            <input id="Return_Status_Fulfilled" type="text" name="Return_Status_Fulfilled" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Fecha de Retorno Cumplido:</strong>
                            <input id="Return_Date_Fulfilled" type="text" name="Return_Date_Fulfilled" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Departamento de Origen:</strong>
                            <input id="Department_Of_Origin" type="text" name="Department_Of_Origin" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Departamento Destino:</strong>
                            <input id="Destination_Department" type="text" name="Destination_Department" class="form-control">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <strong>Peso:</strong>
                            <input id="Weight" type="text" name="Weight" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="{{route('tasks.index')}}" class="btn btn-secondary">Volver</a>
                <button type="submit" class="btn btn-success mx-2">Crear</button>
            </div>
        </form>
    </div>
</div>
@endsection
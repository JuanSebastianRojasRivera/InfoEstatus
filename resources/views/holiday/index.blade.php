@extends('layouts.app')

@section('template_title')
    Holiday
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div>
                        <h1 class="text-center">Festivos</h1>
                        <div class="">
                            <a href="{{ route('upload') }}" class="btn btn-secondary">Volver</a>
                            <a href="{{ route('holidays.create') }}" class="btn btn-success">Agregar</a>
                        </div>
                    </div>
                    
                    @if(Session::has('Completado'))
                    <div class="col-12 mt-4">
                        <div class="alert alert-success">
                            <strong>{{ Session::get('Completado') }}</strong>
                        </div>
                    </div>
                    @endif

                    <div>
                        <div class="col-12 mt-4 table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead">
                                    <tr class="text-center">
										<th>Año</th>
										<th>Fecha</th>
										<th>Detalle</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                @if(isset($holidays) && $holidays->count() > 0)
                                    @foreach ($holidays as $holiday)
                                        <tr>    
											<td>{{ $holiday->year }}</td>
											<td>{{ $holiday->date }}</td>
											<td>{{ $holiday->detail }}</td>
                                            <td>
                                                <form action="{{ route('holidays.destroy',$holiday->id) }}" method="POST">
                                                    <a class="btn btn-warning" href="{{ route('holidays.edit',$holiday->id) }}">Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="mensajeEliminacion('form_delete')">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="30" class="text-center">No hay registros disponibles</td>
                                    </tr>
                                @endif  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $holidays->links() !!}
            </div>
        </div>
    </div>
@endsection

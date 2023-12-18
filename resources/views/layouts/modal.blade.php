@extends('layouts.app')

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cargue de archivos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Cargar</button>
            </div>
            </div>
</div>
@endsection
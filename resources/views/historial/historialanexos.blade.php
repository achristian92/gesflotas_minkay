@extends('vehicle.navbarVehicle')
@section('contenido')
<style type="text/css">
    .tituloh3{
        letter-spacing: 1.2px;
        transform: scaleY(0.9);
        padding-bottom: 35px;
        padding-top: 0px;
        margin-top: 5px;
        
    }

    table.table-striped{
        width: 95%;
        max-width: 95%;
    }

    .table-striped>tbody>tr:nth-of-type(odd){
        background-color: rgba(255,255,255,0.1);
    
    }

    .btn-sm{
        padding: 1px 9px;
    }
</style>
<center>
    <h3 class="tituloh3">
        <strong>
            ANEXOS EXISTENTES
        </strong>
    </h3>
</center>
<div class="row">
    @foreach($historialanexos as $image)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img  width="250px" src="../../../storage/app/{{ $image->ruta_imagen_anexo }}" class="img-responsive">
                </div>
                <div class="panel-footer">{{ $image->tipo_doc_anexo }}</div>
            </div>
        </div>
    @endforeach
</div>



@stop

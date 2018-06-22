@extends('vehicle.navbarVehicle')
@section('contenido')
<style type="text/css">
    .tituloh3{
        letter-spacing: 1.2px;
 
        padding-bottom: 25px;

        
    }

    table.table-striped{
        width: 95%;
        max-width: 95%;
    }

    .table-striped>tbody>tr:nth-of-type(odd){
        background-color: rgba(255,255,255,0.1);
    
    }

    .btn-sm{
        padding: 1px 3px;
    }

    .btnac {
        font-size: 12px
    }
</style>
<center>
    <h3 class="tituloh3">
        <strong>
            HISTORIAL DE ACTUALIZACIONES DE KILOMETRAJE
        </strong>
    </h3>
</center>
<div class="container">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12" style="padding-bottom: 20px">
                <div class="col-md-4">
                    <form action="{{ route('xls.newkilo', $nro_placa) }}" method="post">
                        {{csrf_field()}}
                        <button class="btn btn-success" type="submit" style="background-color: white; border-color: white; color: black">
                            EXPORTAR A <img src="http://icons.iconarchive.com/icons/dakirby309/simply-styled/256/Microsoft-Excel-2013-icon.png" height="25" width="25">
                        </button>
                    </form>
                </div>
                <div class="col-sm-offset-5 col-sm-3">
                            <div class="form-group">
                              <label class="col-md-3"  for="textinput">Placa:</label>  
                              
                              <label  id="textinput" name="textinput" >
                                {{ $nro_placa }} 
                              </label>
                               
                             
                            </div>
                        
                    
                </div>

            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            ULT KILOMETRAJE INGRESADO
                        </th>
                        <th>
                            ACCIONES
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($historialnewkilo as $dato)
                    <tr>
                        <td>
                            {{ $dato->idnewkilo }}
                        </td>
                        <td>
                            {{ $dato->new_km }}
                        </td>                     
                        <td>
                            <a class="btn btn-warning btn-sm" href="#">
                                <span class="glyphicon glyphicon-pencil btnac"></span>
                            </a>
                            <a class="btn btn-danger btn-sm">
                                  <span class="glyphicon glyphicon-remove btnac"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

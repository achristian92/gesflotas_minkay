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
            HISTORIAL DE ESTADO VEHICULO
        </strong>
    </h3>
</center>
<div class="container">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12" style="padding-bottom: 20px">
                <div class="col-md-4">
                    <form action="{{ route('xls.estadovehi', $nro_placa) }}" method="post">
                        {{csrf_field()}}
                        <button class="btn btn-success" type="submit">
                            EXPORTAR A EXCEL
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
                            TIPO ESTADO
                        </th>
                        <th>
                            DESCRIPCION
                        </th>
                        <th>
                            GASTO OCACIONADO
                        </th>
                        <th>
                            ESTADO
                        </th>
                        <th>
                            FECHA
                        </th>
                        <th>
                            ACCIONES
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($historialestadovehi as $dato)
                    <tr>
                        <td>
                            {{ $dato->idestadovehi }}
                        </td>
                        <td>
                            {{ $dato->nombre_estado_vehi }}
                        </td>
                        <td>
                            {{ $dato->descripcion_estadov }}
                        </td>
                        <td>
                            {{ $dato->gasto_oca_est }}
                        </td>
                        <td>
                            @if($dato->estadoact_vehi == 1)
                            Actual
                            @else
                            Anterior
                             @endif
                        </td>
                        <td>
                            {{ $dato->created_at }}
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

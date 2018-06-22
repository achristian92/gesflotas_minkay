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
            HISTORIAL DE SOAT
        </strong>
    </h3>
</center>
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 20px">
                <div class="col-md-4">
                    <form action="{{ route('xls.soat',$nro_placa) }}" method="post">
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
                           PROVEEDOR
                        </th>
                        <th>
                            NRO POLIZA
                        </th>
                        <th>
                            COSTO
                        </th>
                        <th>
                            FECHA VENC
                        </th>
                        <th>
                            ESTADO 
                        </th>
                        <th>
                            IMAGEN
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($historialsoat as $dato)
                    <tr>
                        <td>
                            {{ $dato->idsoatvehi }}
                        </td>
                        <td>
                            {{ $dato->nombre_soat }}
                        </td>
                        <td>
                            {{ $dato->nro_poliza }}
                        </td>
                        <td>
                            {{ $dato->monto_soat }}
                        </td>
                        <td>
                           {{ $dato->fecha_vencimiento_soat }}
                        </td>
                        <td>
                             @if($dato->estado_soat == 1)
                            Actual
                            @else
                            Anterior
                             @endif
                        </td>
                        <td>
                          <img width="30px" src="../../../storage/app/{{ $dato->ruta_imagen_soat }}">
                        </td>
                      
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

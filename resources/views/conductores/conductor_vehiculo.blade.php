@extends('vehicle.navbarVehicle')
@section('contenido')
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<style type="text/css">
    .tituloh3{
		letter-spacing: 1.5px;
		font-weight: bold;
        margin-bottom: 1.5em;
		
	}

	table.table-striped{
		width: 95%;
		max-width: 95%;
      
	}

	.table-striped>tbody>tr:nth-of-type(odd){
		background-color: rgba(255,255,255,0.1);
	
	}

    .form-group{
        margin-bottom: 2.5em;
    }




</style>
<script type="text/javascript">
        $(document).ready(function(){
            ObtenerTodosConductores();
         })

        ;
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#cboconductores').select2();

    });
</script>


<div class="container-fluid">
    <div class="container-fluid">
        <div class="col-sm-9">
            <h3 class="titulocond" align="center">
                <strong>
                    TABLA DE CONDUCTORES ASIGNADOS
                </strong>
            </h3>
            
            <table class="table table-striped" >
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th >
                                     NOMBRES Y APELLIDOS
                                    </th>
                                    <th>
                                        DNI
                                    </th>
                                    <th>
                                        COD TRABAJADOR
                                    </th>
                                    <th>
                                        FECHA NAC.
                                    </th>
                                    <th>
                                        SEXO
                                    </th>
                                    <th>
                                        ESTADO
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resultconduc_vehi as $dato)
                                <tr>
                                    <td>
                                        {{ $dato->iddtconductores }} 
                                    </td>
                                    <td >
                                        {{ $dato->nombres_apellidos }}
                                    </td>
                                    <td>
                                        {{ $dato->nro_dni }}
                                    </td>
                                    <td>                           
                                         {{ $dato->codigo_trabajador }} 
                                    </td>
                                    <td>
                                       {{ $dato->fecha_nacimiento }} 
                                    </td>
                                    <td>
                                        {{ $dato->sexo }} 
                                    </td>
                                    <td>
                                        @if($dato->estadoact == '1')
                                        RESPONSABLE
                                        @else
                                        CONDUCTOR                            
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
            </table>
            
        </div>
        <div class="col-sm-3">

        <h3 class="tituloh3" align="center">
             ASIGNAR CONDUCTORES
        </h3>
          <form action="{{ route('store.conduc', $nro_placa) }}" method="post" role="form">
             {{csrf_field()}}
                    <div class="form-group">
                         
                            <label for="lgFormGroupInput">
                            CONDUCTORES
                            </label>
                            <select class="form-control" id="cboconductores" name="cboconductores" required="">
                            </select> 
                        
                    </div>
                    <div class="form-group" >
                        <div class="form-check-inline">
                            <input  type="radio" name="estadoact" id="estadoact" value="1">
                            <label>Conductor Responsable</label>
                        </div>
                        <div class="form-check-inline">
                            <input  type="radio" name="estadoact" id="estadoact" value="0" checked="">
                             <label>Conductor</label>
                        </div>
                    </div>
                    
                    <center>
                          <button class="btn btn-primary" id="btnregistrarsoat" type="submit">AGREGAR CONDUCTOR</button>
                    </center>
          </form>
        </div>
    </div>
</div>







    <script type="text/javascript">
function ObtenerTodosConductores() {
    $('#cboconductores').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getconductoresJson',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboconductores').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#cboconductores').append('<option value="' + value.iddtconductores + '">' + value.nombres_apellidos + '</option>');
            });
            
           
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
    </script>
@stop

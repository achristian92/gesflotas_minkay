@extends('plantillabase')
@section('contenido')
<link href="../../assets/css/registrovehiculo.css" rel="stylesheet" type="text/css"/>
<!-- cargar el datapicker -->
<script src="//code.jquery.com/jquery-1.11.3.min.js">
</script>
<!-- cargar el mask para placa guion -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js" type="text/javascript">
</script>
// creamos nuestra PHP variable2.
<script type="text/javascript">
    $(document).ready(function(){






ObtenerDepartamentoCargo();
ObtenerCentroCosto();
ObtenerAgencia();


});
</script>
<!-- Datepicker Files -->
<link href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('datePicker/css/bootstrap-datepicker3.standalone.css')}}" rel="stylesheet">
        <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}">
        </script>
        <!-- Languaje -->
        <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}">
        </script>
        <div class="container" id="contenedor_titulo">
            <center>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a aria-expanded="false" data-toggle="tab" href="#1">
                            DATOS GENERALES2
                        </a>
                    </li>
                </ul>
            </center>
        </div>
        <form action="setGuardarInfoVehiculo" class="form-horizontal" enctype="multipart/form-data" id="formid" method="POST" novalidate="">
            <div class="container-fluid">
                <div class="tab-content" style="max-width: 1150px; background-color: white; padding-top:20px; padding-bottom: 8px; margin-top: -25px; margin-left: 100px; padding-right: 80px">
                    <?php echo csrf_field(); ?>
                    <div class="tab-pane active " id="1">
                        <div class="container-fluid">
                            <div class="row centered-form">
                                <div class="col-sm-offset-2 col-sm-3">
                                    <div>
                                        <input class="form-control input-md" id="txtPlaca" maxlength="7" name="txtPlaca" onkeyup="ValidarNumeroPlaca(this)" placeholder="" type="text" value="{{ $detallevehiculo->nro_placa }}"/>
                                    </div>
                                    <div class="form-group" id="divZona">
                                        <label class=" control-label" for="cboZonaVehiculo">
                                            ZONA
                                        </label>
                                        <div>
                                            <select class="form-control" id="cboZonaVehiculo" name="cboZonaVehiculo" onchange="ObtenerAgencia()">
                                                <option value="">
                                                    Seleccione Proyecto
                                                </option>
                                                @foreach ($todaszonas as $zonas)
                                                <option value="{{ $zonas->idtipo_zona }}">
                                                    {{ $zonas->nombre_zona }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="label label-danger error" id="msgZona">
                                            *Seleccionar una zona.
                                        </span>
                                    </div>
                                    <div class="form-group" id="divAgencia">
                                        <label class=" control-label" for="cboAgencia">
                                            AGENCIA
                                        </label>
                                        <div>
                                            <select class="form-control" id="cboAgencia" name="cboAgencia">
                                            </select>
                                        </div>
                                        <span class="label label-danger error" id="msgAgencia">
                                            *Seleccionar una agencia.
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-offset-2 col-md-3">
                                    <div class="form-group" id="divDepartamentoCargo">
                                        <label class="control-label" for="cboDepartamentoCargo">
                                            DEPARTAMENTO A CARGO
                                        </label>
                                        <div>
                                            <select class="form-control" id="cboDepartamentoCargo" name="cboDepartamentoCargo">
                                            </select>
                                        </div>
                                        <span class="label label-danger error" id="msgDepartamentoCargo">
                                            *Ingresar departamento de cargo.
                                        </span>
                                    </div>
                                    <div class="form-group" id="divCentroCosto">
                                        <label class="control-label" for="cboCentroCosto">
                                            CENTRO DE COSTO
                                        </label>
                                        <div>
                                            <select class="form-control" id="cboCentroCosto" name="cboCentroCosto">
                                            </select>
                                        </div>
                                        <span class="label label-danger error" id="msgCentroCosto">
                                            *Seleccionar centro de costo.
                                        </span>
                                        <?php $mivarPhp = "Asignado en PHP"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @stop
    </link>
</link>
<script type="text/javascript">
    function ObtenerDepartamentoCargo() {
   var $VariableJS = "1";
   <?php $phpvar    = "este es mi contenido en php un string.." ?>
    var jsvar  = '<?php echo $phpvar; ?>';

   // alert(jsvar);
    $('#cboDepartamentoCargo').empty();
    $.ajax({
        async: true,
        type: 'GET',
        url: '../../getDepartamentoCargosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboDepartamentoCargo').append('<option value="">::Seleccionar</option>');
            $.each(data, function(i, value) {
                $('#cboDepartamentoCargo').append('<option value="' + value.iddepartamento_cargo + '">' + value.nombre_depar_cargo + '</option>');
            });
              $('select[name=cboDepartamentoCargo]').val($VariableJS);
              
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerCentroCosto() {
    $('#cboCentroCosto').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../../getCentroCostosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboCentroCosto').append('<option value="">::Seleccionar</option>');
            $.each(data, function(I, value) {
                $('#cboCentroCosto').append('<option value="' + value.idcentro_costo + '">' + value.nombre_centro_costo + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
function ObtenerAgencia() {
    var CodigoZona = $('#cboZonaVehiculo').val();
    if (CodigoZona != "") {
        $('#cboAgencia').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../../getAgenciasJSON/' + CodigoZona,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#cboAgencia').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#cboAgencia').append('<option value="' + value.idagencia + '">' + value.nombre_agencia + '</option>');
                });
            },
            error: function(jqXHR, status, err) {
                alert("Local error callback.");
            }
        });
    } else {
        $('#cboAgencia').empty();
        $('#cboAgencia').append('<option value="">::Seleccionar::</option>');
    }
}
</script>
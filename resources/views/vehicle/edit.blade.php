@extends('vehicle.navbarVehicle')
@section('contenido')
<script src="../../assets/js/updateVehiculo.js" type="text/javascript">
</script>
<link href="../../assets/css/registrovehiculo.css" rel="stylesheet" type="text/css"/>
<script src="//code.jquery.com/jquery-1.11.3.min.js">
</script>
<!-- cargar el mask para placa guion -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js" type="text/javascript">
</script>
<!-- Datepicker Files -->
<link href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('datePicker/css/bootstrap-datepicker3.standalone.css')}}" rel="stylesheet">
        <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}">
        </script>
        <!-- Languaje -->
        <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}">
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
        
ObtenerTipoUbiDepa();
                ObtenerUbiProvincias(); 
                 ObtenerUbiDistritos(); 
                 ObtenerAgencias();
                ObtenerDepartamentoCargo();
                ObtenerCentroCosto();
                ObtenerTipoVehiculo();
                ObtenerTipoMarcaYCarroceria();
                ObtenerModeloVehiculo(); 

ObtenerTipoCombustible();
ObtenerEstadoVehiculo();
ObtenerProveedorMantVehiculo();     
ObtenerFabricacionVehiculo();
ObtenerANOModeloVehiculo();
cargartodaslasfechas();   
$('#txtPlaca').mask('AAA-AAA');
$('#btnupdate').click(function()
{
    return ValidarCampos();
}   
);

});
        </script>
        
        
        <div class="container" id="contenedor_titulo">
            <center>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a aria-expanded="false" class="barra" data-toggle="tab" href="#1">
                            DATOS GENERALES
                        </a>
                    </li>
                    <li>
                        <a aria-expanded="false" class="barra" data-toggle="tab" href="#2">
                            CARACTERISTICA DEL VEHICULO
                        </a>
                    </li>
                   {{--  <li>
                        <a aria-expanded="false" class="barra" data-toggle="tab" href="#3">
                            DATOS DEL CONDUCTOR
                        </a>
                    </li> --}}
                    <li>
                        <a aria-expanded="false" class="barra" data-toggle="tab" href="#4">
                            ACTUALIZAR KILOMETRAJE
                        </a>
                    </li>
                </ul>
            </center>
        </div>
        <center>
            <form action="{{ route('vehiculo.update' , $detallevehiculo->nro_placa) }}" class="form-horizontal" enctype="multipart/form-data" id="formid" method="POST" novalidate="">
                {!! method_field('PUT') !!}
                <div class="container-fluid">
                    <div class="tab-content">
                        <?php echo csrf_field(); ?>
                        <div class="tab-pane active " id="1">
                            <div class="container-fluid">
                                <div class="row"  style="margin-left: 100px">
                                    <div class="col-md-offset-2 col-md-3 datg">
                                        <div class="form-group" id="divDepartamento">
                                                <label class=" control-label" for="cboUbiDepVehiculo" style="margin-left: -150px">
                                                    DEPARTAMENTO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboUbiDepVehiculo" name="cboUbiDepVehiculo" required="" onchange="ObtenerUbiProvincias()">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgDepa">
                                                    *Seleccionar una Departamento.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divProvincia">
                                                <label class=" control-label" for="cboUbiProvinci" style="margin-left: -185px">
                                                    PROVINCIA
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboUbiProvinci" name="cboUbiProvinci" required="" onchange="ObtenerUbiDistritos()">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msProvinci">
                                                    *Seleccionar una provincia.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divDistrito">
                                                <label class=" control-label" for="cboUbiDistrito" style="margin-left: -200px">
                                                    DISTRITO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboUbiDistrito" name="cboUbiDistrito" required="" onchange="ObtenerAgencias()">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msDistrito">
                                                    *Seleccionar una Distrito.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divAgencia">
                                                <label class=" control-label" for="cboAgencia" style="margin-left: -200px">
                                                    AGENCIA
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboAgencia" name="cboAgencia" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msAgencia">
                                                    *Seleccionar una Agencia.
                                                </span>
                                            </div>
                                    </div>
                                    <div class="col-md-offset-2 col-md-3 datg">
                                        <div class="form-group" id="divDepartamentoCargo">
                                            <label class="control-label" for="cboDepartamentoCargo" style="margin-left: -90px">
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
                                            <label class="control-label" for="cboCentroCosto" style="margin-left: -130px">
                                                CENTRO DE COSTO
                                            </label>
                                            <div>
                                                <select class="form-control" id="cboCentroCosto" name="cboCentroCosto">
                                                </select>
                                            </div>
                                            <span class="label label-danger error" id="msgCentroCosto">
                                                *Seleccionar centro de costo.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div align="center" class="form-group">
                                <label class="col-md-5 control-label" for="">
                                </label>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="2">
                            <div class="container-fluid">
                                <div class="row panel2" >
                                    <div class="col-md-3 veh">
                                        <div class="form-group" id="divTipoVehiculo">
                                            <label class=" control-label" for="cboTipoVehiculo" style="margin-left: -78px">
                                                TIPO DE VEHÍCULO
                                            </label>
                                            <div class="">
                                                <select class="form-control" id="cboTipoVehiculo" name="cboTipoVehiculo" onchange="ObtenerTipoMarcaYCarroceria()">
                                                </select>
                                            </div>
                                            <span class="label label-danger error" id="msgTipoVehiculo">
                                                *Seleccionar un tipo de vehículo.
                                            </span>
                                        </div>
                                        <div class="form-group" id="divPlaca">
                                            <label class="control-label" for="txtPlaca" style="margin-left: -150px">
                                                PLACA
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtPlaca" maxlength="7" name="txtPlaca" onkeyup="ValidarNumeroPlaca(this)" placeholder="" readonly="" type="text" value="{{ $detallevehiculo->nro_placa }}"/>
                                            </div>
                                            <span class="label label-danger error" id="msgPlaca">
                                                *Ingrese un numero de placa porque esta vacio.
                                            </span>
                                        </div>
                                        <div class="form-group" id="divTipoMarca">
                                            <label class="control-label" for="cboMarcavehiculo" style="margin-left: -150px">
                                                MARCA
                                            </label>
                                            <div>
                                                <select class="form-control" id="cboMarcavehiculo" name="cboMarcavehiculo" onchange="ObtenerModeloVehiculo()">
                                                </select>
                                            </div>
                                            <span class="label label-danger error" id="msgMarca">
                                                *Seleccione una Marca.
                                            </span>
                                        </div>
                                       
                                        <div class="form-group" id="divColor">
                                            <label class="control-label" for="aniofabrivehi" style="margin-left: -57px">
                                                AÑO DE FABRICACION
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="aniofabrivehi" min="2015" max="2019" name="aniofabrivehi"  placeholder="" type="number" value="{{ $detallevehiculo->anio_fabricacion_vehiculo }}" required="">
                                                
                                            </div>
                                            <span class="label label-danger error" id="msgtxtColor">
                                                *Ingrese un año de fabricacion.
                                            </span>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group" id="divTipoModelo">
                                            <label class="control-label" for="cboTipoModel" style="margin-left: -138px">
                                                MODELO
                                            </label>
                                            <div>
                                                <select class="form-control" id="cboTipoModelo" name="cboTipoModelo">
                                                </select>
                                            </div>
                                            <span class="label label-danger error" id="msgModelo">
                                                *Ingrese un modelo.
                                            </span>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group" id="divAnModVel">
                                            <label class="control-label" for="aniomodelovehi" style="margin-left: -25px">
                                                AÑO DE MODELO DEL VEH.
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="aniomodelovehi" min="2015" max="2019" name="aniomodelovehi"  placeholder="" type="number" value="{{ $detallevehiculo->anio_modelo_vehiculo }}" required="">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgAnModVel">
                                                *Seleccionar año de modelo.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-offset-1 col-md-3 veh">
                                        <div class="form-group" id="divColor">
                                            <label class="control-label" for="txtColor" style="margin-left: -165px">
                                                COLOR
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtColor" maxlength="70" name="txtColor" onkeyup="ValidarTexto(this)" placeholder="" type="text" value="{{ $detallevehiculo->color }}">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgtxtColor">
                                                *Ingrese un color.
                                            </span>
                                        </div>
                                        <div class="form-group" id="divNumSerMot">
                                            <label class="control-label" for="txtNumSerMot" style="margin-left: -35px">
                                                NRO. DE SERIE DEL MOTOR
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtNumSerMot" maxlength="20" name="txtNumSerMot" onkeyup="ValidarNumeroSerie(this)" placeholder="" type="text" value="{{ $detallevehiculo->nro_serie_motor }}" required="">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgNumSerMot">
                                                *Ingrese el numero de serie del motor.
                                            </span>
                                        </div>
                                        <!-- Select Basic -->
                                        <div class="form-group" id="divCarroceria">
                                            <label class="control-label" for="cboCarroceria" style="margin-left: -125px">
                                                CARROCERÍA
                                            </label>
                                            <div>
                                                <select class="form-control" id="cboCarroceria" name="cboCarroceria" required="">
                                                </select>
                                            </div>
                                            <span class="label label-danger error" id="msgCarroceria">
                                                *Seleccionar una carrocería.
                                            </span>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group" id="divPotVel">
                                            <label class="control-label" for="nro_chasis" style="margin-left: -80px">
                                                NUMERO DE CHASIS
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="nro_chasis" maxlength="17" name="nro_chasis"  placeholder="" type="text" value="{{ $detallevehiculo->nro_chasis }}" required="">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgPotVel">
                                                *Ingrese potencia del vehículo.
                                            </span>
                                        </div>
                                        <div class="form-group" id="divPotVel">
                                            <label class="control-label" for="txtPotVel" style="margin-left: -45px">
                                                POTENCIA DEL VEHÍCULO
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtPotVel" maxlength="4" name="txtPotVel" onkeyup="ValidarPotencia(this)" placeholder="" type="number" value="{{ $detallevehiculo->fuerza_vehiculo }}" required="">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgPotVel">
                                                *Ingrese potencia del vehículo.
                                            </span>
                                        </div>
                                        <!-- Select Basic -->
                                       
                                    </div>
                                    <div class="col-sm-offset-1 col-md-3 veh">
                                        <div class="form-group" id="divTipoCombustible">
                                            <label class=" control-label" for="cboTipoCombustible" style="margin-left: -62px">
                                                TIPO DE COMBUSTIBLE
                                            </label>
                                            <div>
                                                <select class="form-control" id="cboTipoCombustible" name="cboTipoCombustible">
                                                </select>
                                            </div>
                                            <span class="label label-danger error" id="msgTipoCombustible">
                                                *Seleccionar tipo de combustible.
                                            </span>
                                        </div>
                                        {{-- <div class="form-group" id="divFechaSoat">
                                            <label class="control-label" for="dtpFechaSoat" style="margin-left: -18px">
                                                FECHA DE VENCIMIENTO DEL SOAT
                                            </label>
                                            <div>
                                                <div class="input-group">
                                                    <label class="input-group-btn" for="dtpFechaSoat">
                                                        <span class="btn btn-default">
                                                            <span class="glyphicon glyphicon-calendar">
                                                            </span>
                                                        </span>
                                                    </label>
                                                    <input class="form-control dtpFechaSoat" id="dtpFechaSoat" name="dtpFechaSoat" type="text" value="{{ $detallevehiculo->fecha_vencimiento_soat }}">
                                                     
                                                </div>
                                            </div>
                                            <span class="label label-danger error" id="msgFechaSoat">
                                                *Seleccionar fecha de vencimiento.
                                            </span>
                                        </div> --}}
                                        {{--
                                        <div class="form-group" id="divFotoVehiculo" style="margin-bottom:25px">
                                            <label class="control-label" for="fotovehiculo" style="margin-left: -110px">
                                                FOTO DEL VEHÍCULO
                                            </label>
                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" id="fake-file-button-browse" type="button">
                                                            <span class="glyphicon glyphicon-file">
                                                            </span>
                                                        </button>
                                                    </span>
                                                    <input id="files-input-upload" name="files-input-upload" required="" style="display:none" type="file">
                                                        <input disabled="" id="fake-file-input-name" name="files-input-upload" placeholder="Ingrese imagen" type="text" value="{{ $detallevehiculo->nombre_imagen }}">
                                                         
                                                     
                                                </div>
                                                <script type="text/javascript">
                                                    // Fake file upload
                                               
                                              document.getElementById('fake-file-button-browse').addEventListener('click', function() {
                                              document.getElementById('files-input-upload').click(); });
                                              document.getElementById('files-input-upload').addEventListener('change', function() {
                                              document.getElementById('fake-file-input-name').value = this.value; });
                                                </script>
                                            </div>
                                            <span class="label label-danger error" id="msgFotoVehiculo">
                                                *Seleccionar foto del vehiculo.
                                            </span>
                                        </div>
                                        --}}
                                    </div>
                                </div>
                            </div>
                            <div align="center" class="form-group" style="margin-bottom: -50px">
                                <label class="col-md-5 control-label" for="">
                                </label>
                            </div>
                        </div>
                        {{-- <div class="tab-pane fade" id="3">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-3">
                                        <div class="form-group" id="divCodTrab">
                                            <label class="control-label" for="txtCodTrab" style="margin-left: -75px">
                                                CÓDIGO DEL TRABAJADOR
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtCodTrab" maxlength="20" name="txtCodTrab" onkeyup="ValidarCodigo(this)" placeholder="" type="text" value="{{ $datosconductor->codigo_trabajador }}">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgCodTrab">
                                                *Ingresar codigo del trabajador.
                                            </span>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group" id="divNumCas">
                                            <label class="control-label" for="txtNumCas" style="margin-left: -70px">
                                                NRO. DE SERIE DEL CASCO
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtNumCas" maxlength="4" name="txtNumCas" onkeyup="ValidarNumeroCasco(this)" placeholder="" type="text" value="{{ $datosconductor->nro_serie_casco }}">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgNumCas">
                                                *Ingresar numero de serie del casco.
                                            </span>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group" id="divNombApe">
                                            <label class="control-label" for="txtNombApe" style="margin-left: -90px">
                                                NOMBRES Y APELLIDOS
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtNombApe" maxlength="70" name="txtNombApe" onkeyup="ValidarTexto(this)" placeholder="" type="text" value="{{ $datosconductor->nombres_apellidos }}">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgNombApe">
                                                *Ingresar nombres y apellidos.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-2 col-md-3">
                                        <!-- Text input-->
                                        <div class="form-group" id="divNroDni">
                                            <label class="control-label" for="txtNroDni" style="margin-left: -185px">
                                                NRO. DNI
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtNroDni" maxlength="8" name="txtNroDni" onkeyup="ValidarDNI(this)" placeholder="" type="text" value="{{ $datosconductor->nro_dni }}">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgNroDni">
                                                *Ingrese el numero del DNI.
                                            </span>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group" id="divFechaNac">
                                            <label class="control-label" for="dtpFechaNac" style="padding-top: 0px; margin-left: -95px">
                                                FECHA DE NACIMIENTO
                                            </label>
                                            <div>
                                                <div class="input-group">
                                                    <label class="input-group-btn" for="dtpFechaNac">
                                                        <span class="btn btn-default" style="padding: 5px 12px">
                                                            <span class="glyphicon glyphicon-calendar" style="top: -2px">
                                                            </span>
                                                        </span>
                                                    </label>
                                                    <input class="form-control dtpFechaNac" id="dtpFechaNac" name="dtpFechaNac" type="text" value="{{ $datosconductor->fecha_nacimiento }}">
                                                     
                                                </div>
                                            </div>
                                            <span class="label label-danger error" id="msgFechaNac">
                                                *Seleccionar fecha de nacimiento.
                                            </span>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group" id="divFechaIng">
                                            <label class=" control-label" for="dtpFechaIng" style="margin-left: -115px">
                                                FECHA DE INGRESO
                                            </label>
                                            <div>
                                                <div class="input-group">
                                                    <label class="input-group-btn" for="dtpFechaIng">
                                                        <span class="btn btn-default" style="padding: 5px 12px">
                                                            <span class="glyphicon glyphicon-calendar" style="top: -2px">
                                                            </span>
                                                        </span>
                                                    </label>
                                                    <input class="form-control dtpFechaIng" id="dtpFechaIng" name="dtpFechaIng" type="text" value="{{ $datosconductor->fecha_ingreso }}">
                                                     
                                                </div>
                                            </div>
                                            <span class="label label-danger error" id="msgFechaIng">
                                                *Seleccionar fecha de ingreso.
                                            </span>
                                        </div>
                                        <!-- Select Basic -->
                                        <div class="form-group" id="divSexo">
                                            <label class="control-label" for="cboSexo" style="margin-left: -150px">
                                                SEXO("M" o "F")
                                            </label>
                                            <div>
                                               <input class="form-control input-md" id="cboSexo"  name="cboSexo" maxlength="1" placeholder="" type="text" value="{{ $datosconductor->sexo }}" required="">
                                                   
                                            </div>
                                            <span class="label label-danger error" id="msgSexo">
                                                *Seleccionar sexo.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div align="center" class="form-group">
                                <label class="col-md-5 control-label" for="">
                                </label>
                            </div>
                        </div> --}}
                        <div class="tab-pane fade" id="4">
                            <div class="container-fluid">
                                <div class="row" style="margin-left: 50px">
                                    <div class="col-md-offset-2 col-md-3 actk" >
                                        <div class="form-group">
                                            <label class=" control-label" for="txtkilopenulmant" style="margin-left: -55px">
                                                KILOMETRAJE PENULTIMO MANT.
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtkilopenulmant" name="txtkilopenulmant" onkeyup="KilopenulMante(this)" placeholder="" required="" type="text" value="{{ $historialkilant->kilometraje_recorrido }}">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgKiloPenulKilo">
                                                *Ingrese penultimo kilometraje.
                                            </span>
                                        </div>
                                        <div class="form-group" id="divFechaIng">
                                            <label class=" control-label" for="dtpFechapenultmant" style="margin-left: -10px">
                                                FECHA DEL PENÚLTIMO MANTENIMENTO
                                            </label>
                                            <div>
                                                <div class="input-group">
                                                    <label class="input-group-btn" for="dtpFechapenultmant">
                                                        <span class="btn btn-default" style="padding: 8px 12px">
                                                            <span class="glyphicon glyphicon-calendar">
                                                            </span>
                                                        </span>
                                                    </label>
                                                    <input class="form-control dtpFechapenultmant" id="dtpFechapenultmant" name="dtpFechapenultmant" type="text" value="{{ $historialkilant->fecha_registro }}">
                                                     
                                                </div>
                                            </div>
                                            <span class="label label-danger error" id="msgFechaPenulMant">
                                                *Seleccionar fecha del Penultimo mantenimiento.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-2 col-md-3 actk" >
                                        <div class="form-group">
                                            <label class="control-label" for="txtkiloultimomant" style="margin-left: -20px">
                                                KILOMETRAJE ULTIMO MANTENIMENTO
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtkiloultimomant" name="txtkiloultimomant" onkeyup="KiloulMante(this)" placeholder="" required="" type="text" value="{{ $historialkilactual->kilometraje_recorrido }}">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgkiloultimomant">
                                                *Ingrese ultimo kilometraje.
                                            </span>
                                        </div>
                                        <div class="form-group" id="divFechaIng">
                                            <label class=" control-label" for="dtpFechaultmant" style="margin-left: -40px">
                                                FECHA DEL ULTIMO MANTENIMENTO
                                            </label>
                                            <div>
                                                <div class="input-group">
                                                    <label class="input-group-btn" for="dtpFechaultmant">
                                                        <span class="btn btn-default" style="padding: 8px 12px">
                                                            <span class="glyphicon glyphicon-calendar">
                                                            </span>
                                                        </span>
                                                    </label>
                                                    <input class="form-control dtpFechaultmant" id="dtpFechaultmant" name="dtpFechaultmant" type="text" value="{{ $historialkilactual->fecha_registro }}">
                                                     
                                                </div>
                                            </div>
                                            <span class="label label-danger error" id="msgFechaulMant">
                                                *Seleccionar fecha del ultimo mantenimiento.
                                            </span>
                                        </div>
                                        <div class="form-group" id="divftenimiento">
                                            <label class="control-label" for="cboProveedorMantenimiento" style="margin-left: -80px">
                                                PROVEEDOR MANTENIMENTO
                                            </label>
                                            <div>
                                                <select class="form-control" id="cboProveedorMantenimiento" name="cboProveedorMantenimiento" required="">
                                                </select>
                                            </div>
                                            <span class="label label-danger error" id="msgProveedorMantemiento">
                                                *Seleccionar Proveedor MANTENIMENTO.
                                            </span>
                                        </div>
                                        <div class="form-group" id="divGastoMant">
                                            <label class="control-label" for="txtgastomant" style="margin-left: -85px">
                                                GASTO DEL MANTENIMIENTO
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtgastomant" maxlength="20" name="txtgastomant" onkeyup="GastoMante(this)" placeholder="" type="text" value="{{ $mantvehiculo->monto_mantenimiento }}">
                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgGastoMant">
                                                *Ingresar Gasto del mantenimiento.
                                            </span>
                                        </div>
                                        <div class="form-group" id="divDescripMant">
                                            <label class="control-label" for="txtDescripmant" style="margin-left: -100px">
                                                DESCRIPCION DEL GASTO
                                            </label>
                                            <div>
                                                <input class="form-control input-md" id="txtDescripmant" name="txtDescripmant" value="{{ $mantvehiculo->motivo_mantenimiento }}">
                                                                                                 
                                            </div>
                                            <span class="label label-danger error" id="msgDescripGastoMant">
                                                *Ingresar Descripcion del mantenimiento.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div align="center" class="form-group">
                                <label class="col-md-5 control-label" for="">
                                </label>
                                <div class="col-md-2">
                                    <span class="btn-label-unsaved">
                                    </span>
                                    <input class="btn btn-primary" id="btnupdate" name="btnupdate" type="submit" value="Actualizar Datos Vehiculos" style="background-color: rgb(13,143,55); border-color: rgb(13,143,55)">
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </center>
        @stop
        <script type="text/javascript">

function ObtenerTipoUbiDepa() {
    $('#cboUbiDepVehiculo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getTipoDepartamentosJson',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboUbiDepVehiculo').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#cboUbiDepVehiculo').append('<option value="' + value.iddepa + '">' + value.nom_departamento + '</option>');
            });
            $('select[name=cboUbiDepVehiculo]').val({{ $detallevehiculo->iddepa }});  
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
    // alert("hola");
}

function ObtenerUbiProvincias() {
    var CodigoZona = $('#cboUbiDepVehiculo').val();
    if (CodigoZona != "") {
        $('#cboUbiProvinci').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../../getTipoProvinciasJSON/' + CodigoZona,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#cboUbiProvinci').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#cboUbiProvinci').append('<option value="' + value.idprov + '">' + value.nom_provincia + '</option>');
                });
                $('select[name=cboUbiProvinci]').val({{ $detallevehiculo->idprov}});  
            },
            error: function(jqXHR, status, err) {
                alert("Local error callback.");
            }
        });
    } else {
        $('#cboUbiProvinci').empty();
        $('#cboUbiProvinci').append('<option value="">::Seleccionar::</option>');
    }
}

function ObtenerUbiDistritos() {
    var CodigoZona = $('#cboUbiProvinci').val();
    if (CodigoZona != "") {
        $('#cboUbiDistrito').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../../getTipoDistritosJSON/' + CodigoZona,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#cboUbiDistrito').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#cboUbiDistrito').append('<option value="' + value.iddist + '">' + value.nom_distrito + '</option>');
                });
                   $('select[name=cboUbiDistrito]').val({{ $detallevehiculo->iddist }});  
            },
            error: function(jqXHR, status, err) {
                alert("Local error callback.");
            }
        });
    } else {
        $('#cboUbiDistrito').empty();
        $('#cboUbiDistrito').append('<option value="">::Seleccionar::</option>');
    }
}

function ObtenerAgencias() {
    var CodigoZona = $('#cboUbiDistrito').val();
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
                  $('select[name=cboAgencia]').val({{ $detallevehiculo->idagencia }});  
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

function ObtenerDepartamentoCargo() {
    $('#cboDepartamentoCargo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getDepartamentoCargosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboDepartamentoCargo').append('<option value="">::Seleccionar</option>');
            $.each(data, function(i, value) {
                $('#cboDepartamentoCargo').append('<option value="' + value.iddepartamento_cargo + '">' + value.nombre_depar_cargo + '</option>');
            });
            $('select[name=cboDepartamentoCargo]').val({{ $detallevehiculo->iddepartamento_cargo}});
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
        url: '../../getCentroCostosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboCentroCosto').append('<option value="">::Seleccionar</option>');
            $.each(data, function(I, value) {
                $('#cboCentroCosto').append('<option value="' + value.idcentro_costo + '">' + value.nombre_centro_costo + '</option>');
            });
             $('select[name=cboCentroCosto]').val({{ $detallevehiculo->idcentro_costo }});
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerTipoVehiculo() {
    $('#cboTipoVehiculo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getTipoVehiculosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboTipoVehiculo').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#cboTipoVehiculo').append('<option value="' + value.idtipovehiculo + '">' + value.nombre_tipo_vehiculo + '</option>');
            });
            $('select[name=cboTipoVehiculo]').val({{ $detallevehiculo->idtipovehiculo }});
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerTipoMarcaYCarroceria() {
    var CodigoTipoVehiculo = $('#cboTipoVehiculo').val();
    if (CodigoTipoVehiculo != "") {
        $('#cboMarcavehiculo').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../../getMarcaVehiculoJSON/' + CodigoTipoVehiculo,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#cboMarcavehiculo').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#cboMarcavehiculo').append('<option value="' + value.idtipomarca + '">' + value.nombre_marca + '</option>');
                });
                 $('select[name=cboMarcavehiculo]').val({{ $detallevehiculo->idtipomarca }});
            },
            error: function(jqXHR, status, err) {
                alert("Local error callback.");
            }
        });
    } else {
        $('#cboMarcavehiculo').empty();
        $('#cboMarcavehiculo').append('<option value="">::Seleccionar::</option>');
    }
    //segunda funcion
    var CodigoTipoVehiculo2 = $('#cboTipoVehiculo').val();
    if (CodigoTipoVehiculo2 != "") {
        $('#cboCarroceria').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../../getTipoCarroceriasJSON/' + CodigoTipoVehiculo2,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#cboCarroceria').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#cboCarroceria').append('<option value="' + value.idtipo_carroceria + '">' + value.nombre_carroceria + '</option>');
                });
                $('select[name=cboCarroceria]').val({{ $detallevehiculo->idtipo_carroceria }});
            },
            error: function(jqXHR, status, err) {
                alert("Local error callback.");
            }
        });
    } else {
        $('#cboCarroceria').empty();
        $('#cboCarroceria').append('<option value="">::Seleccionar::</option>');
    }
}

function ObtenerModeloVehiculo() {
    var CodigoZona = $('#cboMarcavehiculo').val();
    if (CodigoZona != "") {
        $('#cboTipoModelo').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../../getModeloVehiculoJSON/' + CodigoZona,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#cboTipoModelo').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#cboTipoModelo').append('<option value="' + value.idtipomodelo + '">' + value.nombre_modelo + '</option>');
                });
                 $('select[name=cboTipoModelo]').val({{ $detallevehiculo->idtipomodelo }});
            },
            error: function(jqXHR, status, err) {
                alert("Local error callback.");
            }
        });
    } else {
        $('#cboTipoModelo').empty();
        $('#cboTipoModelo').append('<option value="">::Seleccionar::</option>');
    }
}

function ObtenerTipoCombustible() {
    $('#cboTipoCombustible').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getTipoCombustiblesJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboTipoCombustible').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#cboTipoCombustible').append('<option value="' + value.idtipo_combustible + '">' + value.nombre_combustible + '</option>');
            });
           $('select[name=cboTipoCombustible]').val({{ $detallevehiculo->idtipo_combustible }});
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerEstadoVehiculo() {
    $('#cboEstadoVehiculo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getEstadoVehiculosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboEstadoVehiculo').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#cboEstadoVehiculo').append('<option value="' + value.idestado_vehiculo + '">' + value.nombre_estado_vehi + '</option>');
            });
            $('select[name=cboEstadoVehiculo]').val({{ $estadovehiculo->idestado_vehiculo }});
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
function ObtenerProveedorMantVehiculo() {
    $('#cboProveedorMantenimiento').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getProveedorMantVehiculosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboProveedorMantenimiento').append('<option value="">::Seleccionar</option>');
            $.each(data, function(I, value) {
                $('#cboProveedorMantenimiento').append('<option value="' + value.idproveedor_mantenimiento + '">' + value.nombre_provee_mant + '</option>');
            });
            $('select[name=cboProveedorMantenimiento]').val({{ $mantvehiculo->idproveedor_mantenimiento }});
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

         
function ObtenerFabricacionVehiculo() {
    var d = new Date();
    var fecha = d.getFullYear();
    $('#cboAnFabVel').append('<option value="">::Seleccionar::</option>');
    for (var i = 0; i <= 3; i++) {
        var option = "<option value=" + parseInt(fecha - i) + ">" + parseInt(fecha - i) + "</option>"
        $('#cboAnFabVel').append(option);

    }

}

function ObtenerANOModeloVehiculo() {
    var d = new Date();
    var fecha = d.getFullYear();
    $('#cboAnModVel').append('<option value="">::Seleccionar::</option>');
    for (var i = 0; i <= 3; i++) {
        var option = "<option value=" + parseInt(fecha - i) + ">" + parseInt(fecha - i) + "</option>"
        $('#cboAnModVel').append(option);
    }
}
function cargartodaslasfechas() {
    $(document).ready(function() {
        $('.dtpFechaSoat').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
    });
    $(document).ready(function() {
        $('.dtpFechaNac').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
    });
    $(document).ready(function() {
        $('.dtpFechaIng').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
    });
    $(document).ready(function() {
        $('.dtpFechapenultmant').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
    });
    $(document).ready(function() {
        $('.dtpFechaultmant').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
    });
}
        </script>
    </link>
</link>
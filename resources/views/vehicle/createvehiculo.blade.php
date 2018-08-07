@extends('plantillabase')
@section('contenido')
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <script src="../assets/js/IngresoVehiculo.js" type="text/javascript">
    </script>
    <link href="../assets/css/registrovehiculo.css" rel="stylesheet" type="text/css"/>
    <!-- cargar el datapicker -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js">
    </script>
    <!-- cargar el mask para placa guion -->
  {{--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js" type="text/javascript">
    </script> --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
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
                // ObtenerTipoUbiDepa();
                // ObtenerUbiProvincias(); 
                //  ObtenerUbiDistritos(); 
                //  ObtenerAgencias();
                ObtenerSoloAgencia(); 
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
                // $('#nro_placa').mask('AAA-AAA');
                $('#btnContinuar').click(function()
                         { return ValidarCampos(); }   
                        );
                });
            </script>
            <script>
                function mostrar(dato){
        if(dato=="NO"){          
           $('#divFechaSoat').hide();
        }else{
             $('#divFechaSoat').show()
        }                
        }
         $(document).ready(function(){
        
        var select = document.getElementById('idtipovehiculo');
        select.addEventListener('change',
         function(){

         var selectedOption = this.options[select.selectedIndex];
         // console.log(selectedOption.value + ': ' + selectedOption.text);
         if(selectedOption.text == "AUTO"){
         $('#divNumCas').hide();    
         }else{
            $('#divNumCas').show();  
        }
        });
         });
            </script>
              <script type="text/javascript">
    $(document).ready(function() {
    $('#idagencia').select2();

});
     </script>


            <div class="container " id="contenedor_titulo">
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
                <form action="{{ route('vehiculo.store') }}" class="form-horizontal" enctype="multipart/form-data" id="formid" method="POST" novalidate="">
                    <div class="container-fluid">
                        <div class="tab-content">
                            <?php echo csrf_field(); ?>
                            <div class="tab-pane active " id="1">
                                <div class="container-fluid">
                                    <div class="row" style="margin-left: 100px">
                                        <div class="col-md-offset-2 col-md-3 datg" >
                                            {{-- <div class="form-group" id="divDepartamento">
                                                <label class=" control-label" for="cboUbiDepVehiculo" style="margin-left: -205px">
                                                    DEPARTAMENTO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboUbiDepVehiculo" name="cboUbiDepVehiculo" onchange="ObtenerUbiProvincias()" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgDepa">
                                                    *Seleccionar una Departamento.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divProvincia">
                                                <label class=" control-label" for="cboUbiProvinci" style="margin-left: -200px">
                                                    PROVINCI
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboUbiProvinci" name="cboUbiProvinci" onchange="ObtenerUbiDistritos()" required="">
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
                                                    <select class="form-control" id="cboUbiDistrito" name="cboUbiDistrito" onchange="ObtenerAgencias()" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msDistrito">
                                                    *Seleccionar una Distrito.
                                                </span>
                                            </div> --}}
                                            <div class="form-group" id="divAgencia">
                                                <label class=" control-label" for="idagencia" style="margin-left: -195px">
                                                    AGENCIA
                                                </label>
                                                <div>
                                                    <select class="form-control" id="idagencia" name="idagencia" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msAgencia">
                                                    *Seleccionar una Agencia.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-offset-2 col-md-3 datg">
                                            <div class="form-group" id="divDepartamentoCargo">
                                                <label class="control-label" for="iddepartamento_cargo" style="margin-left: -90px">
                                                    DEPARTAMENTO A CARGO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="iddepartamento_cargo" name="iddepartamento_cargo" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgDepartamentoCargo">
                                                    *Ingresar departamento de cargo.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divCentroCosto">
                                                <label class="control-label" for="idcentro_costo" style="margin-left: -135px">
                                                    CENTRO DE COSTO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="idcentro_costo" name="idcentro_costo" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgCentroCosto">
                                                    *Seleccionar centro de costo.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="2">
                                <div class="container-fluid">
                                    <div class="row panel2"S>
                                        <div class="col-md-3 veh">
                                            <div class="form-group" id="divTipoVehiculo">
                                                <label class=" control-label" for="idtipovehiculo" style="margin-left: -78px">
                                                    TIPO DE VEHÍCULO
                                                </label>
                                                <div class="">
                                                    <select class="form-control" id="idtipovehiculo" name="idtipovehiculo" onchange="ObtenerTipoMarcaYCarroceria()" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgTipoVehiculo">
                                                    *Seleccionar un tipo de vehículo.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divCarroceria">
                                                <label class="control-label" for="idtipo_carroceria" style="margin-left: -110px">
                                                    CARROCERÍA
                                                </label>
                                                <div>
                                                    <select class="form-control" id="idtipo_carroceria" name="idtipo_carroceria" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgCarroceria">
                                                    *Seleccionar una carrocería.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divTipoMarca">
                                                <label class="control-label" for="cboMarcavehiculo" style="margin-left: -150px">
                                                    MARCA
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboMarcavehiculo" name="cboMarcavehiculo" onchange="ObtenerModeloVehiculo()" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgMarca">
                                                    *Seleccione una Marca.
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label" id="divAnFabVel" style="margin-left: -55px">
                                                    AÑO DE FABRICACIÓN
                                                </label>
                                                <div class="">
                                                    <select class="form-control" id="anio_fabricacion_vehiculo" name="anio_fabricacion_vehiculo" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgAnFabVel">
                                                    *Seleccionar año de fabricación.
                                                </span>
                                            </div>
                                            <!-- Text input-->
                                            <div class="form-group" id="divTipoModelo">
                                                <label class="control-label" for="cboTipoModel" style="margin-left: -140px">
                                                    MODELO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="idtipomodelo" name="idtipomodelo" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgModelo">
                                                    *Ingrese un modelo.
                                                </span>
                                            </div>

                                        </div>
                                        <div class="col-sm-offset-1 col-md-3 veh">
                                             <div class="form-group" id="divAnModVel">
                                                <label class="control-label" for="anio_modelo_vehiculo" style="margin-left: -95px">
                                                    AÑO DEL MODELO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="anio_modelo_vehiculo" name="anio_modelo_vehiculo">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgAnModVel">
                                                    *Seleccionar año de modelo.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divPlaca">
                                                <label class="control-label" for="nro_placa" style="margin-left: -165px">
                                                    PLACA
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="nro_placa" maxlength="6" name="nro_placa" onkeyup="ValidarNumeroPlaca(this)" placeholder="" type="text"/>
                                                </div>
                                                <span class="label label-danger error" id="msgPlaca">
                                                    *Ingrese un numero de placa porque esta vacio.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divColor">
                                                <label class="control-label" for="color" style="margin-left: -165px">
                                                    COLOR
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="color" maxlength="70" name="color" onkeyup="ValidarTexto(this)" placeholder="" required="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgcolor">
                                                    *Ingrese un color.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divNumSerMot">
                                                <label class="control-label" for="nro_serie_motor" style="margin-left: -40px">
                                                    NRO. DE SERIE DEL MOTOR
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="nro_serie_motor" maxlength="20" name="nro_serie_motor" onkeyup="ValidarNumeroSerie(this)" placeholder="" required="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgNumSerMot">
                                                    *Ingrese el numero de serie del motor.
                                                </span>
                                            </div>
                                             <div class="form-group" id="divNumSerMot">
                                                <label class="control-label" for="nro_chasis" style="margin-left: -105px">
                                                    NRO. DE CHASIS
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="nro_chasis" maxlength="17" name="nro_chasis" onkeyup="ValidarNumerochasis(this)" placeholder="" required="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgnro_chasis">
                                                    *Ingrese el numero de chasis.
                                                </span>
                                            </div>
                                            <!-- Select Basic -->
                                            <!-- Text input-->
                                            
                                            <!-- Select Basic -->
                                        </div>
                                        <div class="col-sm-offset-1 col-md-3 veh">
                                            <div class="form-group" id="divPotVel">
                                                <label class="control-label" for="fuerza_vehiculo" style="margin-left: -140px">
                                                    POTENCIA
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="fuerza_vehiculo" maxlength="3" name="fuerza_vehiculo" onkeyup="ValidarPotencia(this)" placeholder="" required="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgPotVel">
                                                    *Ingrese potencia del vehículo.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divTipoCombustible">
                                                <label class=" control-label" for="idtipo_combustible" style="margin-left: -65px">
                                                    TIPO DE COMBUSTIBLE
                                                </label>
                                                <div>
                                                    <select class="form-control" id="idtipo_combustible" name="idtipo_combustible" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgTipoCombustible">
                                                    *Seleccionar tipo de combustible.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divEstadoVehiculo">
                                                <label class=" control-label" for="idestado_vehiculo" style="margin-left: -60px">
                                                    ESTADO DEL VEHÍCULO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="idestado_vehiculo" name="idestado_vehiculo" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgEstadoVehiculo">
                                                    *Seleccionar estado del vehículo.
                                                </span>
                                            </div>
                                            <!-- Text input-->
                                           
                                           {{--  <div class="form-group" id="divPoseeSoat">
                                                <label class="control-label" for="radios">
                                                    ¿TIENE SOAT?
                                                </label>
                                                <div id="botonessiono">
                                                    <label class="radio-inline" for="radios-0">
                                                        <input checked="checked" id="radios-0" name="tiene_vigente_soat" onchange="mostrar(this.value);" type="radio" value="SI">
                                                            Sí
                                                        
                                                    </label>
                                                    <label class="radio-inline" for="radios-1">
                                                        <input id="radios-1" name="tiene_vigente_soat" onchange="mostrar(this.value);" type="radio" value="NO">
                                                            No
                                                        
                                                    </label>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="form-group" id="divFechaSoat">
                                                <label class="control-label" for="fecha_vencimiento_soat" style="margin-left: -18px">
                                                    FECHA DE VENCIMIENTO DEL SOAT
                                                </label>
                                                <div>
                                                    <div class="input-group">
                                                        <label class="input-group-btn" for="fecha_vencimiento_soat">
                                                            <span class="btn btn-default">
                                                                <span class="glyphicon glyphicon-calendar">
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <input class="form-control fecha_vencimiento_soat" id="fecha_vencimiento_soat" name="fecha_vencimiento_soat" type="text"/>
                                                    </div>
                                                </div>
                                                <span class="label label-danger error" id="msgFechaSoat">
                                                    *Seleccionar fecha de vencimiento.
                                                </span>
                                            </div> --}}
                                            <div class="form-group" id="divFotoVehiculo" style="margin-bottom:25px">
                                                <label class="control-label" for="fotovehiculo" style="margin-left: -75px">
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
                                                            <input disabled="" id="fake-file-input-name" name="files-input-upload" placeholder="Ingrese imagen" type="text"/>
                                                        
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
                                            {{--
                                            <div class="form-group" id="divKilPorDia">
                                                <label class="control-label" for="txtKilPorDia">
                                                    Kilometraje por Día
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtKilPorDia" name="txtKilPorDia" onkeyup="ValidarKilometraje(this)" placeholder="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgKilPorDia">
                                                    *Ingresar kilometraje por Día.
                                                </span>
                                            </div>
                                            --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                    {{--  <div class="tab-pane fade" id="3">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-3">
                                            <div class="form-group" id="divCodTrab">
                                                <label class="control-label" for="codigo_trabajador" style="margin-left: -75px">
                                                    CÓDIGO DEL TRABAJADOR
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="codigo_trabajador" maxlength="20" name="codigo_trabajador" onkeyup="ValidarCodigo(this)" placeholder="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgCodTrab">
                                                    *Ingresar codigo del trabajador.
                                                </span>
                                            </div>
                                         
                                    
                                            <!-- Text input-->
                                            <div class="form-group" id="divNumCas">
                                                <label class="control-label" for="nro_serie_casco" style="margin-left: -70px">
                                                    NRO. DE SERIE DEL CASCO
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="nro_serie_casco" maxlength="4" name="nro_serie_casco" onkeyup="ValidarNumeroCasco(this)" placeholder="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgNumCas">
                                                    *Ingresar numero de serie del casco.
                                                </span>
                                            </div>
                                            <!-- Text input-->
                                            <div class="form-group" id="divNombApe">
                                                <label class="control-label" for="nombres_apellidos" style="margin-left: -90px">
                                                    NOMBRES Y APELLIDOS
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="nombres_apellidos" maxlength="70" name="nombres_apellidos" onkeyup="ValidarTexto(this)" placeholder="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgNombApe">
                                                    *Ingresar nombres y apellidos.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-offset-2 col-md-3">
                                            <!-- Text input-->
                                            <div class="form-group" id="divNroDni">
                                                <label class="control-label" for="nro_dni" style="margin-left: -185px">
                                                    NRO. DNI
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="nro_dni" maxlength="8" name="nro_dni" onkeyup="ValidarDNI(this)" placeholder="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgNroDni">
                                                    *Ingrese el numero del DNI.
                                                </span>
                                            </div>
                                            <!-- Text input-->
                                            <div class="form-group" id="divFechaNac">
                                                <label class="control-label" for="fecha_nacimiento" style="padding-top: 0px; margin-left: -95px">
                                                    FECHA DE NACIMIENTO
                                                </label>
                                                <div>
                                                    <div class="input-group">
                                                        <label class="input-group-btn" for="fecha_nacimiento">
                                                            <span class="btn btn-default" style="padding: 5px 12px">
                                                                <span class="glyphicon glyphicon-calendar">
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <input class="form-control fecha_nacimiento" id="fecha_nacimiento" name="fecha_nacimiento" type="text">
                                                        
                                                    </div>
                                                </div>
                                                <span class="label label-danger error" id="msgFechaNac">
                                                    *Seleccionar fecha de nacimiento.
                                                </span>
                                            </div>
                                            <!-- Text input-->
                                            <div class="form-group" id="divFechaIng">
                                                <label class=" control-label" for="fecha_ingreso" style="margin-left: -115px">
                                                    FECHA DE INGRESO
                                                </label>
                                                <div>
                                                    <div class="input-group">
                                                        <label class="input-group-btn" for="fecha_ingreso">
                                                            <span class="btn btn-default" style="padding: 5px 12px">
                                                                <span class="glyphicon glyphicon-calendar">
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <input class="form-control fecha_ingreso" id="fecha_ingreso" name="fecha_ingreso" type="text">
                                                        
                                                    </div>
                                                </div>
                                                <span class="label label-danger error" id="msgFechaIng">
                                                    *Seleccionar fecha de ingreso.
                                                </span>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="form-group" id="divSexo">
                                                <label class="control-label" for="sexo" style="margin-left: -210px">
                                                    SEXO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="sexo" name="sexo">
                                                        <option value="">
                                                            ::Seleccionar::
                                                        </option>
                                                        <option value="M">
                                                            Masculino
                                                        </option>
                                                        <option value="F">
                                                            Femenino
                                                        </option>
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgSexo">
                                                    *Seleccionar sexo.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="tab-pane fade" id="4">
                                <div class="container-fluid">
                                    <div class="row" style="margin-left: 50px">
                                        <div class="col-md-offset-2 col-md-3 actk">
                                            <div class="form-group">
                                                <label class=" control-label" for="txtkilopenulmant" style="margin-left: -55px" >
                                                    KILOMETRAJE PENULTIMO MANT.
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="kilometraje_recorrido" name="kilometraje_recorrido" onkeyup="KilopenulMante(this)" placeholder="" required="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgKiloPenulKilo">
                                                    *Ingrese penultimo kilometraje.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divFechaIng">
                                                <label class=" control-label" for="dtpFechapenultmant" style="margin-left: -15px">
                                                    FECHA DE PENULTIMO MANTENIMENTO
                                                </label>
                                                <div>
                                                    <div class="input-group">
                                                        <label class="input-group-btn" for="dtpFechapenultmant">
                                                            <span class="btn btn-default" style="padding: 5px 12px">
                                                                <span class="glyphicon glyphicon-calendar">
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <input class="form-control dtpFechapenultmant" id="fecha_registro" name="fecha_registro" type="text">
                                                        
                                                    </div>
                                                </div>
                                                <span class="label label-danger error" id="msgFechaPenulMant">
                                                    *Seleccionar fecha del Penultimo mantenimiento.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-offset-2 col-md-3 actk" >
                                            <div class="form-group">
                                                <label class="control-label" for="txtkiloultimomant" style="margin-left: -80px">
                                                    KILOMETRAJE ULTIMO MANT.
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtkiloultimomant" name="txtkiloultimomant" onkeyup="KiloulMante(this)" placeholder="" required="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgkiloultimomant">
                                                    *Ingrese ultimo kilometraje.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divFechaIng">
                                                <label class=" control-label" for="fecha_mantenimiento" style="margin-left: -45px">
                                                    FECHA DE ULTIMO MANTENIMENTO
                                                </label>
                                                <div>
                                                    <div class="input-group">
                                                        <label class="input-group-btn" for="fecha_mantenimiento">
                                                            <span class="btn btn-default" style="padding: 5px 12px">
                                                                <span class="glyphicon glyphicon-calendar">
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <input class="form-control fecha_mantenimiento" id="fecha_mantenimiento" name="fecha_mantenimiento" type="text">
                                                        
                                                    </div>
                                                </div>
                                                <span class="label label-danger error" id="msgFechaulMant">
                                                    *Seleccionar fecha del ultimo mantenimiento.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divProveedorMantenimiento">
                                                <label class="control-label" for="idproveedor_mantenimiento" style="margin-left: -80px">
                                                    PROVEEDOR MANTENIMENTO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="idproveedor_mantenimiento" name="idproveedor_mantenimiento">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgProveedorMantemiento">
                                                    *Seleccionar Proveedor MANTENIMENTO.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divGastoMant">
                                                <label class="control-label" for="monto_mantenimiento" style="margin-left: -82px">
                                                    GASTO DEL MANTENIMIENTO
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="monto_mantenimiento" maxlength="20" name="monto_mantenimiento" onkeyup="GastoMante(this)" placeholder="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgGastoMant">
                                                    *Ingresar Gasto del mantenimiento.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divDescripMant">
                                                <label class="control-label" for="motivo_mantenimiento" style="margin-left: -100px">
                                                    DESCRIPCIÓN DEL GASTO
                                                </label>
                                                <div>
                                                    <textarea class="form-control input-md" id="motivo_mantenimiento" name="motivo_mantenimiento" required=""></textarea>
                                                   
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
                                        <input class="btn btn-default" data-target="#myModal" data-toggle="modal" id="btnContinuar" name="btnContinuar" type="submit" value="Guardar Datos Vehiculo">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </center>
            @stop
    

@extends('plantillabase')
@section('contenido')
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <script src="assets/js/IngresoVehiculo.js" type="text/javascript">
    </script>
    <link href="assets/css/registrovehiculo.css" rel="stylesheet" type="text/css"/>
    <!-- cargar el datapicker -->
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
                ObtenerTipoZona();
                ObtenerAgencia(); 
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
        
        var select = document.getElementById('cboTipoVehiculo');
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
            <center>
                <h2 class="Title">
                    <span class="u-shadow">
                        REGISTRO DE VEHÍCULOS
                    </span>
                </h2>
            </center>
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
                        <li>
                            <a aria-expanded="false" class="barra" data-toggle="tab" href="#3">
                                DATOS DEL CONDUCTOR
                            </a>
                        </li>
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
                                    <div class="row centered-form">
                                        <div class="col-md-offset-2 col-md-3">
                                            <div class="form-group" id="divZona">
                                                <label class=" control-label" for="cboZonaVehiculo" style="margin-left: -205px">
                                                    ZONA
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboZonaVehiculo" name="cboZonaVehiculo" required="" onchange="ObtenerAgencia()" >
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgZona">
                                                    *Seleccionar una zona.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divAgencia">
                                                <label class=" control-label" for="cboAgencia" style="margin-left: -182px">
                                                    AGENCIA
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboAgencia" name="cboAgencia" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgAgencia">
                                                    *Seleccionar una agencia.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-offset-2 col-md-3">
                                            <div class="form-group" id="divDepartamentoCargo">
                                                <label class="control-label" for="cboDepartamentoCargo" style="margin-left: -75px">
                                                    DEPARTAMENTO A CARGO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboDepartamentoCargo" name="cboDepartamentoCargo" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgDepartamentoCargo">
                                                    *Ingresar departamento de cargo.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divCentroCosto">
                                                <label class="control-label" for="cboCentroCosto" style="margin-left: -117px">
                                                    CENTRO DE COSTO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboCentroCosto" name="cboCentroCosto" required="">
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
                                    <div class="row" style="padding-top: 15px;margin-top: -15px; ;padding-left: 2px; margin-left: 32px;">
                                        <div class="col-md-3">
                                            <div class="form-group" id="divTipoVehiculo">
                                                <label class=" control-label" for="cboTipoVehiculo" style="margin-left: -122px">
                                                    TIPO DE VEHÍCULO
                                                </label>
                                                <div class="">
                                                    <select class="form-control" id="cboTipoVehiculo" name="cboTipoVehiculo" required="" onchange="ObtenerTipoMarcaYCarroceria()">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgTipoVehiculo">
                                                    *Seleccionar un tipo de vehículo.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divPlaca">
                                                <label class="control-label" for="txtPlaca" style="margin-left: -197px">
                                                    PLACA
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtPlaca" maxlength="7" name="txtPlaca" onkeyup="ValidarNumeroPlaca(this)" placeholder="" type="text"/>
                                                </div>
                                                <span class="label label-danger error" id="msgPlaca">
                                                    *Ingrese un numero de placa porque esta vacio.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divTipoMarca">
                                                <label class="control-label" for="cboMarcavehiculo" style="margin-left: -192px">
                                                    MARCA
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboMarcavehiculo" name="cboMarcavehiculo" required="" onchange="ObtenerModeloVehiculo()">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgMarca">
                                                    *Seleccione una Marca.
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label" id="divAnFabVel">
                                                    AÑO DE FABRICACIÓN DEL PRODUCTO
                                                </label>
                                                <div class="">
                                                    <select class="form-control" id="cboAnFabVel" name="cboAnFabVel" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgAnFabVel">
                                                    *Seleccionar año de fabricación.
                                                </span>
                                            </div>
                                            <!-- Text input-->
                                            <div class="form-group" id="divTipoModelo">
                                                <label class="control-label" for="cboTipoModel" style="margin-left: -185px">
                                                    MODELO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboTipoModelo" name="cboTipoModelo" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgModelo">
                                                    *Ingrese un modelo.
                                                </span>
                                            </div>
                                            <!-- Text input-->
                                            <div class="form-group" id="divAnModVel">
                                                <label class="control-label" for="cboAnModVel" style="margin-left: -29px">
                                                    AÑO DEL MODELO DEL VEHÍCULO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboAnModVel" name="cboAnModVel">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgAnModVel">
                                                    *Seleccionar año de modelo.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-offset-1 col-md-3">
                                            <div class="form-group" id="divColor">
                                                <label class="control-label" for="txtColor" style="margin-left: -195px">
                                                    COLOR
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtColor" maxlength="70" name="txtColor" onkeyup="ValidarTexto(this)" placeholder="" type="text" required="">
                                                   
                                                </div>
                                                <span class="label label-danger error" id="msgtxtColor">
                                                    *Ingrese un color.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divNumSerMot">
                                                <label class="control-label" for="txtNumSerMot" style="margin-left: -67px">
                                                    NRO. DE SERIE DEL MOTOR
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtNumSerMot" maxlength="20" name="txtNumSerMot" onkeyup="ValidarNumeroSerie(this)" placeholder="" type="text" required="">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgNumSerMot">
                                                    *Ingrese el numero de serie del motor.
                                                </span>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="form-group" id="divCarroceria">
                                                <label class="control-label" for="cboCarroceria" style="margin-left: -157px">
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
                                                <label class="control-label" for="txtPotVel" style="margin-left: -80px">
                                                    POTENCIA DEL VEHÍCULO
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtPotVel" maxlength="4" name="txtPotVel" onkeyup="ValidarPotencia(this)" placeholder="" type="text" required="">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgPotVel">
                                                    *Ingrese potencia del vehículo.
                                                </span>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="form-group" id="divEjes">
                                                <label class="control-label" for="cboEjes" style="margin-left: -155px">
                                                    NRO. DE EJES
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboEjes" name="cboEjes" required="">
                                                        <option value="">
                                                            ::Seleccionar::
                                                        </option>
                                                        <option value="1">
                                                            1
                                                        </option>
                                                        <option value="2">
                                                            2
                                                        </option>
                                                        <option value="3">
                                                            3
                                                        </option>
                                                        <option value="4">
                                                            4
                                                        </option>
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgEjes">
                                                    *Seleccionar el numero de ejes.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divNumAsi">
                                                <label class=" control-label" for="cboNumAsi" style="margin-left: -97px">
                                                    NÚMERO DE ASIENTOS
                                                </label>
                                                <div class="">
                                                    <select class="form-control" id="cboNumAsi" name="cboNumAsi" required="">
                                                        <option value="">
                                                            ::Seleccionar::
                                                        </option>
                                                        <option value="2">
                                                            2
                                                        </option>
                                                        <option value="4">
                                                            4
                                                        </option>
                                                        <option value="6">
                                                            6
                                                        </option>
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgNumAsi">
                                                    *Seleccionar el numero de asientos.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-offset-1 col-md-3">
                                            <div class="form-group" id="divTipoCombustible">
                                                <label class=" control-label" for="cboTipoCombustible" style="margin-left: -98px">
                                                    TIPO DE COMBUSTIBLE
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboTipoCombustible" name="cboTipoCombustible" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgTipoCombustible">
                                                    *Seleccionar tipo de combustible.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divEstadoVehiculo">
                                                <label class=" control-label" for="cboEstadoVehiculo" style="margin-left: -92px" >
                                                    ESTADO DEL VEHÍCULO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboEstadoVehiculo" name="cboEstadoVehiculo" required="">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgEstadoVehiculo">
                                                    *Seleccionar estado del vehículo.
                                                </span>
                                            </div>
                                            
                                            <div class="form-group" id="divPoseeSoat">
                                                <label class="control-label" for="radios">
                                                    ¿TIENE SOAT?
                                                </label>
                                                <div id="botonessiono">
                                                    <label class="radio-inline" for="radios-0">
                                                        <input checked="checked" id="radios-0" name="rbtTieneSoat" onchange="mostrar(this.value);" type="radio" value="SI">
                                                            Sí
                                                        
                                                    </label>
                                                    <label class="radio-inline" for="radios-1">
                                                        <input id="radios-1" name="rbtTieneSoat" type="radio" onchange="mostrar(this.value);" value=NO>
                                                            No
                                                        
                                                    </label>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group" id="divFechaSoat">
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
                                                        <input class="form-control dtpFechaSoat" id="dtpFechaSoat" name="dtpFechaSoat" type="text"></input>
                                                        
                                                    </div>
                                                </div>
                                                <span class="label label-danger error" id="msgFechaSoat">
                                                    *Seleccionar fecha de vencimiento.
                                                </span>
                                            </div>
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
                            <div class="tab-pane fade" id="3">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-3">
                                            <div class="form-group" id="divCodTrab">
                                                <label class="control-label" for="txtCodTrab" style="margin-left: -75px">
                                                    CÓDIGO DEL TRABAJADOR
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtCodTrab" maxlength="20" name="txtCodTrab" onkeyup="ValidarCodigo(this)" placeholder="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgCodTrab">
                                                    *Ingresar codigo del trabajador.
                                                </span>
                                            </div>
                                            <!-- Text input-->
                                            <div class="form-group" id="divCodTrabCFIS">
                                                <label class="control-label" for="txtCodTrabCFIS" style="margin-left: -38px">
                                                    CÓDIGO DEL TRABAJADOR CFIS
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtCodTrabCFIS" maxlength="20" name="txtCodTrabCFIS" onkeyup="ValidarCodigo(this)" placeholder="" type="text">
                                                    
                                                </div>
                                                <span class="label label-danger error" id="msgCodTrabCFIS">
                                                    *Ingresar codigo CFIS.
                                                </span>
                                            </div>
                                            <!-- Text input-->
                                            <div class="form-group" id="divNumCas">
                                                <label class="control-label" for="txtNumCas" style="margin-left: -70px">
                                                    NRO. DE SERIE DEL CASCO
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtNumCas" maxlength="4" name="txtNumCas" onkeyup="ValidarNumeroCasco(this)" placeholder="" type="text">
                                                </input>
                                                    
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
                                                    <input class="form-control input-md" id="txtNombApe" maxlength="70" name="txtNombApe" onkeyup="ValidarTexto(this)" placeholder="" type="text">
                                                    
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
                                                    <input class="form-control input-md" id="txtNroDni" maxlength="8" name="txtNroDni" onkeyup="ValidarDNI(this)" placeholder="" type="text">          
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
                                                                <span class="glyphicon glyphicon-calendar">
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <input class="form-control dtpFechaNac" id="dtpFechaNac" name="dtpFechaNac" type="text">
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
                                                                <span class="glyphicon glyphicon-calendar">
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <input class="form-control dtpFechaIng" id="dtpFechaIng" name="dtpFechaIng" type="text">
                                                    </div>
                                                </div>
                                                <span class="label label-danger error" id="msgFechaIng">
                                                    *Seleccionar fecha de ingreso.
                                                </span>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="form-group" id="divSexo">
                                                <label class="control-label" for="cboSexo" style="margin-left: -210px">
                                                    SEXO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboSexo" name="cboSexo">
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
                            </div>
                            <div class="tab-pane fade" id="4">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-3" style="width: 29%; margin-left: 12%">
                                            <div class="form-group">
                                                <label class=" control-label" for="txtkilopenulmant" style="margin-left: -10px">
                                                    KILOMETRAJE PENULTIMO MANTENIMENTO
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtkilopenulmant" name="txtkilopenulmant" onkeyup="KilopenulMante(this)" placeholder="" required="" type="text">
                                                </div>
                                                <span class="label label-danger error" id="msgKiloPenulKilo">
                                                    *Ingrese penultimo kilometraje.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divFechaIng">
                                                <label class=" control-label" for="dtpFechapenultmant" style="margin-left: -33px">
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
                                                        <input class="form-control dtpFechapenultmant" id="dtpFechapenultmant" name="dtpFechapenultmant" type="text">
                                                    </div>
                                                </div>
                                                <span class="label label-danger error" id="msgFechaPenulMant">
                                                    *Seleccionar fecha del Penultimo mantenimiento.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-offset-2 col-md-3" style="width: 29%; margin-left: 17%">
                                            <div class="form-group">
                                                <label class="control-label" for="txtkiloultimomant" style="margin-left: -35px">
                                                    KILOMETRAJE ULTIMO MANTENIMENTO
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtkiloultimomant" name="txtkiloultimomant" onkeyup="KiloulMante(this)" placeholder="" required="" type="text">
                                                </div>
                                                <span class="label label-danger error" id="msgkiloultimomant">
                                                    *Ingrese ultimo kilometraje.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divFechaIng">
                                                <label class=" control-label" for="dtpFechaultmant" style="margin-left: -62px">
                                                    FECHA DE ULTIMO MANTENIMENTO
                                                </label>
                                                <div>
                                                    <div class="input-group">
                                                        <label class="input-group-btn" for="dtpFechaultmant">
                                                            <span class="btn btn-default" style="padding: 5px 12px">
                                                                <span class="glyphicon glyphicon-calendar">
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <input class="form-control dtpFechaultmant" id="dtpFechaultmant" name="dtpFechaultmant" type="text">
                                                        
                                                    </div>
                                                </div>
                                                <span class="label label-danger error" id="msgFechaulMant">
                                                    *Seleccionar fecha del ultimo mantenimiento.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divProveedorMantenimiento">
                                                <label class="control-label" for="cboProveedorMantenimiento" style="margin-left: -97px">
                                                    PROVEEDOR MANTENIMENTO
                                                </label>
                                                <div>
                                                    <select class="form-control" id="cboProveedorMantenimiento" name="cboProveedorMantenimiento">
                                                    </select>
                                                </div>
                                                <span class="label label-danger error" id="msgProveedorMantemiento">
                                                    *Seleccionar Proveedor MANTENIMENTO.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divGastoMant">
                                                <label class="control-label" for="txtgastomant" style="margin-left: -98px">
                                                    GASTO DEL MANTENIMIENTO
                                                </label>
                                                <div>
                                                    <input class="form-control input-md" id="txtgastomant" maxlength="20" name="txtgastomant" onkeyup="GastoMante(this)" placeholder="" type="text">
                                                </div>
                                                <span class="label label-danger error" id="msgGastoMant">
                                                    *Ingresar Gasto del mantenimiento.
                                                </span>
                                            </div>
                                            <div class="form-group" id="divDescripMant">
                                                <label class="control-label" for="txtDescripmant" style="margin-left: -5px">
                                                    DESCRIPCION GASTO DEL MANTENIMIENTO
                                                </label>
                                                <div>
                                                    <textarea class="form-control input-md" id="txtDescripmant" name="txtDescripmant" required=""></textarea>
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
  
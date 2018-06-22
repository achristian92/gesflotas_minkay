@extends('plantillabase')
@section('contenido')
<!-- Jquery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js">
</script>
<!-- Datepicker Files -->
<link href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('datePicker/css/bootstrap-datepicker3.standalone.css')}}" rel="stylesheet">
        <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}">
        </script>
        <!-- Languaje -->
        <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js">
        </script>
        <style type="text/css">
            table {
        border-bottom: 0.5px solid black ;
        border-top: 2px solid white;
    }
        </style>
        <style type="text/css">
            table.sugoi {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
        </style>
        <center>
            <h3>
                Detalle del vehículo
            </h3>
        </center>
        <?php echo csrf_field(); ?>
        <div class="row">
            <form>
                <fieldset>
                    <br>
                        <br>
                            <div class="col-md-2">
                                <fieldset>
                                    <legend>
                                        <center>
                                            <h4>
                                                Foto del vehículo
                                            </h4>
                                        </center>
                                    </legend>
                                    <center>
                                        <img alt="Bootstrap Image Preview" class="img-thumbnail" src="<?php echo session('ruta_imagen'); ?>"/>
                                    </center>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <legend>
                                        <h4>
                                            <center>
                                                <strong>
                                                    Datos del vehículo
                                                </strong>
                                            </center>
                                        </h4>
                                    </legend>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Placa
                                                </td>
                                                <td align="right">
                                                    <?php echo session('nro_placa'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Tipo de Vehículo
                                                </td>
                                                <td align="right">
                                                    <?php echo session('tipo_vehiculo'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Zona
                                                </td>
                                                <td align="right">
                                                    <?php echo session('tipo_zona'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Agencia de circulación del vehículo
                                                </td>
                                                <td align="right">
                                                    <?php echo session('agencia'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Modelo
                                                </td>
                                                <td align="right">
                                                    <?php echo session('modelo'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Marca
                                                </td>
                                                <td align="right">
                                                    <?php echo session('marca'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Color
                                                </td>
                                                <td align="right">
                                                    <?php echo session('color'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Número de Serie del Motor
                                                </td>
                                                <td align="right">
                                                    <?php echo session('nro_serie_motor'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Año de Fabricación del Vehículo
                                                </td>
                                                <td align="right">
                                                    <?php echo session('anio_fabricacion_vehiculo'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Año del modelo del vehículo
                                                </td>
                                                <td align="right">
                                                    <?php echo session('anio_modelo_vehiculo'); ?>
                                                </td>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Carrocería
                                                </td>
                                                <td align="right">
                                                    <?php echo session('carroceria'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Potencia del Vehículo
                                                </td>
                                                <td align="right">
                                                    <?php echo session('potencia'); ?>
                                                    HP
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Ejes
                                                </td>
                                                <td align="right">
                                                    <?php echo session('nro_ejes'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Número de Serie del Casco
                                                </td>
                                                <td align="right">
                                                    <?php echo session('nro_serie_casco'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Tipo de Combustible
                                                </td>
                                                <td align="right">
                                                    <?php echo session('tipo_combustible'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    ¿El automóvil posee un SOAT vigente?
                                                </td>
                                                <td align="right">
                                                    <?php echo session('tiene_vigente_soat'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Fecha de vencimiento del SOAT
                                                </td>
                                                <td align="right">
                                                    <?php echo session('fecha_vencimiento_soat'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Estado del Vehículo
                                                </td>
                                                <td align="right">
                                                    <?php echo session('estado_vehiculo'); ?>
                                                </td>
                                            </table>
                                            <table class="table table-hover table-responsive">
                                                <td>
                                                    Kilometraje Recorrido
                                                </td>
                                                <td align="right">
                                                    SIN DATOS KM
                                                </td>
                                            </table>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset>
                                    <legend>
                                        <center>
                                            <h4>
                                                <strong>
                                                    Gráficas de gastos del vehículo
                                                </strong>
                                            </h4>
                                        </center>
                                    </legend>
                                    <center>
                                        {!! session('charts')->html() !!}
                                    </center>
                                </fieldset>
                                <p>
                                </p>
                                <center>
                                    <button class="button" style="vertical-align:middle">
                                        <span>
                                            Anexos del Vehículo
                                        </span>
                                    </button>
                                </center>
                            </div>
                            <div class="col-md-8">
                                <fieldset style="width:85%; margin: auto">
                                    <legend>
                                        <h3>
                                            <center>
                                                <strong>
                                                    Datos del conductor
                                                </strong>
                                            </center>
                                        </h3>
                                    </legend>
                                    <br>
                                        <table class="table table-hover table-responsive">
                                            <td>
                                                Código del Trabajador
                                            </td>
                                            <td align="right">
                                                <?php echo session('codigo_trabajador'); ?>
                                            </td>
                                        </table>
                                        <table class="table table-hover table-responsive">
                                            <td>
                                                Código de Trabajador. CFIS
                                            </td>
                                            <td align="right">
                                                <?php echo session('codigo_trabajador_cfis'); ?>
                                            </td>
                                        </table>
                                        <table class="table table-hover table-responsive">
                                            <td>
                                                Nombre y Apellido
                                            </td>
                                            <td align="right">
                                                <?php echo session('nombres_apellidos'); ?>
                                            </td>
                                        </table>
                                        <table class="table table-hover table-responsive">
                                            <td>
                                                Departamento a cargo del Vehículo
                                            </td>
                                            <td align="right">
                                                <?php echo session('departamento_cargo'); ?>
                                            </td>
                                        </table>
                                        <table class="table table-hover table-responsive">
                                            <td>
                                                Centro de Costo
                                            </td>
                                            <td align="right">
                                                <?php echo session('centro_costo'); ?>
                                            </td>
                                        </table>
                                        <table class="table table-hover table-responsive">
                                            <td>
                                                Número de DNI
                                            </td>
                                            <td align="right">
                                                <?php echo session('nro_dni'); ?>
                                            </td>
                                        </table>
                                        <table class="table table-hover table-responsive">
                                            <td>
                                                Fecha de Nacimiento del Conductor
                                            </td>
                                            <td align="right">
                                                <?php echo session('fecha_nacimiento'); ?>
                                            </td>
                                        </table>
                                        <table class="table table-hover table-responsive">
                                            <td>
                                                Fecha de Ingreso
                                            </td>
                                            <td align="right">
                                                <?php echo session('fecha_ingreso'); ?>
                                            </td>
                                        </table>
                                        <table class="table table-hover table-responsive">
                                            <td>
                                                Sexo
                                            </td>
                                            <td align="right">
                                                <?php echo session('sexo'); ?>
                                            </td>
                                        </table>
                                    
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    <center>
                                        <button class="btn btn-primary" data-target=".bs-example-modal-lg1" data-toggle="modal" style="width: 80% ; background-color: #04ea04; border-radius: 8px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); cursor: pointer; margin-top: 3cm; font-size: 18px; height: 45px; border-color: #04ea04" type="button">
                                            Actualizar kilometraje
                                        </button>
                                    </center>
                                </p>
                                <p>
                                    <center>
                                        <button class="btn btn-primary" data-target=".bs-example-modal-lg2" data-toggle="modal" style="width: 80% ; background-color: #04ea04; border-radius: 8px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); cursor: pointer; margin-top: 0.3cm; font-size: 18px; height: 45px; border-color: #04ea04" type="button">
                                            Registrar Gastos de Combustible
                                        </button>
                                    </center>
                                </p>
                                <p>
                                    <center>
                                        <button class="btn btn-primary" data-target=".bs-example-modal-lg3" data-toggle="modal" style="width: 80% ; background-color: #04ea04; border-radius: 8px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); cursor: pointer; margin-top: 0.3cm; font-size: 18px; height: 45px; border-color: #04ea04" type="button">
                                            Registrar Mantenimiento
                                        </button>
                                    </center>
                                </p>
                                <p>
                                    <center>
                                        <button class="btn btn-primary" data-target=".bs-example-modal-lg" data-toggle="modal" style="width: 80% ; background-color: #ff0707; border-radius: 8px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); cursor: pointer; margin-top: 0.5cm; font-size: 18px; height: 45px; border-color: #ff0707" type="button">
                                            Cambiar Estado
                                        </button>
                                    </center>
                                </p>
                            </div>
                        
                    
                </fieldset>
            </form>
        </div>
        {{-- carga indicadores por vehiculo --}}
        {!! Charts::scripts() !!}

        {!! session('charts')->script() !!}
         {{-- MODALES  --}}

   
        <div aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg1" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                            <span class="sr-only">
                                Close
                            </span>
                        </button>
                        <center>
                            <h3 class="modal-title" id="modal-register-label">
                                Actualizar Kilometraje
                            </h3>
                        </center>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <!-- Form Name -->
                            <h4 style="margin-bottom: 25px">
                                <strong>
                                    <center>
                                        Modificar Datos
                                    </center>
                                </strong>
                            </h4>
                            <!-- Text input-->
                            <fieldset style="border: 0">
                                <label class="col-md-6 control-label" for="textinput" style="text-align: right; margin-top: 5px">
                                    Kilometraje actual
                                </label>
                                <div class="col-md-4">
                                    <input class="form-control input-md" id="textinput" name="textinput" placeholder="" type="text">
                                    
                                </div>
                            </fieldset>
                            <fieldset style="border: 0">
                                <label class="col-md-6 control-label" for="textinput" style="vertical-align: 50px">
                                    Kilometraje Mes Anterior
                                </label>
                                <div class="col-md-4">
                                    <input class="form-control input-md" disabled="" id="textinput" name="textinput" placeholder="" readonly="" type="text">
                                    
                                </div>
                            </fieldset>
                            <!-- Text input-->
                            <fieldset style="border: 0">
                                <label class="col-md-6 control-label" for="textinput" style="text-align: right">
                                    Kilometraje del mes anterior
                                </label>
                                <div class="col-md-4">
                                    <input class="form-control input-md" id="textinput" name="textinput" placeholder="" type="text">
                                    
                                </div>
                            </fieldset>
                            <!-- Text input-->
                            <fieldset style="border: 0">
                                <label class="col-md-6 control-label" for="textinput">
                                    Kilometraje total
                                </label>
                                <div class="col-md-5">
                                    <input class="form-control input-md" id="textinput" name="textinput" placeholder="" required="" type="text">
                                    
                                </div>
                            </fieldset>
                            <!-- Text input-->
                            <fieldset style="border: 0">
                                <label class="col-md-6 control-label" for="textinput" style="text-align: right">
                                    Kilometraje recorrido del mes
                                </label>
                                <div class="col-md-4">
                                    <input class="form-control input-md" id="textinput" name="textinput" placeholder="" type="text">
                                    
                                </div>
                            </fieldset>
                        </form>
                        <center>
                            <button ;"="" class="button" style="vertical-align:middle; margin-top: 30px">
                                <span>
                                    <strong>
                                        Guardar Cambios
                                    </strong>
                                </span>
                            </button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
   
        <div aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg2" role="dialog" tabindex="-1">
            <div class="modal-dialog" style="top: 0%; width: 32%; min-width: 300px">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(0, 128, 255)">
                        <button class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                            <span class="sr-only">
                                Close
                            </span>
                        </button>
                        <center>
                            <h4 class="modal-title" id="modal-register-label" style="color: white">
                                <strong>
                                    Registrar Gastos de Combustible
                                </strong>
                            </h4>
                        </center>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <!-- Text input-->
                            <div class="form-group" id="montomesant">
                                <label class="control-label" for="textinput" id="labelmontomesanterior" style="margin-top: 10px">
                                    MONTO MES ANTERIOR PARA COMBUSTIBLE
                                </label>
                                <div>
                                    <input class="form-control input-md" id="textinputCombustible" name="textinputCombustible" placeholder="" readonly="" type="text" value="100">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textinput" style="text-align: right">
                                    MONTO A ABONAR
                                </label>
                                <div>
                                    <input class="form-control input-md" id="textinputMontoCombustible" name="textinputMontoCombustible" placeholder="" type="text">
                                    
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="textinput" style="text-align: right">
                                    NÚMERO DE TARJETA PARA COMBUSTIBLE
                                </label>
                                <div>
                                    <input class="form-control input-md" id="textinputTarjetaCombustible" name="textinputTarjetaCombustible" placeholder="" type="text">
                                    
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="textinput" style="text-align: right">
                                    PROVEEDOR DE COMBUSTIBLE
                                </label>
                                <div>
                                    <select class="form-control" id="selectbasicCombustible" name="selectbasicCombustible">
                                        <!--
                                            <option value="1">Pecsa</option>
                                            <option value="2">PetroPeru</option>
                                            <option value="3">Repsol</option>
                                        -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="divFechaCambioComb">
                                <label class="control-label" for="fechacambio">
                                    FECHA
                                </label>
                                <div>
                                    <div class="input-group">
                                        <label class="input-group-btn" for="date3">
                                            <span class="btn btn-default">
                                                <span class="glyphicon glyphicon-calendar">
                                                </span>
                                            </span>
                                        </label>
                                        <!--   <input id="fechacambiocomb" name="fechacambio" type="text" class="form-control"  />-->
                                        <input class="form-control datepicker3" id="date3" name="date3" type="text">
                                        
                                    </div>
                                </div>
                                <!-- <p style="font-size:13px"><span class="label label-danger">La fecha de vencimiento ingresada no es válida</span></p> -->
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" type="button">
                            Cancelar
                        </button>
                        <button class="btn btn-primary" id="btnRegistrarGastoCombustible" type="button">
                            Guardar Cambios
                        </button>
                    </div>
                </div>
            </div>
        </div>

        
        <div aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg3" role="dialog" tabindex="-1">
            <div class="modal-dialog" style="top: 0%; width: 32%; min-width: 300px">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(0, 128, 255)">
                        <button class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                            <span class="sr-only">
                                Close
                            </span>
                        </button>
                        <center>
                            <h4 class="modal-title" id="modal-register-label" style="color: white">
                                <strong>
                                    Registrar Mantenimiento
                                </strong>
                            </h4>
                        </center>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label class=" control-label" for="selectbasic">
                                    TIPO DE MANTENIMIENTO
                                </label>
                                <div>
                                    <select class="form-control" id="selectbasicMantenimiento" name="selectbasicMantenimiento">
                                    </select>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="textinput">
                                    GASTO DE MANTENIMIENTO
                                </label>
                                <div>
                                    <input class="form-control input-md" id="textinputMantenimiento" name="textinputMantenimiento" placeholder="" required="" type="text">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="selectbasic">
                                    PROVEEDOR
                                </label>
                                <div>
                                    <select class="form-control" id="selectbasicProveedorM" name="selectbasicProveedorM">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">
                                    MOTIVO DE MANTENIMIENTO
                                </label>
                                <div>
                                    <textarea class="form-control" id="textareaMantenimiento" name="textareaMantenimiento">
                                    </textarea>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group" id="divFechaCambio">
                                <label class="control-label" for="fechacambio">
                                    FECHA
                                </label>
                                <div>
                                    <div class="input-group">
                                        <label class="input-group-btn" for="date2">
                                            <span class="btn btn-default">
                                                <span class="glyphicon glyphicon-calendar">
                                                </span>
                                            </span>
                                        </label>
                                        <!--<input id="fechacambio" name="fechacambio" type="text" class="form-control"  />
                                -->
                                        <!--<input type="text" class="form-control datepicker" name="date" id="date">
                               -->
                                        <input class="form-control datepicker2" id="date2" name="date2" onkeydown=" return false" type="text">
                                        
                                    </div>
                                </div>
                                <!-- <p style="font-size:13px"><span class="label label-danger">La fecha de vencimiento ingresada no es válida</span></p> -->
                            </div>
                        </form>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" type="button">
                            Cancelar
                        </button>
                        <button class="btn btn-primary" id="btnRegistrarMantenimiento" type="button">
                            Guardar Cambios
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg" id="modal1" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg" style="top: 0%; width: 32%; min-width: 350px">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: rgba(0,0,0,0.5); padding: 1px">
                        <button class="close" data-dismiss="modal" style="margin-top: 1px; margin-right: 10px;" type="button">
                            <span aria-hidden="true" style="color: #fff; font-size: 30px ">
                                ×
                            </span>
                            <span class="sr-only" style="text-decoration-color: white ">
                                Close
                            </span>
                        </button>
                        <center>
                            <h3 style="color: white; margin-top: 10px">
                                Advertencia: Cambio de Estado
                            </h3>
                        </center>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <center>
                            <p style="font-size: 15px">
                                Se procederá a cambiar el estado del vehículo.
                            Por favor llenar todos los campos para su validación
                            </p>
                        </center>
                        <form role="form">
                            <div class="form-group">
                                <label for="tipoestado">
                                    Tipo de Estado
                                </label>
                                <select class="form-control" id="cboZonaVehiculo" name="cboZonaVehiculo">
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textinput">
                                    Descripción
                                </label>
                                <input class="form-control input-md" id="textDescEstado" name="textDescEstado" placeholder="" required="" style="height: 55px" type="text">
                                
                            </div>
                            <div class="form-group" id="divgasto">
                                <label class="control-label" for="txtgasto">
                                    Ingrese Gasto
                                </label>
                                <div>
                                    <input class="form-control input-md" id="txtgasto" name="txtgasto" oninput="setCustomValidity('')" oninvalid="setCustomValidity('Ingrese una marca válida')">
                                    
                                </div>
                                <!--  <p style="font-size:13px"><span class="label label-danger">Ya existe una marca</span></p> -->
                            </div>
                            <!-- Text input-->
                            <div class="form-group" id="divFechaCambio">
                                <label class="control-label" for="fechacambio">
                                    FECHA
                                </label>
                                <div>
                                    <div class="input-group">
                                        <label class="input-group-btn" for="date">
                                            <span class="btn btn-default">
                                                <span class="glyphicon glyphicon-calendar">
                                                </span>
                                            </span>
                                        </label>
                                        <!--<input id="fechacambio" name="fechacambio" type="text" class="form-control"  />-->
                                        <input class="form-control datepicker" id="date" name="date" type="text">
                                        
                                    </div>
                                </div>
                                <!-- <p style="font-size:13px"><span class="label label-danger">La fecha de vencimiento ingresada no es válida</span></p> -->
                            </div>
                        </form>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" type="button">
                            Cancelar
                        </button>
                        <button class="btn btn-primary" id="btnRegistrarEstado" type="button">
                            Guardar Cambios
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var fechacustomize;

    function limpiarEstado(){
         $('#textDescEstado').val("");
         $('#txtgasto').val("");
         $('#date').val("");
    }

    function limpiarMantenimiento(){
        $('#selectbasicMantenimiento').val("");
        $('#textinputMantenimiento').val("");
         $('#textareaMantenimiento').val("");
         $('#date2').val("");
         $('#selectbasicProveedorM').val("");
    }

    function limpiarGasto(){
            //$('#textinputCombustible').val();
                  $('#textinputMontoCombustible').val("");
                  $('#textinputTarjetaCombustible').val("");
                  $('#selectbasicCombustible').val("");
                  $('#date3').val("");
    }

    // function ObtenerOpciones(){
    //  $('#cboZonaVehiculo').empty();
    //     $.ajax({
    //     type:'GET',
    //     url: 'getOpcionesJSON',
    //     data: {},
    //     dataType: 'json',
    //     success:function(data){
    //         $('#cboZonaVehiculo').append('<option value="">::Seleccionar::</option>');
    //         $.each(data, function(i, value) {
    //             $('#cboZonaVehiculo').append('<option value="' + value.idestado_vehiculo + '">' + value.nombre_estado_vehi  + '</option>');
    //         });

    //         $('select[name=cboZonaVehiculo]').val("<?php echo session('idestado_vehiculo'); ?>");
    //      },
    //       error: function (jqXHR, status, err) {
    //         alert("Local error callback.");

    //       }
    //      });
    // }

    // function ObtenerOpciones3(){
    // $('#selectbasicProveedorM').empty();
    // $.ajax({
    //     type:'GET',
    //     url: 'getProveedorMantenimientoSON',
    //     data: {},
    //     dataType: 'json',
    //     success:function(data){
    //         $('#selectbasicProveedorM').append('<option value="">::Seleccionar::</option>');
    //         $.each(data, function(i, value) {
    //             $('#selectbasicProveedorM').append('<option value="' + value.idproveedor_mantenimiento + '">' + value.nombre_provee_mant  + '</option>');
    //         });

    //         //$('select[name=cboZonaVehiculo]').val("<?php echo session('idestado_vehiculo'); ?>");
    //     },
    //     error: function (jqXHR, status, err) {
    //         alert("Local error callback.");

    //     }
    // });
    // }

    function ObtenerFechaMantenimiento(nro_placa){
        // console.log("jselg");

        $.ajax({
            type: 'GET',
            url: 'getFechaU/' + nro_placa,
            data: {  },
            dataType: 'json',
            success: function(data){
                //$('#selectbasicagencia').append('<option value="-1">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    fechacustomize = value.fecha_mantenimiento;
                });         


                 $('.datepicker2').datepicker({
                format: "yyyy/mm/dd",
                    language: "es",
                    defaultDate: moment(),
                    autoclose: true,
                    beforeShowDay: function(date){
                        if (date < Date.parse(fechacustomize)) {
                            return false;
                        }

                        return ;
                    }
                      });

            },
            error: function (jqXHR, status, err) {
                alert("Local error callback.");
            }
        });
    }

    function ObtenerMontoCombustible(nro_placa){
        // console.log("jselg");

        $.ajax({
            type: 'GET',
            url: 'getMontoU/' + nro_placa,
            data: {  },
            dataType: 'json',
            success: function(data){
                //$('#selectbasicagencia').append('<option value="-1">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#textinputCombustible').val(value.monto_gasto_combustible);
                });

                //$('#selectbasicagencia').removeAttr('disabled');
                //activarboton();

            },
            error: function (jqXHR, status, err) {
                alert("Local error callback.");
            }
        });
    }


    // function ObtenerOpciones4(){
    // $('#selectbasicCombustible').empty();
    // $.ajax({
    //     type:'GET',
    //     url: 'getProveedorSON',
    //     data: {},
    //     dataType: 'json',
    //     success:function(data){
    //         $('#selectbasicCombustible').append('<option value="">::Seleccionar::</option>');
    //         $.each(data, function(i, value) {
    //             $('#selectbasicCombustible').append('<option value="' + value.idproveedor_combustible + '">' + value.nombre_provee_combus  + '</option>');
    //         });

    //         //$('select[name=cboZonaVehiculo]').val("<?php echo session('idestado_vehiculo'); ?>");
    //     },
    //     error: function (jqXHR, status, err) {
    //         alert("Local error callback.");

    //     }
    // });
    // }


    function ObtenerOpciones2(){
    $('#selectbasicMantenimiento').empty();
    $.ajax({
        type:'GET',
        url: 'getTipoMantenimientoSON',
        data: {},
        dataType: 'json',
        success:function(data){
            $('#selectbasicMantenimiento').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#selectbasicMantenimiento').append('<option value="' + value.idtb_tipos_mantenimiento + '">' + value.nombre_tipo_mant  + '</option>');
            });

            //$('select[name=cboZonaVehiculo]').val("<?php echo session('idestado_vehiculo'); ?>");
        },
        error: function (jqXHR, status, err) {
            alert("Local error callback.");

        }
    });
    }

    jQuery.noConflict();
    $( document ).ready(function() {
        var dateDisabled = ["2018-2-1", "2018-2-2"];
         $('.datepicker').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });

     $('.datepicker3').datepicker({
            format: "yyyy/mm/dd",
         language: "es",
         autoclose: true
         });





         ObtenerOpciones();
         ObtenerOpciones2();
         ObtenerOpciones3();
         ObtenerOpciones4();
         ObtenerMontoCombustible("<?php echo session('nro_placa'); ?>");
         ObtenerFechaMantenimiento("<?php echo session('nro_placa'); ?>");




             $('#btnRegistrarMantenimiento').click(function(){
                 var _token = $('input[name="_token"]').val();
                    console.log(_token);
    

            var placa = "<?php echo session('nro_placa'); ?>";

                    $.ajax({
                        type: 'POST',
                        url: 'setGuardarMantenimiento',
                        data: { _token : _token,
                            'nro_placa' :   placa ,
                            'tipoMantenimiento': $('#selectbasicMantenimiento').val(),
                            'gasto' : $('#textinputMantenimiento').val(),
                            'motivo' : $('#textareaMantenimiento').val(),
                            'date' : $('#date2').val(),
                            'tipoproveedor' : $('#selectbasicProveedorM').val(),

                        },
                        dataType: 'json',
                        success:function(data){
                            alert(data);
                            ObtenerFechaMantenimiento(placa);
                            limpiarMantenimiento();
                           
                        },
                        error: function (jqXHR, status, err) {
                            alert("Se produjo un error.");
                        }
                    });

        });
             //guardar estado vehiculo
              $('#btnRegistrarEstado').click(function(){
            var _token = $('input[name="_token"]').val();
            var placa = "<?php echo session('nro_placa'); ?>";
            var codregistro = "<?php echo session('codregistro'); ?>";
                    $.ajax({
                        type: 'POST',
                        url: 'setGuardarEstado',
                        data: { _token : _token,
                            'nro_placa' :   placa ,
                            'codregistro' : codregistro,
                            'cboZonaVehiculo': $('#cboZonaVehiculo').val(),
                            'textDescEstado' : $('#textDescEstado').val(),
                            'txtgasto' : $('#txtgasto').val(),
                            'date' : $('#date').val()
                        },
                        dataType: 'json',
                        success:function(data){
                            alert(data);
                            //var valor = $('#cboZonaVehiculo').val();
                            limpiarEstado();
                            $('body').removeClass('modal-open');


                        },
                        error: function (jqXHR, status, err) {
                            alert("Se produjo un error.");
                        }
                    });

});
          });
       
        // Presionando Boton De cambio de Ejes
        </script>
        @stop
    </link>
</link>
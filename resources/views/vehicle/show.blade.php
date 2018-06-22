@extends('vehicle.navbarVehicle')
@section('contenido')
<link href="../../assets/css/styleshow.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        div#success-alert.alert.alert-success{
        color: #305e30;
        background-color: #e2f1db;
        border-color: #e2f1db;
        max-width: 400px;
        position: absolute;
        margin-top: 10px;
        padding: 5px 10px;
    }
    </style>
    @if(session('clave_detalle'))
    <div class="alert alert-success" id="success-alert">
        {{ session('clave_detalle') }}
    </div>
    <script>
        $('div#success-alert.alert.alert-success').fadeIn().delay(4000).fadeOut();
    </script>
    @endif
    <script src="//code.jquery.com/jquery-1.11.3.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            ObtenerProveedorCombustible();
            ObtenerTipoMantenimiento();
            ObtenerProveedorMantVehiculo();
            ObtenerEstadoVehiculo();
            ObtenerProveedorSoat();
           
         })

        ;
    </script>
    <script>
        function verificar(){
        var numkilo;
        numkilo = document.getElementById("txtrechastanew").value;
                if(numkilo >= 4500 && numkilo<=5000 ){
                    alert("Te falta poco para llegar a 5000 kilometros, porfavor coordinar para realizar mantenimiento.");
                    return true;
                }else if(numkilo > 5000){
                    alert("Ya Recorriste mas de 5000 kilometros desde tu ultimo mantenimiento, por favor realizar su mantenimiento preventivo");
                    return false;
                }
            }
        $(document).ready(function(){

$('.recalproxmant').change(function(){
    if($(this).prop('checked')){     
       $('#divnewkilo').show();       
    }else{          
           $('#divnewkilo').hide();
    }  
  })
var select = document.getElementById('idtb_tipos_mantenimiento');
select.addEventListener('change',
  function(){

    var selectedOption = this.options[select.selectedIndex];
    // console.log(selectedOption.value + ': ' + selectedOption.text);
    if(selectedOption.text == "Preventivo"){
        // alert("es preventivo");
         $('#divcheck').show(); 
         $('#divmensajecheck').show(); 
         $('#divnewkilo').show();
         
    }else{
         $('#divmensajecheck').hide(); 
        $('#divcheck').hide(); 
        $('#divnewkilo').hide();
    }
  });
});
    </script>   
    <div class="container-fluid">
        <div class="Vista">
            <center>
                <img alt="Bootstrap Image Preview" class="img-thumbnail" src="../../{{ $detallevehiculo->ruta_imagen }}"/>
            </center>
            <form>
                <fieldset>
                    <legend>
                        <center>
                            <h2 class="Title">
                                <span class="u-shadow">
                                    Detalle del vehículo
                                </span>
                            </h2>
                        </center>
                    </legend>
                    <div class="col-md-3" id="botonesopciones1">
                        <center>
                            <button class="btn btn-primary BotonDetalle" data-target=".bs-example-modal-lg1" data-toggle="modal" id="BotnAct" type="button">
                                Act. Kilometraje
                            </button>
                            <button class="btn btn-primary BotonDetalle" data-target=".bs-example-modal-lg3" data-toggle="modal" type="button">
                                R. Mantenimiento
                            </button>
                            <button class="btn btn-primary BotonDetalle" data-target=".bs-example-modal-lg2" data-toggle="modal" type="button">
                                R. Gastos de Comb.
                            </button>
                            <button class="btn btn-primary BotonDetalle" data-target="#modalpapel" data-toggle="modal" type="button">
                                PAPELETAS
                            </button>
                            <button class="btn btn-primary BotonDetalle" data-target="#modalSOAT" data-toggle="modal" type="button">
                                SOAT
                            </button>
                            <button class="btn btn-primary BotonDetalle" data-target="#modalAnexos" data-toggle="modal" type="button">
                                ANEXOS
                            </button>
                            <button class="btn btn-primary BotonDetalle" data-target=".bs-example-modal-lg" data-toggle="modal" id="BotnCambEst" type="button">
                                Cambiar Estado
                            </button>
                        </center>
                    </div>
                    <div class="col-md-6" id="colcaracteristicas">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Placa
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nro_placa }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Tipo de Vehículo
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nombre_tipo_vehiculo }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Distrito
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nom_distrito }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Agencia
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nombre_agencia }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Modelo
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nombre_modelo }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Marca
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nombre_marca }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Color
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->color }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            # Serie del Motor
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nro_serie_motor }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            # Chasis
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nro_chasis }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Año de Fabricación
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->anio_fabricacion_vehiculo }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Año del Modelo
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->anio_modelo_vehiculo }}
                                        </td>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Carrocería
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nombre_carroceria }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Potencia
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->fuerza_vehiculo }}
                                                    HP
                                        </td>
                                    </table>
                                    {{--
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Ejes
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nro_ejes }}
                                        </td>
                                    </table>
                                    --}}
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Tipo de Combustible
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nombre_combustible }}
                                        </td>
                                    </table>
                                    {{--
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            ¿TIENE SOAT?
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->tiene_vigente_soat }}
                                        </td>
                                    </table>
                                    --}}
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            F.V Soat
                                        </td>
                                        <td align="right">
                                            {{--    {{ $detallevehiculo->fecha_vencimiento_soat }} --}}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Estado Vehículo
                                        </td>
                                        <td align="right">
                                            {{ $estadovehiculo->nombre_estado_vehi }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Kilometraje Recorrido
                                        </td>
                                        <td align="right">
                                            --
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Depart. a cargo
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nombre_depar_cargo }}
                                        </td>
                                    </table>
                                    <table class="table table-hover table-responsive">
                                        <td>
                                            Centro de Costo
                                        </td>
                                        <td align="right">
                                            {{ $detallevehiculo->nombre_centro_costo }}
                                        </td>
                                    </table>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div align="center" class="col-md-3" id="colindicadores" style="margin-top: 80px">
                        <style>
                            .Indicadorfigura{
                                width: 100%;
                                height: 40%;
                                padding-bottom: 37px;
                            }
                        </style>
                        <div class="Indicadorfigura">
                            <fieldset>
                                <center>
                                    {!! $chart->html() !!}
                                </center>
                            </fieldset>
                        </div>
                        <div class="Indicadorfigura">
                            <fieldset>
                                <center>
                                    {!! $chart2->html() !!}
                                </center>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <fieldset id="fieldDatoscond">
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
                                        {{ $datosconductor->codigo_trabajador }}
                                    </td>
                                </table>
                                <table class="table table-hover table-responsive">
                                    <td>
                                        Número de Serie del Casco
                                    </td>
                                    <td align="right">
                                        {{ $datosconductor->nro_serie_casco }}
                                    </td>
                                </table>
                                <table class="table table-hover table-responsive">
                                    <td>
                                        Nombre y Apellido
                                    </td>
                                    <td align="right">
                                        {{ $datosconductor->nombres_apellidos }}
                                    </td>
                                </table>
                                <table class="table table-hover table-responsive">
                                    <td>
                                        Número de DNI
                                    </td>
                                    <td align="right">
                                        {{ $datosconductor->nro_dni }}
                                    </td>
                                </table>
                                <table class="table table-hover table-responsive">
                                    <td>
                                        Fecha de Nacimiento del Conductor
                                    </td>
                                    <td align="right">
                                        {{ $datosconductor->fecha_nacimiento }}
                                    </td>
                                </table>
                                <table class="table table-hover table-responsive">
                                    <td>
                                        Fecha de Ingreso
                                    </td>
                                    <td align="right">
                                        {{ $datosconductor->fecha_ingreso }}
                                    </td>
                                </table>
                                <table class="table table-hover table-responsive">
                                    <td>
                                        Sexo
                                    </td>
                                    <td align="right">
                                        {{ $datosconductor->sexo }}
                                    </td>
                                </table>
                            </br>
                        </fieldset>
                    </div>
                    <div class="col-md-4">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    {{-- carga indicadores por vehiculo --}}
        {!! Charts::scripts() !!}
         {!! $chart->script() !!}
        {!! $chart2->script() !!}
    {{-- Modal - actualizar kilometraje --}}
    <div aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg1" role="dialog" tabindex="-1">
        <div class="modal-dialog" id="dlgactkilm">
            <div class="modal-content">
                <div class="modal-header" id="cabhedactkm">
                    <button class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                        <span class="sr-only">
                            Close
                        </span>
                    </button>
                    <center>
                        <h4 class="modal-title" id="modal-register-labelact">
                            <strong>
                                Actualizar Kilometraje
                            </strong>
                        </h4>
                    </center>
                </div>
                <div class="modal-body">
                    <form action="{{ route('newkilo.vehicle' , $detallevehiculo->nro_placa) }}" method="POST" onsubmit="return verificar();" role="form">
                        <?php echo csrf_field(); ?>
                        <div class="row" id="rowmant">
                            <div class="col-md-4" id="colmant10">
                                <div class="form-group" id="montomesant">
                                    <center>
                                        <label class="control-label kilm" for="textinput" id="labelmontomesanterior">
                                            KILO. ULT. MAN.
                                        </label>
                                    </center>
                                    <div>
                                        <center>
                                            <label>
                                                @foreach ($kiloyfecha_ult_mant as $dato)
                                                    {{ $dato->kilo_ult_mant }}
                                               @endforeach
                                            </label>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" id="colmant102">
                                <div class="form-group">
                                    <center>
                                        <label class="control-label kilm" for="textinput">
                                            ULT. ACT. KILO. INGRESADA
                                        </label>
                                    </center>
                                    <div>
                                        <center>
                                            <label>
                                                @if($newkilo == "")
                                                 0
                                                  @else
                                                {{ $newkilo }}
                                                @endif
                                            </label>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" id="clkimre4">
                                <div class="form-group">
                                    <center>
                                        <label class="control-label kilm" for="textinput">
                                            KILOMETRAJE RECORRIDO
                                        </label>
                                    </center>
                                    <div>
                                        @if($newkilo == "")
                                        <input id="txtrechastanew" readonly="" style="text-align:center;border-color: red;" type="number" value="0"/>
                                        @else
                                        @foreach ($kiloyfecha_ult_mant as $dato)
                                        <input id="txtrechastanew" readonly="" size="10" style="text-align:center;border-color: red;" type="number" value="{{  $newkilo - $dato->kilo_ult_mant }}"/>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="rowcolfech">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="textinput">
                                        Kilometraje Actual
                                    </label>
                                    <div>
                                        @foreach ($kiloyfecha_ult_mant as $dato)
                                        <input class="form-control input-md" id="new_km" min="{{ $dato->kilo_ult_mant }}" name="new_km" required="" type="number">
                                            @endforeach
                                        </input>
                                    </div>
                                </div>
                            </div>
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
                                        @foreach ($kiloyfecha_ult_mant as $dato)
                                        <input class="form-control datepicker3" min="{{ $dato->fecha_ult_mant }}" name="fechaupdatekilo" step="1" type="date" value="<?php echo date("Y-m-d");?>">                                        
                                        @endforeach
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <span style="float: left">
                                <a href="{{ route('histvehi.newkilo',$detallevehiculo->nro_placa) }}">
                                    <strong>
                                        Ver Historial
                                    </strong>
                                </a>
                            </span>
                            <button class="btn btn-default" data-dismiss="modal" type="button">
                                Cancelar
                            </button>
                            <button class="btn btn-primary" id="updatekilo" name="updatekilo" type="submit">
                                Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal - Registrar Mantenimiento --}}
    <div aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg3" role="dialog" tabindex="-1">
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
                        <h4 class="modal-title" id="modal-register-labelreg">
                            <strong>
                                Registrar Mantenimiento
                            </strong>
                        </h4>
                    </center>
                </div>
                <div class="modal-body">
                    <form action="{{ route('registrarmantenimiento.vehicle' , $detallevehiculo->nro_placa) }}" method="POST" role="form">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class=" control-label" for="selectbasic">
                                        TIPO DE MANTENIMIENTO
                                    </label>
                                    <div>
                                        <select class="form-control" id="idtb_tipos_mantenimiento" name="idtb_tipos_mantenimiento" required="">
                                        </select>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="textinput">
                                        GASTO OCASIONADO(S/.)
                                    </label>
                                    <div>
                                        <input class="form-control input-md" id="monto_mantenimiento" name="monto_mantenimiento" placeholder="" required="" type="number">
                                        </input>
                                    </div>
                                </div>
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
                                            @foreach ($kiloyfecha_ult_mant as $dato)                                     
                                            <input class="form-control datepicker3" min="{{ $dato->fecha_ult_mant }}" name="fecha_mantenimiento" step="1" type="date"  value="<?php echo date("Y-m-d");?>">   
                                             @endforeach
                                            </input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="selectbasic">
                                        PROVEEDOR
                                    </label>
                                    <div>
                                        <select class="form-control" id="idproveedor_mantenimiento" name="idproveedor_mantenimiento" required="">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="textarea">
                                        DESCRIPCIÓN
                                    </label>
                                    <div>
                                        <textarea cols="35" name="motivo_mantenimiento" required="" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="divmensajecheck" style="display: none">
                            <p class="mensjadvt">
                                Advertencia : activar casillero si es un mantenimiento general ("preventivo").
                            </p>
                        </div>
                        <br>
                            <div class="form-group row" id="divcheck" style="display: none">
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="recalproxmant" name="recalproxmant" type="checkbox" value="1">
                                            <label class="form-check-label" for="gridCheck1" id="lblprox1">
                                                RECALCULAR PROXIMA FECHA DE MANTENIMIENTO
                                            </label>
                                        </input>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="divnewkilo" style="display: none">
                                <label class="control-label col-md-4" for="textinput">
                                    ULT. ACT. KILOMETRAJE
                                </label>
                                <div class="col-md-4">
                                    @foreach ($kiloyfecha_ult_mant as $dato)                                                    
                                    @if( $newkilo  >= $dato->kilo_ult_mant)
                                    <input class="form-control input-md" id="txtnewkilo" name="txtnewkilo" placeholder="" required="" type="number" value="{{ $newkilo }}">
                                        @else
                                        <input class="form-control input-md" id="txtnewkilo" name="txtnewkilo" placeholder="" required="" type="number" value="{{ $dato->kilo_ult_mant }}">
                                            @endif
                                     @endforeach
                                        </input>
                                    </input>
                                </div>
                            </div>
                            <div class="container-fluid">
                            </div>
                            <div class="modal-footer">
                                <span style="float: left">
                                    <a href="{{ route('histvehi.gastmant', $detallevehiculo->nro_placa) }}">
                                        <strong>
                                            Ver Historial
                                        </strong>
                                    </a>
                                </span>
                                <button class="btn btn-default" data-dismiss="modal" type="button">
                                    Cancelar
                                </button>
                                <button class="btn btn-primary" id="btnRegistrarMantenimiento" type="submit">
                                    Guardar Mantenimiento
                                </button>
                            </div>
                        </br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal - Registrar Gasto Combustible --}}
    <div aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg2" role="dialog" tabindex="-1">
        <div class="modal-dialog" id="mdlrgcomb">
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
                        <h4 class="modal-title" id="modal-register-labelgast">
                            <strong>
                                Registrar Gastos de Combustible
                            </strong>
                        </h4>
                    </center>
                </div>
                <div class="modal-body">
                    <form action="{{ route('registrargastocombust.vehicle' , $detallevehiculo->nro_placa) }}" method="POST" role="form">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="control-label" for="textinput">
                                GASTO(S/.)
                            </label>
                            <div>
                                <input class="form-control input-md" id="monto_gasto_combustible" name="monto_gasto_combustible" required="" type="number">
                                </input>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="textinput">
                                NÚMERO DE TARJETA PARA COMBUSTIBLE
                            </label>
                            <div>
                                <input class="form-control input-md" id="numero_tarjeta" name="numero_tarjeta" required="" type="number">
                                </input>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="textinput">
                                PROVEEDOR DE COMBUSTIBLE
                            </label>
                            <div>
                                <select class="form-control" id="idproveedor_combustible" name="idproveedor_combustible" required="">
                                </select>
                            </div>
                        </div>
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
                                    <input class="form-control datepicker3" name="fechagastocombus" step="1" type="date"  value="<?php echo date("Y-m-d");?>">
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <span style="float: left">
                                <a href="{{ route('histvehi.gastcombu', $detallevehiculo->nro_placa) }}">
                                    <strong>
                                        Ver Historial
                                    </strong>
                                </a>
                            </span>
                            <button class="btn btn-default" data-dismiss="modal" type="button">
                                Cancelar
                            </button>
                            <button class="btn btn-primary" id="btnRegistrarGastoCombustible" type="submit">
                                Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal - Cambiar estado vehiculo --}}
    <div aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg" id="modal1" role="dialog" tabindex="-1">
        <div class="modal-dialog" id="mdldgcbes">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header" id="mlhr1020">
                    <button class="close" data-dismiss="modal" id="bncl45" type="button">
                        <span aria-hidden="true" id="spnx">
                            ×
                        </span>
                        <span class="sr-only w">
                            Close
                        </span>
                    </button>
                    <center>
                        <h3 style="color: black; margin-top: 10px">
                            Advertencia: Cambio de Estado
                        </h3>
                    </center>
                </div>
                <!-- Modal  para cambiar estado vehiculo  -->
                <div class="modal-body">
                    <center>
                        <p style="font-size: 15px">
                            Se procederá a cambiar el estado del vehículo.
                            Por favor llenar todos los campos para su validación
                        </p>
                    </center>
                    <form action="{{ route('estado.vehicle' , $detallevehiculo->nro_placa) }}" method="POST" role="form">
                        {!! method_field('PUT') !!}
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="tipoestado">
                                TIPO DE ESTADO
                            </label>
                            <select class="form-control" id="idestado_vehiculo" name="idestado_vehiculo">
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="textinput">
                                DESCRIPCIÓN
                            </label>
                            <input class="form-control input-md" id="descripcion_estadov" name="descripcion_estadov" placeholder="opcional..." style="height: 55px" type="text" >
                            </input>
                        </div>
                        <div class="form-group" id="divgasto">
                            <label class="control-label" for="gasto_oca_est">
                                GASTO(S/.)
                            </label>
                            <div>
                                <input class="form-control input-md" id="gasto_oca_est" name="gasto_oca_est" placeholder="opcional..." type="number" >
                                </input>
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
                                    <input class="form-control datepicker3" name="fechacambioestado" step="1" type="date"  value="<?php echo date("Y-m-d");?>">
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <span style="float: left">
                                <a href="{{ route('histvehi.estadovehi', $detallevehiculo->nro_placa) }}">
                                    <strong>
                                        Ver Historial
                                    </strong>
                                </a>
                            </span>
                            <button class="btn btn-default" data-dismiss="modal" type="button">
                                Cancelar
                            </button>
                            <button class="btn btn-primary" data-target="#myModal" data-toggle="modal" id="btnupdate" name="btnupdate" type="submit">
                                Guardar Nuevo Estado
                            </button>
                        </div>
                    </form>
                </div>
                <!-- Modal Footer -->
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalpapel" role="dialog">
        <form action="{{ route('reg.papeleta' , $detallevehiculo->nro_placa) }}" enctype="multipart/form-data" method="POST" role="form">
            {{  csrf_field() }}
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button">
                            ×
                        </button>
                        <h4 align="center" class="modal-title">
                            <strong>
                                Agregar Papeletas
                            </strong>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Text input-->
                                <div class="form-group" id="divFechaCambio">
                                    <label class="control-label" for="fechacambio">
                                        FECHA
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <label class="input-group-btn" for="date">
                                                <span class="btn btn-default">
                                                    <span class="glyphicon glyphicon-calendar" style="padding: 3px 4px; top: -2px">
                                                    </span>
                                                </span>
                                            </label>
                                            <input class="form-control datepicker3" name="fecha_papeletas" step="1" type="date"  value="<?php echo date("Y-m-d");?>">
                                            </input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label" for="selectbasic" style="text-align: left">
                                        GASTO
                                    </label>
                                    <div>
                                        <input class="form-control input-md" id="monto_papeleta" name="monto_papeleta" placeholder="" required="" type="number">
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="fotovehiculo" style="margin-left: 80px">
                                        FOTO DE LA PAPELETA
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <input type="file" name="ruta_imagen_papeleta">
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="selectbasic">
                                        CÓDIGO DE PAPELETA
                                    </label>
                                    <div>
                                        <input class="form-control" id="cod_papeleta" name="cod_papeleta" required="">
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        DESCRIPCIÓN
                                    </label>
                                    <div>
                                        <input class="form-control" id="descrip_papeleta" name="descrip_papeleta" required="">
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        ESTADO PAPELETA
                                    </label>
                                    <div>
                                        <label class="radio-inline">
                                            <input checked="" name="estado_pape" type="radio" value="1">
                                                Pagado
                                            </input>
                                        </label>
                                        <label class="radio-inline">
                                            <input name="estado_pape" type="radio" value="0">
                                                Sin Pagar
                                            </input>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span style="float: left">
                                <a href="{{ route('histvehi.papeletas', $detallevehiculo->nro_placa) }}">
                                    <strong>
                                        Ver Historial
                                    </strong>
                                </a>
                            </span>
                        <button class="btn btn-primary" id="btn_guardarpapeleta" type="submit">
                            Guardar Papeleta
                        </button>
                        <button class="btn btn-default" data-dismiss="modal" type="button">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" id="modalSOAT" role="dialog">
        <form action="{{ route('reg.soat' , $detallevehiculo->nro_placa) }}" enctype="multipart/form-data" method="POST" role="form">
            {{  csrf_field() }}
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button">
                            ×
                        </button>
                        <h4 align="center" class="modal-title">
                            <b>
                                Agregar SOAT
                            </b>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class=" control-label" for="selectbasic" style="text-align: left">
                                        PROVEEDOR DE SOAT
                                    </label>
                                    <div>
                                        <select class="form-control" id="idprosoat" name="idprosoat" required="">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="selectbasic">
                                        NRO. DE PÓLIZA
                                    </label>
                                    <div>
                                        <input class="form-control" id="nro_poliza" name="nro_poliza" required="" type="number">
                                        </input>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Text input-->
                                <div class="form-group" id="fechavensoat">
                                    <label class="control-label" for="fechacambio">
                                        FECHA DE VENCIMIENTO
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <label class="input-group-btn" for="date">
                                                <span class="btn btn-default">
                                                    <span class="glyphicon glyphicon-calendar" style="padding: 3px 4px; top: -2px">
                                                    </span>
                                                </span>
                                            </label>
                                            <input class="form-control datepicker3" name="fecha_vencimiento_soat" step="1" type="date"  value="<?php echo date("Y-m-d");?>">
                                            </input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="selectbasic">
                                        PRECIO
                                    </label>
                                    <div>
                                        <input class="form-control" id="monto_soat" name="monto_soat" required="" type="number">
                                        </input>
                                    </div>
                                </div>
                               <div class="form-group">
                                    <label class="control-label" for="fotovehiculo" style="margin-left: 80px">
                                        FOTO DE LA SOAT
                                    </label>
                                    <div>
                                        <div class="input-group">
                                            <input type="file" name="ruta_imagen_soat">
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span style="float: left">
                                <a href="{{ route('histvehi.soat', $detallevehiculo->nro_placa) }}">
                                    <strong>
                                        Ver Historial
                                    </strong>
                                </a>
                            </span>
                        <button class="btn btn-primary" id="btnregistrarsoat" type="submit">
                            AGREGAR SOAT
                        </button>
                        <button class="btn btn-default" data-dismiss="modal" type="button">
                            CANCELAR
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" id="modalAnexos" role="dialog">
        <form action="{{ route('reg.anexos' , $detallevehiculo->nro_placa) }}" enctype="multipart/form-data" method="POST" role="form">
            {{  csrf_field() }}
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button">
                            ×
                        </button>
                        <h4 align="center" class="modal-title">
                            <b>
                                ANEXOS
                            </b>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">      
                        <div class="col-sm-8">
                            <div class="col-sm-2"> 
                                <label for="lgFormGroupInput">
                                    TIPO
                                </label>
                            </div>
                        <div class="col-sm-6">
                           <select class="form-control" id="tipo_doc_anexo" name="tipo_doc_anexo" required="">
                                    <item>
                                        <option value="">
                                            ::Seleccionar::
                                        </option>
                                        <option value="rev.tecnica">
                                           REVISION TECNICA
                                        </option>
                                        <option value="cert.asignacion">
                                            CERTIFICADO ASIGNACION
                                        </option>
                                        <option value="tarj.propiedad">
                                            TARJETA PROPIEDAD
                                        </option>
                                    </item>
                            </select>
                        </div>
                        <br></br>
                        </div>                      
                            <div class="col-md-6">                                             
                               <div class="form-group">
                                    <div>
                                        <div class="input-group">
                                            <input type="file" name="ruta_imagen_anexo" required="">
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label">
                                        DESCRIPCIÓN
                                    </label>
                                    <div>
                                        <input class="form-control" id="observaciones_anexos" name="observaciones_anexos" required="">
                                        </input>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span style="float: left">
                                <a href="{{ route('histvehi.anexos', $detallevehiculo->nro_placa) }}">
                                    <strong>
                                        VER ANEXOS EXISTENTES
                                    </strong>
                                </a>
                            </span>
                        <button class="btn btn-primary" id="btnregistrarsoat" type="submit">
                            GUARDAR ANEXOS
                        </button>
                        <button class="btn btn-default" data-dismiss="modal" type="button">
                            CANCELAR
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <script type="text/javascript">
        function ObtenerProveedorCombustible() {
    $('#idproveedor_combustible').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getProveedorCombustibleJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idproveedor_combustible').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idproveedor_combustible').append('<option value="' + value.idproveedor_combustible + '">' + value.nombre_provee_combus + '</option>');
            });
            
           
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}




    function ObtenerTipoMantenimiento(){
    $('#idtb_tipos_mantenimiento').empty();
    $.ajax({
        type:'GET',
        url: '../../getTipoMantenimientoSON',
        data: {},
        dataType: 'json',
        success:function(data){
            $('#idtb_tipos_mantenimiento').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idtb_tipos_mantenimiento').append('<option value="' + value.idtb_tipos_mantenimiento + '">' + value.nombre_tipo_mant  + '</option>');
            });

          
        },
        error: function (jqXHR, status, err) {
            alert("Local error callback.");

        }
    });
    }




    //cargar combos para registrar un mantenimiento

function ObtenerProveedorMantVehiculo() {
    $('#idproveedor_mantenimiento').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getProveedorMantVehiculosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idproveedor_mantenimiento').append('<option value="">::Seleccionar</option>');
            $.each(data, function(I, value) {
                $('#idproveedor_mantenimiento').append('<option value="' + value.idproveedor_mantenimiento + '">' + value.nombre_provee_mant + '</option>');
            });
           
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}


    //cargar estado para el modal estado de vehiculo
    function ObtenerEstadoVehiculo() {
    $('#idestado_vehiculo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getEstadoVehiculosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idestado_vehiculo').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idestado_vehiculo').append('<option value="' + value.idestado_vehiculo + '">' + value.nombre_estado_vehi + '</option>');
            });
            $('select[name=idestado_vehiculo]').val("{{ $estadovehiculo->idestado_vehiculo }}");
           
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
     function ObtenerProveedorSoat() {
    $('#idprosoat').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getProveedorSoatJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idprosoat').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idprosoat').append('<option value="' + value.idprosoat + '">' + value.nombre_soat + '</option>');
            });
            
           
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
    </script>
    @stop
</link>
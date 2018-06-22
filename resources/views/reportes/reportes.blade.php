@extends('plantillabase')
@section('contenido')
<!-- estilo datapicker fecha -->
<link href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css" rel="stylesheet">
    <!-- estilo datapicker fecha y llenar combo reporte -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js">
    </script>
    <!-- icon fecha cambia-->
    <script src="{{ url('js/reportes.js')  }}">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#idagencia').select2();
    $('#idagenciaestado').select2();

});
    </script>

    <style >
        h3, h4{
            font-weight: bold;
            text-align: center;
            letter-spacing: 1px;
          
        }

        h3{
            padding-bottom: 25px
        }

        fieldset{
         
            padding-top: 10px;
            padding-right: 20px;

        }
    </style>

        <h3>                      
                    MÓDULO GENERADOR DE REPORTES
        </h3>
 
    <!-- Text input-->
    <div class="container-fluid">
        <div class="col-md-12" >
            <div class="col-md-4">
                <fieldset style="margin:auto; ">
                    <legend>
                        <h4>
                            R. ESTADO
                        </h4>
                    </legend>
                    <form action="action" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">
                                AGENCIA
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="idagencia" name="idagencia" required="">
                                </select>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">
                                TIPO AUTO
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="selectbasicvehiculo" name="selectbasicvehiculo">
                                </select>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">
                                ESTADO VEHÍCULO
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="selectbasicReporte" name="selectbasicReporte" onchange="activarboton() " required="">
                                </select>
                            </div>
                        </div>
                        <center>
                            <button class="btn btn-info" id="generarExcel" onclick="this.form.action='excel'" type="submit" style="background-color: white; border-color: white; color: black">
                                GENERAR <img src="http://icons.iconarchive.com/icons/dakirby309/simply-styled/256/Microsoft-Excel-2013-icon.png" height="25" width="25">
                            </button>
                        </center>
                    </form>
                </fieldset>
            </div>
            <div class="col-md-4">
                <fieldset style="margin:auto; ">
                    <legend>
                        <h4>
                           R.SOAT Y MANT
                        </h4>
                    </legend>
                    <form action="{{ route('reporte.estamant') }}" class="form-horizontal" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">
                                AGENCIA
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="idagenciaestado" name="idagenciaestado">
                                </select>
                            </div>
                        </div>
                        <!-- Text input-->
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">
                                TIPO
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="selectbasicReporte" name="selectbasicReporte" required="">
                                    <item>
                                        <option value="">
                                            ::Seleccionar::
                                        </option>
                                        <option value="1">
                                            POLIZA(SOAT)
                                        </option>
                                        <option value="2">
                                            ESTADO MANT
                                        </option>
                                    </item>
                                </select>
                            </div>
                        </div>
                        <center>
                            <button class="btn btn-info" id="generarExcel" type="submit" style="background-color: white; border-color: white; color: black">
                                GENERAR <img src="http://icons.iconarchive.com/icons/dakirby309/simply-styled/256/Microsoft-Excel-2013-icon.png" height="25" width="25">
                            </button>
                        </center>
                    </form>
                </fieldset>
            </div>
            <div class="col-md-4">
                <fieldset style="margin:auto; ">
                    <legend>
                        <h4>
                            R. PAPELETAS
                        </h4>
                    </legend>
                    <form action="{{ route('reporte.papeletas') }}" class="form-horizontal" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">
                                AGENCIA
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="idagenciapapeletas" name="idagenciapapeletas">
                                </select>
                            </div>
                        </div>
                        <!-- Text input-->
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">
                                TIPO
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="selectbasicReporte" name="selectbasicReporte" required="">
                                    <item>
                                        <option value="">
                                            ::Seleccionar::
                                        </option>
                                        <option value="1">
                                            CANCELADAS
                                        </option>
                                        <option value="0">
                                            FALTA CANCELAR
                                        </option>
                                    </item>
                                </select>
                            </div>
                        </div>
                        <center>
                            <button class="btn btn-info" id="generarExcel" type="submit" style="background-color: white; border-color: white; color: black">
                                GENERAR <img src="http://icons.iconarchive.com/icons/dakirby309/simply-styled/256/Microsoft-Excel-2013-icon.png" height="25" width="25">
                            </button>
                        </center>
                    </form>
                </fieldset>
            </div>

        </div>
    </div>

    @stop
</link>
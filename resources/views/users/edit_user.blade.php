@extends('users.navbarUser')
@section('contenido')
<!DOCTYPE html>
<html>
    <head>
        <title>
            Update Usuario
        </title>
    </head>
    <script src="//code.jquery.com/jquery-1.11.3.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
ObtenerTipoZona();
ObtenerAgencia(); 
ObtenerTipoUsuario();

});
    </script>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     @if(count($errors))
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss="alert" type="button">
                        ×
                    </button>
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>
                    {{ $error }}
                    </li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    <form action="{{ route('usuario.update' , $usuarios->id) }}" method="post">
                        {{ csrf_field() }}
                {!! method_field('PUT') !!}
                        <h3 style="font-weight: bold; margin-top: -10px; margin-bottom: 20px">
                            <center>
                                ACTUALIZAR USUARIO
                            </center>
                        </h3>
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-3">
                                {{ csrf_field() }}
                                <div class="form-group" id="nombres">
                                    <label for="name">
                                        NOMBRE:
                                    </label>
                                    <input class="form-control" id="name" name="name" required="" type="text" value="{{ $usuarios->name }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        CORREO ELECTRÓNICO:
                                    </label>
                                    <input class="form-control" id="email" name="email" required="" type="email" value="{{ $usuarios->email }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        NÚMERO DE TELÉFONO
                                    </label>
                                    <input class="form-control" id="telefono" name="telefono" required="" type="number" value="{{ $usuarios->telefono }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        ZONA:
                                    </label>
                                    <select class="form-control" id="cboZonaVehiculo" name="cboZonaVehiculo" onchange="ObtenerAgencia()" required="">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        AGENCIA:
                                    </label>
                                    <select class="form-control" id="idagencia" name="idagencia" required="">
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-offset-2 col-sm-3">
                                <div class="form-group">
                                    <label for="name">
                                        APELLIDO:
                                    </label>
                                    <input class="form-control" id="apellido" name="apellido" required="" type="text" value="{{ $usuarios->apellido }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        CONTRASEÑA
                                    </label>
                                    <input class="form-control" id="password" name="password" required="" type="password" value="{{ $usuarios->password }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        CÓDIGO DEL TRABAJADOR:
                                    </label>
                                    <input class="form-control" id="codigo_trabajador" name="codigo_trabajador" required="" type="text" value="{{ $usuarios->codigo_trabajador }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        TIPO DE USUARIO
                                    </label>
                                    <select class="form-control" id="idrol" name="idrol" required="">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <center>
                            <button class="btn btn-primary" id="updateuser" name="updateuser" type="submit">
                                Actualizar Usuario
                            </button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
@stop
<script type="text/javascript">
    function ObtenerTipoZona() {
    $('#cboZonaVehiculo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getTipoZonasJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboZonaVehiculo').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#cboZonaVehiculo').append('<option value="' + value.idtipo_zona + '">' + value.nombre_zona + '</option>');
            });
            $('select[name=cboZonaVehiculo]').val({{ $usuarios->idtipo_zona }}); 
       
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
function ObtenerAgencia() {
    var CodigoZona = $('#cboZonaVehiculo').val();
    if (CodigoZona != "") {
        $('#idagencia').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../../getAgenciasJSON/' + CodigoZona,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#idagencia').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#idagencia').append('<option value="' + value.idagencia + '">' + value.nombre_agencia + '</option>');
                });
                $('select[name=idagencia]').val({{ $usuarios->idagencia }});  
              
            },
            error: function(jqXHR, status, err) {
                alert("Local error callback.");
            }

        });
    } else {
        $('#idagencia').empty();
        $('#idagencia').append('<option value="">::Seleccionar::</option>');
    }
}
function ObtenerTipoUsuario() {
    $('#idrol').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getTipoUsuario',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idrol').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idrol').append('<option value="' + value.idrol + '">' + value.nombre_roles + '</option>');
            });
        $('select[name=idrol]').val({{ $usuarios->idrol }});  
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
</script>

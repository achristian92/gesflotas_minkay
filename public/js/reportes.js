var zona = -1;
var agencia = -1;

function ObtenerOpciones() {
    $('#selectbasicReporte').empty();
    $.ajax({
        type: 'GET',
        url: '../getEstadoVehiculosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#selectbasicReporte').append('<option value="0">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#selectbasicReporte').append('<option value="' + value.idestado_vehiculo + '">' + "Reporte " + value.nombre_estado_vehi + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerTipoVehiculo() {
    $('#selectbasicvehiculo').empty();
    $.ajax({
        type: 'GET',
        url: '../getTipoVehiculosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#selectbasicvehiculo').append('<option value="0"> Todos los vehiculos </option>');
            $.each(data, function(i, value) {
                $('#selectbasicvehiculo').append('<option value="' + value.idtipovehiculo + '">' + value.nombre_tipo_vehiculo + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerTodasAgencias() {
    $('#idagencia').empty();
    $.ajax({
        type: 'GET',
        url: '../sologetAgenciasJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idagencia').append('<option value="0"> Todos las Agencias </option>');
            $.each(data, function(i, value) {
                $('#idagencia').append('<option value="' + value.idagencia + '">' + value.nombre_agencia + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerTodasAgenciasestado() {
    $('#idagenciaestado').empty();
    $.ajax({
        type: 'GET',
        url: '../sologetAgenciasJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idagenciaestado').append('<option value="0"> Todos las Agencias </option>');
            $.each(data, function(i, value) {
                $('#idagenciaestado').append('<option value="' + value.idagencia + '">' + value.nombre_agencia + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerTodasAgenciaspapeletas() {
    $('#idagenciapapeletas').empty();
    $.ajax({
        type: 'GET',
        url: '../sologetAgenciasJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idagenciapapeletas').append('<option value="0"> Todos las Agencias </option>');
            $.each(data, function(i, value) {
                $('#idagenciapapeletas').append('<option value="' + value.idagencia + '">' + value.nombre_agencia + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
$(document).ready(function() {
    $('#generarExcel').attr('disabled', 'disabled');
    ObtenerTipoVehiculo();
    ObtenerTodasAgencias();
    ObtenerOpciones();
    ObtenerTodasAgenciasestado();
    ObtenerTodasAgenciaspapeletas();
});

function activarboton() {
    var f = $("#selectbasicReporte").val();
    if (f > 0 ? true : false) {
        $('#generarPDF').removeAttr('disabled');
        $('#generarExcel').removeAttr('disabled');
    } else {
        $('#generarPDF').attr('disabled', 'disabled');
        $('#generarExcel').attr('disabled', 'disabled');
    }
}
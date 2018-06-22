function ObtenerTipoZona() {
    $('#cboZonaVehiculo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: 'getTipoZonasJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboZonaVehiculo').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#cboZonaVehiculo').append('<option value="' + value.idtipo_zona + '">' + value.nombre_zona + '</option>');
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
            url: 'getAgenciasJSON/' + CodigoZona,
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
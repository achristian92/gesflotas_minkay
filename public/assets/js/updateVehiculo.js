
function ValidarCampos() {
    var ZonaVehiculo = $('#cboZonaVehiculo').val();
    var Agencia = $('#cboAgencia').val();
    var DepartamentoCargo = $('#cboDepartamentoCargo').val();
    var CentroCosto = $('#cboCentroCosto').val();
    var TipoVehiculo = $('#cboTipoVehiculo').val();

    var Placa = $('#txtPlaca').val();
    var Marca = $('#cboMarcavehiculo').val();
    var AnFabVel = $('#cboAnFabVel').val();
    var Modelo = $('#cboTipoModelo').val();
    var AnModVel = $('#cboAnModVel').val();
    var txtColor = $('#txtColor').val();
    var NumSerMot = $('#txtNumSerMot').val();
    var Carroceria = $('#cboCarroceria').val();
    var PotVel = $('#txtPotVel').val();
    var Ejes = $('#cboEjes').val();
    var NumAsi = $('#cboNumAsi').val();
    var TipoCombustible = $('#cboTipoCombustible').val();
    var EstadoVehiculo = $('#cboEstadoVehiculo').val();
    var FechaSoat = $('#dtpFechaSoat').val();
    var CodTrab = $('#txtCodTrab').val();
    var CodTrabCFIS = $('#txtCodTrabCFIS').val();
    var NumCas = $('#txtNumCas').val();
    var NombApe = $('#txtNombApe').val();
    var NroDni = $('#txtNroDni').val();
    var FechaNac = $('#dtpFechaNac').val();
    var FechaIng = $('#dtpFechaIng').val();
    var Sexo = $('#cboSexo').val();
    var KilopenulMante = $('#txtkilopenulmant').val();
    var FechaPenulMante = $('#dtpFechapenultmant').val();
    var KiloulMante = $('#txtkiloultimomant').val();
    var FechaUltmanteNac = $('#dtpFechaultmant').val();
    var ProveedorMantenimiento = $('#cboProveedorMantenimiento').val();
    var GastoMante = $('#txtgastomant').val();
    var DescripGastoMant = $('#txtDescripmant').val();
    if (ZonaVehiculo == '') {
        $('#msgZona').removeClass("error");
        return false;
    } else {
        $('#msgZona').addClass('error');
    }
    if (Agencia == '') {
        $('#msgAgencia').removeClass("error");
        return false;
    } else {
        $('#msgAgencia').addClass('error');
    }
    if (DepartamentoCargo == '') {
        $('#msgDepartamentoCargo').removeClass("error");
        return false;
    } else {
        $('#msgDepartamentoCargo').addClass('error');
    }
    if (CentroCosto == '') {
        $('#msgCentroCosto').removeClass("error");
        return false;
    } else {
        $('#msgCentroCosto').addClass('error');
    }
    if (TipoVehiculo == '') {
        $('#msgTipoVehiculo').removeClass("error");
        return false;
    } else {
        $('#msgTipoVehiculo').addClass("error");
    }
    if (Placa == '') {
        $('#msgPlaca').removeClass("error");
        return false;
    } else {
        $('#msgPlaca').addClass('error');
    }
    if (getValidarPlacaExistente2()) {
        $('#msgPlaca').removeClass("error");
        return false;
    } else {
        $('#msgPlaca').addClass('error');
    }
    if (Marca == '') {
        $('#msgMarca').removeClass("error");
        return false;
    } else {
        $('#msgMarca').addClass('error');
    }
    if (AnFabVel == '') {
        $('#msgAnFabVel').removeClass("error");
        return false;
    } else {
        $('#msgAnFabVel').addClass('error');
    }
    if (Modelo == '') {
        $('#msgModelo').removeClass("error");
        return false;
    } else {
        $('#msgModelo').addClass('error');
    }
    if (AnModVel == '') {
        $('#msgAnModVel').removeClass("error");
        return false;
    } else {
        $('#msgAnModVel').addClass('error');
    }
    if (txtColor == '') {
        $('#msgtxtColor').removeClass("error");
        return false;
    } else {
        $('#msgtxtColor').addClass('error');
    }
    if (NumSerMot == '') {
        $('#msgNumSerMot').removeClass("error");
        return false;
    } else {
        if (getValidarNumeroSerieMotor2()) {
            return false;
        } else {
            $('#msgNumSerMot').addClass('error');
            $('#msgNumSerMot').text("*Ingrese el numero de serie del motor.");
        }
    }
    if (Carroceria == '') {
        $('#msgCarroceria').removeClass("error");
        return false;
    } else {
        $('#msgCarroceria').addClass('error');
    }
    if (PotVel == '') {
        $('#msgPotVel').removeClass("error");
        return false;
    } else {
        $('#msgPotVel').addClass('error');
    }
    if (Ejes == '') {
        $('#msgEjes').removeClass("error");
        return false;
    } else {
        $('#msgEjes').addClass('error');
    }
    if (NumAsi == '') {
        $('#msgNumAsi').removeClass("error");
        return false;
    } else {
        $('#msgNumAsi').addClass('error');
    }
    if (TipoCombustible == '') {
        $('#msgTipoCombustible').removeClass("error");
        return false;
    } else {
        $('#msgTipoCombustible').addClass('error');
    }
    if (EstadoVehiculo == '') {
        $('#msgEstadoVehiculo').removeClass("error");
        return false;
    } else {
        $('#msgEstadoVehiculo').addClass('error');
    }
    if (FechaSoat == '') {
        $('#msgFechaSoat').removeClass("error");
        return false;
    } else {
        $('#msgFechaSoat').addClass('error');
    }
    if (!ValidarImagen()) {
        return false;
        $('#fake-file-input-name').val("");
    }
    if (CodTrab == '') {
        $('#msgCodTrab').removeClass("error");
        return false;
    } else {
        if (getValidarCodigoTrabajador2()) {
            return false;
        } else {
            $('#msgCodTrab').addClass('error');
            $('#msgCodTrab').text("*Ingresar codigo del trabajador.");
        }
    }
    if (CodTrabCFIS == '') {
        $('#msgCodTrabCFIS').removeClass("error");
        return false;
    } else {
        if (getValidarCodigoTrabajadorCFIS2()) {
            return false;
        } else {
            $('#msgCodTrabCFIS').addClass('error');
            $('#msgCodTrabCFIS').text("*Ingresar codigo CFIS.");
        }
    }
    if (NumCas == '') {
        $('#msgNumCas').removeClass("error");
        return false;
    } else {
        $('#msgNumCas').addClass('error');
    }
    if (NombApe == '') {
        $('#msgNombApe').removeClass("error");
        return false;
    } else {
        $('#msgNombApe').addClass('error');
    }
    if (NroDni == '') {
        $('#msgNroDni').removeClass("error");
        return false;
    } else {
        if (getValidarTrabajadorDNI2()) {
            return false;
        } else {
            $('#msgNroDni').addClass('error');
            $('#msgNroDni').text("*Ingrese el numero del DNI.");
        }
    }
    if (FechaNac == '') {
        $('#msgFechaNac').removeClass("error");
        return false;
    } else {
        $('#msgFechaNac').addClass('error');
    }
    if (FechaIng == '') {
        $('#msgFechaIng').removeClass("error");
        return false;
    } else {
        $('#msgFechaIng').addClass('error');
    }
    if (Sexo == '') {
        $('#msgSexo').removeClass("error");
        return false;
    } else {
        $('#msgSexo').addClass('error');
    }
    if (KilopenulMante == '') {
        $('#msgKiloPenulKilo').removeClass("error");
        return false;
    } else {
        $('#msgKiloPenulKilo').addClass('error');
    }
    if (FechaPenulMante == '') {
        $('#msgFechaPenulMant').removeClass("error");
        return false;
    } else {
        $('#msgFechaPenulMant').addClass('error');
    }
    if (KiloulMante == '') {
        $('#msgkiloultimomant').removeClass("error");
        return false;
    } else {
        $('#msgkiloultimomant').addClass('error');
    }
    if (FechaUltmanteNac == '') {
        $('#msgFechaulMant').removeClass("error");
        return false;
    } else {
        $('#msgFechaulMant').addClass('error');
    }
    if (ProveedorMantenimiento == '') {
        $('#msgProveedorMantemiento').removeClass("error");
        return false;
    } else {
        $('#msgProveedorMantemiento').addClass('error');
    }
    if (GastoMante == '') {
        $('#msgGastoMant').removeClass("error");
        return false;
    } else {
        $('#msgGastoMant').addClass('error');
    }
    if (DescripGastoMant == '') {
        $('#msgDescripGastoMant').removeClass("error");
        return false;
    } else {
        $('#msgDescripGastoMant').addClass('error');
    }
    //VALIDAR PARA Q AL ACTUALIZAR KILOMETRAJE NO INGRESE UNA MENOR
    if (parseInt(KiloulMante) < parseInt(KilopenulMante)) {
        $('#msgkiloultimomant').text("*Ultimo kilometraje debe ser mayor que el anterior");
        $('#msgkiloultimomant').removeClass("error");
        return false;
    } else {
        $('#msgkiloultimomant').addClass('error');
    }
    if (Date.parse(FechaUltmanteNac) < Date.parse(FechaPenulMante)) {
        $('#msgFechaulMant').text("*La Ultima fecha de mantenimiento debe ser mayor que el anterior");
        $('#msgFechaulMant').removeClass("error");
        return false;
    } else {
        $('#msgFechaulMant').addClass('error');
    }
}
function LimpiarCampos() {
    $("#cboZonaVehiculo option:eq(0)").prop("selected", true);
    $("#cboAgencia option:eq(0)").prop("selected", true);
    $("#cboDepartamentoCargo option:eq(0)").prop("selected", true);
    $("#cboCentroCosto option:eq(0)").prop("selected", true);
    $("#cboTipoVehiculo option:eq(0)").prop("selected", true);
    $("#txtPlaca").val("");
    $("#cboMarcavehiculo option:eq(0)").prop("selected", true);
    $("#cboAnFabVel option:eq(0)").prop("selected", true);
    $("#cboTipoModelo option:eq(0)").prop("selected", true);
    $("#cboAnModVel option:eq(0)").prop("selected", true);
    $("#txtColor").val("");
    $("#txtNumSerMot").val("");
    $("#cboCarroceria option:eq(0)").prop("selected", true);
    $("#txtPotVel").val("");
    $("#cboEjes option:eq(0)").prop("selected", true);
    $("#cboNumAsi option:eq(0)").prop("selected", true);
    $("#cboTipoCombustible option:eq(0)").prop("selected", true);
    $("#cboEstadoVehiculo option:eq(0)").prop("selected", true);
    $("#dtpFechaSoat").val("");
    $("#fake-file-input-name").val("");
    $("#txtCodTrab").val("");
    $("#txtCodTrabCFIS").val("");
    $("#txtNumCas").val("");
    $("#txtNombApe").val("");
    $("#txtNroDni").val("");
    $("#dtpFechaNac").val("");
    $("#dtpFechaIng").val("");
    $("#cboSexo option:eq(0)").prop("selected", true);
    //sdcdsdssd
    $("#txtkilopenulmant").val("");
    $("#dtpFechapenultmant").val("");
    $("#txtkiloultimomant").val("");
    $("#dtpFechaultmant").val("");
    $("#cboProveedorMantenimiento option:eq(0)").prop("selected", true);
    $("#txtgastomant").val("");
    $("#txtDescripmant").val("");
    // $("#txtKilRec").val("");
    // $("#txtKilPorDia").val("");
    // $("#files-input-upload").val("");
    // $("span.label.label-danger").addClass('error');
    //alert("Hello World");
}
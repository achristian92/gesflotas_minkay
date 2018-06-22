// function ObtenerTipoUbiDepa() {
//     $('#cboUbiDepVehiculo').empty();
//     $.ajax({
//         async: false,
//         type: 'GET',
//         url: '../getTipoDepartamentosJson',
//         data: {},
//         dataType: 'json',
//         success: function(data) {
//             $('#cboUbiDepVehiculo').append('<option value="">::Seleccionar::</option>');
//             $.each(data, function(i, value) {
//                 $('#cboUbiDepVehiculo').append('<option value="' + value.iddepa + '">' + value.nom_departamento + '</option>');
//             });
//         },
//         error: function(jqXHR, status, err) {
//             alert("Local error callback.");
//         }
//     });
//     // alert("hola");
// }
// function ObtenerUbiProvincias() {
//     var CodigoZona = $('#cboUbiDepVehiculo').val();
//     if (CodigoZona != "") {
//         $('#cboUbiProvinci').empty();
//         $.ajax({
//             async: false,
//             type: 'GET',
//             url: '../getTipoProvinciasJSON/' + CodigoZona,
//             data: {},
//             dataType: 'json',
//             success: function(data) {
//                 $('#cboUbiProvinci').append('<option value="">::Seleccionar::</option>');
//                 $.each(data, function(i, value) {
//                     $('#cboUbiProvinci').append('<option value="' + value.idprov + '">' + value.nom_provincia + '</option>');
//                 });
//             },
//             error: function(jqXHR, status, err) {
//                 alert("Local error callback.");
//             }
//         });
//     } else {
//         $('#cboUbiProvinci').empty();
//         $('#cboUbiProvinci').append('<option value="">::Seleccionar::</option>');
//     }
// }
// function ObtenerUbiDistritos() {
//     var CodigoZona = $('#cboUbiProvinci').val();
//     if (CodigoZona != "") {
//         $('#cboUbiDistrito').empty();
//         $.ajax({
//             async: false,
//             type: 'GET',
//             url: '../getTipoDistritosJSON/' + CodigoZona,
//             data: {},
//             dataType: 'json',
//             success: function(data) {
//                 $('#cboUbiDistrito').append('<option value="">::Seleccionar::</option>');
//                 $.each(data, function(i, value) {
//                     $('#cboUbiDistrito').append('<option value="' + value.iddist + '">' + value.nom_distrito + '</option>');
//                 });
//             },
//             error: function(jqXHR, status, err) {
//                 alert("Local error callback.");
//             }
//         });
//     } else {
//         $('#cboUbiDistrito').empty();
//         $('#cboUbiDistrito').append('<option value="">::Seleccionar::</option>');
//     }
// }
// function ObtenerAgencias() {
//     var CodigoZona = $('#cboUbiDistrito').val();
//     if (CodigoZona != "") {
//         $('#idagencia').empty();
//         $.ajax({
//             async: false,
//             type: 'GET',
//             url: '../getAgenciasJSON/' + CodigoZona,
//             data: {},
//             dataType: 'json',
//             success: function(data) {
//                 $('#idagencia').append('<option value="">::Seleccionar::</option>');
//                 $.each(data, function(i, value) {
//                     $('#idagencia').append('<option value="' + value.idagencia + '">' + value.nombre_agencia + '</option>');
//                 });
//             },
//             error: function(jqXHR, status, err) {
//                 alert("Local error callback.");
//             }
//         });
//     } else {
//         $('#idagencia').empty();
//         $('#idagencia').append('<option value="">::Seleccionar::</option>');
//     }
// }
function ObtenerSoloAgencia() {
    $('#idagencia').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../sologetAgenciasJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idagencia').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idagencia').append('<option value="' + value.idagencia + '">' + value.nombre_agencia + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerDepartamentoCargo() {
    $('#iddepartamento_cargo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../getDepartamentoCargosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#iddepartamento_cargo').append('<option value="">::Seleccionar</option>');
            $.each(data, function(i, value) {
                $('#iddepartamento_cargo').append('<option value="' + value.iddepartamento_cargo + '">' + value.nombre_depar_cargo + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerCentroCosto() {
    $('#idcentro_costo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../getCentroCostosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idcentro_costo').append('<option value="">::Seleccionar</option>');
            $.each(data, function(I, value) {
                $('#idcentro_costo').append('<option value="' + value.idcentro_costo + '">' + value.nombre_centro_costo + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerTipoVehiculo() {
    $('#idtipovehiculo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../getTipoVehiculosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idtipovehiculo').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idtipovehiculo').append('<option value="' + value.idtipovehiculo + '">' + value.nombre_tipo_vehiculo + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerTipoMarcaYCarroceria() {
    var CodigoTipoVehiculo = $('#idtipovehiculo').val();
    if (CodigoTipoVehiculo != "") {
        $('#cboMarcavehiculo').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../getMarcaVehiculoJSON/' + CodigoTipoVehiculo,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#cboMarcavehiculo').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#cboMarcavehiculo').append('<option value="' + value.idtipomarca + '">' + value.nombre_marca + '</option>');
                });
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
    var CodigoTipoVehiculo2 = $('#idtipovehiculo').val();
    if (CodigoTipoVehiculo2 != "") {
        $('#idtipo_carroceria').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../getTipoCarroceriasJSON/' + CodigoTipoVehiculo2,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#idtipo_carroceria').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#idtipo_carroceria').append('<option value="' + value.idtipo_carroceria + '">' + value.nombre_carroceria + '</option>');
                });
            },
            error: function(jqXHR, status, err) {
                alert("Local error callback.");
            }
        });
    } else {
        $('#idtipo_carroceria').empty();
        $('#idtipo_carroceria').append('<option value="">::Seleccionar::</option>');
    }
}

function ObtenerModeloVehiculo() {
    var CodigoZona = $('#cboMarcavehiculo').val();
    if (CodigoZona != "") {
        $('#idtipomodelo').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../getModeloVehiculoJSON/' + CodigoZona,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#idtipomodelo').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#idtipomodelo').append('<option value="' + value.idtipomodelo + '">' + value.nombre_modelo + '</option>');
                });
            },
            error: function(jqXHR, status, err) {
                alert("Local error callback.");
            }
        });
    } else {
        $('#idtipomodelo').empty();
        $('#idtipomodelo').append('<option value="">::Seleccionar::</option>');
    }
}

function ObtenerTipoCombustible() {
    $('#idtipo_combustible').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../getTipoCombustiblesJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idtipo_combustible').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idtipo_combustible').append('<option value="' + value.idtipo_combustible + '">' + value.nombre_combustible + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerEstadoVehiculo() {
    $('#idestado_vehiculo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../getEstadoVehiculosJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idestado_vehiculo').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idestado_vehiculo').append('<option value="' + value.idestado_vehiculo + '">' + value.nombre_estado_vehi + '</option>');
            });
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}

function ObtenerProveedorMantVehiculo() {
    $('#idproveedor_mantenimiento').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../getProveedorMantVehiculosJSON',
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

function cargartodaslasfechas() {
    // $(document).ready(function() {
    //     $('.fecha_vencimiento_soat').datepicker({
    //         format: "yyyy/mm/dd",
    //         language: "es",
    //         autoclose: true
    //     });
    // });
    // $(document).ready(function() {
    //     $('.fecha_nacimiento').datepicker({
    //         format: "yyyy/mm/dd",
    //         language: "es",
    //         autoclose: true
    //     });
    // });
    // $(document).ready(function() {
    //     $('.fecha_ingreso').datepicker({
    //         format: "yyyy/mm/dd",
    //         language: "es",
    //         autoclose: true
    //     });
    // });
    $(document).ready(function() {
        $('.dtpFechapenultmant').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
    });
    $(document).ready(function() {
        $('.fecha_mantenimiento').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
    });
}

function getValidarPlacaExistente2() {
    var bolResultado;
    var Placa = $('#nro_placa').val();
    $.ajax({
        type: 'GET',
        url: '../getValidarPlacaExistente/' + Placa,
        data: {},
        async: false,
        dataType: 'json',
        success: function(data) {
            if (data[0].nro_placa == 1) {
                // // $('#msgPlaca').removeClass("error");
                // $('#msgPlaca').addClass('error');
                $('#msgPlaca').text("*El numero de nro_placa ya existe.");
                bolResultado = true;
            } else {
                // $('#msgPlaca').removeClass("error");
                bolResultado = false;
            }
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
    return bolResultado;
}

function getValidarNumeroSerieMotor2() {
    var bolResultado;
    var NumSerMot = $('#nro_serie_motor').val();
    $.ajax({
        type: 'GET',
        url: '../getValidarSerieMotor/' + NumSerMot,
        data: {},
        async: false,
        dataType: 'json',
        success: function(data) {
            if (data[0].nro_serie_motor == 1) {
                $('#msgNumSerMot').removeClass("error");
                $('#msgNumSerMot').text("*El numero de serie del motor existe.");
                bolResultado = true;
            } else {
                bolResultado = false;
            }
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
    return bolResultado;
}
// function getValidarCodigoTrabajador2() {
//     var bolResultado;
//     var CodTrab = $('#codigo_trabajador').val();
//     $.ajax({
//         type: 'GET',
//         url: '../getValidarCodigoTrabajador/' + CodTrab,
//         data: {},
//         async: false,
//         dataType: 'json',
//         success: function(data) {
//             if (data[0].codigo_trabajador == 1) {
//                 $('#msgCodTrab').removeClass("error");
//                 $('#msgCodTrab').text("*El codigo de trabajador existe.");
//                 bolResultado = true;
//             } else {
//                 bolResultado = false;
//             }
//         },
//         error: function(jqXHR, status, err) {
//             alert("Local error callback.");
//         }
//     });
//     return bolResultado;
// }
// function getValidarTrabajadorDNI2() {
//     var bolResultado;
//     var Nro_Dni = $('#nro_dni').val();
//     $.ajax({
//         type: 'GET',
//         url: '../getValidarTrabajadorDNI/' + Nro_Dni,
//         data: {},
//         async: false,
//         dataType: 'json',
//         success: function(data) {
//             if (data[0].nro_dni == 1) {
//                 $('#msgNroDni').removeClass("error");
//                 $('#msgNroDni').text("*El DNI del trabajador existe.");
//                 bolResultado = true;
//             } else {
//                 bolResultado = false;
//             }
//         },
//         error: function(jqXHR, status, err) {
//             alert("Local error callback.");
//         }
//     });
//     return bolResultado;
// }
function ObtenerFabricacionVehiculo() {
    var d = new Date();
    var fecha = d.getFullYear();
    $('#anio_fabricacion_vehiculo').append('<option value="">::Seleccionar::</option>');
    for (var i = 0; i <= 3; i++) {
        var option = "<option value=" + parseInt(fecha - i) + ">" + parseInt(fecha - i) + "</option>"
        $('#anio_fabricacion_vehiculo').append(option);
    }
}

function ObtenerANOModeloVehiculo() {
    var d = new Date();
    var fecha = d.getFullYear();
    $('#anio_modelo_vehiculo').append('<option value="">::Seleccionar::</option>');
    for (var i = 0; i <= 3; i++) {
        var option = "<option value=" + parseInt(fecha - i) + ">" + parseInt(fecha - i) + "</option>"
        $('#anio_modelo_vehiculo').append(option);
    }
}

function ValidarCampos() {
    var UbiDepartamento = $('#cboUbiDepVehiculo').val();
    var UbiProvincia = $('#cboUbiProvinci').val();
    var UbiDistrito = $('#cboUbiDistrito').val();
    var UbiAgencia = $('#idagencia').val();
    var DepartamentoCargo = $('#iddepartamento_cargo').val();
    var CentroCosto = $('#idcentro_costo').val();
    var TipoVehiculo = $('#idtipovehiculo').val();
    var Placa = $('#nro_placa').val();
    var Marca = $('#cboMarcavehiculo').val();
    var AnFabVel = $('#anio_fabricacion_vehiculo').val();
    var Modelo = $('#idtipomodelo').val();
    var AnModVel = $('#anio_modelo_vehiculo').val();
    var color = $('#color').val();
    var NumSerMot = $('#nro_serie_motor').val();
    var Numchasis = $('#nro_chasis').val();
    var Carroceria = $('#idtipo_carroceria').val();
    var PotVel = $('#fuerza_vehiculo').val();
    // var Ejes = $('#nro_ejes').val();
    // var NumAsi = $('#nro_asientos').val();
    var TipoCombustible = $('#idtipo_combustible').val();
    var EstadoVehiculo = $('#idestado_vehiculo').val();
    // var FechaSoat = $('#fecha_vencimiento_soat').val();
    // var CodTrab = $('#codigo_trabajador').val();
    // var NumCas = $('#nro_serie_casco').val();
    // var NombApe = $('#nombres_apellidos').val();
    // var NroDni = $('#nro_dni').val();
    // var FechaNac = $('#fecha_nacimiento').val();
    // var FechaIng = $('#fecha_ingreso').val();
    // var Sexo = $('#sexo').val();
    var KilopenulMante = $('#txtkilopenulmant').val();
    var FechaPenulMante = $('#dtpFechapenultmant').val();
    var KiloulMante = $('#txtkiloultimomant').val();
    var FechaUltmanteNac = $('#fecha_mantenimiento').val();
    var ProveedorMantenimiento = $('#idproveedor_mantenimiento').val();
    var GastoMante = $('#idproveedor_mantenimiento').val();
    var DescripGastoMant = $('#motivo_mantenimiento').val();
    // if (UbiDepartamento == '') {
    //     $('#msgDepa').removeClass("error");
    //     return false;
    // } else {
    //     $('#msgDepa').addClass('error');
    // }
    // if (UbiProvincia == '') {
    //     $('#msProvincia').removeClass("error");
    //     return false;
    // } else {
    //     $('#msProvincia').addClass('error');
    // }
    // if (UbiDistrito == '') {
    //     $('#msDistrito').removeClass("error");
    //     return false;
    // } else {
    //     $('#msDistrito').addClass('error');
    // }
    // if (UbiAgencia == '') {
    //     $('#msAgencia').removeClass("error");
    //     return false;
    // } else {
    //     $('#msAgencia').addClass('error');
    // }
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
    if (color == '') {
        $('#msgcolor').removeClass("error");
        return false;
    } else {
        $('#msgcolor').addClass('error');
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
    if (Numchasis == '') {
        $('#msgnro_chasis').removeClass("error");
        return false;
    } else {
        $('#msgnro_chasis').addClass('error');
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
    // if (Ejes == '') {
    //     $('#msgEjes').removeClass("error");
    //     return false;
    // } else {
    //     $('#msgEjes').addClass('error');
    // }
    // if (NumAsi == '') {
    //     $('#msgNumAsi').removeClass("error");
    //     return false;
    // } else {
    //     $('#msgNumAsi').addClass('error');
    // }
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
    // if (FechaSoat == '') {
    //     $('#msgFechaSoat').removeClass("error");
    //     return false;
    // } else {
    //     $('#msgFechaSoat').addClass('error');
    // }
    if (!ValidarImagen()) {
        return false;
        $('#fake-file-input-name').val("");
    }
    // if (CodTrab == '') {
    //     $('#msgCodTrab').removeClass("error");
    //     return false;
    // } else {
    //     if (getValidarCodigoTrabajador2()) {
    //         return false;
    //     } else {
    //         $('#msgCodTrab').addClass('error');
    //         $('#msgCodTrab').text("*Ingresar codigo del trabajador.");
    //     }
    // }
    // if (NumCas == '') {
    //     $('#msgNumCas').removeClass("error");
    //     return false;
    // } else {
    //     $('#msgNumCas').addClass('error');
    // }
    // if (NombApe == '') {
    //     $('#msgNombApe').removeClass("error");
    //     return false;
    // } else {
    //     $('#msgNombApe').addClass('error');
    // }
    // if (NroDni == '') {
    //     $('#msgNroDni').removeClass("error");
    //     return false;
    // } else {
    //     if (getValidarTrabajadorDNI2()) {
    //         return false;
    //     } else {
    //         $('#msgNroDni').addClass('error');
    //         $('#msgNroDni').text("*Ingrese el numero del DNI.");
    //     }
    // }
    // if (FechaNac == '') {
    //     $('#msgFechaNac').removeClass("error");
    //     return false;
    // } else {
    //     $('#msgFechaNac').addClass('error');
    // }
    // if (FechaIng == '') {
    //     $('#msgFechaIng').removeClass("error");
    //     return false;
    // } else {
    //     $('#msgFechaIng').addClass('error');
    // }
    // if (Sexo == '') {
    //     $('#msgSexo').removeClass("error");
    //     return false;
    // } else {
    //     $('#msgSexo').addClass('error');
    // }
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

function ValidarNumeroPlaca(textbox) {
    var str = textbox.value.replace(/[^a-zA-Z 0-9-\n\r]+/g, '');
    textbox.value = str.toUpperCase();
}

function ValidarImagen() {
    var archivo = $('#files-input-upload').val();
    var extensiones = ['.jpeg', '.jpg', '.png'];
    if (archivo) {
        var extArchivo = "." + archivo.substr((archivo.lastIndexOf('.') + 1));
        if ($.inArray(extArchivo.toLowerCase(), extensiones) > -1) {
            $('#msgFotoVehiculo').addClass('error');
            var file_size = $('#files-input-upload')[0].files[0].size;
            if (file_size < 1097152) {
                return true;
            } else {
                // Se excedio el tamañp
                $('#fake-file-input-name').val("");
                $('#msgFotoVehiculo').removeClass("error");
                $('#msgFotoVehiculo').text("*El tamaño del archivo excede los 2MB.");
                return false;
            }
        } else {
            // No coincide el formato
            $('#fake-file-input-name').val("");
            $('#msgFotoVehiculo').removeClass("error");
            $('#msgFotoVehiculo').text("*Solo imagenes con extension jpg, png.");
            return false;
        }
    } else {
        $('#fake-file-input-name').val("");
        $('#msgFotoVehiculo').removeClass("error");
        $('#msgFotoVehiculo').text("*Seleccionar una imagen.");
        return false;
    }
}

function LimpiarCampos() {
    $("#cboDepartamento option:eq(0)").prop("selected", true);
    $("#cboUbiProvincia option:eq(0)").prop("selected", true);
    $("#cboUbiDistrito option:eq(0)").prop("selected", true);
    $("#idagencia option:eq(0)").prop("selected", true);
    $("#iddepartamento_cargo option:eq(0)").prop("selected", true);
    $("#idcentro_costo option:eq(0)").prop("selected", true);
    $("#idtipovehiculo option:eq(0)").prop("selected", true);
    $("#nro_placa").val("");
    $("#cboMarcavehiculo option:eq(0)").prop("selected", true);
    $("#anio_fabricacion_vehiculo option:eq(0)").prop("selected", true);
    $("#idtipomodelo option:eq(0)").prop("selected", true);
    $("#anio_modelo_vehiculo option:eq(0)").prop("selected", true);
    $("#color").val("");
    $("#nro_serie_motor").val("");
    $("#nro_chasis").val("");
    $("#idtipo_carroceria option:eq(0)").prop("selected", true);
    $("#fuerza_vehiculo").val("");
    // $("#nro_ejes option:eq(0)").prop("selected", true);
    // $("#nro_asientos option:eq(0)").prop("selected", true);
    $("#idtipo_combustible option:eq(0)").prop("selected", true);
    $("#idestado_vehiculo option:eq(0)").prop("selected", true);
    // $("#fecha_vencimiento_soat").val("");
    $("#fake-file-input-name").val("");
    // $("#codigo_trabajador").val("");
    // $("#nro_serie_casco").val("");
    // $("#nombres_apellidos").val("");
    // $("#nro_dni").val("");
    // $("#fecha_nacimiento").val("");
    // $("#fecha_ingreso").val("");
    // $("#sexo option:eq(0)").prop("selected", true);
    //sdcdsdssd
    $("#txtkilopenulmant").val("");
    $("#dtpFechapenultmant").val("");
    $("#txtkiloultimomant").val("");
    $("#fecha_mantenimiento").val("");
    $("#idproveedor_mantenimiento option:eq(0)").prop("selected", true);
    $("#idproveedor_mantenimiento").val("");
    $("#motivo_mantenimiento").val("");
    // $("#txtKilRec").val("");
    // $("#txtKilPorDia").val("");
    // $("#files-input-upload").val("");
    // $("span.label.label-danger").addClass('error');
    //alert("Hello World");
}

function ValidarMarca(textbox) {
    var str = textbox.value.replace(/[^a-zA-Z \n\r]+/g, '');
    textbox.value = str.toUpperCase();
}

function ValidarModelo(textbox) {
    var str = textbox.value.replace(/[^a-zA-Z 0-9 \n\r]+/g, '');
    textbox.value = str.toUpperCase();
}

function ValidarTexto(textbox) {
    var str = textbox.value.replace(/[^a-zA-Z \n\r]+/g, '');
    textbox.value = str.toUpperCase();
}

function ValidarNumeroSerie(textbox) {
    var str = textbox.value.replace(/[^a-zA-Z 0-9\n\r]+/g, '');
    textbox.value = str.toUpperCase();
}

function ValidarPotencia(textbox) {
    var str = textbox.value.replace(/[^0-9\n\r]+/g, '');
    textbox.value = str;
}

function ValidarNumeroCasco(textbox) {
    var str = textbox.value.replace(/[^0-9\n\r]+/g, '');
    textbox.value = str.toUpperCase();
}

function ValidarKilometraje(textbox) {
    var str = textbox.value.replace(/[^0-9\n\r]+/g, '');
    textbox.value = str.toUpperCase();
}
// function ValidarDNI(textbox) {
//     var str = textbox.value.replace(/[^0-9\n\r]+/g, '');
//     textbox.value = str;
// }
// function ValidarCodigo(textbox) {
//     var str = textbox.value.replace(/[^a-zA-Z 0-9- \n\r]+/g, '');
//     textbox.value = str.toUpperCase();
// }
function KilopenulMante(textbox) {
    var str = textbox.value.replace(/[^0-9\n\r]+/g, '');
    textbox.value = str;
}

function KiloulMante(textbox) {
    var str = textbox.value.replace(/[^0-9\n\r]+/g, '');
    textbox.value = str;
}

function GastoMante(textbox) {
    var str = textbox.value.replace(/[^0-9\n\r]+/g, '');
    textbox.value = str;
}
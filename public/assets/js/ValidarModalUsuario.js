function ObtenerTipoVehiculo(){
	$('#cboTipoVehiculo').empty();
	$.ajax({
		type:'GET',
		url: '/getTipoVehiculosJSON',
		data: {},
		dataType: 'json',
		success:function(data){
			$('#cboTipoVehiculo').append('<option value="">::Seleccionar::</option>');             
			$.each(data, function(i, value) {
				$('#cboTipoVehiculo').append('<option value="' + value.idtipovehiculo + '">' + value.descripcion  + '</option>');
			});
		},
		error: function (jqXHR, status, err) {
			alert("Local error callback.");
		}
	});
}

function ObtenerTipoZona(){
	$('#cboZonaVehiculo').empty();
	$.ajax({
		type: 'GET',
		url: '/getTipoZonasJSON',
		data: {},
		dataType: 'json',
		success: function(data){
			$('#cboZonaVehiculo').append('<option value="">::Seleccionar::</option>');			
			$.each(data, function(i, value) {
				$('#cboZonaVehiculo').append('<option value="' + value.idtipo_zona + '">' + value.descripcion  + '</option>');
			});

		},
		error: function (jqXHR, status, err) {
			alert("Local error callback.");
		}
	});
}

function ObtenerAgencia() {	
	var CodigoZona = $('#cboZonaVehiculo').val();
	if(CodigoZona != "") {
		$('#cboAgencia').empty();
		$.ajax({
			type: 'GET',
			url: '/getAgenciasJSON/' + CodigoZona,
			data: {  },
			dataType: 'json',
			success: function(data){
				$('#cboAgencia').append('<option value="">::Seleccionar::</option>');			
				$.each(data, function(i, value) {
					$('#cboAgencia').append('<option value="' + value.idagencia + '">' + value.descripcion  + '</option>');
				});
			},
			error: function (jqXHR, status, err) {
				alert("Local error callback.");
			}
		});
	} else {
		$('#cboAgencia').empty();
		$('#cboAgencia').append('<option value="">::Seleccionar::</option>');		
	}
}

function ObtenerCarroceria(){
	$('#cboCarroceria').empty();
	$.ajax({
		type: 'GET',
		url: '/getTipoCarroceriasJSON',
		data: {},
		dataType: 'json',
		success:function(data){
			$('#cboCarroceria').append('<option value="">::Seleccionar::</option>');
			$.each(data,function(i,value){
				$('#cboCarroceria').append('<option value="'+value.idtipo_carroceria+'">'+value.descripcion+'</option>');
			});
		},
		error: function(jqXHR,status,err){
			alert("Local error callback.");
		}
	});
}

function ObtenerTipoCombustible(){
	$('#cboTipoCombustible').empty();
	$.ajax({
		type: 'GET',
		url: '/getTipoCombustiblesJSON',
		data: {},
		dataType: 'json',
		success:function(data){
			$('#cboTipoCombustible').append('<option value="">::Seleccionar::</option>');
			$.each(data,function(i,value){
				$('#cboTipoCombustible').append('<option value="'+value.idtipo_combustible+'">'+value.descripcion+'</option>');
			});
		},
		error: function(jqXHR,status,err){
			alert("Local error callback.");
		}
	});
}

function ObtenerEstadoVehiculo(){
	$('#cboEstadoVehiculo').empty();
	$.ajax({
		type: 'GET',
		url: '/getEstadoVehiculosJSON',
		data: {},
		dataType: 'json',
		success:function(data){
			$('#cboEstadoVehiculo').append('<option value="">::Seleccionar::</option>');
			$.each(data,function(i,value){
				$('#cboEstadoVehiculo').append('<option value="'+value.idestado_vehiculo+'">'+value.descripcion+'</option>');
			});
		},
		error:function(jqXHR,status,err){
			alert("Local error callback.");
		}
	});	
}

function ObtenerDepartamentoCargo(){
	$('#cboDepartamentoCargo').empty();
	$.ajax({
		type: 'GET',
		url: '/getDepartamentoCargosJSON',
		data: {},
		dataType: 'json',
		success:function(data){
			$('#cboDepartamentoCargo').append('<option value="">::Seleccionar</option>');
			$.each(data,function(i,value){
				$('#cboDepartamentoCargo').append('<option value="'+value.iddepartamento_cargo+'">'+value.descripcion+'</option>');
			});
		},
		error: function(jqXHR,status,err){
			alert("Local error callback.");
		}
	});
}

function ObtenerCentroCosto(){
	$('#cboCentroCosto').empty();
	$.ajax({
		type: 'GET',
		url: '/getCentroCostosJSON',
		data: {},
		dataType: 'json',
		success:function(data){
			$('#cboCentroCosto').append('<option value="">::Seleccionar</option>');
			$.each(data,function(I,value){
				$('#cboCentroCosto').append('<option value="'+value.IDCENTRO_COSTO+'">'+value.DESCRIPCION+'</option>');
			});
		},
		error:function(jqXHR,status,err){
			alert("Local error callback.");
		}
	});
	
}

function Obtenercalendarios(){
	$( "#dtpFechaSoat" ).datepicker({
        // Formato de la fecha
        dateFormat: "yy-mm-dd",
        // Primer dia de la semana El lunes
        firstDay: 1,
        // Dias Largo en castellano
        dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
        // Dias cortos en castellano
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
        // Nombres largos de los meses en castellano
        monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
        // Nombres de los meses en formato corto 
        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec" ],
        // Cuando seleccionamos la fecha esta se pone en el campo Input 
        onSelect: function(dateText) { 
        	$('#dtpFechaSoat').val(dateText);
        }
    });

	$( "#dtpFechaNac" ).datepicker({
        // Formato de la fecha
        dateFormat: "yy-mm-dd",
        // Primer dia de la semana El lunes
        firstDay: 1,
        // Dias Largo en castellano
        dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
        // Dias cortos en castellano
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
        // Nombres largos de los meses en castellano
        monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
        // Nombres de los meses en formato corto 
        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec" ],
        // Cuando seleccionamos la fecha esta se pone en el campo Input 
        onSelect: function(dateText) { 
        	$('#dtpFechaNac').val(dateText);
        }
    });

	$( "#dtpFechaIng" ).datepicker({
        // Formato de la fecha
        dateFormat: "yy-mm-dd",
        // Primer dia de la semana El lunes
        firstDay: 1,
        // Dias Largo en castellano
        dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
        // Dias cortos en castellano
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
        // Nombres largos de los meses en castellano
        monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
        // Nombres de los meses en formato corto 
        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec" ],
        // Cuando seleccionamos la fecha esta se pone en el campo Input 
        onSelect: function(dateText) { 
        	$('#dtpFechaIng').val(dateText);
        }
    });
}

function getValidarPlacaExistente2(){
	var bolResultado ;
	var Placa = $('#txtPlaca').val(); 
	$.ajax({
		type: 'GET',
		url: '/getValidarPlacaExistente/' + Placa,
		data: {  },
		async: false,
		dataType: 'json',
		success:function(data){
			if (data[0].NRO_PLACA == 1) {
				$('#msgPlaca').removeClass("error");
				$('#msgPlaca').text("*El numero de txtPlaca ya existe.");      
				bolResultado = true;
			} else {
				bolResultado = false;
			}
		},
		error:function(jqXHR,status,err){
			alert("Local error callback.");
		}
	});
	return bolResultado;
}

function getValidarNumeroSerieMotor2(){
	var bolResultado ;
	var NumSerMot = $('#txtNumSerMot').val();
	$.ajax({
		type: 'GET',
		url: '/getValidarSerieMotor/' + NumSerMot,
		data: {  },
		async: false,
		dataType: 'json',
		success:function(data){
			if (data[0].NRO_SERIE_MOTOR == 1) {
				$('#msgNumSerMot').removeClass("error");
				$('#msgNumSerMot').text("*El numero de serie del motor existe.");      
				bolResultado = true;
			} else {
				bolResultado = false;
			}		
		},
		error:function(jqXHR,status,err){
			alert("Local error callback.");
		}
	});
	return bolResultado;
}

function getValidarCodigoTrabajador2(){
	var bolResultado ;
	var CodTrab = $('#txtCodTrab').val();
	$.ajax({
		type: 'GET',
		url: '/getValidarCodigoTrabajador/' + CodTrab,
		data: {  },
		async: false,
		dataType: 'json',
		success:function(data){
			if (data[0].CODIGO_TRABAJADOR == 1) {
				$('#msgCodTrab').removeClass("error");
				$('#msgCodTrab').text("*El codigo de trabajador existe.");      
				bolResultado = true;
			} else {
				bolResultado = false;
			}		
		},
		error:function(jqXHR,status,err){
			alert("Local error callback.");
		}
	});
	return bolResultado;
}

function getValidarCodigoTrabajadorCFIS2(){
	var bolResultado ;
	var CodTrabCFIS = $('#txtCodTrabcfis').val();
	$.ajax({
		type: 'GET',
		url: '/getValidarCodigoTrabajadorCFIS/' + CodTrabCFIS,
		data: {  },
		async: false,
		dataType: 'json',
		success:function(data){
			if (data[0].CODIGO_TRABAJADOR_CFIS == 1) {
				$('#msgCodTrabCFIS').removeClass("error");
				$('#msgCodTrabCFIS').text("*El codigo de trabajador CFIS existe.");      
				bolResultado = true;
			} else {
				bolResultado = false;
			}		
		},
		error:function(jqXHR,status,err){
			alert("Local error callback.");
		}
	});
	return bolResultado;
}

function getValidarTrabajadorDNI2(){
	var bolResultado ;
	var Nro_Dni = $('#txtNroDni').val();
	$.ajax({
		type: 'GET',
		url: '/getValidarTrabajadorDNI/' + Nro_Dni,
		data: {  },
		async: false,
		dataType: 'json',
		success:function(data){
			if (data[0].NRO_DNI == 1) {
				$('#msgNroDni').removeClass("error");
				$('#msgNroDni').text("*El DNI del trabajador existe.");      
				bolResultado = true;
			} else {
				bolResultado = false;
			}		
		},
		error:function(jqXHR,status,err){
			alert("Local error callback.");
		}
	});
	return bolResultado;
}

function VisualizarOpciones(){
	var elemento = $("#cboTipoVehiculo option:selected").text();
	switch (elemento){
		case "AUTOMÓVIL":
		$('#divPlaca').css('display','inline');
		$('#divMarca').css('display','inline');
		$('#divModelo').css('display','inline');
		$('#divtxtColor').css('display','inline');
		$('#divNumSerMot').css('display','inline');
		$('#divAnFabVel').css('display','inline');
		$('#divAnModVel').css('display','inline');
		$('#divCarroceria').css('display','inline');
		$('#divPotVel').css('display','inline');
		$('#divEjes').css('display','inline');
		$('#divNumAsi').css('display','inline');
		$('#divNumCas').css('display','none');
		$('#divTipoCombustible').css('display','inline');
		$('#divPoseeSoat').css('display','inline');
		$('#divFechaSoat').css('display','inline');
		$('#divEstadoVehiculo').css('display','inline');
		$('#divKilRec').css('display','inline');
		$('#divKilPorDia').css('display','inline');		
		$('#divDepartamentoCargo').css('display','inline');
		$('#divFotoVehiculo').css('display','inline');
		$('#divCentroCosto').css('display','inline');
		LimpiarCampos();
		break;
		case "MOTOCICLETA":
		$('#divPlaca').css('display','inline');
		$('#divMarca').css('display','inline');
		$('#divModelo').css('display','inline');
		$('#divtxtColor').css('display','inline');
		$('#divNumSerMot').css('display','inline');
		$('#divAnFabVel').css('display','inline');
		$('#divAnModVel').css('display','inline');
		$('#divCarroceria').css('display','none');
		$('#divPotVel').css('display','inline');
		$('#divEjes').css('display','inline');
		$('#divNumAsi').css('display','inline');
		$('#divNumCas').css('display','inline');
		$('#divTipoCombustible').css('display','inline');
		$('#divPoseeSoat').css('display','inline');
		$('#divFechaSoat').css('display','inline');
		$('#divEstadoVehiculo').css('display','inline');
		$('#divKilRec').css('display','inline');
		$('#divKilPorDia').css('display','inline');	
		$('#divDepartamentoCargo').css('display','inline');
		$('#divFotoVehiculo').css('display','inline');
		$('#divCentroCosto').css('display','inline');
		LimpiarCampos();
		break;
		default:
		$('#divPlaca').css('display','inline');
		$('#divMarca').css('display','inline');
		$('#divModelo').css('display','inline');
		$('#divtxtColor').css('display','inline');
		$('#divNumSerMot').css('display','inline');
		$('#divAnFabVel').css('display','inline');
		$('#divAnModVel').css('display','inline');
		$('#divCarroceria').css('display','inline');
		$('#divPotVel').css('display','inline');
		$('#divEjes').css('display','inline');
		$('#divNumAsi').css('display','inline');
		$('#divNumCas').css('display','inline');
		$('#divTipoCombustible').css('display','inline');
		$('#divPoseeSoat').css('display','inline');
		$('#divFechaSoat').css('display','inline');
		$('#divEstadoVehiculo').css('display','inline');
		$('#divKilRec').css('display','inline');
		$('#divKilPorDia').css('display','inline');	
		$('#divDepartamentoCargo').css('display','inline');
		$('#divFotoVehiculo').css('display','inline');
		$('#divCentroCosto').css('display','inline');
		LimpiarCampos();
	}
}

function ValidarCampos(){
	var TipoVehiculo = $('#cboTipoVehiculo').val();
	var ZonaVehiculo = $('#cboZonaVehiculo').val();  
	var Agencia = $('#cboAgencia').val();
	var Placa = $('#txtPlaca').val();
	var Marca = $('#txtMarca').val();
	var Modelo = $('#txtModelo').val();
	var txtColor = $('#txtColor').val();
	var NumSerMot = $('#txtNumSerMot').val();
	var AnFabVel = $('#cboAnFabVel').val();
	var AnModVel = $('#cboAnModVel').val();
	var Carroceria = $('#cboCarroceria').val();
	var PotVel = $('#telefono').val();
	var Ejes = $('#cboEjes').val();
	var NumAsi = $('#cboNumAsi').val();
	var NumCas = $('#txtNumCas').val();
	var TipoCombustible = $('#cboTipoCombustible').val();
	var TieneSoat = $('input[name=rbtTieneSoat]:checked').val();
	var FechaSoat = $('#dtpFechaSoat').val();
	var EstadoVehiculo = $('#cboEstadoVehiculo').val();
	var KilRec = $('#txtKilRec').val();  
	var KilRecPorDia = $('#txtKilPorDia').val();  
	var DepartamentoCargo = $('#cboDepartamentoCargo').val();
	var CentroCosto = $('#cboCentroCosto').val();
	var CodTrab = $('#txtCodTrab').val();
	var CodTrabCFIS = $('#txtCodTrabcfis').val();
	var NombApe = $('#txtNombApe').val();
	var NroDni = $('#txtNroDni').val();
	var FechaNac = $('#dtpFechaNac').val();
	var FechaIng = $('#dtpFechaIng').val();
	var Sexo = $('#cboSexo').val();

	var elemento = $("#cboTipoVehiculo option:selected").text();
	
	switch (elemento){
		case "AUTOMÓVIL":

		if (TipoVehiculo == '') {
			$('#msgTipoVehiculo').removeClass("error");
			return false;
		} else {
			$('#msgTipoVehiculo').addClass("error");   

		}

		if (ZonaVehiculo == '') {
			$('#msgZona').removeClass("error");
			return false;
		} else {
			$('#msgZona').addClass("error");
		}

		if(Agencia == ''){
			$('#msgAgencia').removeClass("error");
			return false;
		} else {
			$('#msgAgencia').addClass('error');
		}

		if(Placa == ''){        
			$('#msgPlaca').removeClass("error");
			return false;  
		} else {     
			if (getValidarPlacaExistente2()) {
				return false;
			} else {
				$('#msgPlaca').addClass('error');
				$('#msgPlaca').text("*Ingrese un numero de txtPlaca."); 
			}

		} 

		if (Marca == '') {
			$('#msgMarca').removeClass("error");
			return false;
		} else {
			$('#msgMarca').addClass('error');
		}

		if(Modelo == ''){
			$('#msgModelo').removeClass("error");
			return false;
		} else {
			$('#msgModelo').addClass('error');
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

		if (AnFabVel == '') {
			$('#msgAnFabVel').removeClass("error");
			return false;
		} else {
			$('#msgAnFabVel').addClass('error');
		}

		if (AnModVel == '') {
			$('#msgAnModVel').removeClass("error");
			return false;
		} else {
			$('#msgAnModVel').addClass('error');
		}

		if (Carroceria == '') {
			$('#msgCarroceria').removeClass("error");
			return false;
		} else {
			$('#msgCarroceria').addClass('error');
		}

		if (Telefono == '') {
			$('#mstelefono').removeClass("error");
			return false;
		} else {
			$('#mstelefono').addClass('error');
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

		if(TipoCombustible == ''){
			$('#msgTipoCombustible').removeClass("error");
			return false;
		} else {
			$('#msgTipoCombustible').addClass('error');
		}

		if (TieneSoat == 'Si') {
			if(FechaSoat == ''){
				$('#msgFechaSoat').removeClass("error");
				return false;
			} else {          
				$('#msgFechaSoat').addClass('error');
			}
		} else {
			$('#msgFechaSoat').addClass('error');
		}

		if (EstadoVehiculo == '') {
			$('#msgEstadoVehiculo').removeClass("error");
			return false;
		} else {
			$('#msgEstadoVehiculo').addClass('error');
		}

		if (KilRec == '') {
			$('#msgKilRec').removeClass("error");
			return false;
		} else {
			$('#msgKilRec').addClass('error');
		}

		if (KilRecPorDia == '') {
			$('#msgKilPorDia').removeClass("error");
			return false;
		} else {
			$('#msgKilPorDia').addClass('error');
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

		if (Sexo  == '') {
			$('#msgSexo').removeClass("error");
			return false;
		} else {
			$('#msgSexo').addClass('error');
		}

		if(!ValidarImagen()){
			return false;
			$('#fake-file-input-name').val("");
		}
		break;
		case "MOTOCICLETA":
		if (TipoVehiculo == '') {
			$('#msgTipoVehiculo').removeClass("error");
			return false;
		} else {
			$('#msgTipoVehiculo').addClass("error");    

		}

		if (ZonaVehiculo == '') {
			$('#msgZona').removeClass("error");
			return false;
		} else {
			$('#msgZona').addClass("error");
		}

		if(Agencia == ''){
			$('#msgAgencia').removeClass("error");
			return false;
		} else {
			$('#msgAgencia').addClass('error');
		}

		if(Placa == ''){        
			$('#msgPlaca').removeClass("error");
			return false;  
		} else {     
			if (getValidarPlacaExistente2()) {
				return false;
			} else {
				$('#msgPlaca').addClass('error');
				$('#msgPlaca').text("*Ingrese un numero de txtPlaca."); 
			}

		} 

		if (Marca == '') {
			$('#msgMarca').removeClass("error");
			return false;
		} else {
			$('#msgMarca').addClass('error');
		}

		if(Modelo == ''){
			$('#msgModelo').removeClass("error");
			return false;
		} else {
			$('#msgModelo').addClass('error');
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

		if (AnFabVel == '') {
			$('#msgAnFabVel').removeClass("error");
			return false;
		} else {
			$('#msgAnFabVel').addClass('error');
		}

		if (AnModVel == '') {
			$('#msgAnModVel').removeClass("error");
			return false;
		} else {
			$('#msgAnModVel').addClass('error');
		}

		if (Telefono == '') {
			$('#mstelefono').removeClass("error");
			return false;
		} else {
			$('#mstelefono').addClass('error');
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

		if(NumCas == ''){
			$('#msgNumCas').removeClass("error");
			return false;
		} else {
			$('#msgNumCas').addClass('error');
		}

		if(TipoCombustible == ''){
			$('#msgTipoCombustible').removeClass("error");
			return false;
		} else {
			$('#msgTipoCombustible').addClass('error');
		}

		if (TieneSoat == 'Si') {
			if(FechaSoat == ''){
				$('#msgFechaSoat').removeClass("error");
				return false;
			} else {          
				$('#msgFechaSoat').addClass('error');
			}
		} else {
			$('#msgFechaSoat').addClass('error');
		}

		if (EstadoVehiculo == '') {
			$('#msgEstadoVehiculo').removeClass("error");
			return false;
		} else {
			$('#msgEstadoVehiculo').addClass('error');
		}

		if (KilRec == '') {
			$('#msgKilRec').removeClass("error");
			return false;
		} else {
			$('#msgKilRec').addClass('error');
		}

		if (KilRecPorDia == '') {
			$('#msgKilPorDia').removeClass("error");
			return false;
		} else {
			$('#msgKilPorDia').addClass('error');
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

		if (Sexo  == '') {
			$('#msgSexo').removeClass("error");
			return false;
		} else {
			$('#msgSexo').addClass('error');
		}

		if(!ValidarImagen()){
			return false;
			$('#fake-file-input-name').val("");
		}
		break;
		default:
		if (TipoVehiculo == '') {
			$('#msgTipoVehiculo').removeClass("error");
			return false;
		} else {
			$('#msgTipoVehiculo').addClass("error");    

		}

		if (ZonaVehiculo == '') {
			$('#msgZona').removeClass("error");
			return false;
		} else {
			$('#msgZona').addClass("error");
		}

		if(Agencia == ''){
			$('#msgAgencia').removeClass("error");
			return false;
		} else {
			$('#msgAgencia').addClass('error');
		}

		if(Placa == ''){        
			$('#msgPlaca').removeClass("error");
			return false;  
		} else {     
			if (getValidarPlacaExistente2()) {
				return false;
			} else {
				$('#msgPlaca').addClass('error');
				$('#msgPlaca').text("*Ingrese un numero de placa."); 
			}

		} 

		if (Marca == '') {
			$('#msgMarca').removeClass("error");
			return false;
		} else {
			$('#msgMarca').addClass('error');
		}

		if(Modelo == ''){
			$('#msgModelo').removeClass("error");
			return false;
		} else {
			$('#msgModelo').addClass('error');
		}

		if (Color == '') {
			$('#msgColor').removeClass("error");
			return false;
		} else {
			$('#msgColor').addClass('error');
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

		if (AnFabVel == '') {
			$('#msgAnFabVel').removeClass("error");
			return false;
		} else {
			$('#msgAnFabVel').addClass('error');
		}

		if (AnModVel == '') {
			$('#msgAnModVel').removeClass("error");
			return false;
		} else {
			$('#msgAnModVel').addClass('error');
		}

		if (Carroceria == '') {
			$('#msgCarroceria').removeClass("error");
			return false;
		} else {
			$('#msgCarroceria').addClass('error');
		}

		if (Telefono == '') {
			$('#mstelefono').removeClass("error");
			return false;
		} else {
			$('#mstelefono').addClass('error');
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

		if(NumCas == ''){
			$('#msgNumCas').removeClass("error");
			return false;
		} else {
			$('#msgNumCas').addClass('error');
		}

		if(TipoCombustible == ''){
			$('#msgTipoCombustible').removeClass("error");
			return false;
		} else {
			$('#msgTipoCombustible').addClass('error');
		}

		if(FechaSoat == ''){
			$('#msgFechaSoat').removeClass("error");
			return false;
		} else {
			$('#msgFechaSoat').addClass('error');
		}

		if (EstadoVehiculo == '') {
			$('#msgEstadoVehiculo').removeClass("error");
			return false;
		} else {
			$('#msgEstadoVehiculo').addClass('error');
		}

		if (KilRec == '') {
			$('#msgKilRec').removeClass("error");
			return false;
		} else {
			$('#msgKilRec').addClass('error');
		}

		if (KilRecPorDia == '') {
			$('#msgKilPorDia').removeClass("error");
			return false;
		} else {
			$('#msgKilPorDia').addClass('error');
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

		if (Sexo  == '') {
			$('#msgSexo').removeClass("error");
			return false;
		} else {
			$('#msgSexo').addClass('error');
		}

		if(!ValidarImagen()){
			return false;
			$('#fake-file-input-name').val("");
		}	
	}
}


function ObtenerFabricacionVehiculo(){
	var d = new Date();
	var fecha = d.getFullYear();
	$('#cboAnFabVel').append('<option value="">::Seleccionar::</option>');
	for (var i = 0; i <= 30; i++) {       
		var option = "<option value=" + parseInt(fecha - i) + ">" + parseInt(fecha - i) + "</option>"
		$('#cboAnFabVel').append(option);
	}
}

function ObtenerModeloVehiculo(){
	var d = new Date();
	var fecha = d.getFullYear();
	$('#cboAnModVel').append('<option value="">::Seleccionar::</option>');
	for (var i = 0; i <= 30; i++) {       
		var option = "<option value=" + parseInt(fecha - i) + ">" + parseInt(fecha - i) + "</option>"
		$('#cboAnModVel').append(option);
	}
}

function ValidarNumeroPlaca(textbox) {
	var str = textbox.value.replace(/[^a-zA-Z 0-9-\n\r]+/g, '');
	textbox.value = str.toUpperCase();
}

function ValidarImagen(){
	var archivo = $('#files-input-upload').val();
	var extensiones = ['.jpeg','.jpg','.png','.gif'];
	if (archivo) {
		var extArchivo = "." + archivo.substr((archivo.lastIndexOf('.') + 1));
		if ( $.inArray ( extArchivo.toLowerCase(), extensiones ) > -1 ){
			$('#msgFotoVehiculo').addClass('error');
			var file_size = $('#files-input-upload')[0].files[0].size;
			if (file_size < 2097152) {
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
      $('#msgFotoVehiculo').text("*Solo imagenes con extension jpg, png, gif.");      
      return false;
  }
}else {
	$('#fake-file-input-name').val("");
	$('#msgFotoVehiculo').removeClass("error");
	$('#msgFotoVehiculo').text("*Seleccionar una imagen."); 
	return false;
}
}

function LimpiarCampos(){
	$("#cboZonaVehiculo option:eq(0)").prop("selected", true);
	$("#cboAgencia option:eq(0)").prop("selected", true);
	$("#txtPlaca").val("");
	$("#txtMarca").val("");
	$("#txtModelo").val("");
	$("#txtColor").val("");
	$("#txtNumSerMot").val("");
	$("#cboAnFabVel option:eq(0)").prop("selected", true);
	$("#cboAnModVel option:eq(0)").prop("selected", true);
	$("#telefono").val("");
	$("#cboEjes option:eq(0)").prop("selected", true);
	$("#cboNumAsi option:eq(0)").prop("selected", true);
	$("#txtNumCas").val("");
	$("#cboTipoCombustible option:eq(0)").prop("selected", true);
	$("#dtpFechaSoat").val("");
	$("#cboEstadoVehiculo option:eq(0)").prop("selected", true);
	$("#txtKilRec").val("");
    $("#txtKilPorDia").val("");
	$("#cboDepartamentoCargo option:eq(0)").prop("selected", true);
	$("#cboCentroCosto option:eq(0)").prop("selected", true);
	$("#txtCodTrab").val("");
	$("#txtCodTrabCFIS").val("");
	$("#txtNombApe").val("");
	$("#txtNroDni").val("");
	$("#dtpFechaNac").val("");
	$("#dtpFechaIng").val("");
	$("#cboSexo option:eq(0)").prop("selected", true);
	$("#files-input-upload").val("");
	$("#fake-file-input-name").val("");
	$("span.label.label-danger").addClass('error'); 
	//alert("Hello World");
}

function OcultarMensaje(){
	var TieneSoat = $('input[name=rbtTieneSoat]:checked').val();
	if (TieneSoat == 'No') {           
		$('#msgFechaSoat').addClass('error');
	} 
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

function ValidarDNI(textbox) {
	var str = textbox.value.replace(/[^0-9\n\r]+/g, '');
	textbox.value = str;
}

function ValidarCodigo(textbox) {
	var str = textbox.value.replace(/[^a-zA-Z 0-9- \n\r]+/g, '');
	textbox.value = str.toUpperCase();
}
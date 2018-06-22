<?php

Auth::routes();
//-------------Cargar Combos de registro vehiculo-----------------------------------------------------
Route::get('getZona', 'cargarCombosVehiculo@getZona');
Route::get('getTipoDepartamentosJson', 'cargarCombosVehiculo@getTipoDepartamentosJson');
Route::get('getTipoProvinciasJSON/{tipodepa}', 'cargarCombosVehiculo@getTipoProvinciasJSON');
Route::get('getTipoDistritosJSON/{tipoprov}', 'cargarCombosVehiculo@getTipoDistritosJSON');
Route::get('getAgenciasJSON/{TipoZona}', 'cargarCombosVehiculo@getAgenciasJSON');
Route::get('sologetAgenciasJSON', 'cargarCombosVehiculo@sologetAgenciasJSON');
Route::get('soloparareporte/{TipoZona}', 'cargarCombosVehiculo@soloxreporte');
Route::get('getDepartamentoCargosJSON', 'cargarCombosVehiculo@getDepartamentoCargosJSON');
Route::get('getCentroCostosJSON', 'cargarCombosVehiculo@getCentroCostosJSON');
Route::get('getTipoVehiculosJSON', 'cargarCombosVehiculo@getTipoVehiculosJSON');
Route::get('getMarcaVehiculoJSON/{tipovehiculo}', 'cargarCombosVehiculo@getMarcaVehiculoJSON');
Route::get('getModeloVehiculoJSON/{tipovehiculo}', 'cargarCombosVehiculo@getModeloVehiculoJSON');
Route::get('getTipoCarroceriasJSON/{tipovehiculo}', 'cargarCombosVehiculo@getTipoCarroceriasJSON');
Route::get('getTipoCombustiblesJSON', 'cargarCombosVehiculo@getTipoCombustiblesJSON');
Route::get('getEstadoVehiculosJSON', 'cargarCombosVehiculo@getEstadoVehiculosJSON');
Route::get('getProveedorMantVehiculosJSON', 'cargarCombosVehiculo@getProveedorMantVehiculosJSON');
Route::get('getTipoMantenimientoSON', 'cargarCombosVehiculo@getTipoMantenimientoSON');
Route::get('getProveedorCombustibleJSON', 'cargarCombosVehiculo@getProveedorCombustibleJSON');
Route::get('getTipoUsuario', 'cargarCombosVehiculo@getTipoUsuario');
Route::get('getProveedorSoatJSON', 'cargarCombosVehiculo@getProveedorSoatJSON');
Route::get('getconductoresJson', 'cargarCombosVehiculo@getconductoresJson');



//-------------Validar Duplicaciones en registro vehiculo----------------------------------------------
Route::get('/getValidarPlacaExistente/{Nro_Placa}', 'DatoVehiculoController@getValidarPlacaExistente');
Route::get('/getValidarSerieMotor/{Nro_Serie_Motor}', 'DatoVehiculoController@getValidarSerieMotor');
Route::get('/getValidarCodigoTrabajador/{Codigo_Trabajador}', 'DatoConductorController@getValidarCodigoTrabajador');
Route::get('/getValidarCodigoTrabajadorCFIS/{Codigo_Trabajador_CFIS}', 'DatoConductorController@getValidarCodigoTrabajadorCFIS');
Route::get('/getValidarTrabajadorDNI/{Nro_Dni}', 'DatoConductorController@getValidarTrabajadorDNI');
//-----------------------------------------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

//-------------URL DE PANEL PRINCIPAL-----------------------------------------------------
Route::get('consulta/estado-mantenimiento', ['as' => 'estadovehiculo', 'uses' => 'RutasPanelController@estadovehiculo']);
Route::get('generar/reportes', ['as' => 'generarreportes', 'uses' => 'RutasPanelController@generarreportes']);
Route::get('importar/index', ['as' => 'import.index', 'uses' => 'RutasPanelController@importindex']);
//-----------------------------------------------------------------------------------------------------

//-------------------------------LISTA DE VEHICULOS--------------------------------------------------
Route::get('ListaVehiculo/index', ['as' => 'vehiculo.index', 'uses' => 'VehiculoController@index']);
Route::get('Vehiculo/create', ['as' => 'vehiculo.create', 'uses' => 'VehiculoController@create']);
Route::post('setGuardarInfoVehiculo', ['as' => 'vehiculo.store', 'uses' => 'VehiculoController@store']);
Route::get('Buscar-Vehiculo/{id}/detalleVehiculo', ['as' => 'vehiculo.show', 'uses' => 'VehiculoController@show']);
Route::get('Buscar-Vehiculo/{id}/edit', ['as' => 'vehiculo.edit', 'uses' => 'VehiculoController@edit']);
Route::put('vehiculo/{id}', ['as' => 'vehiculo.update', 'uses' => 'VehiculoController@update']);
Route::delete('vehiculo/{id}', ['as' => 'vehiculo.destroy', 'uses' => 'VehiculoController@destroy']);
Route::get('/getVehiculosRegistradosJSON', 'DatoVehiculoController@getVehiculosRegistradosJSON');
Route::post('ExportarDataVehiculos', ['as' => 'xls.exportdatavh', 'uses' => 'ExcelController@exportdatavh']);

//-------------------------------------------------------------------------------------------------------------

//-------------DENTRO DE DETALLE VEHICULO(ESTADO,ACTUA,MANTEN,COMBUSTI)-----------------------------------------------------
Route::post('newkilometraje/{idnro_placa}', ['as' => 'newkilo.vehicle', 'uses' => 'DetalleController@newkilometraje']);
Route::post('registrarmant/{idnro_placa}', ['as' => 'registrarmantenimiento.vehicle', 'uses' => 'DetalleController@registrarmant']);
Route::post('registrargastocombust/{idnro_placa}', ['as' => 'registrargastocombust.vehicle', 'uses' => 'DetalleController@registrargastocombust']);
Route::post('RegistrarPapeleta/{idnro_placa}', ['as' => 'reg.papeleta', 'uses' => 'DetalleController@regpapeleta']);
Route::post('RegistrarSoat/{idnro_placa}', ['as' => 'reg.soat', 'uses' => 'DetalleController@regsoat']);
Route::post('RegistrarAnexos/{idnro_placa}', ['as' => 'reg.anexos', 'uses' => 'DetalleController@reganexos']);
Route::put('cambioestado/{idnro_placa}', ['as' => 'estado.vehicle', 'uses' => 'DetalleController@cambiarestadovehicle']);
//-------------------------------------------------------------------------------------------------------------

//-------------USER-----------------------------------------------------
Route::get('usuarios/index', ['as' => 'usuario.index', 'uses' => 'UsersController@index']);
Route::get('Listausuarios/create/newuser', ['as' => 'usuario.create', 'uses' => 'UsersController@create']);
Route::post('usuario', ['as' => 'usuario.store', 'uses' => 'UsersController@store']);
Route::get('Usuario/{id}/edit', ['as' => 'usuario.edit', 'uses' => 'UsersController@edit']);
Route::put('usuario/{id}', ['as' => 'usuario.update', 'uses' => 'UsersController@update']);
Route::delete('usuario/{id}', ['as' => 'usuario.destroy', 'uses' => 'UsersController@destroy']);
//-------------------------------------------------------------------------------------------------------------

//-------------REPORTES--------------------------------------------------------------------------------
Route::post('generar/excel', 'ExcelController@index');
Route::post('exportarestadomant/excel', ['as' => 'reporte.estamant', 'uses' => 'ExcelController@exportarestadovehi']);
Route::post('exportarpapeletas/excel', ['as' => 'reporte.papeletas', 'uses' => 'ExcelController@exportarpapeletas']);
//-----------------------------------------------------------------------------------------------------

//-------------INDICADORES--------------------------------------------------------------------------------
// Route::get('/getIndicadoresData/{tipo}', 'IndicadorController@getMax10'); //cargar datos tabla {tipo=ASC,DESC}
// Route::get('Indicadores/Top', ['as' => 'indicadores', 'uses' => 'IndicadorController@getIndicador']);


Route::get('indicadores/index', ['as' => 'indicadores', 'uses' => 'IndicadorController@newindicador']);
//-----------------------------------------------------------------------------------------------------

//-------------HISTORIAL--------------------------------------------------------------------------------
Route::get('Historial/{nro_placa}/newkilometraje', ['as' => 'histvehi.newkilo', 'uses' => 'HistorialController@newkilo']);
Route::post('Exportarxlsupdatekilo/{nro_placa}', ['as' => 'xls.newkilo', 'uses' => 'ExcelController@xlxnewkilo']);
Route::get('Historial/{nro_placa}/gastomantenimiento', ['as' => 'histvehi.gastmant', 'uses' => 'HistorialController@gastomant']);
Route::post('Exportarxlsgastomantenimiento/{nro_placa}', ['as' => 'xls.gastmant', 'uses' => 'ExcelController@xlxhistomant']);
Route::get('Historial/{nro_placa}/gastocombustible', ['as' => 'histvehi.gastcombu', 'uses' => 'HistorialController@gastocombustible']);
Route::post('Exportarxlsgastocombustible/{nro_placa}', ['as' => 'xls.gastocombu', 'uses' => 'ExcelController@xlxgastocombu']);
Route::get('Historial/{nro_placa}/Papeletas', ['as' => 'histvehi.papeletas', 'uses' => 'HistorialController@papeletas']);
Route::post('Exportarxlspapeletas/{nro_placa}', ['as' => 'xls.papeletas', 'uses' => 'ExcelController@xlxpapeletas']);
Route::get('Historial/{nro_placa}/Soat', ['as' => 'histvehi.soat', 'uses' => 'HistorialController@soat']);
Route::post('Exportarxlssoat/{nro_placa}', ['as' => 'xls.soat', 'uses' => 'ExcelController@xlxsoat']);
Route::get('Historial/{nro_placa}/anexos', ['as' => 'histvehi.anexos', 'uses' => 'HistorialController@hanexos']);
Route::get('Historial/{nro_placa}/estadovehiculo', ['as' => 'histvehi.estadovehi', 'uses' => 'HistorialController@estadovehi']);
Route::post('Exportarxlsestadovehi/{nro_placa}', ['as' => 'xls.estadovehi', 'uses' => 'ExcelController@xlxestado']);
// Route::get('Indicadores/Top', ['as' => 'indicadores', 'uses' => 'IndicadorController@getIndicador']);

//-----------------------------------------------------------------------------------------------------

//-------------CONDUCTORES--------------------------------------------------------------------------------
Route::get('Asignar/{nro_placa}/Conductor', ['as' => 'show.conduc', 'uses' => 'DatoConductorController@conduc_vehi']);
Route::post('asignarconductor/{idnro_placa}/store', ['as' => 'store.conduc', 'uses' => 'DatoConductorController@storeconduc_vehi']);


//-------------PLANTILLA ADMINLTE-----------------------------------------------------


Route::get('admin', function () {
    return view('admin.dashbord');
});
Route::get('indexvehiculo', function () {
    return view('admin.index_vehiculo');
});

Route::get('departcargo', ['as' => 'deparacargo', 'uses' => 'DeparController@index']);

Route::get('centrocosto', ['as' => 'index.centrocosto', 'uses' => 'CentroCostoController@index']);

Route::get('marca', ['as' => 'marcas', 'uses' => 'MarcaController@index']);

Route::get('modelos', ['as' => 'model.index', 'uses' => 'ModeloController@index']);
// Route::get('departcargo', function () {
//     return view('admin.depar_cargo');
// });

Route::get('agencias', ['as' => 'agen', 'uses' => 'AgenciaController@index']);

Route::get('proveedorcomb', ['as' => 'provecomb', 'uses' => 'ProveedorCombustibleController@index']);

Route::get('proveedormante', ['as' => 'provemant', 'uses' => 'ProveedorMantenimientoController@index']);

Route::get('conductores', ['as' => 'conductores.index', 'uses' => 'DatoConductorController@index']);


// Route::get('marcmodl', function () {
//     return view('admin.marcamodel');
// });

// Route::get('marcmodl', function () {
//     return view('admin.marcamodel');
// });



//-------------IMPORTAR CSV--------------------------------------------------------------------------------


Route::post('procesarexcel', ['as' => 'importarexcel', 'uses' => 'ImportarCsvController@importarexcel']);
Route::post('plantillaconductores', ['as' => 'plant.conductores', 'uses' => 'ImportarCsvController@plantillaconductores']);
Route::post('plantillacombustible', ['as' => 'plant.combu', 'uses' => 'ImportarCsvController@plantillacombustible']);

Route::post('importarcsv', ['as' => 'import.csv', 'uses' => 'ImportarCsvController@importarcsv']);






<?php

namespace GestionFlotas\Http\Controllers;

use Carbon\Carbon;
use Charts;
use GestionFlotas\ConducyVehi;
use GestionFlotas\DatoVehiculo;
use GestionFlotas\EstadoVehiculo;
use GestionFlotas\HistoricoKilometraje;
use GestionFlotas\MantenimientoVehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('vehicle.createvehiculo');
    }
    public function index(Request $request)
    {
        $datosvehiculo = DatoVehiculo::searchfornroplaca($request->get('num_placa'))
            ->orderBy('tb_datos_vehiculo.iddatosvehiculo', 'des')
            ->join('tb_tipos_modelo_vehiculos', 'tb_tipos_modelo_vehiculos.idtipomodelo', '=', 'tb_datos_vehiculo.idtipomodelo')
            ->join('tb_tipos_vehiculos', 'tb_datos_vehiculo.idtipovehiculo', '=', 'tb_tipos_vehiculos.idtipovehiculo')
            ->join('tb_estado_vehiculo', 'tb_estado_vehiculo.nro_placa', '=', 'tb_datos_vehiculo.nro_placa')
            ->join('tb_tipos_estados_vehiculos', 'tb_tipos_estados_vehiculos.idestado_vehiculo', '=', 'tb_estado_vehiculo.idestado_vehiculo')
            ->join('tb_tipos_agencias', 'tb_datos_vehiculo.idagencia', '=', 'tb_tipos_agencias.idagencia')
            ->join('tb_conducyvehi', 'tb_datos_vehiculo.nro_placa', '=', 'tb_conducyvehi.nro_placa')
            ->join('tb_datos_conductores', 'tb_conducyvehi.iddtconductores', '=', 'tb_datos_conductores.iddtconductores')
            ->where('tb_conducyvehi.estadoact', 1)
            ->where('tb_datos_vehiculo.estado', 1)
            ->where('tb_estado_vehiculo.estadoact_vehi', 1)
            ->paginate(50);
         
        return view('vehicle.Listavehiculos', compact('datosvehiculo'));

    }
    public function store(Request $request)
    {
        $FechaHoraActual = date('Y_m_d_H_i_s');
        $FechaHoraId     = $FechaHoraActual;

        $ImagenVehiculo = $request->file('files-input-upload');

        // Generando Id para la imagen
        $imageName = $FechaHoraId . '.' .
        $request->file('files-input-upload')->getClientOriginalExtension();

        // Moviendo imagen con su nombre de Id generado anteriormente y moviendose a la carpeta imagenes.
        $request->file('files-input-upload')->move(
            base_path() . '/public/uploads', $imageName
            // base_path() . '/uploads', $imageName

        );

        $newiddatosvehiculo = DB::select("SELECT COUNT(iddatosvehiculo) + 1 as iddatosvehiculo FROM tb_datos_vehiculo; ");
        // $newdatosconductor = DB::select("SELECT COUNT(iddtconductores) + 1 AS iddtconductores FROM tb_datos_conductores; ");

        // Insertando Tabla TB_DATOS_VEHICULO
        $DatoVehiculo                  = new DatoVehiculo($request->all());
        $DatoVehiculo->iddatosvehiculo = $newiddatosvehiculo[0]->iddatosvehiculo;
        $DatoVehiculo->ruta_imagen     = 'uploads/' . $imageName;
        $DatoVehiculo->nombre_imagen   = $imageName;
        $DatoVehiculo->idusuario       = auth()->user()->id;
        $DatoVehiculo->estado          = 1;
        $DatoVehiculo->save();

        //Insertando el estado del vehiculo
        $estavehiculo            = new EstadoVehiculo($request->all());
        $estavehiculo->idusuario = auth()->user()->id;
        $estavehiculo->estadoact_vehi = 1;
        $estavehiculo->save();

        // // Insertando Tabla TB_DATOS_CONDUCTOR
        // $DatoConductor                               = new DatoConductor($request->all());
        // $DatoConductor->iddtconductores              = $newdatosconductor[0]->iddtconductores;
        // $DatoConductor->idusuario                    = auth()->user()->id;
        // $DatoConductor->save();

        // Insertando Tabla TB_HISTORICO_KILOMETRAJE
        $HistoricoKilometraje            = new HistoricoKilometraje($request->all());
        $HistoricoKilometraje->estado    = 1;
        $HistoricoKilometraje->idusuario = auth()->user()->id;
        $HistoricoKilometraje->save();

        //parte2
        $HistoricoKilometraje2                        = new HistoricoKilometraje();
        $HistoricoKilometraje2->nro_placa             = $request->input('nro_placa');
        $HistoricoKilometraje2->kilometraje_recorrido = $request->input('txtkiloultimomant');
        $HistoricoKilometraje2->fecha_registro        = $request->input('fecha_mantenimiento');
        $HistoricoKilometraje2->estado                = 1;
        $HistoricoKilometraje2->idusuario             = auth()->user()->id;

        $HistoricoKilometraje2->save();

        // Insertando Tabla TB_MANTENIMIENTO VEHICULO
        $MantenimientoVehiculos                           = new MantenimientoVehiculos($request->all());
        $MantenimientoVehiculos->idtb_tipos_mantenimiento = 1;
        $MantenimientoVehiculos->act_regla_negocio        = 1;
        $MantenimientoVehiculos->idusuario                = auth()->user()->id;
        $MantenimientoVehiculos->save();

        // Insertando Tabla CONDUCTOR Y VEHICULO
        $ConducYVehiculo                  = new ConducyVehi($request->all());
        $ConducYVehiculo->iddtconductores = 1;
        $ConducYVehiculo->estadoact       = 1;
        $ConducYVehiculo->idusuario       = auth()->user()->id;
        $ConducYVehiculo->save();

        return redirect()->route('vehiculo.index')->with('clave', 'Se Registro correctamente nuevo vehiculo');
    }

    public function show($id)
    {
        $consulta1 = DB::select("select date_format(fecha_mantenimiento,'%y-%m') as fecha, sum(monto_mantenimiento) as monto
                                 from `tb_mantenimiento_vehiculos`
                                 where `nro_placa`='" . $id . "' and date_format(fecha_mantenimiento,'%y-%m')=date_format(now(),'%y-%m')
                                 group by date_format(fecha_mantenimiento,'%y-%m') , nro_placa");

        $consulta2 = DB::select("select date_format(fecha_mantenimiento,'%y-%m') as fecha , sum(monto_mantenimiento) as monto from `tb_mantenimiento_vehiculos`
                                 where `nro_placa`='" . $id . "' and date_format(fecha_mantenimiento,'%y-%m')=date_format(date_sub(now(), interval 1 month),'%y-%m')
                                 group by date_format(fecha_mantenimiento,'%y-%m') , nro_placa");


        $consulta4 = DB::select("select date_format(created_at,'%y-%m') as fecha, sum(monto_gasto_combustible) as monto from `tb_gasto_combustible`
                                 where `nro_placa`='" . $id . "' and date_format(created_at,'%y-%m')=date_format(now(),'%y-%m') group by date_format(created_at,'%y-%m'),nro_placa
                                ");

        $consulta5 = DB::select("select date_format(created_at,'%y-%m') as fecha, sum(monto_gasto_combustible) as monto from `tb_gasto_combustible`
                                 where `nro_placa`='" . $id . "' and date_format(created_at,'%y-%m')=date_format(date_sub(now(), interval 1 month),'%y-%m') group by date_format(created_at,'%y-%m'),nro_placa");

        

        $chart = Charts::multi('bar', 'material')
        // Setup the chart settings
            ->title("Mantenimiento/Mes(S/.)")
        // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 180) // Width x Height
        // This defines a preset of colors already done:)
            ->template("material")
        // You could always set them manually
        // ->colors(['#2196F3', '#F44336', '#FFC107'])
        // Setup the diferent datasets (this is a multi chart)
            // ->dataset(($consulta3) ? $consulta3[0]->fecha : 'SIN DATA ', [($consulta3) ? $consulta3[0]->monto : 0])
            ->dataset(($consulta2) ? $consulta2[0]->fecha : 'SIN DATA ', [($consulta2) ? $consulta2[0]->monto : 0])
            ->dataset(($consulta1) ? $consulta1[0]->fecha : 'SIN DATA ', [($consulta1) ? $consulta1[0]->monto : 0])
            ->labels(['Ma/soles']);

        $chart2 = Charts::multi('bar', 'material')
            ->title("Combustible/Mes(S/.)")
            ->dimensions(0, 180)
            ->template("material")
            // ->dataset(($consulta6) ? $consulta6[0]->fecha : 'SIN DATA ', [($consulta6) ? $consulta6[0]->monto : 0])
            ->dataset(($consulta5) ? $consulta5[0]->fecha : 'SIN DATA ', [($consulta5) ? $consulta5[0]->monto : 0])
            ->dataset(($consulta4) ? $consulta4[0]->fecha : 'SIN DATA ', [($consulta4) ? $consulta4[0]->monto : 0])
            ->labels(['Ga/soles']);

        $detallevehiculo = DB::table('tb_datos_vehiculo')
            ->join('tb_tipos_vehiculos', 'tb_tipos_vehiculos.idtipovehiculo', '=', 'tb_datos_vehiculo.idtipovehiculo')
            ->join('tb_tipos_modelo_vehiculos', 'tb_tipos_modelo_vehiculos.idtipomodelo', '=', 'tb_datos_vehiculo.idtipomodelo')
            ->join('tb_tipos_marca_vehiculo', 'tb_tipos_modelo_vehiculos.idtipomarca', '=', 'tb_tipos_marca_vehiculo.idtipomarca')
            ->join('tb_tipos_carrocerias', 'tb_tipos_carrocerias.idtipo_carroceria', '=', 'tb_datos_vehiculo.idtipo_carroceria')
            ->join('tb_tipos_combustibles', 'tb_tipos_combustibles.idtipo_combustible', '=', 'tb_datos_vehiculo.idtipo_combustible')
            ->join('tb_tipos_departamento_cargos', 'tb_tipos_departamento_cargos.iddepartamento_cargo', '=', 'tb_datos_vehiculo.iddepartamento_cargo')
            ->join('tb_tipos_centro_costos', 'tb_tipos_centro_costos.idcentro_costo', '=', 'tb_datos_vehiculo.idcentro_costo')
            ->join('tb_tipos_agencias', 'tb_tipos_agencias.idagencia', '=', 'tb_datos_vehiculo.idagencia')
            ->join('tb_ubi_c_distrito', 'tb_ubi_c_distrito.iddist', '=', 'tb_tipos_agencias.iddist')

            ->where('nro_placa', $id)->first();

        $estadovehiculo = DB::table('tb_estado_vehiculo')
            ->join('tb_tipos_estados_vehiculos', 'tb_tipos_estados_vehiculos.idestado_vehiculo', '=', 'tb_estado_vehiculo.idestado_vehiculo')
            ->where('nro_placa', $id)
            ->where('estadoact_vehi', 1)
            ->first();

        $datosconductor = DB::table('tb_datos_conductores')
            ->join('tb_conducyvehi', 'tb_conducyvehi.iddtconductores', '=', 'tb_datos_conductores.iddtconductores')
            ->where('tb_conducyvehi.estadoact', 1)
            ->where('nro_placa', $detallevehiculo->nro_placa)->first();

        //consultas para llenar actualizar kilometraje
        $kiloyfecha_ult_mant = DB::select("select func_kilo_ultimo_mant(nro_placa) AS kilo_ult_mant,
                                           func_fecha_ultimo_mant(nro_placa) AS fecha_ult_mant
                                           FROM tb_datos_vehiculo where nro_placa='" . $id . "'");

        $newkilo = DB::table('tb_new_kilometrajes')->where('nro_placa', $id)->max('new_km');

        return view('vehicle.show', compact('detallevehiculo', 'estadovehiculo', 'datosconductor', 'kiloyfecha_ult_mant', 'newkilo', 'chart', 'chart2'));

    }

    public function edit($id)
    {
        $detallevehiculo = DB::table('tb_datos_vehiculo')
            ->join('tb_tipos_agencias', 'tb_datos_vehiculo.idagencia', '=', 'tb_tipos_agencias.idagencia')
            ->join('tb_ubi_c_distrito', 'tb_tipos_agencias.iddist', '=', 'tb_ubi_c_distrito.iddist')
            ->join('tb_ubi_b_provincia', 'tb_ubi_c_distrito.idprov', '=', 'tb_ubi_b_provincia.idprov')
            ->join('tb_ubi_a_departamento', 'tb_ubi_b_provincia.iddepa', '=', 'tb_ubi_a_departamento.iddepa')
            ->join('tb_tipos_modelo_vehiculos', 'tb_tipos_modelo_vehiculos.idtipomodelo', '=', 'tb_datos_vehiculo.idtipomodelo')
            ->join('tb_tipos_marca_vehiculo', 'tb_tipos_modelo_vehiculos.idtipomarca', '=', 'tb_tipos_marca_vehiculo.idtipomarca')
            ->where('nro_placa', $id)->first();

     

        $datosconductor = DB::table('tb_datos_conductores')
            ->join('tb_conducyvehi', 'tb_conducyvehi.iddtconductores', '=', 'tb_datos_conductores.iddtconductores')
            ->where('tb_conducyvehi.estadoact', 1)
            ->where('nro_placa', $detallevehiculo->nro_placa)->first();

        $estadovehiculo     = DB::table('tb_estado_vehiculo')->where('nro_placa', $id)->first();
        $mantvehiculo       = DB::table('tb_mantenimiento_vehiculos')->orderBy('fecha_mantenimiento', 'des')->where('nro_placa', $id)->first();
        $historialkilant    = DB::table('tb_historico_kilometraje')->orderBy('fecha_registro', 'asc')->where('nro_placa', $id)->where('estado', '1')->first();
        $historialkilactual = DB::table('tb_historico_kilometraje')->orderBy('fecha_registro', 'des')->where('nro_placa', $id)->where('estado', '1')->first();

        return view('vehicle.edit', compact('detallevehiculo', 'estadovehiculo', 'mantvehiculo', 'datosconductor', 'historialkilant', 'historialkilactual'));
    }

    public function update(Request $request, $id)
    {

        $obtenercod_reg_vehi = DB::table('tb_datos_vehiculo')->where('nro_placa', $id)->first();

        DB::table('tb_datos_vehiculo')->where('nro_placa', $id)->update([
            "idagencia"                 => $request->input('cboAgencia'),
            "iddepartamento_cargo"      => $request->input('cboDepartamentoCargo'),
            "idcentro_costo"            => $request->input('cboCentroCosto'),
            "idtipovehiculo"            => $request->input('cboTipoVehiculo'),
            "anio_fabricacion_vehiculo" => $request->input('aniofabrivehi'),
            "idtipomodelo"              => $request->input('cboTipoModelo'),
            "anio_modelo_vehiculo"      => $request->input('aniomodelovehi'),
            "color"                     => $request->input('txtColor'),
            "nro_serie_motor"           => $request->input('txtNumSerMot'),
            "idtipo_carroceria"         => $request->input('cboCarroceria'),
            "fuerza_vehiculo"           => $request->input('txtPotVel'),
            "idtipo_combustible"        => $request->input('cboTipoCombustible'),
            "updated_at"                => Carbon::now('america/lima'),
            "idusuario"                 => auth()->user()->id,
        ]);

        // DB::table('tb_datos_conductores')->where('cod_registro', $obtenercod_reg_vehi->cod_registro)->update([
        //     "codigo_trabajador"      => $request->input('txtCodTrab'),
        //     "codigo_trabajador_cfis" => $request->input('txtCodTrabCFIS'),
        //     "nro_serie_casco"        => $request->input('txtNumCas'),
        //     "nombres_apellidos"      => $request->input('txtNombApe'),
        //     "nro_dni"                => $request->input('txtNroDni'),
        //     "fecha_nacimiento"       => $request->input('dtpFechaNac'),
        //     "fecha_ingreso"          => $request->input('dtpFechaIng'),
        //     "sexo"                   => $request->input('cboSexo'),
        //     "idusuario"              => auth()->user()->id,
        // ]);

        return redirect()->route('vehiculo.index')->with('clave', 'Se Actualizaron los datos de la placa : ' . $id);
    }

    public function destroy($id)
    {
        DB::table('tb_datos_vehiculo')->where('nro_placa', $id)->update([

            "updated_at" => Carbon::now('america/lima'),
            "idusuario"  => auth()->user()->id,
            "estado"     => 0,
        ]);

        return redirect()->route('vehiculo.index')->with('clave', 'El vehiculo de placa : ' . $id . ' fue desactivado con exito');
    }
}

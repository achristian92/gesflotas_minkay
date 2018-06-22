<?php

namespace GestionFlotas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatoVehiculoController extends Controller
{
    public function getValidarPlacaExistente($Nro_Placa)
    {
        $DatoConductor = DB::table('tb_datos_vehiculo')->select(DB::raw('count(*) as nro_placa'))->where('nro_placa', '=', $Nro_Placa)->get();
        echo json_encode($DatoConductor);
    }

    public function getValidarSerieMotor($Nro_Serie_Motor)
    {
        $SerieMotor = DB::table('tb_datos_vehiculo')->select(DB::raw('count(*) as nro_serie_motor'))->where('nro_serie_motor', '=', $Nro_Serie_Motor)->get();
        echo json_encode($SerieMotor);
    }

    public function getVehiculosRegistradosJSON()
    {
        $VehiculosRegistrados = DB::select("SELECT  
                                            TRIM(dv.iddatosvehiculo) cod_registro,
                                            TRIM(dv.nro_placa) nro_placa,
                                            func_fecha_ultimo_mant(dv.nro_placa) as fecha_ult_mant,
                                            func_km_x_dia(dv.nro_placa) as km_x_dia,
                                            func_prox_fecha_mant(dv.nro_placa) as prox_fecha_mant,
                                            fdu_estado_mantenimiento(dv.nro_placa) AS estado_mantenimiento,
                                            trim(func_kilo_ultimo_mant(dv.nro_placa)) as kilo_ult_mant
                                            FROM tb_datos_vehiculo dv inner join 
                                            tb_estado_vehiculo te on te.nro_placa=dv.nro_placa where te.idestado_vehiculo='1'and dv.estado='1' and te.estadoact_vehi='1' ;");
        echo json_encode($VehiculosRegistrados);
    }
}

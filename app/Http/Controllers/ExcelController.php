<?php

namespace GestionFlotas\Http\Controllers;

use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExcelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $agencia      = $request->idagencia;
        $tipovehiculo = $request->selectbasicvehiculo;
        $tipoReporte  = $request->selectbasicReporte;

        $parte1 = ($tipovehiculo == 0) ? '' : 'and dv.idtipovehiculo =' . $tipovehiculo;
        $parte2 = ($agencia == 0) ? '' : ' and dv.idagencia =' . $agencia;

        $exportestadovehi = DB::select("select dv.iddatosvehiculo as ID, dv.nro_placa as NRO_PLACA,tv.nombre_tipo_vehiculo AS TIPO, mv.nombre_modelo as MODELO ,dv.color as COLOR ,a.nombre_agencia as AGENCIA , tev.nombre_estado_vehi as ESTADO , ev.descripcion_estadov as DESCRIPCION
            from tb_datos_vehiculo dv
      inner join tb_tipos_modelo_vehiculos mv on mv.idtipomodelo = dv.idtipomodelo
        inner join tb_tipos_agencias a on dv.idagencia= a.idagencia
        inner join tb_tipos_vehiculos tv on dv.idtipovehiculo=tv.idtipovehiculo
        inner join tb_estado_vehiculo ev on dv.nro_placa = ev.nro_placa
        inner join tb_tipos_estados_vehiculos tev on tev.idestado_vehiculo = ev.idestado_vehiculo
         WHERE ev.idestado_vehiculo = $tipoReporte " . $parte1 . $parte2);

        $data = array();
        foreach ($exportestadovehi as $result) {
            $data[] = (array) $result;
        }

        Excel::create('ESTADOVEHICULO', function ($excel) use ($data) {

            $excel->sheet('HISTORIAL', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1');
            });
        })->export('xls');

    }
     public function xlxnewkilo($nro_placa)
    {
        $exportmant = DB::select("SELECT idnewkilo as ID, nro_placa AS NRO_PLACA , new_km as ULT_KILO_INGRESADA,created_at as FECHA_REGISTRO
                                  from tb_new_kilometrajes where nro_placa = '" . $nro_placa . "'");

        $data = array();
        foreach ($exportmant as $result) {
            $data[] = (array) $result;
        }

        Excel::create('ACTUALIZACIONE_KILO', function ($excel) use ($data) {

            $excel->sheet('HISTORIALKILOMETRAJES', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1');
            });
        })->export('xls');
    }

    public function xlxhistomant($nro_placa)
    {
        $exportmant = DB::select("SELECT 
                                 idmantenimiento_vehiculo AS ID,
                                 mv.nro_placa AS PLACA,
                                  tpm.nombre_tipo_mant AS TIPO_MANTENIMIENTO,
                                 monto_mantenimiento AS GASTO,
                                  pvm.nombre_provee_mant AS PROVEEDOR,
                                  motivo_mantenimiento AS DESCRIPCION,
                                  fecha_mantenimiento AS FECHA_MANT 
                                 FROM
                                 tb_mantenimiento_vehiculos mv INNER JOIN 
                                 tb_tipos_mantenimiento tpm ON mv.idtb_tipos_mantenimiento = tpm.idtb_tipos_mantenimiento INNER JOIN 
                                  tb_tipos_proveedor_mantenimientos pvm ON mv.idproveedor_mantenimiento = pvm.idproveedor_mantenimiento 
                                  WHERE mv.nro_placa = '" . $nro_placa . "'");

        $data = array();
        foreach ($exportmant as $result) {
            $data[] = (array) $result;
        }

        Excel::create('MANTENIMIENTO', function ($excel) use ($data) {

            $excel->sheet('HISTORIAL', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1');
            });
        })->export('xls');
    }
    public function xlxgastocombu($nro_placa)
    {
        $exportmant = DB::select("SELECT 
                                  idgasto_combustible AS ID,
                                  nro_placa AS NRO_PLACA,
                                  monto_gasto_combustible AS MONTO,
                                  numero_tarjeta AS NUM_TARJETA,
                                  nombre_provee_combus AS PROVEEDOR,
                                  gc.created_at AS FECHA_REGISTRO 
                                  FROM
                                  tb_gasto_combustible gc INNER JOIN 
                                  tb_tipos_proveedor_combustible tpvc ON gc.idproveedor_combustible = tpvc.idproveedor_combustible 
                                  WHERE nro_placa = '" . $nro_placa . "'");

        $data = array();
        foreach ($exportmant as $result) {
            $data[] = (array) $result;
        }

        Excel::create('COMBUSTIBLE', function ($excel) use ($data) {

            $excel->sheet('HISTORIAL', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1');
            });
        })->export('xls');
    }
    public function xlxpapeletas($nro_placa)
    {
        $exportmant = DB::select("SELECT idpape AS ID,nro_placa AS PLACA,cod_papeleta AS COD_PAPELETA,monto_papeleta AS COSTO,
                                 descrip_papeleta AS DESCRIPCION,IF(estado_pape = 1,'CANCELADO','SIN CANCELAR') AS ESTADO,
                                 created_at AS FECHA FROM  tb_papeletas  WHERE nro_placa = '" . $nro_placa . "'");

        $data = array();
        foreach ($exportmant as $result) {
            $data[] = (array) $result;
        }

        Excel::create('REPORTEPAPELETAS', function ($excel) use ($data) {

            $excel->sheet('HISTORIALPAPELETAS', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1');
            });
        })->export('xls');
    }
        public function xlxsoat($nro_placa)
    {
        $exportmant = DB::select("SELECT idsoatvehi AS ID,nro_placa AS PLACA,tps.nombre_soat AS PROVEEDOR,nro_poliza AS NRO_POLIZA,
                                   monto_soat AS COSTO, fecha_vencimiento_soat AS FECHA_VENCIMIENTO, IF(estado_soat= 1,'ACTUAL','ANTERIOR') AS ESTADO,
                                  st.created_at AS FECHA FROM tb_soat_vehiculo st INNER JOIN tb_tipos_proveedor_soat tps ON st.idprosoat = tps.idprosoat   
                                  WHERE nro_placa = '" . $nro_placa . "'  ORDER BY st.idsoatvehi DESC;");

        $data = array();
        foreach ($exportmant as $result) {
            $data[] = (array) $result;
        }

        Excel::create('REPORTESOAT', function ($excel) use ($data) {

            $excel->sheet('HISTORIALSOAT', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1');
            });
        })->export('xls');
    }
    public function exportdatavh()
    {
        $exportmant = DB::select("SELECT 
  dv.iddatosvehiculo AS ID,
  dv.nro_placa AS NRO_PLACA,
  ta.nombre_agencia AS AGENCIA,
  tdc.nombre_depar_cargo AS DEPA_CARGO,
  tv.nombre_tipo_vehiculo AS TIPO_VEHI,
  tmarcav.nombre_marca AS MARCA,
  tmv.nombre_modelo AS MODELO,
  tcarroce.nombre_carroceria AS TIPO_CARROCERIA,
  dv.anio_fabricacion_vehiculo AS AÑO_FABRIC,
  dv.anio_modelo_vehiculo AS AÑO_MODELO,
  dv.color AS COLOR,
  dv.nro_serie_motor AS NRO_SERIE,
  dv.nro_chasis AS NRO_CHASIS,
  dv.fuerza_vehiculo AS HP,
  tc.nombre_combustible AS TIPO_COMBUSTIBLE,
  dv.estado AS ESTADO_ACTUAL  
FROM
  tb_datos_vehiculo dv INNER JOIN
 tb_tipos_agencias ta ON dv.idagencia=ta.idagencia INNER JOIN
 tb_tipos_departamento_cargos tdc ON dv.iddepartamento_cargo=tdc.iddepartamento_cargo INNER JOIN 
 tb_tipos_vehiculos tv ON dv.idtipovehiculo=tv.idtipovehiculo INNER JOIN 
 tb_tipos_modelo_vehiculos tmv ON dv.idtipomodelo=tmv.idtipomodelo INNER JOIN 
 tb_tipos_marca_vehiculo tmarcav ON tmv.idtipomarca=tmarcav.idtipomarca INNER JOIN
 tb_tipos_carrocerias tcarroce ON dv.idtipo_carroceria=tcarroce.idtipo_carroceria INNER JOIN 
 tb_tipos_combustibles tc ON dv.idtipo_combustible=tc.idtipo_combustible;");

        $data = array();
        foreach ($exportmant as $result) {
            $data[] = (array) $result;
        }

        Excel::create('DATAVEHICULOS', function ($excel) use ($data) {

            $excel->sheet('REGISTROVEHICULOS', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1');
            });
        })->export('xls');
    }
    public function exportarestadovehi(Request $request)
    {
        $agencia = $request->idagenciaestado;
        $parte2  = ($agencia == 0) ? '' : ' and dv.idagencia =' . $agencia;

        if ($request->selectbasicReporte == '1') {
            $exportsoatyestadoman = DB::select("SELECT sv.idsoatvehi AS ID, sv.nro_placa AS PLACA, ta.nombre_agencia AS AGENCIA,
                                  tps.nombre_soat AS PROVEEDOR_SOAT, sv.nro_poliza AS NRO_POLIZA,sv.monto_soat AS COSTO,
                                  sv.fecha_vencimiento_soat AS FECHA_VENCIMIENTO FROM tb_soat_vehiculo sv INNER JOIN tb_datos_vehiculo dv 
                                  ON sv.nro_placa = dv.nro_placa   INNER JOIN tb_tipos_agencias ta     ON ta.idagencia = dv.idagencia    INNER JOIN tb_tipos_proveedor_soat tps  on tps.idprosoat=sv.idprosoat ");
        } else {
            $exportsoatyestadoman = DB::select("SELECT
                                            TRIM(dv.iddatosvehiculo) cod_registro,
                                            TRIM(dv.nro_placa) nro_placa,
                                            func_fecha_ultimo_mant(dv.nro_placa) as fecha_ult_mant,
                                            func_km_x_dia(dv.nro_placa) as km_x_dia,
                                            func_prox_fecha_mant(dv.nro_placa) as prox_fecha_mant,
                                            fdu_estado_mantenimiento(dv.nro_placa) AS estado_mantenimiento,
                                            trim(func_kilo_ultimo_mant(dv.nro_placa)) as kilo_ult_mant,
                                            ta.nombre_agencia
                                            FROM tb_datos_vehiculo dv inner join
                                            tb_estado_vehiculo te on te.nro_placa=dv.nro_placa
                                            inner join tb_tipos_agencias ta on dv.idagencia=ta.idagencia
                                            where te.idestado_vehiculo='1'and dv.estado='1'" . $parte2);}

        $data = array();
        foreach ($exportsoatyestadoman as $result) {
            $data[] = (array) $result;
        }

        Excel::create('DATAVEHICULOS', function ($excel) use ($data) {

            $excel->sheet('HISTORIAL', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1');
            });
        })->export('xls');

        // return $request->all();

    }
    public function exportarpapeletas(Request $request)
    {
      $tipopape = $request->selectbasicReporte;
        $agencia = $request->idagenciapapeletas;
        $parte2  = ($agencia == 0) ? '' : ' and dv.idagencia =' . $agencia;
      
        $exportmant = DB::select("SELECT tp.idpape AS ID, tp.nro_placa AS PLACA,ta.nombre_agencia AS AGENCIA,tp.cod_papeleta AS COD_PAPELETA,
                                 tp.monto_papeleta AS COSTO,tp.descrip_papeleta AS DESCRIPCION,IF(estado_pape = 1,'CANCELADO','SIN CANCELAR') AS ESTADO,
                                 tp.created_at AS FECHA 
                                FROM
                                 tb_papeletas tp INNER JOIN tb_datos_vehiculo dv ON
                                 tp.nro_placa = dv.nro_placa INNER JOIN tb_tipos_agencias ta ON
                                 ta.idagencia = dv.idagencia   
                                WHERE tp.estado_pape = " .$tipopape .$parte2. " ORDER BY tp.nro_placa ;");
          
        $data = array();
        foreach ($exportmant as $result) {
            $data[] = (array) $result;
        }

        Excel::create('REPORTEPAPELETAS', function ($excel) use ($data) {

            $excel->sheet('CANTIDADPAPELETAS', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1');
            });
        })->export('xls');
    }
       public function xlxestado($nro_placa)
    {
        $exportmant = DB::select("SELECT idestadovehi AS ID,nro_placa AS PLACA,tiposev.nombre_estado_vehi AS TIPO_ESTADO,
                                  descripcion_estadov AS DESCRIPCION, gasto_oca_est AS COSTO,IF(estadoact_vehi = 1,
                                  'ACTUAL','ANTERIOR') AS ESTADO,tev.created_at AS FECHA FROM
                                  tb_estado_vehiculo tev
                                  INNER JOIN tb_tipos_estados_vehiculos tiposev ON tev.idestado_vehiculo = tiposev.idestado_vehiculo 
                                  WHERE nro_placa = '" . $nro_placa . "'  ORDER BY tev.idestadovehi DESC;");

        $data = array();
        foreach ($exportmant as $result) {
            $data[] = (array) $result;
        }

        Excel::create('REPORTEESTADO', function ($excel) use ($data) {

            $excel->sheet('HISTORIALESTADO', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1');
            });
        })->export('xls');
    }
}

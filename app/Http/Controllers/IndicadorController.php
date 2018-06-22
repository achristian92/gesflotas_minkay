<?php

namespace GestionFlotas\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Charts;

use Illuminate\Http\Request;

class IndicadorController extends Controller
{
 //    	public function getMax10($tipo){

	// 	$orden = ($tipo==1)? 'desc' : 'asc';

	// 	$datos = DB::select("select b.nombre_zona as zona ,a.nombre_agencia as agencia ,sum(tb_mantenimiento_vehiculos.monto_mantenimiento) as monto from tb_datos_vehiculo
 //     INNER JOIN tb_mantenimiento_vehiculos ON tb_datos_vehiculo.nro_placa = tb_mantenimiento_vehiculos.nro_placa
 //      INNER JOIN tb_zona_vehiculos ON tb_datos_vehiculo.cod_registro = tb_zona_vehiculos.cod_registro
 //      INNER JOIN tb_tipos_agencias a ON tb_zona_vehiculos.idagencia= a.idagencia
 //      INNER JOIN tb_ubi_a_departamento ub ON a.id_departamento= ub.`iddepa`      
 //      INNER JOIN tb_tipos_zonas b ON ub.idzona = b.idtipo_zona
 //      group by b.nombre_zona, a.nombre_agencia,tb_zona_vehiculos.idagencia 
 //      order by sum(tb_mantenimiento_vehiculos.monto_mantenimiento) ".$orden." limit 10;");    	
	// 	echo json_encode($datos);
	// }

	// 	public function getIndicador(){   

 //    $datos2 = DB::select(" 
 //            SELECT b.nombre_zona AS zona,SUM(tb_mantenimiento_vehiculos.monto_mantenimiento) AS monto FROM tb_datos_vehiculo
 //            INNER JOIN tb_mantenimiento_vehiculos ON tb_datos_vehiculo.nro_placa = tb_mantenimiento_vehiculos.nro_placa
 //            INNER JOIN tb_zona_vehiculos zv ON tb_datos_vehiculo.cod_registro = zv.cod_registro
 //            INNER JOIN tb_tipos_agencias a ON zv.idagencia= a.idagencia
 //            INNER JOIN tb_ubi_a_departamento ud ON ud.iddepa=a.id_departamento
 //            INNER JOIN tb_tipos_zonas b ON ud.idzona = b.idtipo_zona
 //            GROUP BY b.nombre_zona,b.idtipo_zona

 //               ");   
 //  //->colors()
 //         $chart2 =  Charts::create('donut', 'highcharts')
 //                    ->title('Total Gasto Mantenimiento por Zona')
 //                    //->labels(['First', 'Second', 'Third'])
 //                    //->values([5,10,20])
 //                    ->dimensions(600,600)
 //                    ->responsive(false);
                    
 //                $it = 0;            
 //                //$chart2->values[0] = $datos[0]->MONTO;
 //       $colores = ['#2196F3', '#F44336', '#FFC107','#2196F3', '#F44336', '#FFC107','#2196F3', '#F44336', '#FFC107','#2196F3', '#F44336', '#FFC107'] ;       
 //              if($datos2){
 //                foreach ($datos2 as $valor) {
 //                         $chart2->values[$it] = $valor->monto;
 //                         $chart2->labels[$it] = $valor->zona;
 //                         $chart2->colors[$it] = ($colores[$it])? $colores[$it] : '#FFC107' ;
 //                         $it++;      
 //                    }  

 //                }else{

 //                    $chart2->labels(['First', 'Second', 'Third']);
 //                    $chart2->values([5,10,20]);

 //                }        
        
 //        return view('indicadores.Indicadores', ['chart2' => $chart2]);
 //  } 

  public function newindicador(){
    return view('indicadores10');
  }
}

<?php

namespace GestionFlotas\Http\Controllers;

use GestionFlotas\AnexoVehiculo;
use GestionFlotas\EstadoVehiculo;
use GestionFlotas\GastoCombustible;
use GestionFlotas\MantenimientoVehiculos;
use GestionFlotas\Papeletas;
use GestionFlotas\SoatVehiculo;
use GestionFlotas\Updatekilometraje;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    function newkilo($nro_placa){
     $historialnewkilo = Updatekilometraje::where('nro_placa',$nro_placa)
     ->orderBy('tb_new_kilometrajes.idnewkilo', 'des')
     ->get(); 
    	return view('historial.historialnewkilometraje',compact('historialnewkilo','nro_placa'));
    }
      function gastomant($nro_placa){
     $result = MantenimientoVehiculos::join('tb_tipos_mantenimiento', 'tb_mantenimiento_vehiculos.idtb_tipos_mantenimiento', '=', 'tb_tipos_mantenimiento.idtb_tipos_mantenimiento')
         ->join('tb_tipos_proveedor_mantenimientos', 'tb_mantenimiento_vehiculos.idproveedor_mantenimiento', '=', 'tb_tipos_proveedor_mantenimientos.idproveedor_mantenimiento')
         ->where('tb_mantenimiento_vehiculos.nro_placa',$nro_placa)
        ->get();  
        return view('historial.historialgastmant',compact('result','nro_placa'));
    }

     function gastocombustible($nro_placa){
     $gastocomb = GastoCombustible::join('tb_tipos_proveedor_combustible', 'tb_gasto_combustible.idproveedor_combustible', '=', 'tb_tipos_proveedor_combustible.idproveedor_combustible')
    ->select('idgasto_combustible','monto_gasto_combustible','numero_tarjeta','nombre_provee_combus','tb_gasto_combustible.created_at','nro_placa')
    ->where('tb_gasto_combustible.nro_placa',$nro_placa)
    ->get();
    	return view('historial.historialgastcombus',compact('gastocomb','nro_placa'));
    }


    function papeletas($nro_placa){
        
     $historial = Papeletas::where('nro_placa',$nro_placa)
     ->orderBy('tb_papeletas.idpape', 'des')
     ->get();
     
        return view('historial.historialpapeletas',compact('historial', 'nro_placa' ));
    }
    function soat($nro_placa){
        
     $historialsoat = SoatVehiculo::join('tb_tipos_proveedor_soat','tb_soat_vehiculo.idprosoat','=','tb_tipos_proveedor_soat.idprosoat')
      ->orderBy('tb_soat_vehiculo.idsoatvehi', 'des')
     ->where('nro_placa',$nro_placa)->get();
        return view('historial.historialsoat',compact('historialsoat', 'nro_placa'));
    }
    function hanexos($nro_placa){        
      $historialanexos = AnexoVehiculo::where('nro_placa',$nro_placa)->get();
        return view('historial.historialanexos',compact('historialanexos', 'nro_placa'));
    }
    function estadovehi($nro_placa){        
       $historialestadovehi = EstadoVehiculo::join('tb_tipos_estados_vehiculos','tb_estado_vehiculo.idestado_vehiculo','=','tb_tipos_estados_vehiculos.idestado_vehiculo')
      ->orderBy('tb_estado_vehiculo.idestadovehi', 'des')
      ->select('idestadovehi','tb_tipos_estados_vehiculos.nombre_estado_vehi','tb_estado_vehiculo.idestado_vehiculo','descripcion_estadov','gasto_oca_est','estadoact_vehi','tb_estado_vehiculo.created_at')
     ->where('nro_placa',$nro_placa)->get();
     // dd($historialestadovehi);
        return view('historial.historialestadosvehiculo',compact('historialestadovehi', 'nro_placa'));
    }

}

<?php

namespace GestionFlotas\Http\Controllers;

use GestionFlotas\DatoConductor;
use GestionFlotas\ConducyVehi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatoConductorController extends Controller
{

        public function index()
    {
        $datoscond = DatoConductor::all();

        return view('admin.conduct_admin', compact('datoscond'));
        //
    }
     public function getValidarCodigoTrabajador($Codigo_Trabajador)
    {
        $DatoConductor = DB::table('tb_datos_conductores')->select(DB::raw('count(*) as codigo_trabajador'))->where('codigo_trabajador', '=', $Codigo_Trabajador)->get();
        echo json_encode($DatoConductor);
    }

    public function getValidarCodigoTrabajadorCFIS($Codigo_Trabajador_CFIS)
    {
        $DatoConductor = DB::table('tb_datos_conductores')->select(DB::raw('count(*) as codigo_trabajador_cfis'))->where('codigo_trabajador_cfis', '=', $Codigo_Trabajador_CFIS)->get();
        echo json_encode($DatoConductor);
    }

    public function getValidarTrabajadorDNI($Nro_Dni)
    {
        $DatoConductor = DB::table('tb_datos_conductores')->select(DB::raw('count(*) as nro_dni'))->where('nro_dni', '=', $Nro_Dni)->get();
        echo json_encode($DatoConductor);
    }
     public function conduc_vehi($nro_placa)
    {
          $resultconduc_vehi= ConducyVehi::join('tb_datos_conductores', 'tb_datos_conductores.iddtconductores','=','tb_conducyvehi.iddtconductores')
                ->where('tb_conducyvehi.nro_placa',$nro_placa)
                ->get();
        return view('conductores.conductor_vehiculo',compact('resultconduc_vehi','nro_placa'));
    }
     public function storeconduc_vehi(Request $request, $nro_placa)
    {   

        if($request->estadoact == '1'){
             $cambiarestado=  DB::table('tb_conducyvehi')->where('nro_placa', $nro_placa)->update([
            "estadoact"                 => 0,
           
        ]);
        }

        $conduc_vehi                    = new ConducyVehi();
        $conduc_vehi->nro_placa         = $nro_placa;
        $conduc_vehi->iddtconductores   = $request->input('cboconductores');
        $conduc_vehi->estadoact         = $request->input('estadoact');
        $conduc_vehi->idusuario         = auth()->user()->id;
        $conduc_vehi->save();
          return redirect()->route('show.conduc',compact('nro_placa'));
    }
}

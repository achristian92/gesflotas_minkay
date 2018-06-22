<?php

namespace GestionFlotas\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use GestionFlotas\Agencia;

class AgenciaController extends Controller
{
	public function index(){
		
		// $datosag = Agencia::all();

		// return view("admin.agenciaslte", compact('datosag'));
		
		$agencias = DB::table('tb_tipos_agencias')
          ->join('tb_ubi_c_distrito', 'tb_tipos_agencias.iddist', '=', 'tb_ubi_c_distrito.iddist')
          ->join('tb_ubi_b_provincia', 'tb_ubi_c_distrito.idprov', '=', 'tb_ubi_b_provincia.idprov')
          ->join('tb_ubi_a_departamento', 'tb_ubi_b_provincia.iddepa', '=', 'tb_ubi_a_departamento.iddepa')
           
          ->select('idagencia','nombre_agencia','direccion','tb_ubi_c_distrito.nom_distrito','nom_provincia','nom_departamento')
            

            ->get();

            return view('admin.agenciaslte', compact('agencias'));
	}
    //
}

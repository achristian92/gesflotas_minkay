<?php

namespace GestionFlotas\Http\Controllers;


use Illuminate\Http\Request;

class RutasPanelController extends Controller
{

	public function __construct(){
		$this ->middleware('auth');
	}

    function panelprincipal(){
    	 return view('home');
    }

    function estadovehiculo(){
    	return view('tabla_estados_vehiculos');
    }

    function generarreportes(){
    	return view('reportes.reportes');
    }
    function importindex(){
        return view('importarcsv.importcsv');
    }

    function indicadores(){
        return view('indicadores2.indicadores10');
    }
  
      
}

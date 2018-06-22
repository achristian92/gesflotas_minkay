<?php

namespace GestionFlotas\Http\Controllers;

use Illuminate\Http\Request;
use GestionFlotas\DepartamentoCargo;

class DeparController extends Controller
{
	public function index(){
		$datos = DepartamentoCargo::all();
		return view("admin.depar_cargo", compact('datos'));
		
	}
    //
}

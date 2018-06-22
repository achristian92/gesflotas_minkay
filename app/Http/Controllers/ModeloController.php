<?php

namespace GestionFlotas\Http\Controllers;

use GestionFlotas\Modelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = DB::table('tb_tipos_modelo_vehiculos')
        ->join('tb_tipos_marca_vehiculo', 'tb_tipos_modelo_vehiculos.idtipomarca', '=', 'tb_tipos_marca_vehiculo.idtipomarca')
        -> select('idtipomodelo','nombre_modelo','tb_tipos_marca_vehiculo.nombre_marca')

        ->get();

            return view('admin.modelo_vehiculo', compact('modelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \GestionFlotas\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show(Modelo $modelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \GestionFlotas\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelo $modelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \GestionFlotas\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo $modelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \GestionFlotas\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelo $modelo)
    {
        //
    }
}

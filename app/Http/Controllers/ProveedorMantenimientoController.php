<?php

namespace GestionFlotas\Http\Controllers;

use Illuminate\Http\Request;
use GestionFlotas\ProveedorMantenimiento;


class ProveedorMantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosprovm = ProveedorMantenimiento::all();
        return view("admin.proveedor_mante", compact('datosprovm'));
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
     * @param  \GestionFlotas\ProveedorMantenimiento  $proveedorMantenimiento
     * @return \Illuminate\Http\Response
     */
    public function show(ProveedorMantenimiento $proveedorMantenimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \GestionFlotas\ProveedorMantenimiento  $proveedorMantenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(ProveedorMantenimiento $proveedorMantenimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \GestionFlotas\ProveedorMantenimiento  $proveedorMantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProveedorMantenimiento $proveedorMantenimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \GestionFlotas\ProveedorMantenimiento  $proveedorMantenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProveedorMantenimiento $proveedorMantenimiento)
    {
        //
    }
}

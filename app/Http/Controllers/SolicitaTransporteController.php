<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\SolicitaTransporte;
use DB;

class SolicitaTransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitud = new SolicitaTransporte();
        $solicitud->cedula = $request->get('Cedula');
        $solicitud->name = $request->get('Nombre');
        $solicitud->apellido1 = $request->get('Apellido1');
        $solicitud->apellido2 = $request->get('Apellido2');
        $solicitud->tipo = $request->get('Tipo');
        $solicitud->cantidad = $request->get('Cantidad');
        $solicitud->ubicacion = $request->get('Ubicacion');
        $solicitud->save();
        return redirect('/')->with('success', 'solicitud agregada exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

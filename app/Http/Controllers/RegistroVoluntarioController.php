<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RegistroVoluntario;
use DB;

class RegistroVoluntarioController extends Controller
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
        return view('registro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new RegistroVoluntario();
        $registro->cedula = $request->get('Cedula');
        $registro->name = $request->get('Nombre');
        $registro->apellido1 = $request->get('Apellido1');
        $registro->apellido2 = $request->get('Apellido2');
        $registro->distrito = $request->get('Distrito');
        $registro->canton = $request->get('Canton');
        $registro->provincia = $request->get('Provincia');
        $registro->celular = $request->get('Celular');
        $registro->email = $request->get('Email');
        $registro->sexo = $request->get('Sexo');
        $registro->comentario = $request->get('Comentario');
       
        if($registro->save()){
            return redirect('/')->with('success', '¡Registro enviado exitosamente!');
        }else{
            return back()->with('error', '¡Los datos no se guardaron correctamente!');
        }
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

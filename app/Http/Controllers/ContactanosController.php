<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contactanos;
use DB;

class ContactanosController extends Controller
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
        return view('contacto.create');
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacto = new Contactanos();
        $contacto->name = $request->get('Nombre');
        $contacto->apellido1 = $request->get('Apellido1');
        $contacto->apellido2 = $request->get('Apellido2');
        $contacto->distrito = $request->get('Distrito');
        $contacto->canton = $request->get('Canton');
        $contacto->provincia = $request->get('Provincia');
        $contacto->email = $request->get('Email');
        $contacto->codigo = $request->get('Codigo');
        
        if($contacto->save()){
            return redirect('/')->with('success', '¡Información enviada exitosamente!');
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

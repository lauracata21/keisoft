<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fundaciones;
use App\Models\Servicio;
use Illuminate\Http\Request;

class FundacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fundaciones=Fundaciones::all();
        return view('fundaciones.listarFun', compact('fundaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios=Servicio::all();
        return view('fundaciones.create', compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fundacion = new Fundaciones();

        $fundacion->servicio_id = $request->servicio_id;
        $fundacion->nombre = $request->nombre;
        $fundacion->direccion = $request->direccion;
        $fundacion->telefono = $request->direccion;
        $fundacion->nit= $request->nit;
        $fundacion->save();
        return redirect()->route('fundaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($fundacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($fundacione)
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
    public function update(Request $request, $fundacione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fundaciones $fundacione)
    {
        $fundacione->delete();
    return redirect()->route('fundaciones.index');
    }
}

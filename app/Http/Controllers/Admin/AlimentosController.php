<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\TipoProducto;
use App\Models\User;
use Illuminate\Http\Request;

class AlimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::all();
        return view('productos.alimentos.listarProducto', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos=tipoProducto::all();
        $users=User::all();
        return view('productos.alimentos.create', compact('productos','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto= new Producto();
        $file=$request->file('fotoP');
        $nombreArchivo="img_".time().".".$file->guessClientExtension();
        $request->file('fotoP')->storeAs('public/productos', $nombreArchivo);
        $producto->fotoP=$nombreArchivo;

        $producto->tipoProducto_id=$request->tipoProducto_id;
        $producto->user_id=$request->user_id;
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->descripcion=$request->descripcion;
        $producto->save();
         return redirect()->route('alimentos.index');
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
    public function edit(Producto $alimento)
    {
        return view('productos.alimentos.edit', compact('alimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $alimento)
    {
        
        // $alimento->tipoProducto_id=$request->tipoProducto_id;
        // $alimento->user_id=$request->user_id;
        $alimento->nombre=$request->nombre;
        $alimento->precio=$request->precio;
        $alimento->descripcion=$request->descripcion;
        $alimento->save();
        return redirect()->route('alimentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $alimento)
    {
        $alimento->delete();
        return redirect()->route('alimentos.index');
    }
}

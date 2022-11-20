<?php

namespace App\Http\Controllers\AdminFundacion;

use App\Http\Controllers\Controller;
use App\Models\Fundaciones;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias=Noticia::all();
        return view ('noticias.listarNoticia',compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fundacions= Fundaciones::all();
        return view ('noticias.create', compact('fundacions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticias= new Noticia();

       $file=$request->file('fotoM');
       $nombreArchivo="img_".time().".".$file->guessClientExtension();
       $request->file('fotoM')->storeAs('public/noticias',$nombreArchivo);
       $noticias->fotoM=$nombreArchivo;
       
       $noticias->fundacion_id = $request->fundacion_id;
       $noticias->nombre = $request->nombre;
       $noticias->fecha = $request->fecha;
       $noticias->descripcion = $request->descripcion;
       $noticias->hora = $request->hora;
        $noticias->save();
      return redirect()->route('noticias.index');

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
    public function edit($noticia)
    {
        $noticia=Noticia::find($noticia);
        return view('noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        $noticia->nombre=$request->nombre;
        $noticia->descripcion=$request->descripcion;
        $noticia->fecha=$request->fecha;
        $noticia->hora=$request->hora;
        // $noticia->fotoM=$request->fotoM;
        $noticia->save();
        return redirect()->route('noticias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return redirect()->route('noticias.index');
        }
    }


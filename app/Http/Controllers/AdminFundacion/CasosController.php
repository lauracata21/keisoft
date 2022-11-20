<?php

namespace App\Http\Controllers\AdminFundacion;

use App\Http\Controllers\Controller;
use App\Models\ReporteAbuso;
use Illuminate\Http\Request;

class CasosController extends Controller
{
    public function index ()
    {
        $casos=ReporteAbuso::all();

        return view ('casosR.listarCaso',compact('casos'));
  
    }
    public function show ($caso)
    {
        // return view('casos.show',compact('caso'));
    }

public function destroy (ReporteAbuso $caso)
    {
       $caso->delete();
       return redirect()->route('casos.index');
    }

public function edit (ReporteAbuso $caso)
//    {
//     return view('casosReportados.edit', compact('caso'));

//     }
{}
public function update (Request $request)
//    {
//     $caso->tipoCaso=$request->tipoCaso;
//     $caso->direccion=$request->direccion;
//     $caso->correoElectronico=$request->correoElectronico;
//     $caso->save();
//     return redirect()->route('casos.index');
//    }
{}
}
<?php

namespace App\Http\Controllers\AdminFundacion;

use App\Http\Controllers\Controller;
use App\Models\Especie;
use Illuminate\Http\Request;

class EspeciesController extends Controller
{
    public function index()
    {
        $animales=Especie::all();

        return view ('especies.listarEspecie',compact('animales'));
    }
    
    public function create()
    {
        $animal=Especie::all();
        return view ('especies.create');
    }
    
public function store(Request $request)
{
  
  $animal= new Especie();

  $file=$request->file('fotoMascota');
  $nombreArchivo="img_".time().".".$file->guessClientExtension();
  $request->file('fotoMascota')->storeAs('public/especie',$nombreArchivo);
       $animal->fotoMascota=$nombreArchivo;

 $animal->tipoAnimal = $request->tipoAnimal;   
  $animal->edad = $request->edad;
  $animal->raza = $request->raza;
  $animal->nombre = $request->nombre;
  $animal->genero = $request->genero;
  $animal->save();
  return redirect()->route('especie.index');
  
}

public function show ($especie)
    {
        return view('especies.show',compact('especie'));
    }

public function destroy (Especie $especie)
    {
        $especie->delete();
    return redirect()->route('especie.index');
    }

public function edit (Especie $especie)
   {
    return view('especies.edit', compact('especie'));

    }

public function update (Request $request, Especie $especie)
   {
    $especie->nombre=$request->tipoAnimal;
    $especie->nombre=$request->nombre;
    $especie->raza=$request->raza;
    $especie->edad=$request->edad;
    $especie->save();
    return redirect()->route('especie.index');
   }
}

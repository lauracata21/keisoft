<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
   
        return view('auth.register');
}

 public function store (Request $request ){

  $this->validate(request(), [
    // 'role'=> 'required',
    'nombre'=> 'required',
    'apellido'=> 'required',
    'direccion'=> 'required',
    'email'=> 'required|email',
    'password'=> 'required|confirmed',
    'tipoIdentificacion'=> 'required',
    'numeroIdentificacion'=> 'required',
    'fechaNacimiento'=> 'required',
    
  ]);

  $users = new User ();
  $users->role = $request->role;
  $users->nombre = $request->nombre;
  $users->apellido= $request->apellido;
  $users->email= $request->email;
  $users->password= $request->password;
  $users->tipoIdentificacion= $request->tipoIdentificacion;
  $users->numeroIdentificacion= $request->numeroIdentificacion;
  $users->direccion= $request->direccion;
  $users->fechaNacimiento= $request->fechaNacimiento;
  $users->save();
  auth()->login($users);
  if(auth()->user()->role=='admin')
  {
      return redirect()->to('admin');
  } else {
      
     if(auth()->user()->role=='fundacion')
     {
      return redirect()->to('fundacion');
     }

  } return redirect()->to('/');
}
}

@extends('layouts.app')

@section('title', 'inicio')

@section('js')
<div class="block mx-auto my-12 p-8 bg-white w-1/2 border border-gray-200 rounded-lg shadow-lg">

    <h1 class="text-3xl text-center fond-bold">Registro</h1>

 <form class="mt-4"  action="{{route('registro.store')}}" method="POST">
    @csrf
    <label>Tipo de usuario (Opcional)</label>
    <select name="role" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    <option selected>Seleccione una opcion</option>
    <option>Usuario</option>
    <option>admin</option>
    <option>fundacion</option>
    </select>
 Nombre:
 <br>
 <input type="text" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Ejemplo: Laura" id="nombre" name="nombre">
  
 @error('nombre')
 <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my2">{{$message}}</p>
 @enderror

 Apellido:
 <input type="text" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Ejemplo: Valencia" id="apellido" name="apellido" >
   
 @error('apellido')
 <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my2">{{$message}}</p>
 @enderror
 <br>
    <label>Tipo identificacion</label>
    <select name="tipoIdentificacion" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    <option selected>Cedula de Cuidadania</option>
    <option>Cedula de Extrangeria</option>
    <option>Targeta de identidad</option>
    <option>Nit</option>
    </select>

  
@error('tipoIdentificacion')
<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my2">{{$message}}</p>
@enderror

    <label>Número Identificacion</label>
    <input type="number" name="numeroIdentificacion" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{old ('identificacion')}}" placeholder="Numero Identificacion">

@error('numeroIdentificacion')
<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my2">{{$message}}</p>
@enderror


    <label>Fecha de nacimiento</label>
    <input type="Date" name="fechaNacimiento" class="form-control border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" class="datepicker" data-date-format="mm/dd/yyyy" >

  
@error('FechaNacimiento')
<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my2">{{$message}}</p>
@enderror

    <label>Dirección</label>
    <input type="text" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"name="direccion" value = "{{old ('direccion')}}"  placeholder="Ejemplo: Cra 15 # 20n-51 ">

  
@error('direccion')
<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my2">{{$message}}</p>
@enderror

 Correo Electronico:
 <br>
 <input type="email" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Ejemplo: lauractz@gmail.com" id="email" name="email" >
   
 @error('email')
 <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my2">{{$message}}</p>
 @enderror
 <br>
 Contraseña:
 <br>
 <input type="password" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password" >
   
 @error('password')
 <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my2">{{$message}}</p>
 @enderror
 <br>
 Confirmar Contraseña:
 <br>
 <input type="password" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password confirmation" id="password_confirmation" name="password_confirmation" >
<br>
<button type="submit" class="roudend-md bg-blue-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-700"">Registrarse</button>
</form>
</div>  
@endsection
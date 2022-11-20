@extends('layouts.app')

@section('title', 'login')

@section('js')
<br><br>
   {{-- <div class="container form-structor">
      <div class="signup">
         <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
         <div class="form-holder">
            <input type="text" class="input" placeholder="Name" />
            <input type="email" class="input" placeholder="Email" />
            <input type="password" class="input" placeholder="Password" />
         </div>
         <button class="submit-btn">Sign up</button>
      </div>
      <div class="login slide-up">
         <div class="center">
            <h2 class="form-title" id="login"><span>or</span>Iniciar sesion</h2>
            <form class="mt-4" method="POST" action="">
               @csrf
            <div class="form-holder">
               <input type="email" class="input" placeholder="Email" id="email" name="email"/>
               <input type="password" class="input" placeholder="Password" id="password" name="password" />
            </div>
            <button class="submit-btn">Log in</button>
             </form>
         </div>
      </div>
   </div> --}}

<br>
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

    <h1 class="text-3xl text-center fond-bold">Login</h1>

 <form class="mt-4" method="POST" action="">
   @csrf
    Correo Electronico:
     <br>
     <input type="email"  class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email" >
    <br>
    Contraseña:
    <br>
     <input type="password" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password" >
      
     @error('message')
     <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my2">{{$message}}</p>
     @enderror
     
    <br>
    <button type="submit" class="roudend-md bg-blue-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-700">Iniciar sesion</button>
 </form>
</div>
@endsection
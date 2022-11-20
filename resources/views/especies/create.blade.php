@extends('layouts.funnav')
@section('titulo', 'Animales | create')
@section('contenido')
<section class="container">
    <div class="container border">
        <form action="{{route('especie.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6">
                <label>Tipo animal:</label>
                <select name="tipoAnimal" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
                <option selected>Gato</option>
                <option>Perro</option>
                <option>Ave</option>
                <option>Caballo</option>
                <option>Otro</option>
                </select>
            </div>
            <label for="">
                Nombre:
                <br>
                <input type="text" class ="form-control" placeholder="Ejemplo: Toby" name="nombre">
            </label>
        
            <br>
            <label for="">
                Raza:
                <br>
                <input type="text" class ="form-control" placeholder="Ejemplo: Pitbull" name="raza">
            </label>
            <br>
            <label for="">
                Edad:
                <br>
                <input type="text" class ="form-control" placeholder="Ejemplo: 2 años" name='edad'>
            </label>
            <br>
            <label for="">
                <div class="form-group col-md-6">
                    <label>Genero</label>
                    <select name="genero" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
                    <option selected>Macho</option>
                    <option>Hembra</option>
                    </select>
                </div>
                Foto:
                <br>
                <input type="file" class ="form-control"  name='fotoMascota'>
            </label>
            <br>
            <button type="submit" class="btn btn-outline-primary">Agregar animal</button>
        </form>
    </div>
</section>
@endsection
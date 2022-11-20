@extends('layouts.funnav')
@section('titulo', 'Animales | wdit')
@section('contenido')
<section class="container">
    <form action="{{route('especie.update',$especie)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" class ="form-control"  value="{{$especie->nombre}}">
        </label>
        <br>
        <label>
            Raza:
            <br>
            <input type="text" name="raza" class ="form-control"  value="{{$especie->raza}}">
        </label>
        <br>
        <label>
            Edad:
            <br>
            <input type="text" name="edad" class ="form-control"  value="{{$especie->edad}}">
        </label>
        <br>
        <button type="submit" class="btn btn-info">Actualizar</button>
        </form>
</section>
@endsection

@extends('layouts.funnav')
@section('titulo', 'Crear Noticia')
@section('contenido')

<section class="container">
    <form action="{{route('noticias.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="">Fundacion que publica</label>
            <select class ="form-control" name="fundacion_id" >
    
                @foreach ($fundacions as $fundacion)
                  <option value="{{$fundacion->id}}">{{$fundacion->nombre}}</option> 
                @endforeach
            </select>
        </div>
    
        <label for="">
            Nombre noticia:
            <br>
            <input type="text" class ="form-control" name="nombre">
        </label>
    
        <br>
        <label for="">
            Descripcion noticia:
            <br>
            <input type="text" class ="form-control" name="descripcion">
        </label>
        <br>
        <label for="">
            Fecha:
            <br>
            <input type="date" class ="form-control" name='fecha'>
        </label>
        <br>
        <label for="">
            Hora:
            <br>
            <input type="time" class ="form-control" name='hora'>
        </label>
        <br>
        <label for="">
           
            Foto:
            <br>
            <input type="file"  name='fotoM'>
        </label>
    
        <br>
        <button type="submit" class="btn btn-outline-primary">Publicar</button>
    </form>
</section >
@endsection
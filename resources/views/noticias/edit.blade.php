@extends('layouts.funnav')
@section('titulo', 'Editar Noticia')
@section('contenido')

<form action="{{route('noticias.update',$noticia)}}" method="POST">

    @csrf
    
    @method('put')

    <label>
        Nombre noticia:
        <br>
        <input type="text" class ="form-control" name="nombre" value="{{$noticia->nombre}}">
    </label>
    <br>
    <label>
        Descripcion noticia:
        <br>
        <input type="text" class ="form-control" name="descripcion" value="{{$noticia->descripcion}}">
    </label>
    <br>
    <label>
         Fecha:
        <br>
        <input type="date" class ="form-control" name="fecha" value="{{$noticia->fecha}}">
    </label>
    <br>
    Hora:
    <br>
    <input type="time" name="hora" value="{{$noticia->hora}}">
</label>
    
    <br><br>
    <button type="submit" class="btn btn-info">Actualizar</button>
    </form>
</form>
</div>

@endsection
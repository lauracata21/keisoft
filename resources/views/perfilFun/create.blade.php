@extends('layouts.funnav')
@section('titulo', 'Mi Perfil')
@section('contenido')
{{-- <section class="container">
    <div class="container border">
        <form action="{{route('perfils.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">
                Nombre:
                <br>
                <input type="text" class ="form-control" placeholder="" name="nombre">
            </label>
        
            <br>
            <label for="">
                Direccion:
                <br>
                <input type="text" class ="form-control" placeholder="" name="direccion">
            </label>
            <br>
            <label for="">
                Telefono:
                <br>
                <input type="text" class ="form-control" placeholder="" name='telefono'>
            </label>
            <br>
            <br>
            <div class="form-group">
                <label for="">Servicios</label>
                <select class ="form-control" name="servicio_id" >
                    @foreach ($servicios as $servicio)
                      <option value="{{$servicio->id}}">{{$servicio->nombre}}</option> 
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-outline-primary">Agregar datos</button>
        </form>
    </div>
</section> --}}
@endsection
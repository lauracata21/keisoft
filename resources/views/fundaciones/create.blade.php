@extends('adminlte::page')
@section('title', 'Admin')
@section('content_header')

<div class="container">
    <form action="{{route("fundaciones.store")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div >
           
            <label>Nombre
                <input type="text" class="form-control" name="nombre">
            </label>
            <br>

            <label>Direccion
                <input type="text" class="form-control" name="direccion">
            </label>
            <br>

            <label>Telefono
                <input type="text" class="form-control" name="telefono">
            </label>
            <br>

            <label>N° NIT
                <input type="text" class="form-control" name="nit">
            </label>
        </div>
        <br>
        <div >
            <div class="form-group">
                <label for="">Servicios</label>
                <select class="form-control" name="servicio_id" >
                    @foreach ($servicios as $servicio)
                    <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
                    @endforeach
                </select>
            </div>
        <button type="submit" class="btn btn-outline-primary">Crear</button>
    </form>
</div
@endsection
@extends('adminlte::page')
@section('title', 'Admin')
@section('content_header')
<div class="container">
    <form action="{{route("alimentos.store")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div >
            <div class="form-group">
                <label for="">Categoria producto</label>
                <select class="form-control" name="tipoProducto_id" >
                    @foreach ($productos as $tipoProducto)
                    <option value="{{$tipoProducto->id}}">{{$tipoProducto->tipoProducto}}</option>
                    @endforeach
                </select>
            </div>

               <div class="form-group">
                   <label for="">Usuario</label>
                   <select class="form-control" name="user_id" >
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->nombre}}</option>
                    @endforeach
                   </select>
               </div>
               <br>
            <label>Nombre
                <input type="text" class="form-control" name="nombre">
            </label>
            <br>

            <label>Precio
                <input type="text" class="form-control" name="precio">
            </label>
            <br>

            <label>Descripcion
                <input type="text" class="form-control" name="descripcion">
            </label>
            <br>

            <label>Imagen producto
                <input type="file" class="form-control" name="fotoP">
            </label>
        </div>
        <button type="submit" class="btn btn-outline-primary">Publicar</button>

    </form>
</div
@endsection
@extends('adminlte::page')
@section('title', 'Admin')
@section('content_header')
<div class="container">
    <form action="{{route("alimentos.update", $alimento)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div >
            <div class="form-group">
                {{-- <label for="">Categoria producto</label>
                <select class="form-control" name="tipoProducto_id" >
                    @foreach ($alimento as $tipoProducto)
                    <option value="{{$tipoProducto->id}}">{{$tipoProducto->nombre}}</option>
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
               </div> --}}
               <br>
            <label>Nombre
                <input type="text" class="form-control" name="nombre" value="{{$alimento->nombre}}">
            </label>
            <br>

            <label>Precio
                <input type="text" class="form-control" name="precio"value="{{$alimento->precio}}">
            </label>
            <br>

            <label>Descripcion
                <input type="text" class="form-control" name="descripcion"value="{{$alimento->descripcion}}">
            </label>
            <br>

            <label>Imagen producto
                <input type="file" class="form-control" name="fotoP" value="{{$alimento->fotoP}}">
            </label>
        </div>
        <button type="submit" class="btn btn-outline-primary">Publicar</button>

    </form>
</div
@endsection
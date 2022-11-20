@extends('adminlte::page')
@section('title', 'Admin')
@section('content_header')

<div class="container-fluid">
  <div class="row">
      <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                  <div style="display: flex; justify-content: space-between; align-items: center;">

                      <span id="card_title">
                          {{ __('Productos') }}
                      </span>

                       <div class="float-right">
                          <a href="{{ route('alimentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                            {{ __(' Agregar nuevo producto') }}
                          </a>
                        </div>
                  </div>
              </div>
        
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-striped table-hover">
                          
                        <thead class="thead">
                              <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descripcion</th>
                                <th>Categoria Producto</th>
                                <th>Usuario que publica</th>
                                <th>Imagen</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                  <th></th>
                              </tr>
                          </thead>

                          <tbody>
                            @foreach ($productos as $producto)
                            <tr>
                               <td>{{$producto->id}}</td>
                               <td>{{$producto->nombre}}</td>
                               <td>{{$producto->precio}}</td>
                               <td>{{$producto->descripcion}}</td>
                               <td>{{$producto->tipoProducto_id}}</td>
                               <td>{{$producto->user_id}}</td>
                               <td><img src="http://localhost/keisoft/public/storage/productos/{{$producto->fotoP}}" width="80px"></td>
                              
                               <td> <a class="btn btn-sm btn-success" href="{{route('alimentos.edit',$producto)}}"><i class="fa fa-fw fa-edit"></i> Editar</a></td> 
                              <td><form action="{{route('alimentos.destroy', $producto)}}" method="POST">
                                      @csrf
                                         @method('delete')
                                         <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                   </form>
                                </td>
                             </tr>
                           @endforeach
                          </tbody>

                      </table>
                  </div>
              </div>
          </div>
  
      </div>
  </div>
</div>
@endsection
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
                            {{ __('Fundaciones') }}
                        </span>
  
                         <div class="float-right">
                            <a href="{{route ('fundaciones.create')}}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Crear nueva fundacion') }}
                            </a>
                          </div>
                    </div>
                </div>
          
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                         <thead>
                          <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Nit</th>
                            <th>Servicios</th>
                            {{-- <th>Editar</th> --}}
                            <th>Borrar</th>
                        </tr>
                         </thead>
  
                            <tbody>
                              @foreach ($fundaciones as $fundacione)
                               <tr>
                                <td>{{$fundacione->id}}</td>
                                <td>{{$fundacione->nombre}}</td>
                                <td>{{$fundacione->direccion}}</td>
                                <td>{{$fundacione->direccion}}</td>
                                <td>{{$fundacione->nit}}</td>
                                <td>{{$fundacione->servicio_id}}</td>
                                
                                 {{-- <td> <a class="btn btn-sm btn-success" href="{{route('fundaciones.edit',$especie)}}"><i class="fa fa-fw fa-edit"></i> Editar</a></td>  --}}
                                 <td><form action="{{route('fundaciones.destroy',$fundacione)}}" method="POST">
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
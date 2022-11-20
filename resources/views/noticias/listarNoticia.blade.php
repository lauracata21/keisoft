@extends('layouts.funnav')
@section('titulo', '')
@section('contenido')

<div class="container-fluid">
   <div class="row">
       <div class="col-sm-12">
           <div class="card">
               <div class="card-header">
                   <div style="display: flex; justify-content: space-between; align-items: center;">
 
                       <span id="card_title">
                           {{ __('Noticias') }}
                       </span>
 
                        <div class="float-right">
                           <a href="{{ route('noticias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                             {{ __('Crear nueva noticia') }}
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
                               <th>Nombre Noticia</th>
                               <th>Descripcion noticia</th>
                               <th>Fecha</th>
                               <th>Hora</th>
                               <th>imagen</th>
                               <th>Editar</th>
                               <th>Borrar</th>
                            </tr>
                        </thead>
 
                           <tbody>
                              @foreach ($noticias as $noticia)
                              <tr>
                                <td>{{$noticia->id}}</td>
                                <td>{{$noticia->nombre}}</td>
                                <td>{{$noticia->descripcion}}</td>
                                <td>{{$noticia->fecha}}</td>
                                <td>{{$noticia->hora}}</td>
                                <td><img src="http://localhost/keisoft/public/storage/noticias/{{$noticia->fotoM}}" width="80px"></td>
                               
                                <td> <a class="btn btn-sm btn-success" href="{{route('noticias.edit',$noticia)}}"><i class="fa fa-fw fa-edit"></i> Editar</a></td> 
                               <td><form action="{{route('noticias.destroy', $noticia)}}" method="POST">
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
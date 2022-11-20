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
                          <a href="{{route ('especie.create')}}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                            {{ __('Agregar un animal') }}
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
                          <th>Raza</th>
                          <th>Edad</th>
                          <th>Genero</th>
                          <th>Imagen</th>
                          <th>Editar</th>
                          <th>Borrar</th>
                      </tr>
                       </thead>

                          <tbody>
                            @foreach ($animales as $especie)
                             <tr>
                              <td>{{$especie->id}}</td>
                              <td>{{$especie->nombre}}</td>
                              <td>{{$especie->raza}}</td>
                              <td>{{$especie->edad}}</td>
                              <td>{{$especie->genero}}</td>
                              <td><img src="http://localhost/keisoft/public/storage/especie/{{$especie->fotoMascota}}" width="80px"></td>
                              
                               <td> <a class="btn btn-sm btn-success" href="{{route('especie.edit',$especie)}}"><i class="fa fa-fw fa-edit"></i> Editar</a></td> 
                              <td><form action="{{route('especie.destroy',$especie)}}" method="POST">
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
{{-- <div class="container">
    
    <div class="container">
        <a href="{{route ('especie.create')}}">Agregar un animal</a> 
        <br>
        <table id="idespecie"  class="table table-striped table-bordered" style="width:100%" >
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Raza</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Imagen</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
          <tbody>
        
            @foreach ($animales as $especie)
             <tr>
                <td>{{$especie->id}}</td>
                <td>{{$especie->nombre}}</td>
                <td>{{$especie->raza}}</td>
                <td>{{$especie->edad}}</td>
                <td>{{$especie->genero}}</td>
                <td><img src="http://localhost/keisoft/public/storage/especie/{{$especie->fotoMascota}}" width="80px"></td>
                <td><a href="{{route('especie.edit',$especie)}}">Editar</a></td> 
                    <td><form action="{{route('especie.destroy', $especie)}}" method="POST">
                       @csrf
                          @method('delete')
                           <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form></td>
              </tr>
            @endforeach
          </tbody>
         </table>
     </div>
  </div> --}}
@endsection

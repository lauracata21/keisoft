@extends('layouts.funnav')
@section('titulo', 'Casos Reportados')
@section('contenido')
      <div class="container">
          <div class="container">
               <table id="idreporteAbuso"  class="table table-striped table-bordered" style="width:100%" >
                 <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tipo caso</th>
                        <th>Direccion</th>
                        <th>Correo Electronico</th>
                        <th>Solucionado</th>
                     </tr>
                 </thead>
                    <tbody>
        
                         @foreach ($casos as $caso)
                           <tr>
                             <td>{{$caso->id}}</td>
                             <td>{{$caso->tipoCaso}}</td>
                             <td>{{$caso->direccion}}</td>
                             <td>{{$caso->correoElectronico}}</td>
                             <td><form action="{{route('casos.destroy', $caso)}}" method="POST">
                                @csrf
                                  @method('delete')
                                     <button type="submit" class="btn btn-primary">Solucionado</button>
                               </form></td>
                           </tr>
                         @endforeach
                     </tbody>
               </table>
           </div>
        </div>

@endsection
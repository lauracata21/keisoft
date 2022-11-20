@extends('layouts.app')

@section('title', 'inicio')

@section('content')
<br><br>
<body class="" style="">
    <section class="container">
            <h3 class="display-5 text-center mt-5">Aqui podras hacer un reporte de algun caso de abuso animal,
                 este reporte sera atendido por las fundaciones.</h3>
      <br>
        <form action="{{route('reportar.store')}}" method="POST">
            @csrf
         
          <div class="container border">
            <div class="form-group">
                <label for="">Fundacion a la cual desea realizar el reporte</label>
                <select class ="form-control" name="fundacion_id"  >
                    <option selected>Seleccionar una opcion</option>
                    @foreach ($fundacions as $fundacion)
                      <option value="{{$fundacion->id}}">{{$fundacion->nombre}}</option> 
                    @endforeach
                </select>
            </div>
                <div class="form-group ">
                    <label for="">Tipo de caso</label>
                    <br>
                    <select name="tipoCaso" class ="form-control">
                    <option selected>Seleccionar una opcion</option>
                    <option selected>Maltrato</option>
                    <option>Abandono</option>
                    <option></option>
                    </select>
                </div>
    
                Direccion:
                <br>
                <input type="text" class ="form-control" placeholder="Ejemplo: barrio, calle, carrera" name="direccion">
                <br>
                Correo Electronico:
                <br>
                <input type="text" class ="form-control" placeholder="Ejemplo: laura21@gmail.com" name='correoElectronico'>
            </label>
            <br>
            <button type="submit" class="btn btn-info btn-enviar">Enviar formulario</button>
        </form>
          </div>      
    </section>
    </body>
@endsection

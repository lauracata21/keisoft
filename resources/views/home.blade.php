@extends('layouts.app')

@section('title', 'inicio')

@section('content')

<div class="splitview skewed">
    <div class="panel bottom">
        <div class="content">
            <div class="description">
                <h1>Para recordar...</h1>
                <br>
                <p>Quien es cruel con los animales no puede ser
                    una buena persona. (Shopenhauer)
                </p>
            </div>
            <img src="./images/dos.jpg" alt="Original">
        </div>
    </div>

    <div class="panel top">
        <div class="content">
            <div class="description">
                <h1>Para recordar...</h1>
                <br>
                <p>Quien es cruel con los animales no puede ser
                    una buena persona. (Shopenhauer)
            </div>
            <img src="./images/uno.jpg" alt="Duotone">
        </div>
    </div>
    <div class="handle"></div>
</div>
 <!--SECCION NOTICIAS-->
<div class="container">
    <h1 class="display-4 ">NOTICIAS</h1> 
      <div class="row my-5">
          @foreach ($noticias as $noticia)
          <div class="col col-md-4" >
            <div class="card">
              <img src="{{'http://localhost/keisoft/public/storage/noticias/'.$noticia->fotoM}}" class="card-img-top" alt="..." width="50" height="200">
              <div class="card-body">
                  <h5 class="card-title">Fundacion responsable: Fundacion x</h5>
                <p class="card-text">Descripcion: {{$noticia->descripcion}}</p>
                <p class="card-text">Hora: {{$noticia->hora}}</p>
                <p class="card-text">Fecha: {{$noticia->fecha}}</p>
              </div>
            </div>
          </div>
          @endforeach  
       </div>
  </div>
  <!--FIN SECCION NOTICIAS-->
@endsection

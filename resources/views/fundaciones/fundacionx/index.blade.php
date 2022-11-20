@extends('layouts.app')

@section('title', 'fundacionx')

@section('content')
<br>
<br>
<br>
hola
<!-- SECTION 2 -->
<section class="container ">
    <h2 class="display-4 text-center">Bienvenidos a la fundacion x</h2>
    <p class="lead text-center my-4 text-info">Informacion relevante que la fundacion desee mostrar.</p>
    <div class="row">
        <div class="col-md-6">
            <!-- ACORDIÓN -->
            <div id="accordion">
                
                <div class="card">
                    <div class="card-header bg-info rounded-0" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       Mision
                        </button>
                    </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint vel fugit commodi facilis quis quos at neque,
                         repellendus nam necessitatibus! Praesentium vel reiciendis, error at illum qui earum et quo!
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-info rounded-0" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       Vision
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus blanditiis sapiente odit, 
                       officia ad inventore doloremque consequuntur rem eaque voluptatem error, minus libero ab earum impedit accusantium recusandae, nobis cumque?
                    </div>
                    </div>
                </div>
                <br> 
                 <a  class="btn btn-outline-primary" href="{{route ('adopcion.index')}}" role="button">Adopciones</a>
                <a  class="btn btn-outline-primary" href="{{route ('donaciones.create')}}" role="button">Donar</a> --}}
             </div> 
            <!-- ACORDIÓN -->
        </div>
        <div class="col-md-6">
            <img src="{{asset('images/keisoftlogo.png')}}"  alt="" class="img-fluid" width="500" height="200">
            <ul class="list-group">
                <li class="list-group-item active bg-info rounded-0 border-info">Informacion fundacion x </li>
                <li class="list-group-item">Correo: fundacionx@gmail.com</li>
                <li class="list-group-item">Telefono: 31300108</li>
                <li class="list-group-item">Direccion: calle #7-Popayan</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div> 
 </section> 
<!-- SECTION 2 -->
@endsection
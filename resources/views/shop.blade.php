@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 100px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Tienda KeiSoft</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                        <br>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                
                                <img src="http://localhost/keisoft/public/storage/productos/{{ $pro->fotoP }}" width="50px"
                                {{-- <img src="/productos/{{ $pro->fotoP }}" --}}
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $pro->fotoP }}">
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $pro->nombre }}</h6></a>
                                    <p>{{ $pro->descripcion }}</p>
                                    <p>${{ $pro->precio }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->nombre }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->precio }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->fotoP }}" id="img" name="fotoP">
                                        {{-- <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug"> --}}
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-primary btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
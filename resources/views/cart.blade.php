@extends('layouts.app')

@section('content')
@php
   // SDK de Mercado Pago
      require base_path("vendor/autoload.php");
// Agrega credenciales
MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));
// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
   
$item = new MercadoPago\Item();
$item->title= "Mi producto";
$item->quantity = 1;
$item->unit_price = 20000;

$preference->items=array($item);
$preference->save(); 
@endphp

    <div class="container" style="margin-top: 100px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mi carrito</li>
            </ol>
        </nav>
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors0>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <br>
                @if(\Cart::getTotalQuantity()>0)
                    <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en el carrito</h4><br>
                @else
                    <h4>No Producto(s) En tu carrito</h4><br>
                    <a href="{{ route('shop') }}" class="btn btn-dark">Continue en la tienda</a>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="{{'http://localhost/keisoft/public/storage/productos/'.$item->attributes->fotoP}}" 
                             class="img-thumbnail" width="200" height="200">
                        </div>
                        <div class="col-lg-5">
                            <p>
                                <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                                <b>Price: </b>${{ $item->price }}<br>
                                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                                {{--                                <b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                        <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                               id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">
                                        <button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i class="fa fa-edit"></i></button>
                                    </div>
                                </form>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-secondary btn-sm" style="margin-right: 10px;"><i class="fa fa-fw fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
                @if(count($cartCollection)>0)
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-primary btn-md">Borrar Carrito</button> 
                    </form>
                @endif
            </div>
            @if(count($cartCollection)>0)
                <div class="col-lg-5">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                        </ul>
                    </div>
        
                    <br>
                    {{-- <div class="cho-container"></div> --}}
                    <br><a href="/tienda" class="btn btn-dark">Continue en la tienda</a>
                    
                    <a href="#" class="cho-container"></a>
                </div>
            @endif
        </div>
        <br><br>
    </div>

    {{--SDK MercadoPago.js V2--}}
<script src="https://sdk.mercadopago.com/js/v2"></script>

{{-- <div class="cho-container"></div> --}}
<script>
  const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
    locale: "es-CO",
  });

  mp.checkout({
    preference: {
      id: '{{$preference->id}}',
    },
    render: {
      container: '.cho-container',
      label: 'Proceder a realizar el pago',
    },
  });
</script>
@endsection
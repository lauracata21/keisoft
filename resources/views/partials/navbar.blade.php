<nav class="navbar navbar-expand-md navbar-withe fixed-top bg-grey shadow-lg" style="background-color: #ffffff;">
    <div class="container">
        <span class="text-2xl font-[Poppins] cursor-pointer">
            <img href="{{route('home.index')}}" class="h-12 inline" src="{{asset('images/keisoftlogo.png')}}" width="115" height="80">
              </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                {{-- <li  class="nav-item">
                    <a href="#" class="nav-link">DONACIONES</a>
                  </li> --}}
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        FUNDACIONES </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="#" class="nav-link">Fundacion x</a>
                    </div>
                  </li>
                  {{-- <li  class="nav-item">
                    <a class="dropdown-item" href="{{Route('fundacione.create')}}">Crear Fundaciones</a>
                    <a href="#" class="nav-link">FUNDACIONES</a>
                  </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">TIENDA</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('reportar.index')}}" class="nav-link">REPORTAR CASO</a>
                </li>
                {{-- <input class="form-control mr-sm-5" type="search" placeholder="Buscar" aria-label="Search" > --}}
                    
                      @if (auth()->check())
                          <li class="mx-8">
                                <p class="nav-link"><b>{{ auth()->user()->nombre}}</b></p>
                          </li>
                         <li>
                                <a href="{{ route('login.destroy') }}" class="nav-link"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesion</a>
                         </li>
                            @else
                              <li class="mx-6">
                                <a href="{{ route('login.create') }}" class="nav-link">Iniciar Sesion</a>
                              </li>
                              <li>
                                <a href="{{ route('registro.create') }}" class="nav-link ">Registrarse</a>
                              </li>
                        @endif

                <li class="nav-item dropdown pt-2 m-3">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle"
                       href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" >
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('partials.cart-drop')
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

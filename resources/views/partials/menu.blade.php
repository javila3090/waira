<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('/img/logo_waira.png')}}" class="img-fluid" alt=""> <b>Waira</b></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
            <ul class="navbar-nav ml-auto" style="color:#fdcc52;">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger size-12px" href="#download">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger size-12px" href="#services">Servicios</a>
                </li>                 
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger size-12px" href="#portfolio">Portafolio</a>
                </li>                               
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger size-12px" href="#clients">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger size-12px" href="#contact">Contacto</a>
                </li>
                @if(\Auth::user())
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger size-12px" href="{{url('/admin')}}">Admin</a>
                </li>         
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <a href="#" class="nav-link js-scroll-trigger size-12px" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Salir
                    </a>

                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
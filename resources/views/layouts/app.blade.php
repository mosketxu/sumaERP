<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous"> --}}
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" /> {{--
    <!-- Custom styles for this template -->--}}
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

    <link rel="icon" href="{{ asset('favicon.png') }}">

    <title>@yield('title')</title>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="main-nav">
            <div class="container">
                <a class="navbar-brand " href={{route( 'index')}}>
                    <img src="{{ asset('img/logosuma.jpg')}}" height="30" class="d-inline-block" id="sumaLogo" alt="Suma Apoyo Empresarial">
                </a>
                <button class="navbar-toggler" 
                        type="button" 
                        data-toggle="collapse" 
                        data-target="#navbarCollapse" 
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        @section('menuservicios')
                            <li class="nav-item @yield('servicios')">
                                <a href={{ route( 'home')}} class="nav-link text-primary ">{{__("Servicios")}}</a>
                            </li>
                        @show
                        <li class="nav-item @yield('equipo')">
                            <a href={{ route( 'suma','equipo')}} class="nav-link text-primary ">{{__("Equipo")}}</a>
                        </li>
                        <li class="nav-item @yield('clientes')">
                            <a href={{ route( 'suma','clientes')}} class="nav-link text-primary ">{{__("Clientes")}}</a>
                        </li>
                        <li class="nav-item @yield('contacto')">
                            <a href={{ route( 'suma','contacto')}} class="nav-link text-primary ">{{__("Contacto")}}</a>
                        </li>
                        <li class="nav-item dropdown" >
                            <a href="#" class="nav-link text-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-globe-americas fa-lg mt-1"></i></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('set_language', ['es']) }}">Es</a>
                                <a class="dropdown-item" href="{{ route('set_language', ['en']) }}">En</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href={{ route( 'login')}} class="nav-link text-primary" aria-label="login"><i class="fas fa-user fa-lg mt-1" ></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @section('carrusel')
    
    @section('content')

</body>
<!-- FOOTER -->

<footer id="main-footer" class=@yield('piefijo')>
    <div class="container">
        <div class="row">
            <div class="col text-white">
                <h4 class="display-8 mt-1 p-0">Suma Apoyo Empresarial</h4>
                <h5><a href="mailto:info@sumaempresa.com" class="display-9 text-white m-0 p-0"><strong>  info@sumaempresa.com</strong></a></h5>
                <div class="d-flex justify-content-between text-center mb-2 p-0">
                    <p class="display-9 m-0 p-0">Copyright &copy; <span id="year"></span> </p>
                    <a class="display-9 text-right m-0 p-0" href={{ route( 'suma','politica') }}>
                        <span>{{__("Politica de seguridad")}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- boton subir-->
    <a class="go-top " href="# ">{{__("Subir")}}</a>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"> </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script src="{{asset('js/all.js')}}"></script> <!--load all styles -->


<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // Configure Slider
    $('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
    });

    // Lightbox Init
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });

    {{-- // Init Scrollspy
    $('body').scrollspy({ target: '#main-nav' });

    // Smooth Scrolling
    $("#main-nav a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            const hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    }); --}}

    // Botón subir
    $(document).ready(function() {
        // Show or hide the sticky footer button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('.go-top').fadeIn(200);
            } else {
                $('.go-top').fadeOut(200);
            }
        });

        // Animate the scroll to top
            $('.go-top').click(function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop: 0}, 1200);
            })
        });

</script>

<script>
    // Init Scrollspy
    $('body').scrollspy({ target: '#main-nav' });
    // Smooth Scrolling
    $("#main-nav a").on('click', function(event){
        if (this.hash !== "") {
            event.preventDefault();
            const hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

</script>
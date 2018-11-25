@extends('layouts.layoutsuma')
@section('title','Suma Apoyo Empresarial- Clientes ')
@section('clientes','active')

@section('content')
    <!-- CLIENTES HEADER -->
    <header id="clientes-header">
        <div class="container">
            <div class="d-none d-sm-block text-right mb-3">
                <h3 class="display-3"><span class="textoFondoTitulo">Clientes</span></h3>
                <p class="lead d-none d-md-block"><span class="textoFondo">Nuestros clientes son nuestra mejor presentación.</span></p>
            </div>
        </div>
    </header>

    <!-- CLIENTES INTRO -->
    <section id="clientes-intro">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4 text-primary mb-5">Nuestros clientes</h1>
                    <p class="text-muted text-justify m-0 p-0 mb-1">
                        En Suma Apoyo Empresarial contamos con experiencia en todo tipo de clientes sin importar su tamaño, prestando nuestros servicios
                        tanto a profesionales como a PYME´s.</p>
                    <p class="text-muted text-justify m-0 p-0 mb-1">
                        La satisfacción que nos muestran y la confianza que nos transmiten nuestros clientes es nuestra mejor tarjeta de presentación.
                    </p>
                    <p class="text-muted text-justify m-0 p-0 mb-1">En una sociedad global como la nuestra, el idioma no es un obstaculo, y contamos entre nuestros clientes
                        a empresas de toda Europa, facilitando a las mismas su adaptación a los requerimientos establecidos por
                        la legislación española.</p>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/rawpixel-974545-unsplashRedim.jpg')}}" alt="Clientes" class="img-fluid rounded-circle d-none d-md-block about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- CLIENTES -->
    <section id="clientes" class="my-3  text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="display-4 text-left text-muted">estos clientes ya confían en nosotros:</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/alpify.jpg')}}" alt="Alpify" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/BeeButterfly.png')}}" alt="BeeButterfly" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/bonavista.jpg')}}" alt="bonavista" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/business_basecamp.jpg')}}" alt="business_basecamp" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/cintora.jpg')}}" alt="cintora" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/floch.png')}}" alt="floch" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/fmiro.jpg')}}" alt="fmiro" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/FRE.png')}}" alt="FRE" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/ilumia.jpg')}}" alt="ilumia" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/inmobar.jpg')}}" alt="inmobar" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/InstitutCatalaCuina.jpg')}}" alt="InstitutCatalaCuina" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/leve.jpg')}}" alt="leve" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/lewis.jpg')}}" alt="lewis" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/ltc.jpg')}}" alt="ltc" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/lullaby.jpg')}}" alt="lullaby" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/malamar.jpg')}}" alt="malamar" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/nae.jpg')}}" alt="nae" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/nalmat.jpg')}}" alt="nalmat" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/nomasvello.png')}}" alt="nomasvello" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/rdvfrance.jpg')}}" alt="rdvfrance" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/sahita.jpg')}}" alt="sahita" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/smokeDataRedim.png')}}" alt="smoke" class="fluid bg-dark">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/sputch.jpg')}}" alt="sputch" class="fluid">
                </div>
                <div class="col-md-4 col-sm-6 p-5">
                    <img src="{{ asset('img/clientes/wine.jpg')}}" alt="wine" class="fluid">
                </div>
            </div>
        </div>
    </section>
@show
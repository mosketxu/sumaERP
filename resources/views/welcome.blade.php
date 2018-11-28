@extends('layouts.layoutsuma')

@section('menuservicios')
    <li class="nav-item dropdown" >
        <a href="#" class="nav-link text-primary dropdown-toggle" data-toggle="dropdown">{{__("Servicios")}}</a>
        <div class="dropdown-menu">
            <a href="{{ route( 'home', '#queofrecemos-head-section')}}" class="dropdown-item">{{__("Qué ofrecemos")}}</a>
            <a href="{{ route( 'home', '#financiera-head-section')}}" class="dropdown-item">{{__("Área Financiera")}}</a>
            <a href="{{ route( 'suma', '#contable-head-section')}}" class="dropdown-item">{{__("Área Contable")}}</a>
            <a href="{{ route( 'suma', '#fiscal-head-section')}}" class="dropdown-item">{{__("Área Fiscal")}}</a>
            <a href="{{ route( 'suma', '#mercantil-head-section')}} " class=" dropdown-item ">{{__("Área Mercantil")}}</a>
            <a href="{{ route( 'suma', '#administracion-head-section') }} " class="dropdown-item ">{{__("Administración")}}</a>
            <a href="{{ route( 'suma', '#consultoria-head-section') }} " class="dropdown-item ">{{__("Consultoría - RRHH")}}</a>
            <a href="{{ route( 'suma', 'politica') }} " class="dropdown-item ">{{__("Politica de seguridad")}}</a>
        </div>
    </li>
@endsection

@section('home','active')

@section('carrusel')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
            </div>

            <div class="carousel-item carousel-image-2">
                <div class="container d-flex">
                    <div class="carousel-caption text-left mb-3">
                        <h3 class="display-3"><span class="textoFondoTitulo">{{__("Contabilidad")}}</span></h3>
                        <p class="lead d-none d-md-block"><span class="textoFondo">{{__("Mantenemos una imagen fiel y veraz del estado de tu negocio.")}}</span></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item carousel-image-3">
                <div class="container">
                    <div class="carousel-caption text-right mb-3">
                        <h3 class="display-3"><span class="textoFondoTitulo">{{__("Fiscalidad")}}</span></h3>
                        <p class="lead d-none d-md-block"><span class="textoFondo">{{__("Te asesoramos en los aspectos legales.")}}</span></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-image-4">
                <div class="container">
                    <div class="carousel-caption-2 text-left mt-3">
                        <h3 class="display-3"><span class="textoFondoTitulo">{{__("Administración")}}</span></h3>
                        <p class="lead d-none d-md-block"><span class="textoFondo">{{__("Te ayudamos con tus tareas diarias para que te centres en tus objetivos.")}}</span></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-image-5">
                <div class="container">
                    <div class="carousel-caption-2 text-left mt-3">
                        <h3 class="display-3"><span class="textoFondoTitulo">{{__("Consultoria")}}</span></h3>
                        <p class="lead d-none d-md-block"><span class="textoFondo">{{__("Analizamos tus procesos en busca de la mejora.")}}</span></p>
                    </div>
                </div>
            </div>
        </div>

        <a href="#myCarousel" data-slide="prev" class="carousel-control-prev flechita">
                <span class="carousel-control-prev-icon text-primary"></span>
        </a>

        <a href="#myCarousel" data-slide="next" class="carousel-control-next flechita">
                <span class="carousel-control-next-icon"></span>
        </a>
    </div>
@endsection

@if(App::getLocale()=='es')
    @section('title','Suma - Bienvenido')
    @section('content')
        @include('partials.suma.es.ppalEs')    
    @endsection
@else
    @section('title','Suma - Welcome')
    @section('content')
        @include('partials.suma.en.ppalEn')    
    @endsection
@endif
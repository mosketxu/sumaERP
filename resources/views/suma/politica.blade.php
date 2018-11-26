@extends('layouts.layoutsuma')
    
@section('piefijo','fixed-bottom mt-5 mb-3')
@section('politica','active')
@section('carrusel')
    <div class="container">
        <div class="col-md-12 mt-5 ">
            <div id="imgTop" class="" >
                <img src="img/LOGO_SUMA_1200x400.jpg" class="img-responsive carousel" alt="Suma Apoyo Empresarial S.L.">
            </div>
        </div>
    </div>
@show

@if(App::getLocale()=='es')
    @section('title','Suma - Politica Seguridad')
    @section('content')
        @include('suma.es.politicaEs')    
    @show
@else
    @section('title','Suma - Private Policy')
    @section('content')
        @include('suma.en.politicaEn')    
    @show
@endif
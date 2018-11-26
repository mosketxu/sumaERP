@extends('layouts.layoutsuma')
@section('title','Suma Apoyo - Equipo ')
@section('equipo','active')

@if(App::getLocale()=='es')
    @section('title','Suma - Equipo')
    @section('content')
        @include('suma.es.equipoEs')    
    @show
@else
    @section('title','Suma - Team')
    @section('content')
        @include('suma.en.equipoEn')    
    @show
@endif
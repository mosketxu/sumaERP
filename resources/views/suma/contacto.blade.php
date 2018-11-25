@extends('layouts.layoutsuma')
@section('title','Suma Apoyo Empresarial- Contacto ')
{{-- @section('piefijo','fixed-bottom') --}}
@section('contacto','active')

@section('content')
    <!-- CONTACTO SECTION -->
    <section id="contacto-section">
        <div class="container">
            <div class="row mx-2 mt-5">
                <div id="contacto-datos" class="col-md-6 offset-md-3 p-3">
                    <h3 class="display-7 text-muted">Visítanos en nuestras oficinas de</h3>
                    <p class="display-7 text-primary"><i class="fas fa-map-marker-alt"></i> C/Sant Marian 57, 1º-2ª, Terrassa </p>
                    <p class="display-7 text-muted">o envíanos un mail a...</p>
                    <a href="mailto:info@sumaempresa.com" class="display-7"><i class="fas fa-at fa-lg"></i> info@sumaempresa.com</a>
                    <p class="small text-muted pt-1 px-4">(Inscrita en el Registro Mercantil de Barcelona: Tomo 44243, Folio 139 Hoja 450748 en fecha 31 de marzo de
                        2014. CIF B66260076)</p>
                </div>
            </div>
        </div>
    </section>
@show
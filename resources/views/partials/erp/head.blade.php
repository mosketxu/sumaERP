    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Suma Apoyo Empresarial SL - ERP">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    {{-- <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">  --}}
    {{-- <link href="{{asset('css/all.css')}}" rel="stylesheet">  --}}
    {{-- <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('themify-icons/css/themify-icons.css')}}" rel="stylesheet"> 
    <link href="{{asset('selectFX/css/cs-skin-elastic.css')}}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">


    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" /> 
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Suma Empresa-ERP') }}</title>
    <title>@yield('title')</title>

    <!-- Styles -->

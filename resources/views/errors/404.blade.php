@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/errorLayout')

@section('title', 'Error - Pages')

@section('page-style')
<!-- Page -->
@vite(['resources/assets/vendor/scss/pages/page-misc.scss', 'resources/scss/styles/errors/404error.scss' ])
@endsection


@section('content')
<!-- Error -->
<div class="container-xxl container-p-y">
  <div class="misc-wrapper">
    <h1 class="mb-2 mx-2 fs-xxlarge title-error" style="line-height: 6rem;font-size: 6rem;">404</h1>
    <h4 class="mb-2 mx-2 text-white">Pagina no encontrada</h4>
    <p class="mb-6 mx-2 text-white">No pudimos encontrar la página que estás buscando</p>
    <a href="{{url('/')}}" class="btn mb-10 btn-inicio">Volver al inicio</a>
  </div>
</div>
<!-- /Error -->
@endsection

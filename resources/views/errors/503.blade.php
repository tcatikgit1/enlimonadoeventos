@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/errorLayout')

@section('title', 'Error - Pages')

@section('page-style')
<!-- Page -->
@vite(['resources/assets/vendor/scss/pages/page-misc.scss', 'resources/scss/styles/errors/503error.scss'])
@endsection


@section('content')
<!-- Error -->
<div class="container-xxl container-p-y">
  <div class="misc-wrapper">
    <h2 class="mb-2 mx-2 text-white">Estamos en mantenimiento</h2>
    <p class="mb-6 mx-2 text-white">Dentro de poco volveremos.</p>
    <a href="{{url('/')}}" class="btn btn-recargarPagina mb-10">Recargar pagina</a>
  </div>
</div>
<!-- /Error -->
@endsection

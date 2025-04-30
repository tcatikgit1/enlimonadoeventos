@extends('layouts/principalLayout')

@section('title', 'Enlimonado Eventos')

@section('vendor-style')
  @vite([
  'resources/assets/vendor/libs/swiper/swiper.scss'


])
@endsection

@section('vendor-script')
  @vite([
    'resources/assets/vendor/libs/swiper/swiper.js'
  ])
@endsection



@section('content')

    @include('enlimonado.pages.home.inicio')
    @include('enlimonado.pages.home.experiencias')
    @include('enlimonado.pages.home.proyectos')
    @include('enlimonado.pages.home.nosotros')
@endsection

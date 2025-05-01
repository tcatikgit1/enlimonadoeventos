@extends('layouts/principalLayout')

@section('title', 'Enlimonado Eventos')

@section('vendor-style')
  @vite([
  'resources/assets/vendor/libs/swiper/swiper.scss',
  'resources/scss/styles/home/home.scss',
  ])
@endsection

@section('vendor-script')
  @vite([
    'resources/assets/vendor/libs/swiper/swiper.js'
  ])
@endsection


@section('content')

    @include('web.pages.home.inicio')
    @include('web.pages.home.experiencias')
    @include('web.pages.home.proyectos')
    @include('web.pages.home.nosotros')

    {{-- <!-- Add Role Modal -->
    @include('_partials/_modals/modal-add-role')
    <!-- / Add Role Modal --> --}}
@endsection

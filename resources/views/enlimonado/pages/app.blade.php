@extends('layouts/principalLayout')

@section('title', 'Roles - Apps')

@section('vendor-style')
  @vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/swiper/swiper.scss'


])
@endsection

@section('vendor-script')
  @vite([
    'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
    'resources/assets/vendor/libs/@form-validation/popular.js',
    'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
    'resources/assets/vendor/libs/@form-validation/auto-focus.js',
    'resources/assets/vendor/libs/swiper/swiper.js'
  ])
@endsection

@section('page-script')
@vite([
  /* 'resources/assets/js/app-access-roles.js',
  'resources/assets/js/modal-add-role.js', */
])
@endsection

@section('content')

    @include('enlimonado.pages.Inicio.inicio')
    @include('enlimonado.pages.Inicio.experiencias')
    @include('enlimonado.pages.Inicio.proyectos')
    @include('enlimonado.pages.Inicio.nosotros')

    {{-- <!-- Add Role Modal -->
    @include('_partials/_modals/modal-add-role')
    <!-- / Add Role Modal --> --}}
@endsection

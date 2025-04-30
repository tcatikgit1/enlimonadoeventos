@extends('layouts/principalLayout')

@section('title', 'Enlimonado Eventos')

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

    @include('web.pages.home.inicio')
    @include('web.pages.home.experiencias')
    @include('web.pages.home.proyectos')
    @include('web.pages.home.nosotros')

    {{-- <!-- Add Role Modal -->
    @include('_partials/_modals/modal-add-role')
    <!-- / Add Role Modal --> --}}
@endsection

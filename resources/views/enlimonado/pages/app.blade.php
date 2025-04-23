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
  'resources/assets/js/app-access-roles.js',
  'resources/assets/js/modal-add-role.js',
])
@endsection

@section('content')

    @include('enlimonado.pages.home.inicio')
    @include('enlimonado.pages.home.servicios')
    @include('enlimonado.pages.home.expertos')
    @include('enlimonado.pages.home.como-trabajamos')
    @include('enlimonado.pages.home.resenias')
    @include('enlimonado.pages.home.blog')
    @include('enlimonado.pages.home.consulta')

    {{-- <!-- Add Role Modal -->
    @include('_partials/_modals/modal-add-role')
    <!-- / Add Role Modal --> --}}
@endsection

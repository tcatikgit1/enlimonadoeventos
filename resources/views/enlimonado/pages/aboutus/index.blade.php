@extends('layouts/principalLayout')

@section('title', 'Nosotros - Enlimonado Eventos')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js',
])
@endsection

@section('page-script')
@vite([
  /* 'resources/assets/js/app-access-roles.js',
  'resources/assets/js/modal-add-role.js', */
  'resources/js/equipo.js'
])
@endsection

@section('content')
    <!-- Sobre Nosotros Section -->
    <section class="py-7 py-lg-9" style="background-color: #000000;">
    <div class="container">
    <div class="row justify-content-start" style="margin-top: 9%; margin-bottom: 9%;">
    <div class="col-xl-7 col-lg-8 col-md-10">
    <span class="fw-bold display-3 mb-4" style="color: #ffffff;">Somos el </span><span class="fw-bold display-3 mb-4" style="color: #B9FF38;">cóctel perfecto</span>
    <p class="fs-4 text-white-50">Entre creatividad salvaje y ejecución milimétrica. Eventos con concepto, con estética, con músculo y con sentido.</p>
    </div>
    </div>
    </div>
    </section>


    @include('enlimonado.pages.aboutus.experiencia')

    @include('enlimonado.pages.aboutus.valores')

    @include('enlimonado.pages.aboutus.equipo')

    @include('enlimonado.pages.aboutus.contacto')

    <!-- Modal -->
    @include('_partials._modals.modal-add-role')
@endsection


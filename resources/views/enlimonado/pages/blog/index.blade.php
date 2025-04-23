@extends('layouts/principalLayout')

@section('title', 'Roles - Apps')

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
  'resources/assets/js/app-access-roles.js',
  'resources/assets/js/modal-add-role.js',
])
@endsection

@section('content')

  <!-- Blog Section -->
  <section style="background: #ffffff; padding: 3rem 1rem;">
    <div class="container text-center">
    <span class="badge rounded-pill text-center px-4 px-sm-5 py-2 py-sm-3 fs-6 fs-sm-5 fs-md-4"
    style="background-color: rgba(20, 122, 227, 0.1); color: #0F5DAE;">Blog</span>
    <h2 class="fw-bold mb-3 display-4" style="color: #052545;">
      Recursos y Artículos de <br class="d-none d-md-block"> Estrategia
    </h2>

    <p class="fs-5 mb-0" style="color: rgb(15, 93, 174); padding-left: 15%; padding-right: 15%;">
      Contenido de alto valor sobre estrategia de negocio, marketing digital y ventas.
    </p>

    <!-- Barra de búsqueda centrada -->
    <div class="mt-5 d-flex justify-content-center">
      <div class="input-group" style="max-width: 600px; width: 100%;">
      <!-- Icono de lupa a la izquierda -->
      <span class="input-group-text bg-white border-end-0" style="border-color: #ccc;">
        <i class="fas fa-search" style="color: #0F5DAE;"></i>
      </span>
      <!-- Campo de búsqueda -->
      <input type="text" class="form-control border-start-0" placeholder="Buscar artículos..." style="padding: 0.75rem;">
      </div>
    </div>
    </div>
  </section>


   <!-- Sección Equipo -->
  @include('enlimonado.pages.blog.articles', ['blogs' => $blogs])

  <!-- Add Role Modal -->
  @include('_partials/_modals/modal-add-role')
  <!-- / Add Role Modal -->
@endsection

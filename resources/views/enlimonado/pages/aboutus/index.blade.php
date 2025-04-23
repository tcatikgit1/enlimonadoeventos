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
  <!-- Sobre Nosotros Section -->
  <section class="py-5" style="background-color: #f8fbff;">
    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between gap-5">
      <!-- Text Content -->
      <div class="col-lg-6">
        <span class="badge rounded-pill text-center px-3 px-sm-4 px-md-5 py-2 py-sm-3 fs-6 fs-sm-5 fs-md-4 my-4"
          style="background-color: rgba(20, 122, 227, 0.1); color: #0F5DAE;">
          Sobre Nosotros
        </span>
        <h2 class="fw-bold display-5 mb-4" style="color: #000;">
          Expertos en Estrategia <br>
          de Negocio y <br>
          Posicionamiento
        </h2>
        <p class="fs-4 mb-3">
          Somos un equipo de consultores estratégicos con más de 7 años de experiencia ayudando a empresas a crecer con estructura, visión y resultados medibles.
        </p>
        <p class="fs-4">
          Nuestra misión es transformar la forma en que las empresas se lanzan al mercado, optimizando cada etapa del proceso para maximizar sus posibilidades de éxito.
        </p>
      </div>

      <!-- Images -->
      <div class="col-lg-6 d-flex flex-column flex-md-row align-items-start gap-4">
        <img src="{{ asset('assets/img/enlimonado/blog/blog1.jpg') }}" alt="Equipo en junta"
             class="img-fluid shadow-sm"
             style="max-width: 40%; border-radius: 15px;">
        <img src="{{ asset('assets/img/enlimonado/blog/blog7.jpg') }}" alt="Consultores colaborando"
             class="img-fluid shadow-sm"
             style="max-width: 40%; border-radius: 15px; margin-top: 50px;">
      </div>
    </div>
  </section>

  <!-- Sección Equipo -->
  @include('enlimonado.pages.aboutus.equipo')

  <!-- Sección Valores -->
  @include('enlimonado.pages.aboutus.valores')

  <!-- Sección Historia -->
  @include('enlimonado.pages.aboutus.historia')

  <!-- Sección Consulta -->
  @include('enlimonado.pages.home.consulta')

  <!-- Modal -->
  @include('_partials._modals.modal-add-role')
@endsection


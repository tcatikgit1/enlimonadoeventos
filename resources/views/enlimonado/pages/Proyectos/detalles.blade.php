@extends('layouts.principalLayout')

@section('title', 'Eventos - Detalles')

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
<style>
  .lime-heading {
    color: #B9FF38;
    font-weight: bold;
    margin-top: 2rem;
  }

  .white-text {
    color: white;
  }

  .img-fluid {
    width: 100%;
    height: auto;
    object-fit: cover; /* Esto asegura que la imagen se ajuste sin distorsionarse */
    border-radius: 15px; /* Para darle un borde redondeado */
    max-height: 500px; /* Limita la altura máxima para que las imágenes no sean demasiado grandes */
  }

  /* Asegura que el contenedor de la imagen esté centrado y no se desborde */
  .img-container {
    overflow: hidden;
    border-radius: 15px;
  }
</style>

<div class="container py-5" style="background-color: #000;">
  <div class="row mb-4">
    <div class="col-12 img-container">
      <img src="{{ asset('assets/img/enlimonado/eventos/' . $project['img']) }}" class="img-fluid" alt="Imagen del proyecto">
    </div>
  </div>

  <div class="row text-white">
    <div class="col-md-12 mb-3">
      <span class="badge" style="background-color: #B9FF38; color: black;">{{ $project['tag'] }}</span>
    </div>
    <div class="col-md-12">
      <h2 class="fw-bold" style="color: white">{{ $project['title'] }}</h2>
      <p class="mb-3">Por <strong>{{ $project['author'] }}</strong></p>
    </div>

    <div class="col-md-12">
      <h4 class="lime-heading">Objetivo</h4>
      <p class="white-text">{{ $project['objetivo'] }}</p>

      <h4 class="lime-heading">Qué se hizo</h4>
      <p class="white-text">{{ $project['que_se_hizo'] }}</p>

      <h4 class="lime-heading">Twist Enlimonado aplicado</h4>
      <p class="white-text">{{ $project['twist'] }}</p>
    </div>
  </div>
</div>


@include('enlimonado.pages.Proyectos.contacto')
<!-- Add Role Modal -->
@include('_partials/_modals/modal-add-role')
<!-- / Add Role Modal -->
@endsection

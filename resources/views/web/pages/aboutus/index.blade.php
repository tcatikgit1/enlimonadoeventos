@extends('layouts/principalLayout')

@section('title', 'Nosotros - Enlimonado Eventos')

@section('vendor-style')
  @vite([
  /* 'resources/assets/vendor/libs/swiper/swiper.scss', */
  'resources/scss/styles/aboutus/aboutus.scss',
])
@endsection


@section('page-script')
@vite([
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


    @include('web.pages.aboutus.experiencia')

    @include('web.pages.aboutus.valores')

    @include('web.pages.aboutus.equipo')

    @include('web.pages.aboutus.contacto')

@endsection


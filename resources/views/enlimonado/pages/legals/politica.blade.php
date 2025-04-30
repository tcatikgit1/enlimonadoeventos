@extends('layouts/principalLayout')

@section('title', 'Política de Cookies - Enlimonado Eventos')


@section('content')
    <!-- Sobre Nosotros Section -->
    <section class="py-7 py-lg-9" style="background-color: #000000;">
      <div class="container">
        <div class="row justify-content-start" style="margin-top: 9%; margin-bottom: 9%;">
          <div class="col-xl-7 col-lg-8 col-md-10">
            <span class="fw-bold display-3 mb-4" style="color: #B9FF38;">Políticas </span><span class="fw-bold display-3 mb-4" style="color: #ffffff;">de privacidad</span>
          </div>
        </div>
      </div>
    </section>


    @include('enlimonado.pages.legals.politicaconte')
@endsection


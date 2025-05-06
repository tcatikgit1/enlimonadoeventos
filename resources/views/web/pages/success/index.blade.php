@extends('layouts/principalLayout')

@section('title', 'Exitos - Apps')

@section('vendor-style')
  @vite([
  'resources/scss/styles/success/success.scss',
])
@endsection

@section('content')
    <section class="py-5" style="background-color: #000000;">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <h1 class="visuallyhidden">Exitos</h1>
                    <h2 class="fw-bold display-3 mb-4 text-white">Nuestros <span class="fw-bold display-3 mb-4"
                            style="color: #B9FF38;">Éxitos</span></h2>
                    <p class="fs-4" style="color: rgba(255, 255, 255, 0.8);">Resultados que hablan por sí mismos. Proyectos
                        que superaron expectativas y clientes que quedaron fascinados con el "efecto Enlimonado".</p>
                </div>
            </div>
        </div>
    </section>

    @include('web.pages.success.exitosDestacados')
    @include('web.pages.success.clientesDicen')
    @include('web.pages.success.proximoExito')

@endsection

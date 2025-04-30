@extends('layouts/principalLayout')

@section('title', 'Exitos - Apps')

@section('content')
    <section class="py-7 py-lg-9" style="background-color: #000000;">
        <div class="container">
            <div class="row justify-content-start" style="margin-top: 9%; margin-bottom: 9%;">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <h2 class="fw-bold display-3 mb-4 text-white">Nuestros <span class="fw-bold display-3 mb-4"
                            style="color: #B9FF38;">Éxitos</span></h2>
                    <p class="fs-4" style="color: rgba(255, 255, 255, 0.8);">Resultados que hablan por sí mismos. Proyectos
                        que superaron expectativas y clientes que quedaron fascinados con el "efecto Enlimonado".</p>
                </div>
            </div>
        </div>
    </section>

    @include('enlimonado.pages.success.exitosDestacados')
    @include('enlimonado.pages.success.clientesDicen')
    @include('enlimonado.pages.success.proximoExito')
@endsection

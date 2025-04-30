@extends('layouts/principalLayout')

@section('title', 'Proximos Eventos - Enlimonado Eventos')

@section('content')
    <section class="py-7 py-lg-9" style="background-color: #000000;">
        <div class="container">
            <div class="row justify-content-start" style="margin-top: 9%; margin-bottom: 9%;">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <h2 class="fw-bold display-3 mb-4" style="color: #ffffff;">Próximos <span
                            class="lime-text">Proyectos</span></h2>
                    <p class="fs-4 text-white">Un vistazo a lo que estamos preparando. Eventos que están a punto de
                        transformar la experiencia de sus participantes.</p>
                </div>
            </div>
        </div>
    </section>

    @include('enlimonado.pages.upcoming.eventos')

    @include('enlimonado.pages.upcoming.contacto')

@endsection

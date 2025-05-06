@extends('layouts/principalLayout')

@section('title', 'Nuestros Proyectos - Enlimonado Eventos')


@section('vendor-style')
  @vite([
  'resources/scss/styles/proyects/proyects.scss',
  'resources/scss/styles/proyects/_detalles.scss',
])
@endsection


@section('content')
    <section style="background-color: #000000;">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <h1 class="invisible">Proyectos</h1>
                    <h2 class="fw-bold display-3 mb-4" style="color: #ffffff;">Proyectos <span
                            class="lime-text">Enlimonados</span></h2>
                    <p class="fs-4 text-white-50">Un recorrido visual por nuestras creaciones más ácidas y bizarras. Eventos
                        únicos que han dejado huella.</p>
                </div>
            </div>
        </div>
    </section>

    @include('web.pages.proyects.galeria')
    @include('web.pages.proyects.contacto')

@endsection

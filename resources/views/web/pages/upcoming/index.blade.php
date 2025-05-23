@extends('layouts/principalLayout')

@section('title', 'Proximos Eventos - Enlimonado Eventos')

@section('vendor-style')
  @vite([
  'resources/scss/styles/upcoming/upcoming.scss',
])
@endsection

@section('content')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Enlimonado Eventos",
  "url": "https://www.enlimonadoeventos.com"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Próximos",
  "url": "https://www.enlimonadoeventos.com/proximos"
}
</script>

    <section class="py-5" style="background-color: #000000;">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <h1 class="fw-bold display-1 mb-2" style="color: #ffffff;">Próximos <span
                            class="lime-text">Proyectos</span></h1>
                    <p class="fs-4 text-white">Un vistazo a lo que estamos preparando. Eventos que están a punto de
                        transformar la experiencia de sus participantes.</p>
                </div>
            </div>
        </div>
    </section>

    @include('web.pages.upcoming.eventos')

    @include('web.pages.upcoming.contacto')

@endsection

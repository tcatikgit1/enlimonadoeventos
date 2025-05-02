@php
    $articles = [
        [
            'img' => 'eve1.webp',
            'tag' => 'Evento',
            'title' => 'Painting Room',
        ],
        [
            'img' => 'eve2.webp',
            'tag' => 'Evento',
            'title' => 'Primera Rage Room de CANARIAS',
        ],
    ];
@endphp

<section class="contact-section py-10" style="background: linear-gradient(to bottom, #000000 30%, #160b24 100%);">
    <div class="container py-5" style="padding-top: 3rem; margin-bottom: 1rem;">
        <h2 class="text-center fw-bold mb-4 text-white" role="heading" aria-level="2">
            Proyectos <span style="color: #B5F613;">Enlimonados</span>.
        </h2>
        <p class="text-white fs-5 text-center mb-5 px-md-5" style="max-width: 850px; margin: 0 auto;">
            Un vistazo a nuestras creaciones más ácidas y bizarras
        </p>
        <div class="row mb-12 g-3 justify-content-center">
            @foreach ($articles as $article)
                <div class="col-xl-6 d-flex justify-content-center" aria-label="Tarjeta de evento">
                    <div class="event-card" data-bg="{{ asset('assets/img/enlimonado/eventos/' . $article['img']) }}" data-titleImage="{{ $article['title'] }}">
                        <div class="event-content">
                            <div class="event-tag">{{ $article['tag'] }}</div>
                            <h3 class="fw-bold" style="color: #ffffff;" role="heading" aria-level="3">{{ $article['title'] }}</h3> <!-- Cambio aquí: h5 -> h3 -->
                            <div class="lime-bar"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="/projects" class="btn btn-outline-lime" aria-label="Enlace para ver más proyectos">
                Ver todos los proyectos <i class="ti ti-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.event-card').forEach(card => {
        const bgUrl = card.getAttribute('data-bg');
        const titleAlt = card.getAttribute('data-titleImage');
        card.style.setProperty('--bg-img', `url(${bgUrl})`);
        card.setAttribute('aria-label', `${titleAlt}`);
    });
</script>

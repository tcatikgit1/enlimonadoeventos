@php
$testimonios = [
  [
    'nombre' => 'Marta González ',
    'cargo' => 'CEO, TechSolutions',
    'link' => '#',
    'imagen' => 'assets/img/enlimonado/resenia/resenia1.jpg',
    'estrellas' => 5,
    'texto' => 'La consultoría de Strategy Squad transformó nuestra forma de vender. Implementamos su estrategia y en tres meses duplicamos conversiones mientras optimizamos nuestro presupuesto de marketing.',
  ],
  [
    'nombre' => 'Alejandro Ruiz',
    'cargo' => 'Director Comercial, InnovaRetail',
    'link' => '#',
    'imagen' => 'assets/img/enlimonado/resenia/resenia2.jpg',
    'estrellas' => 5,
    'texto' => 'Su enfoque estratégico en SEO nos llevó a la primera página de Google en keywords altamente competitivas. El ROI de nuestro trabajo con ellos ha superado todas nuestras expectativas',
  ],
  [
    'nombre' => 'Lucía Méndez',
    'cargo' => 'Fundadora, EcoLifestyle',
    'link' => '#',
    'imagen' => 'assets/img/enlimonado/resenia/resenia3.jpg',
    'estrellas' => 5,
    'texto' => 'Lanzamos nuestra marca con la estrategia desarrollada por Daniel y Laura. Su conocimiento del mercado y atención al detalle nos dio la confianza que necesitábamos. Los resultados han sido excepcionales.',
  ],
];
@endphp

<style>
  .blue-icon {
    color: #0F5DAE !important;
  }

  .carousel-indicators [data-bs-target] {
    background-color: #0F5DAE !important;
  }
</style>

<section class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5">
      <span class="badge rounded-pill px-4 py-2 fs-6" style="background-color: rgba(20, 122, 227, 0.1); color: #0F5DAE;">
        Reseñas
      </span>

      <h2 class="fw-bold my-3" style="color: #052545;">Lo que dicen nuestros clientes</h2>
      <p class="fs-5 mx-auto" style="color: #0F5DAE; max-width: 800px;">
        Opiniones verificadas de quienes han confiado en nuestras estrategias.
      </p>
    </div>

    <!-- Card contenedora -->
    <div class="card shadow rounded-4 mx-auto" style="max-width: 900px;">
      <div id="carouselTestimoniosCustom" class="carousel slide position-relative" data-bs-ride="carousel">

        <!-- Slides -->
        <div class="carousel-inner">
          @foreach ($testimonios as $index => $t)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
              <div class="bg-white px-4 py-5 px-md-5 py-md-4 rounded-4 d-flex flex-column flex-md-row align-items-center text-center text-md-start gap-4">
                <img src="{{ $t['imagen'] }}" alt="{{ $t['nombre'] }}" class="rounded-circle flex-shrink-0" width="80" height="80">
                <div class="flex-grow-1">
                  <div class="mb-2">
                    @for ($i = 0; $i < $t['estrellas']; $i++)
                      <i class="fas fa-star blue-icon"></i>
                    @endfor
                  </div>
                  <p class="text-dark fst-italic mb-3">“{{ $t['texto'] }}”</p>
                  <p class="fw-semibold text-dark mb-0">{{ $t['nombre'] }} —
                    <a href="{{ $t['link'] }}" class="blue-icon text-decoration-none">{{ $t['cargo'] }}</a>
                  </p>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <!-- Flechas -->
        <div class="d-flex justify-content-between position-absolute w-100" style="top: 80%; z-index: 2;">
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimoniosCustom" data-bs-slide="prev">
            <span class="bg-white shadow p-2 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
              <i class="fas fa-arrow-left blue-icon"></i>
            </span>
            <span class="visually-hidden">Anterior</span>
          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimoniosCustom" data-bs-slide="next">
            <span class="bg-white shadow p-2 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
              <i class="fas fa-arrow-right blue-icon"></i>
            </span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators position-relative mt-4">
          @foreach ($testimonios as $index => $t)
            <button type="button" data-bs-target="#carouselTestimoniosCustom" data-bs-slide-to="{{ $index }}"
              class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"
              style="width: 10px; height: 10px; border-radius: 50%;"></button>
          @endforeach
        </div>

      </div>
    </div>
  </div>
</section>

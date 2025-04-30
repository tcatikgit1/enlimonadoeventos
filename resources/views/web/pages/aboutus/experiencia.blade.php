@php
    $items = [
        [
            'title' => 'Retail & centros comerciales',
            'desc' => 'Activaciones, campañas, aperturas que generan expectación y resultados.',
        ],
        [
            'title' => 'Convenciones y eventos empresariales',
            'desc' => 'Reuniones corporativas con un twist que las hace memorables.',
        ],
        [
            'title' => 'Networking y team building',
            'desc' => 'Fortalecemos equipos a través de experiencias compartidas únicas.',
        ],
        ['title' => 'Eventos privados', 'desc' => 'Celebraciones con concepto donde cada detalle cuenta una historia.'],
        [
            'title' => 'Experiencias musicales y culturales',
            'desc' => 'Espacios donde el arte y la música crean momentos inolvidables.',
        ],
    ];
@endphp

<style>
    .slide-horizontal {
        animation: slideLR 10s infinite;
    }

    @keyframes slideLR {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(10px);
        }
    }


    /* Apilar columnas una sobre otra debajo de 1020px */
  @media (max-width: 1020px) {
    .responsive-stack {
      flex-direction: column !important;
    }

    .responsive-stack > div {
      width: 100% !important;
      max-width: 100% !important;
    }

    .image-wrapper {
      margin-top: 2rem !important;
    }
  }
</style>

<section class="py-5" style="background: linear-gradient(to bottom, #000000 30%, #160b24 100%);">
  <div class="container py-5">
    <div class="row align-items-center d-flex responsive-stack">

      <!-- Columna de texto -->
      <div class="col-12 col-md-6 mb-4 mb-md-0">
        <div class="card h-100" style="background-color: transparent; box-shadow: none;">
          <div class="card-header d-flex justify-content-between" style="background-color: transparent; border-bottom: none;">
            <div class="card-title m-0 me-2">
              <h2 class="fw-bold mb-1 text-white">
                Experiencia <span style="color: #B5F613;">destacada</span>
              </h2>
              <p class="card-subtitle text-white fs-4">
                Llevamos años produciendo y diseñando eventos para diversos sectores, mezclando la precisión logística con una creatividad sin límites.
              </p>
            </div>
          </div>

          <div class="card-body">
            <ul class="p-0 m-0">
              @foreach ($items as $item)
                <li class="d-flex mb-6">
                  <div class="me-4">
                    <div class="badge rounded-circle p-1_5" style="background-color: #B9FF38; margin-top: 1rem;">
                      <i class="ti ti-check ti-md" style="color: black;"></i>
                    </div>
                  </div>

                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h3 class="mb-0 fw-bold text-white fs-5">{{ $item['title'] }}</h3>
                      <p class="text-white d-block">{{ $item['desc'] }}</p>
                    </div>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <!-- Columna de imagen -->
      <div class="col-12 col-md-6 position-relative mt-4 mt-md-0 image-wrapper">
        <img src="{{ asset('assets/img/enlimonado/Nosotros/Evento.webp') }}" alt="Eventos"
          class="img-fluid rounded-4 shadow w-100"
          style="object-fit: cover; height: 100%; min-height: 600px; border-radius: 15px;">

        <div class="position-absolute bottom-0 start-0 m-0 p-4 text-black rounded-3 slide-horizontal"
          style="background-color: #B5F613; max-width: 80%;">
          <strong>+200 eventos producidos</strong><br>
          Con resultados que superan las expectativas
        </div>
      </div>
    </div>
  </div>
</section>

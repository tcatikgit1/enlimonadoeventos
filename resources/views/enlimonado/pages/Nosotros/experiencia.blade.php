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
</style>

<section class="py-5" style="background: linear-gradient(to bottom, #000000 30%, #160b24 100%);">
    <div class="container py-5">
        <div class="row align-items-center">

            <div class="col-lg-6 text-white">
                <h2 class="fw-bold mb-3 text-white">
                    Experiencia <span style="color: #B5F613;">destacada</span>
                </h2>
                <p class="mb-6">
                    Llevamos años produciendo y diseñando eventos para diversos sectores, <br> mezclando la precisión
                    logística con una creatividad sin límites.
                </p>

                <ul class="list-unstyled">


                    @foreach ($items as $item)
                        <li class="mb-8 d-flex align-items-start">
                            <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width: 40px; height: 40px; background-color: #B9FF38;">
                                <i class="ti ti-check text-black"></i>
                            </div>
                            <div>
                                <strong>{{ $item['title'] }}</strong><br>
                                {{ $item['desc'] }}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-6 position-relative mt-4 mt-lg-0">
                <img src="{{ asset('assets/img/enlimonado/Nosotros/Evento.jpg') }}" alt="Eventos"
                    class="img-fluid rounded-4 shadow"
                    style="object-fit: cover; width: 100%; height: auto; border-radius: 15px">


                <div class="position-absolute bottom-0 start-0 m-0 p-5 text-black rounded-3 slide-horizontal"
                    style="background-color: #B5F613; max-width: 80%;">
                    <strong>+200 eventos producidos</strong><br>
                    Con resultados que superan las expectativas
                </div>

            </div>
        </div>
    </div>
</section>

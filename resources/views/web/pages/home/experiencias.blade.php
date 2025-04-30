@php
    $valores = [
        [
            'icono' => '🚀',
            'titulo' => 'Eventos Corporativos',
            'texto' => 'Transformamos tus convenciones aburridas en experiencias memorables que impulsan tu marca.',
            'color' => '#ff4dd6',
        ],
        [
            'icono' => '✨',
            'titulo' => 'Retail & Activaciones',
            'texto' => 'Creamos momentos que convierten miradas curiosas en clientes comprometidos.',
            'color' => '#cccccc',
        ],
        [
            'icono' => '🎵',
            'titulo' => 'Experiencias Musicales',
            'texto' => 'Diseñamos espacios donde la música, el arte y tu marca crean una sinfonía perfecta.',
            'color' => '#cccccc',
        ],
        [
            'icono' => '🤝',
            'titulo' => 'Team Building',
            'texto' => 'Actividades que fortalecen equipos a través de experiencias compartidas únicas.',
            'color' => '#ffb347',
        ],
        [
            'icono' => '🥂',
            'titulo' => 'Celebraciones',
            'texto' => 'Eventos privados con personalidad donde cada detalle cuenta una historia.',
            'color' => '#ffb347',
        ],
        [
            'icono' => '🔮',
            'titulo' => 'Lo Bizarro',
            'texto' => '¿Tienes una idea loca? Nosotros la hacemos más loca... y funcional.',
            'color' => '#FFEB3B',
        ],
    ];
@endphp

<section class="py-7" style="background: linear-gradient(to top, #000000 30%, #160b24 100%); padding-top: 7rem; padding-bottom: 7rem;" id="experiences">
    <div class="container" style="padding-top: 5rem; margin-bottom: 8rem;">
        <h2 class="text-center fw-bold mb-4 text-white" role="heading" aria-level="2">
            No hacemos <span style="color: #B5F613;">eventos</span>. Hacemos <span style="color: #B5F613;">experiencias</span>.
        </h2>
        <p class="text-white fs-5 text-center mb-5 px-md-5" style="max-width: 850px; margin: 0 auto;">
            Mezclamos la creatividad más salvaje con una ejecución milimétrica. El resultado: algo que nunca habrías imaginado, pero exactamente lo que necesitabas.
        </p>
        <div class="row justify-content-center g-5" style="margin-top: 3rem">
            @foreach ($valores as $valor)
                <div class="col-md-6 col-lg-4">
                    <div class="p-3 h-100 text-white rounded-3 d-flex flex-column experience-card">
                        <div class="fs-2 mb-4" style="color: {{ $valor['color'] }};">{{ $valor['icono'] }}</div>
                        <h3 class="fw-bold mb-4 text-white">{{ $valor['titulo'] }}</h3> <!-- Cambio aquí: h5 -> h3 -->
                        <p class="mb-0 text-white">{{ $valor['texto'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Botón centrado -->
        <div class="text-center mt-5">
            <a href="/contact" class="btn btn-outline-lime" style="padding: 0.5rem 1rem; margin-top: 3rem;" aria-label="Enlace para contactar con Enlimonado">
                Descubre nuestro enfoque <i class="ti ti-bolt ms-1"></i>
            </a>
        </div>
    </div>
</section>

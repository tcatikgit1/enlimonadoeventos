@php
    $casos_de_exito = [
        [
            'nombre' => 'Transformación de convención corporativa',
            'descripcion' => 'Convertimos una convención anual estándar en una experiencia inmersiva que aumentó el engagement y la retención de mensajes clave.',
            'url' => 'https://www.tusitio.com/exitos/proyecto-convencion',
            'imagen' => '/assets/img/enlimonado/exitos/exitos1.webp',
            'fecha' => '2024-11-10',
            'resultados' => [
                '98% de los asistentes calificó el evento como "excepcional"',
                'Aumento del 40% en la participación post-evento',
                'Incremento del 25% en la aplicación de conceptos clave'
            ]
        ],
        [
            'nombre' => 'Activación en centro comercial',
            'descripcion' => 'Diseñamos una experiencia interactiva que transformó un espacio comercial en una instalación artística participativa.',
            'url' => 'https://www.tusitio.com/exitos/proyecto-centro-comercial',
            'imagen' => '/assets/img/enlimonado/exitos/exitos2.webp',
            'fecha' => '2024-11-11',
            'resultados' => [
                'Incremento del 120% en tráfico peatonal',
                '15,000+ interacciones en redes sociales',
                '45% de aumento en ventas durante la campaña'
            ]
        ],
        [
            'nombre' => 'Festival musical inmersivo',
            'descripcion' => 'Creamos un concepto de festival que fusionaba música electrónica con experiencias sensoriales y arte digital interactivo.',
            'url' => 'https://www.tusitio.com/exitos/proyecto-festival',
            'imagen' => '/assets/img/enlimonado/exitos/exitos3.webp',
            'fecha' => '2024-11-12',
            'resultados' => [
                '5,000+ asistentes durante dos días',
                'Valoración media de 4.8/5 estrellas',
                '90% de intención de repetir asistencia'
            ]
        ],
    ];
@endphp

<section class="contact-section py-10" style="background: linear-gradient(to bottom, #000000 30%, #160b24 100%);">
    <div class="container">
        <div class="row justify-content-start mb-10">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <h2 class="fw-bold fs-2 text-white">Casos de Éxito Destacados</h2>
            </div>
        </div>

        @foreach($casos_de_exito as $index => $caso)
            <!-- Caso de Éxito -->
            <div class="row align-items-start mb-5 pb-10 {{ $index % 2 == 1 ? 'flex-lg-row-reverse' : '' }}">
                <div class="col-12 col-lg-6 p-4">
                    <img src="{{ asset($caso['imagen']) }}" alt="{{ $caso['nombre'] }}" class="img-fluid rounded w-100 h-auto" style="max-height: 500px;">
                </div>
                <div class="col-12 col-lg-6 p-4 text-light">
                    <h3 class="fs-4 text-white">{{ $caso['nombre'] }}</h3>
                    <p class="fs-5 mb-4 mt-4" style="color: rgba(255, 255, 255, 0.8);">{{ $caso['descripcion'] }}</p>

                    <div class="rounded p-4 mt-5" style="border: 1px solid rgba(66, 59, 59, 0.848); background: #110F15;">
                        <p class="fw-bold mb-3 fs-5 ms-2 mt-2" style="color: #B9FF38;">Resultados obtenidos:</p>
                        <ul class="list-unstyled mb-0">
                            @foreach($caso['resultados'] as $resultado)
                                <li class="fs-5 mb-2" style="color: rgba(255, 255, 255, 0.8);">
                                    <i class="ti ti-circle-check-filled fs-3" style="color: #B9FF38"></i> {{ $resultado }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Insertar el JSON-LD para cada caso de éxito -->
                <script type="application/ld+json">
                {
                  "@context": "https://schema.org",
                  "@type": "CreativeWork",
                  "name": "{{ $caso['nombre'] }}",
                  "description": "{{ $caso['descripcion'] }}",
                  "url": "{{ $caso['url'] }}",
                  "datePublished": "{{ $caso['fecha'] }}"
                }
                </script>
            </div>
        @endforeach
    </div>
</section>

@php
    $testimonios = [
        [
            'mensaje' => 'Nuestra convención pasó de aburrida a icónica en 24h. El equipo de Enlimonado creó una experiencia que nuestros empleados siguen comentando.',
            'avatar' => '/assets/img/enlimonado/exitos/MariaLopez.webp',
            'nombre' => 'María López',
            'cargo' => 'Directora de Marketing, Empresa Innovación',
            'indicadores' => [
                ['label' => 'Asistentes', 'valor' => '200+'],
                ['label' => 'Satisfacción', 'valor' => '98%'],
            ],
        ],
        [
            'mensaje' => 'Nunca imaginé que un stand en un centro comercial generara tanto hype. La activación que diseñaron triplicó nuestras expectativas de visibilidad y conversión.',
            'avatar' => '/assets/img/enlimonado/exitos/CarlosRodriguez.webp',
            'nombre' => 'Carlos Rodríguez',
            'cargo' => 'Gerente Comercial, Centro Comercial Las Arenas',
            'indicadores' => [
                ['label' => 'Interacción', 'valor' => '15K+'],
                ['label' => 'Incremento Ventas', 'valor' => '+45%'],
            ],
        ],
        [
            'mensaje' => 'Su visión para nuestro lanzamiento fue brillante. Mezclaron tecnología, creatividad y un toque bizarro que generó exactamente el impacto que buscábamos.',
            'avatar' => '/assets/img/enlimonado/exitos/exitos2.webp',
            'nombre' => 'Laura Sánchez',
            'cargo' => 'CEO, Startup Tech',
            'indicadores' => [
                ['label' => 'Impacto R R S S', 'valor' => '1.2M impresiones'],
                ['label' => 'Apariciones Medios', 'valor' => '8 publicaciones'],
            ],
        ],
        [
            'mensaje' => 'El team building que organizaron cambió completamente la dinámica de nuestro equipo. Combinar diversión con objetivos estratégicos fue un acierto total.',
            'avatar' => '/assets/img/enlimonado/exitos/exitos2.webp',
            'nombre' => 'Miguel Torres',
            'cargo' => 'Director de RRHH, Corporación Global',
            'indicadores' => [
                ['label' => 'Mejora Colaboración', 'valor' => '+37%'],
                ['label' => 'Satisfacción Equipo', 'valor' => '95%'],
            ],
        ],
        [
            'mensaje' => 'El festival que organizaron fue simplemente increíble. La combinación de música, arte y tecnología creó una atmósfera única que nos posicionó como referentes culturales.',
            'avatar' => '/assets/img/enlimonado/exitos/ElenaMartin.webp',
            'nombre' => 'Elena Martín',
            'cargo' => 'Directora Cultural, Fundación Artística',
            'indicadores' => [
                ['label' => 'Asistentes', 'valor' => '5,000+'],
                ['label' => 'Valoración Media', 'valor' => '4.8/5'],
            ],
        ],
    ];
@endphp

<style>
    img.rounded-circle {
        object-fit: cover;
    }

    .card-footer {
        background: none;
        border-top: none;
    }

    .stat-box {
        background: #0E0B13;
        height: 70px;
        min-width: 140px;
        flex: 1;
    }
</style>

<section class="contact-section py-10" style="background: linear-gradient(to top, #000000 30%, #160b24 100%);">
    <div class="container">
        <div class="row justify-content-start mb-10">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <h4 class="fw-bold fs-2 text-white">Lo que nuestros clientes dicen</h4>
            </div>
        </div>

        <div class="row">

        @foreach ($testimonios as $testimonial)
            <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
              <div class="card h-100" style="background-color: #16121E; color: white;">
                <div class="card-body">
                  <div class="badge p-1 mb-2 rounded">
                    <i class="ti ti-quote ti-28px" style="color: #B9FF38;"></i>
                  </div>

                  <h5 class="card-title mb-3" style="color: white;">
                    {{ $testimonial['mensaje'] }}
                  </h5>

                  <div class="d-flex align-items-center mb-4 overflow-hidden">
                    <div class="flex-shrink-0">
                      <img src="{{ asset($testimonial['avatar']) }}" alt="Avatar" class="rounded-circle"
                          style="width: 48px; height: 48px; object-fit: cover;" />
                    </div>
                    <div class="ms-3 text-truncate w-100">
                      <h6 class="mb-0 text-truncate" style="color: white;">{{ $testimonial['nombre'] }}</h6>
                      <small class="text-muted text-truncate d-block">{{ $testimonial['cargo'] }}</small>
                    </div>
                  </div>

                  <div class="card-footer d-flex flex-wrap gap-2">
                    @foreach ($testimonial['indicadores'] as $indicador)
                      <div class="rounded d-flex flex-column justify-content-center align-items-center stat-box">
                        <p class="mb-0" style="font-size: 13px">{{ $indicador['label'] }}</p>
                        <p class="mb-0 fw-bold" style="color: #B9FF38">{{ $indicador['valor'] }}</p>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
</section>

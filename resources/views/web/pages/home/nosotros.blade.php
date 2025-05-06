@php
    $valores = [
        [
            'icono' => '"',
            'texto' => 'Nuestra convención pasó de aburrida a icónica en 24h.',
            'color' => '#B9FF38',
            'avatar' => 'CarlosRodriguez',
            'nombre' => 'Carlos Rodriguez',
            'cargo' => 'Gerente,',
        ],
        [
            'icono' => '"',
            'texto' => 'Nunca imaginé que un stand en un centro comercial generara tanto hype.',
            'color' => '#B9FF38',
            'avatar' => 'MariaLopez',
            'nombre' => 'Maria Lopez',
            'cargo' => 'Directora de Marketing, Empresa Innovación',
        ],
    ];
@endphp

<section style="background: linear-gradient(to top, #000000 30%, #160b24 100%);">
    <div class="container" style=" margin-bottom: 4rem;">
        <!-- Título Principal -->
        <h2 class="text-center fw-bold mb-4 text-white" role="heading" aria-level="2">
            Lo que <span style="color: #B5F613;">dicen</span> de nosotros.
        </h2>
        <p class="text-white fs-5 text-center mb-5 px-md-5" style="max-width: 850px; margin: 0 auto;">
            No es por presumir, pero hemos dejado a más de uno con la boca abierta.
        </p>
        <div class="row justify-content-center g-5" style="margin-top: 3rem">
            @foreach ($valores as $valor)
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 h-100 text-white rounded-3 shadow-sm d-flex flex-column justify-content-between" style="background-color: #16121E; border: 1px solid rgba(255, 255, 255, 0.1);">
                        <div>
                            <i class="ti ti-quote fs-3 mb-3" style="color: #B9FF38"></i>
                            <!-- Testimonio -->
                            <h3 class="fw-bold mb-3 text-white" role="heading" aria-level="3">{{ $valor['texto'] }}</h3> <!-- Cambio aquí: h5 -> h3 -->
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="me-3 d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; border-radius: 50%; background-color: #8130b1; color: rgb(255, 255, 255); font-weight: bold; font-size: 1.2rem;">
                                {{ substr($valor['nombre'], 0, 1) }}
                            </div>
                            <div>
                                <div class="fw-semibold">{{ $valor['nombre'] }}</div>
                                <small class="text-muted">{{ $valor['cargo'] }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('exitos') }} "class="btn btn-lime" aria-label="Enlace para ver más testimonios">
                Conoce nuestros éxitos <i class="ti ti-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</section>

<section style="position: relative; background-image: url('/assets/img/enlimonado/exitos/fondoExitos.webp'); background-size: cover; background-position: center; height: 340px; display: flex; align-items: center; justify-content: center; text-align: center;">
    <div style="position: absolute; inset: 0; background-color: rgba(0, 0, 0, 0.7); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div>
            <!-- Encabezado Secundario -->
            <h3 class="text-white fs-2 fw-bold pb-2" role="heading" aria-level="3">¿El próximo gran evento? <span style="color: #B9FF38;"><br>Puede ser el tuyo.</span></h3> <!-- Cambio aquí: h4 -> h3 -->
            <p style="color: rgba(255, 255, 255, 0.8); font-size: 21px;">¿Tienes una marca, una idea o un marrón? Llámanos antes de que se agrie.</p>
            <div class="text-center mt-5">
                <a href="{{ route('contacto') }} "class="btn btn-lg btn-lime-contact" aria-label="Enlace para contactar con Enlimonado">
                    Contáctanos ahora
                </a>
            </div>
        </div>
    </div>
</section>

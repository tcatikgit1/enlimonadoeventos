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

<section class="py-7"
    style="background: linear-gradient(to top, #000000 30%, #160b24 100%); padding-top: 7rem; padding-bottom: 7rem;">
    <div class="container" style="padding-top: 5rem; margin-bottom: 8rem;">
        <h2 class="text-center fw-bold mb-4 text-white">
            Lo que <span style="color: #B5F613;">dicen</span> de nosotros.
        </h2>
        <p class="text-white fs-5 text-center mb-5 px-md-5" style="max-width: 850px; margin: 0 auto;">
            No es por presumir, pero hemos dejado a más de uno con la boca abierta.
        </p>
        <div class="row justify-content-center g-5" style="margin-top: 3rem">
            @foreach ($valores as $valor)
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 h-100 text-white rounded-3 shadow-sm d-flex flex-column justify-content-between"
                        style="background-color: #16121E; border: 1px solid rgba(255, 255, 255, 0.1);">
                        <div>
                            <i class="ti ti-quote fs-3 mb-3" style="color: #B9FF38"></i>
                            <h5 class="fw-bold mb-3 text-white">{{ $valor['texto'] }}</h5>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="me-3 d-flex justify-content-center align-items-center"
                                style="width: 50px; height: 50px; border-radius: 50%; background-color: #8130b1; color: rgb(255, 255, 255); font-weight: bold; font-size: 1.2rem;">
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
            <a href="/success" class="btn btn-lime" aria-label="Enlace para ver más testimonios">
                Ver más testimonios <i class="ti ti-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</section>

<section
    style="position: relative; background-image: url('/assets/img/enlimonado/exitos/fondoExitos.webp'); background-size: cover; background-position: center; height: 340px; display: flex; align-items: center; justify-content: center; text-align: center;">

    <div style="position: absolute; inset: 0; background-color: rgba(0, 0, 0, 0.7); z-index: 1;"></div>

    <div class="container" style="position: relative; z-index: 2;">
        <div>
            <h4 class="text-white fs-2 fw-bold pb-2">¿El próximo gran evento? <span style="color: #B9FF38;"><br>Puede
                    ser el tuyo.</span></h4>
            <p style="color: rgba(255, 255, 255, 0.8); font-size: 21px;">¿Tienes una marca, una idea o un marrón?
                Llámanos antes de que se agrie.</p>
            <div class="text-center mt-5">
                <a href="/contact" class="btn btn-lg btn-lime-contact" aria-label="Enlace para contactar con Enlimonado">
                    Contáctanos ahora
                </a>
            </div>
        </div>
    </div>
</section>

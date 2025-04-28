@php
    $equipo = [
        [
            'nombre' => 'Ana García',
            'cargo' => 'Dirección creativa',
            'frase' => '"Mi trabajo es hacer que lo imposible parezca normal"',
            'desc' => 'Responsable de las locuras que funcionan',
            'img' => 'assets/img/enlimonado/Nosotros/Evento.webp',
            'color' => 'rgba(181, 246, 19, 0.85)',
        ],
        [
            'nombre' => 'Carlos Pérez',
            'cargo' => 'Producción ejecutiva',
            'frase' => '"Si alguien dice que no se puede, yo encuentro la manera"',
            'desc' => 'El que convierte las ideas en realidad',
            'img' => 'assets/img/enlimonado/Nosotros/Evento.webp',
            'color' => 'rgba(181, 246, 19, 0.85)',
        ],
        [
            'nombre' => 'Laura Martín',
            'cargo' => 'Dirección de arte',
            'frase' => '"El diseño no es solo cómo se ve, sino cómo funciona"',
            'desc' => 'La maestra del caos visual organizado',
            'img' => 'assets/img/enlimonado/Nosotros/Evento.webp',
            'color' => 'rgba(181, 246, 19, 0.85)',
        ],
    ];
@endphp

<style>
    .equipo-card .overlay {
        transition: background-color 0.4s ease;
    }

    .equipo-card:hover .overlay {
        background-color: var(--overlay-color);
    }

    .equipo-card .overlay .hover-text {
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .equipo-card:hover .overlay .hover-text {
        opacity: 1;
    }
</style>


<section class="py-7" style="background-color: #000;">
    <div class="container text-center text-white py-5">
        <h2 class="fw-bold text-white mb-2">
            El <span style="color: #B5F613;">equipo</span> Enlimonado
        </h2>
        <p class="mb-5 text-white">
            Un grupo de mentes creativas y ejecutivas que hacen posible lo imposible.
        </p>

        <div class="row justify-content-center g-4">


            @foreach ($equipo as $i => $persona)
                <div class="col-md-6 col-lg-4">
                    <div class="position-relative rounded-4 overflow-hidden shadow-sm equipo-card"
                        style="background-image: url('{{ asset($persona['img']) }}'); background-size: cover; background-position: center; height: 550px; border-radius: 15px"
                        data-overlay="{{ $persona['color'] }}">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center px-3 transition"
                            style="background-color: transparent;">
                            @if ($persona['frase'])
                                <div class="hover-text">
                                    <h5 class="fw-bold text-black mb-2">{{ $persona['nombre'] }}</h5>
                                    <p class="text-black mb-0">{{ $persona['frase'] }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="position-absolute bottom-0 start-0 w-100 text-start p-4">
                            <div>
                                <h5 class="fw-bold text-white mb-0">{{ $persona['nombre'] }}</h5>
                                <div class="fw-semibold" style="color: #B5F613;">{{ $persona['cargo'] }}</div>
                            </div>
                            <div class="text-white small mt-3">{{ $persona['desc'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

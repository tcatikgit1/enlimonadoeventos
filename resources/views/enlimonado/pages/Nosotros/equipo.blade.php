@php
    $equipo = [
        [
            'nombre' => 'Daniel Trefny y Laura Castañeda',
            'cargo' => 'Dirección de arte',
            'frase' => '"El diseño no es solo cómo se ve, sino cómo funciona"',
            'desc' => 'Los maestros del caos en los eventos',
            'img' => 'assets/img/enlimonado/Nosotros/Foto.webp',
            'color' => 'rgba(181, 246, 19, 0.85)', // Aquí es donde se define el color de la superposición
        ],
    ];
@endphp

<style>
    .equipo-card .overlay {
        transition: background-color 0.4s ease, opacity 0.4s ease;
    }

    /* Usamos :hover para la versión de escritorio y :active para móviles */
    .equipo-card:hover .overlay,
    .equipo-card:active .overlay {
        background-color: var(--overlay-color, rgba(181, 246, 19, 0.85)); /* Usamos el color que definiste */
        opacity: 0.9;
    }

    .equipo-card .overlay .hover-text {
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    /* Hacemos que el texto de la overlay sea visible cuando se activa el hover o el active */
    .equipo-card:hover .overlay .hover-text,
    .equipo-card:active .overlay .hover-text {
        opacity: 1;
    }

    /* Eliminamos el borde y sombra, pero mantenemos la overlay */
    .equipo-card {
        border: none !important;
        box-shadow: none !important;
        border-radius: 25px;
        position: relative; /* Asegura que el contenido esté bien posicionado sobre la imagen */
        overflow: hidden;
    }

    .equipo-card img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        border-radius: 25px;
    }
</style>

<section class="py-7" style="background: #000000;">
    <div class="container text-center text-white py-5">
        <h2 class="fw-bold text-white mb-2">
            El <span style="color: #B5F613;">equipo</span> Enlimonado
        </h2>
        <p class="mb-5 text-white">
            Un grupo de mentes creativas y ejecutivas que hacen posible lo imposible.
        </p>

        <div class="row justify-content-center g-4">

            @foreach ($equipo as $i => $persona)
                <div class="col-md-10 col-lg-6"> <!-- Más ancho -->
                    <div class="position-relative rounded-4 overflow-hidden equipo-card"
                         style="background-image: url('{{ asset($persona['img']) }}'); background-size: cover; background-position: center; height: 550px;">

                        <!-- Overlay: el color se activa en hover y touch -->
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center px-3"
                             style="background-color: transparent;">
                            @if ($persona['frase'])
                                <div class="hover-text">
                                    <h5 class="fw-bold mb-2" style="color: #000; font-weight: 900;">{{ $persona['nombre'] }}</h5>
                                    <p class="mb-0" style="color: #000; font-weight: 600;">{{ $persona['frase'] }}</p>
                                </div>
                            @endif
                        </div>

                        <!-- Información del nombre y cargo -->
                        <div class="position-absolute bottom-0 start-0 w-100 text-start p-4">
                            <div>
                                <h3 class="fw-bold text-white mb-0">{{ $persona['nombre'] }}</h3>
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

@php
    $valores = [
        [
            'icono' => '🧠',
            'titulo' => 'Creatividad radical',
            'texto' => 'Pensamos fuera de la caja y demolamos sus paredes. Sin miedo a las ideas locas.',
            'color' => '#ff4dd6',
        ],
        [
            'icono' => '⚙️',
            'titulo' => 'Ejecución profesional',
            'texto' => 'Milimétricos en la planificación y resolución, meticulosos en cada detalle.',
            'color' => '#cccccc',
        ],
        [
            'icono' => '🎭',
            'titulo' => 'Storytelling visual',
            'texto' => 'Creamos narrativas que conectan con la audiencia a nivel emocional.',
            'color' => '#ffb347',
        ],
        [
            'icono' => '🍋',
            'titulo' => 'Humor ácido',
            'texto' => 'No nos tomamos demasiado en serio, excepto cuando se trata de resultados.',
            'color' => '#FFEB3B',
        ],
    ];
@endphp

<section
    style="background: linear-gradient(to top, #000000 30%, #160b24 100%);">
    <div class="container" style="padding-bottom: 3rem;">
        <h2 class="text-center fw-bold mb-5 text-white">
            Nuestros <span style="color: #B5F613;">valores</span>
        </h2>

        <div class="row justify-content-center g-4">
            @foreach ($valores as $valor)
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 h-100 text-white rounded-3 shadow-sm d-flex flex-column valor-card">
                        <div class="fs-2 mb-4" style="color: {{ $valor['color'] }};">{{ $valor['icono'] }}</div>
                        <h5 class="fw-bold mb-4 text-white">{{ $valor['titulo'] }}</h5>
                        <p class="mb-0 text-white">{{ $valor['texto'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

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

<style>
    .valor-card {
        background-color: #16121E;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.1s ease;
        will-change: background-color;
    }

    .valor-card:hover {
        background-color: #1f1c25;
    }
</style>

<section class="py-7"
    style="background: linear-gradient(to top, #000000 30%, #160b24 100%); padding-top: 7rem; padding-bottom: 7rem;">
    <div class="container" style="padding-top: 5rem; padding-bottom: 5rem;">
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

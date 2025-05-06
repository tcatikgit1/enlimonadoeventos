@php
$equipo = [
  [
    'nombre' => 'Daniel Trefny y Laura Castañeda',
    'cargo' => 'Dirección de arte',
    'frase' => '"El diseño no es solo cómo se ve, sino cómo funciona"',
    'desc' => 'Los maestros del caos en los eventos',
    'img' => 'assets/img/enlimonado/Nosotros/equipo2.webp',
  ],
];
@endphp
<section class="py-7" style="background: #000000;">
  <div class="container text-center text-white pb-5">
    <h2 class="fw-bold text-white mb-2">
      El <span style="color: #B5F613;">equipo</span> Enlimonado
    </h2>
    <p class="mb-5 text-white">
      Un grupo de mentes creativas y ejecutivas que hacen posible lo imposible.
    </p>

    <div class="row justify-content-center">
      @foreach ($equipo as $persona)
      <div class="col-12 col-md-10 col-lg-9 mx-auto">
      <div class="position-relative equipo-card rounded-4 mx-auto overflow-visible" style="width: 80%; height: 100%;">
        <!-- Responsive height -->

        <!-- Sombra desenfocada -->
        {{-- <div class="equipo-card-shadow position-absolute top-0 start-0 w-100 h-100"
        style="background-image: url('{{ asset($persona['img']) }}');">
        </div> --}}

        <!-- Imagen principal -->
        <img src="{{ asset($persona['img']) }}" alt="{{ $persona['nombre'] }}"
        class="w-100 h-100 rounded-4 position-relative" style="z-index: 1;">

      </div>
      </div>
    @endforeach
    </div>
  </div>
</section>

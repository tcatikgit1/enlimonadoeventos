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
      @php
$valores = [
  [
    'icono' => '"',
    'titulo' => 'Eventos Corporativos',
    'texto' => 'Transformamos tus convenciones aburridas en experiencias memorables que impulsan tu marca.',
    'color' => '#ff4dd6'
  ],
  [
    'icono' => '✨',
    'titulo' => 'Retail & Activaciones',
    'texto' => 'Creamos momentos que convierten miradas curiosas en clientes comprometidos.',
    'color' => '#cccccc'
  ],
];
  @endphp

      @foreach($valores as $valor)
      <div class="col-md-6 col-lg-2">
      <div class="p-3 h-100 text-white rounded-3 shadow-sm d-flex flex-column"
        style="background-color: #16121E; border: 1px solid rgba(255, 255, 255, 0.1);">
        <div class="fs-2 mb-4" style="color: {{ $valor['color'] }};">{{ $valor['icono'] }}</div>
        <h5 class="fw-bold mb-4 text-white">{{ $valor['titulo'] }}</h5>
        <p class="mb-0 text-white">{{ $valor['texto'] }}</p>
      </div>
      </div>
    @endforeach
    </div>

  </div>
</section>

<section
  style="position: relative; background-image: url('/assets/img/enlimonado/exitos/fondoExitos.webp'); background-size: cover; background-position: center; height: 340px; display: flex; align-items: center; justify-content: center; text-align: center;">

  <div style="position: absolute; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

  <div class="container" style="position: relative; z-index: 2;">
    <div>
      <h4 class="text-white fs-2 fw-bold pb-2">¿El próximo gran evento? <span style="color: #B9FF38;"><br>Puede ser el tuyo.</span></h4>
      <p style="color: rgba(255, 255, 255, 0.8); font-size: 21px;">¿Tienes una marca, una idea o un marrón? Llámanos antes de que se agrie.</p>
      <button class="rounded fw-bold mt-3" style="background: #B9FF38; padding: 12px 30px; font-size: 15px;">Contáctanos
        ahora</button>
    </div>
  </div>
</section>

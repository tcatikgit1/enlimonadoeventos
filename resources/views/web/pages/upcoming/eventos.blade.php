@php
    $eventos = [
        [
            'titulo' => 'Tech Summit 2025',
            'descripcion' => 'Un encuentro que reunirá a líderes tecnológicos para explorar las tendencias que están transformando el futuro digital.',
            'fecha' => '17 de junio de 2025',
            'hora' => '09:00 - 18:00',
            'ubicacion' => 'Centro de Convenciones, Las Palmas',
            'imagen' => '/assets/img/enlimonado/exitos/exitos1.webp',
            'dataDate' => '2025-06-17',
            'reverse' => false,
        ],
        [
            'titulo' => 'Festival Ácido',
            'descripcion' => 'Una experiencia musical y visual que fusiona lo bizarro con lo sublime en uno de los entornos más emblemáticos de la isla.',
            'fecha' => '22 de julio de 2025',
            'hora' => '20:00 - 03:00',
            'ubicacion' => 'Playa de Las Canteras, Las Palmas',
            'imagen' => '/assets/img/enlimonado/exitos/exitos3.webp',
            'dataDate' => '2025-07-22',
            'reverse' => true,
        ],
        [
            'titulo' => 'Exposición Inmersiva: Realidades Alteradas',
            'descripcion' => 'Una instalación artística que desafía los sentidos y cuestiona los límites entre lo real y lo imaginario.',
            'fecha' => '5 de septiembre de 2024',
            'hora' => '10:00 - 20:00',
            'ubicacion' => 'Centro de Arte Contemporáneo, Las Palmas',
            'imagen' => '/assets/img/enlimonado/exitos/exitos1.webp',
            'dataDate' => '2024-09-05',
            'reverse' => false,
        ],
    ];
@endphp

<section class="contact-section py-10" style="background: #000000;">
    <div class="container">
        <div class="row justify-content-start mb-10">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <h2 class="fw-bold fs-2 text-white">Eventos en el horizonte</h2>
            </div>
        </div>
        @foreach ($eventos as $evento)
        <div class="row align-items-start mb-10  {{ $evento['reverse'] ? 'flex-lg-row-reverse' : '' }}">
            <div class="col-12 col-lg-6 p-4 position-relative">
                <img src="{{ $evento['imagen'] }}" alt="{{ $evento['titulo'] }}"
                    class="img-fluid rounded w-100 h-auto" style="max-height: 500px;">
                <div class="position-absolute bottom-0 end-0 m-9 p-3 text-white rounded text-start"
                    style="background-color: rgba(17, 17, 17, 0.9);">
                    <small>Faltan</small><br>
                    <strong class="fs-4" data-date="{{ $evento['dataDate'] }}" style="color: #B9FF38;">0</strong>
                    <span class="fs-4" style="color: #B9FF38;">días</span>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-4 text-light">
                <h3 class="fs-4 text-white">{{ $evento['titulo'] }}</h3>
                <p class="fs-5 mb-4 mt-4" style="color: rgba(255, 255, 255, 0.8);">
                    {{ $evento['descripcion'] }}
                </p>
                <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-center pb-2">
                        <span class="ti ti-calendar-week icon-green me-2"></span>
                        <span class="text-white">{{ $evento['fecha'] }}</span>
                    </li>
                    <li class="d-flex align-items-center pb-2">
                        <span class="ti ti-clock-hour-4 icon-green me-2"></span>
                        <span class="text-white">{{ $evento['hora'] }}</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="ti ti-map-pin icon-green me-2"></i>
                        <span class="text-white">{{ $evento['ubicacion'] }}</span>
                    </li>
                </ul>
                <a href="#"
                    class="btn px-4 py-2 rounded"
                    data-bs-toggle="modal"
                    data-bs-target="#modalSolicitud"
                    data-evento="{{ $evento['titulo'] }}"
                    data-fecha="{{ $evento['fecha'] }} · {{ $evento['hora'] }}"
                    data-date="{{ $evento['dataDate'] }}"
                    data-btn>
                    Cargando...
                </a>
            </div>
        </div>
        @endforeach
    </div>

    @include('web.pages.upcoming.solicitud')
</section>

<script>
  function parseDateToLocal(dateStr) {
      const [year, month, day] = dateStr.split('-').map(Number);
      return new Date(year, month - 1, day); // Mes en base 0
  }

  document.querySelectorAll('[data-date]').forEach(el => {
      const targetDate = parseDateToLocal(el.getAttribute('data-date'));
      const now = new Date();
      now.setHours(0, 0, 0, 0);

      const daysDiff = Math.ceil((targetDate - now) / (1000 * 60 * 60 * 24));
      const daysToShow = Math.max(0, daysDiff);

      el.textContent = daysToShow;

      const label = el.nextElementSibling;
      if (label) {
          label.textContent = daysToShow === 1 ? 'día' : 'días';
          label.classList.add('fs-4');
      }
  });

  document.querySelectorAll('[data-btn]').forEach(btn => {
      const eventDate = parseDateToLocal(btn.getAttribute('data-date'));
      const today = new Date();
      today.setHours(0, 0, 0, 0);

      if (eventDate >= today) {
          btn.classList.add('btn-lime-active');
          btn.textContent = 'Inscribirme';
      } else {
          btn.classList.add('btn-lime-desactive');
          btn.textContent = 'Próximamente';
          btn.setAttribute('disabled', true);
      }
  });
</script>

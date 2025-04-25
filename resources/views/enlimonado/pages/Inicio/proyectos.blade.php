<style>
  .btn-lime-cta {
    border: 2px solid #B9FF38;
    color: #000;
    background-color: #B9FF38;
    font-weight: 600;
    transition: all 0.3s ease-in-out;
  }

  .btn-lime-cta:hover {
    background-color: #9bd42f;
    color: #000;
  }

  .lime-text {
    color: #B9FF38;
  }

  .event-card {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    height: 400px; /* Aumentada */
    width: 630px;
    margin-top: 3rem;
    display: flex;
    align-items: flex-end;
  }

  .event-card::before {
    content: '';
    background-image: var(--bg-img);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    inset: 0;
    z-index: 1;
    transition: transform 0.3s ease-in-out;
  }

  .event-card:hover::before {
    transform: scale(1.10); /* Solo la imagen se agranda */
  }

  .event-content {
    position: relative;
    z-index: 2;
    padding: 1.5rem;
    color: white;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
  }

  .event-tag {
    background-color: #B9FF38;
    color: black;
    font-weight: 700; /* En negrita */
    font-size: 0.75rem;
    padding: 4px 8px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 0.5rem;
  }

  .lime-bar {
    position: absolute;
    left: 5%;
    height: 5px;
    background-color: #B9FF38;
    width: 10%;
    transition: width 0.1s ease-in-out;
  }

  .event-card:hover .lime-bar {
    width: 25%;
  }
</style>

<section class="contact-section py-10" style="background: linear-gradient(to bottom, #000000 30%, #160b24 100%);">
  <div class="container py-5">
      <h2 class="text-center fw-bold mb-4 text-white">
          Proyectos <span style="color: #B5F613;">Enlimonados</span>.
        </h2>

        <p class="text-white fs-5 text-center mb-5 px-md-5" style="max-width: 850px; margin: 0 auto;">
            Un vistazo a nuestras creaciones más ácidas y bizarras
        </p>
    <div class="row mb-12 g-3 justify-content-center">



      <!-- Tarjetas -->
      @php
$articles = [
  [
    'img' => 'blog1.jpg',
    'tag' => 'Workshop',
    'title' => 'Cómo diseñar una estrategia de lanzamiento efectiva en 2023',
  ],
  [
    'img' => 'blog2.jpg',
    'tag' => 'Conferencia',
    'title' => 'Los 7 errores más comunes en embudos de venta y cómo...',
  ],
];
      @endphp

  @foreach($articles as $article)
    <div class="col-xl-6 d-flex justify-content-center"> {{-- Cambiado --}}
    <div class="event-card" data-bg="{{ asset('assets/img/enlimonado/blog/' . $article['img']) }}">
      <div class="event-content">
      <div class="event-tag">{{ $article['tag'] }}</div>
      <h5 class="fw-bold" style="color: #ffffff;">{{ $article['title'] }}</h5>
      <div class="lime-bar"></div>
      </div>
    </div>
    </div>
  @endforeach
  </div>
    <div class="text-center mt-5">
      <a href="tel:+34928123456" class="btn btn-outline-lime">
        Ver todos los proyectos <i class="ti ti-arrow-right ms-1"></i>
      </a>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.event-card').forEach(card => {
    const bgUrl = card.getAttribute('data-bg');
    card.style.setProperty('--bg-img', `url(${bgUrl})`);
  });
</script>

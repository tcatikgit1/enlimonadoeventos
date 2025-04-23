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
    height: 350px;
    display: flex;
    align-items: flex-end;
    transition: transform 0.3s ease-in-out;
  }

  .event-card:hover {
    transform: scale(1.02);
  }

  .event-card::before {
    content: '';
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    inset: 0;
    z-index: 1;
    transition: transform 0.3s ease-in-out;
  }

  .event-card:hover::before {
    transform: scale(1.05);
  }

  .event-content {
    position: relative;
    z-index: 2;
    padding: 1.5rem;
    color: white;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
    width: 100%;
  }

  .event-tag {
    background-color: #B9FF38;
    color: black;
    font-weight: 100;
    font-size: 0.75rem;
    padding: 4px 8px;
    border-radius: 5px;
    display: inline-block;
    margin-bottom: 0.5rem;
  }

  .lime-bar {
    position: absolute;
    left: 5%;
    height: 5px;
    background-color: #B9FF38;
    width: 10%;
    transition: width 0.3s ease-in-out;
  }

  .event-card:hover .lime-bar {
    width: 25%;
  }
</style>

<section class="contact-section py-10" style="background: linear-gradient(to bottom, #000000 30%, #160b24 100%);">
  <div class="container py-5">
    <div class="row mb-12 g-3 justify-content-center">

      <!-- Tarjetas -->
      @php
        $articles = [
          [
            'img' => 'blog1.jpg',
            'tag' => 'Workshop',
            'title' => 'Cómo diseñar una estrategia de lanzamiento efectiva en 2023',
            'author' => 'Juan Pérez',
          ],
          [
            'img' => 'blog2.jpg',
            'tag' => 'Conferencia',
            'title' => 'Los 7 errores más comunes en embudos de venta y cómo...',
            'author' => 'María Gómez',
          ],
          [
            'img' => 'blog3.jpg',
            'tag' => 'Seminario',
            'title' => 'Posicionamiento SEO: Estrategias que funcionan en...',
            'author' => 'Carlos Torres',
          ],
          [
            'img' => 'blog4.jpg',
            'tag' => 'Taller',
            'title' => 'Consultoría comercial: Cómo transformar equipos de venta...',
            'author' => 'Ana Ruiz',
          ],
          [
            'img' => 'blog5.jpg',
            'tag' => 'Evento Online',
            'title' => 'Estrategia omnicanal: Integrando la experiencia...',
            'author' => 'Luis Martínez',
          ],
          [
            'img' => 'blog6.jpg',
            'tag' => 'Charla',
            'title' => 'El arte de la propuesta comercial: Cómo aumentar la...',
            'author' => 'Diana López',
          ],
        ];
      @endphp

      @foreach($articles as $article)
      <div class="col-md-4 col-xl-4">
        <div class="event-card" style="background-image: url('{{ asset('assets/img/enlimonado/blog/' . $article['img']) }}');">
          <div class="event-content">
            <div class="event-tag">{{ $article['tag'] }}</div>
            <h5 class="fw-bold">{{ $article['title'] }}</h5>
            <p class="mb-1"><small>Por {{ $article['author'] }}</small></p>
            <div class="lime-bar"></div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

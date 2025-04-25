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
    height: 450px; /* Aumentada */
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
    width: 100%;
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
    <div class="row mb-12 g-3 justify-content-center">

      <!-- Tarjetas -->
      @php
        $articles = [
          [
            'img' => 'eve1.webp',
            'tag' => 'Eventos',
            'title' => 'Painting room',
            'author' => 'Juan Pérez',
          ],
          [
            'img' => 'eve2.webp',
            'tag' => 'Evento',
            'title' => 'Primera Rage Room de CANARIAS',
            'author' => 'María Gómez',
          ],
          [
            'img' => 'eve3.webp',
            'tag' => 'Evento',
            'title' => 'Evento 21 aniversario',
            'author' => 'Carlos Torres',
          ],
          [
            'img' => 'eve4.webp',
            'tag' => 'Evento',
            'title' => 'Concierto Maikel Delacalle',
            'author' => 'Ana Ruiz',
          ],
          [
            'img' => 'eve5.webp',
            'tag' => 'Evento',
            'title' => 'Evento IOC 2022',
            'author' => 'Luis Martínez',
          ],
          [
            'img' => 'eve6.webp',
            'tag' => 'Evento',
            'title' => 'Evento Find The Rider',
            'author' => 'Diana López',
          ],
        ];
      @endphp


      @php use Illuminate\Support\Str; @endphp

      @foreach($articles as $article)
        @php $slug = Str::slug($article['title']); @endphp
        <div class="col-md-4 col-xl-4">
          <a href="{{ route('proyects.detalles', ['slug' => $slug]) }}" style="text-decoration: none;">
            <div class="event-card" data-bg="{{ asset('assets/img/enlimonado/eventos/' . $article['img']) }}">
              <div class="event-content">
                <div class="event-tag">{{ $article['tag'] }}</div>
                <h5 class="fw-bold" style="color: #ffffff;">{{ $article['title'] }}</h5>
                <h6 class="mb-1" style="color: #ffffff;">Por {{ $article['author'] }}</h6>
                <div class="lime-bar"></div>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.event-card').forEach(card => {
    const bgUrl = card.getAttribute('data-bg');
    card.style.setProperty('--bg-img', `url(${bgUrl})`);
  });
</script>

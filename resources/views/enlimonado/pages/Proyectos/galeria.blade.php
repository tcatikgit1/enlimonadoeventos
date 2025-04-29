@php use Illuminate\Support\Str; @endphp

@php
    $articles = [
        ['img' => 'eve1.webp', 'tag' => 'Eventos', 'title' => 'Painting room', 'author' => 'Juan Pérez'],
        ['img' => 'eve2.webp', 'tag' => 'Eventos', 'title' => 'Primera Rage Room de CANARIAS', 'author' => 'María Gómez'],
        ['img' => 'eve3.webp', 'tag' => 'Conciertos', 'title' => 'Evento 21 aniversario', 'author' => 'Carlos Torres'],
        ['img' => 'eve4.webp', 'tag' => 'Conciertos', 'title' => 'Concierto Maikel Delacalle', 'author' => 'Ana Ruiz'],
        ['img' => 'eve5.webp', 'tag' => 'Empresariales', 'title' => 'Evento IOC 2022', 'author' => 'Luis Martínez'],
        ['img' => 'eve6.webp', 'tag' => 'Eventos', 'title' => 'Evento Find The Rider', 'author' => 'Diana López'],
    ];

    $tags = collect($articles)->pluck('tag')->unique();
@endphp

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
        height: 450px;
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
        transform: scale(1.10);
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
        font-weight: 700;
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

    /* Nuevo filtro estilo píldora */
    .filter-card {
        background-color: #1e1e1e;
        border-radius: 5px;
        padding: 0.1rem;
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;

        /* Añade esto ↓ */
        max-width: 455px;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-filter {
        border: none;
        background-color: transparent;
        color: #cccccc;
        padding: 8px 16px;
        font-weight: 500;
        border-radius: 8px;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-filter:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #ffffff;
    }

    .btn-filter.active {
        background-color: #B9FF38;
        color: #000;
        font-weight: 600;
    }
</style>

<section class="contact-section py-10" style="background: linear-gradient(to bottom, #000000 30%, #160b24 100%);">
    <div class="container py-5">

        <!-- Filtro estilo píldora -->
        <div class="filter-card">
            <button class="btn-filter active" data-filter="all">Todos</button>
            @foreach ($tags as $tag)
                <button class="btn-filter" data-filter="{{ $tag }}">{{ $tag }}</button>
            @endforeach
        </div>

        <div class="row mb-12 g-3 justify-content-center">
            @foreach ($articles as $article)
                @php $slug = Str::slug($article['title']); @endphp
                <div class="col-md-4 col-xl-4 filter-item" data-category="{{ $article['tag'] }}">
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
    // Carga imágenes de fondo
    document.querySelectorAll('.event-card').forEach(card => {
        const bgUrl = card.getAttribute('data-bg');
        card.style.setProperty('--bg-img', `url(${bgUrl})`);
    });

    // Filtro funcional
    document.querySelectorAll('.btn-filter').forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            document.querySelectorAll('.btn-filter').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            document.querySelectorAll('.filter-item').forEach(item => {
                const category = item.getAttribute('data-category');
                item.style.display = (filter === 'all' || category === filter) ? 'block' : 'none';
            });
        });
    });
</script>

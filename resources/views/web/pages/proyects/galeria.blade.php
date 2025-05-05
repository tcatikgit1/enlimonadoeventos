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

<section class="contact-section py-10" style="background: #000000 ;">
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
                                <h3 class="fw-bold fs-4" style="color: #ffffff;">{{ $article['title'] }}</h3>
                                <h4 class="mb-1 fs-5" style="color: #ffffff;">Por {{ $article['author'] }}</h4>
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

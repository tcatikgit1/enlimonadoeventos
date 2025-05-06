@section('page-style')
  @vite([
    'resources\scss\styles\proyects\_contacto.scss'
  ])
@endsection

<section
    style="position: relative; background-image: url('/assets/img/enlimonado/exitos/fondoExitos.webp'); background-size: cover; background-position: center; height: 340px; display: flex; align-items: center; justify-content: center; text-align: center;">

    <div style="position: absolute; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

    <div class="container" style="position: relative; z-index: 2;">
        <div>
            <h2 class="text-white fs-2 fw-bold pb-2">¿Quieres ser nuestro <span style="color: #B9FF38;">próximo caso de
                    éxito</span>?</h2>
            <p style="color: rgba(255, 255, 255, 0.8); font-size: 21px;">Trabajemos juntos para crear una experiencia que
                supere todas las expectativas.</p>
                      <a href="{{ route('contacto') }} " class="btn btn-lime-cta px-4 py-2 rounded"
                        aria-label="Enlace para contactar con Enlimonado">Contáctanos ahora</a>

        </div>
    </div>
</section>

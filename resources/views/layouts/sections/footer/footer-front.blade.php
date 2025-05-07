@php
$containerFooter = (isset($configData['contentLayout']) && $configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
@endphp

<style>
  /* Footer general */
  footer.footer {
    background-color: #000000;
  }

  /* Enlaces en el footer */
  .footer-link {
    color: #e1e1e1;
    text-decoration: none;
    transition: color 0.2s ease;
  }

  .footer-link:hover p {
    color: #e1e1e1;
  }

  .footer-link:hover {
    color: #B9FF38;
  }

  .icon-green {
    color: #B9FF38;
  }

  .footer-heading {
    font-size: 1.25rem;
    font-weight: bold;
    color: #e1e1e1;
  }

  .footer-social-icon {
    color: #e1e1e1;
    margin-right: 10px;
    font-size: 1.2rem;
  }

  .footer-social-icon:hover {
    color: #B9FF38;
  }

  /* Imagen del logo responsive */
  .footer-logo-responsive {
    max-width: 100%;
    height: auto;
  }

  /* Reducir tamaño del logo en móviles */
  @media (max-width: 767px) {
    .footer-logo-responsive {
      max-width: 120px;
      height: auto;
    }

    .footer-bottom {
      flex-direction: column !important;
      text-align: center;
    }

    .footer-bottom .footer-links {
      justify-content: center !important;
      margin-top: 0.5rem;
    }
  }
</style>

<section id="adv-footer">
  <footer class="footer">
    <div class="container-fluid container pt-12 pb-6">
      <div class="row">
        <!-- Brand + social -->
        <div class="col-12 col-md-4 mb-6">
          <h2 class="fw-bold fs-4 mb-3 text-white">
            <a href="#" class="text-uppercase text-white" style="text-decoration: none;">
              <img src="{{ asset('assets/img/enlimonado/logo/Logopeque.webp') }}" alt="Logo Enlimonado" class="footer-logo-responsive">
            </a>
          </h2>
          <p style="color: #ffffff;">"Si no te lo cuestionan, es que no lo hiciste bien."</p>
          <div class="mt-3">
            <a href="https://www.instagram.com/enlimonadoproducciones/" target="_blank" aria-label="Enlace a Instagram"><i class="ti ti-brand-instagram footer-social-icon"></i></a>
            <a href="//wa.me/{{ config('app.tel_whatsapp') }}" target="_blank" aria-label="Enlace a WhatsApp"><i class="ti ti-brand-whatsapp footer-social-icon"></i></a>
            <a href="tel:+34828701918" target="_blank" aria-label="Enlace a Teléfono"><i class="ti ti-phone footer-social-icon"></i></a>
            <a href="mailto:{{ env('APP_MAIL') }}" target="_blank" aria-label="Enlace a Correo"><i class="ti ti-mail footer-social-icon"></i></a>
            <a href="https://www.tiktok.com/@enlimonadoproducciones?lang=es" target="_blank" aria-label="Enlace a TikTok"><i class="ti ti-brand-tiktok footer-social-icon"></i></a>
          </div>
        </div>

        <!-- Enlaces rápidos -->
        <div class="col-12 col-md-4 mb-6">
          <h2 class="footer-heading">Enlaces Rápidos</h2>
          <div class="row">
            <div class="col-6">
              <ul class="list-unstyled mt-3">
                <li><a href="/" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Inicio</a></li>
                <li><a href="{{ route('nosotros') }}" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Nosotros</a></li>
                <li><a href="{{ route('proyectos') }}" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Proyectos</a></li>
              </ul>
            </div>
            <div class="col-6">
              <ul class="list-unstyled mt-3">
                <li><a href="{{ route('exitos') }}" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Éxitos</a></li>
                <li><a href="{{ route('proximos') }}" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Próximos</a></li>
                <li><a href="{{ route('contacto') }}" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Contáctanos -->
        <div class="col-12 col-md-4">
          <h2 class="footer-heading">Contáctanos</h2>
          <ul class="list-unstyled mt-3">
            <li class="d-flex align-items-center pb-2">
              <i class="ti ti-mail icon-green me-2"></i>
              <a href="mailto:{{ env('APP_MAIL') }}" class="footer-link"> {{ env('APP_MAIL') }}</a>
            </li>
            <li class="d-flex align-items-center pb-2">
              <i class="ti ti-phone icon-green me-2"></i>
              <a href="tel:+34828701918" class="footer-link"> +34 828 701 918</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="ti ti-map-pin icon-green me-2"></i>
              <span class="text-white"> Las Palmas de Gran Canaria, España</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <hr class="hrFooter container-fluid container my-4"/>

    <!-- Footer Bottom -->
    <div class="container-fluid container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 py-4 footer-bottom">
      <div class="d-flex flex-wrap align-items-center text-body footer-link text-center">
        <span>© <script>document.write(new Date().getFullYear())</script> Enlimonado Eventos. Todos los derechos reservados.</span>
      </div>
      <div class="d-flex flex-wrap justify-content-start justify-content-md-end footer-links">
        <a href="{{ route('privacidad') }}" class="footer-link me-4">Política de privacidad</a>
        <a href="{{ route('cookies') }}" class="footer-link">Política de cookies</a>
      </div>
    </div>
  </footer>
</section>

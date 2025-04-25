<!-- FOOTER STYLE -->
@php
$containerFooter = (isset($configData['contentLayout']) && $configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
@endphp

@section('page-style')
@vite('resources/css/enlimonado/footer.css')
<style>
  .footer-link {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.2s ease;
  }

  .footer-link:hover {
    color: #B9FF38;
  }

  .footer-heading {
    font-size: 1.25rem;
    font-weight: bold;
    color: #ffffff;
  }

  .icon-green {
    color: #B9FF38;
    margin-right: 8px;
  }

  .footer-social-icon {
    font-size: 1.25rem;
    margin-right: 10px;
    color: #ffffff;
    transition: color 0.2s ease;
  }

  .footer-social-icon:hover {
    color: #B9FF38;
  }

  .hrFooter {
    border: none;
    border-top: 1px solid #444;
  }
</style>
@endsection

<!-- FOOTER HTML -->
<section id="adv-footer">
  <footer class="footer" style="background-color: #000000;">
    <div class="container-fluid container pt-12 pb-6">
      <div class="row">
        <!-- Brand + social -->
        <div class="col-12 col-md-4 mb-6">
          <h4 class="fw-bold fs-4 mb-3 text-white">
            <a href="#" class="text-uppercase text-white" style="text-decoration: none;">
              <span style="color: #B9FF38;">EN</span><span style="color: #ffffff;">LIMONADO</span>
            </a>
          </h4>
          <p style="color: #ffffff; font-family:Poppins, sans-serif">"Si no te lo cuestionan, es que no lo hiciste bien."</p>
          <div class="mt-3">
            <a href="https://facebook.com" target="_blank"><i class="ti ti-brand-facebook footer-social-icon"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="ti ti-brand-instagram footer-social-icon"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="ti ti-brand-twitter footer-social-icon"></i></a>
          </div>
        </div>

        <!-- Enlaces rápidos -->
        <div class="col-12 col-md-4 mb-6">
          <h5 class="footer-heading">Enlaces Rápidos</h5>
          <div class="row">
            <div class="col-6">
              <ul class="list-unstyled mt-3">
                <li><a href="/" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Inicio</a></li>
                <li><a href="/about-us" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Nosotros</a></li>
                <li><a href="/projects" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Proyectos</a></li>
              </ul>
            </div>
            <div class="col-6">
              <ul class="list-unstyled mt-3">
                <li><a href="/success" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Éxitos</a></li>
                <li><a href="/upcoming" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Próximos</a></li>
                <li><a href="/contact" class="footer-link d-block pb-2"><i class="bi bi-chevron-right"></i> Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Contáctanos -->
        <div class="col-12 col-md-4">
          <h5 class="footer-heading">Contáctanos</h5>
          <ul class="list-unstyled mt-3">
            <li class="d-flex align-items-center pb-2">
              <i class="ti ti-mail icon-green"></i>
              <a href="mailto:info@enlimonadoeventos.com" class="footer-link">info@enlimonadoeventos.com</a>
            </li>
            <li class="d-flex align-items-center pb-2">
              <i class="ti ti-phone icon-green"></i>
              <a href="tel:+34928123456" class="footer-link">+34 928 123 456</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="ti ti-map-pin icon-green"></i>
              <span class="text-white">Las Palmas de Gran Canaria, España</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <hr class="hrFooter container-fluid container my-4"/>
    <div class="container-fluid container d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 py-4">
      <div class="text-body footer-link">
        © <script>document.write(new Date().getFullYear())</script>
        <a href="/legal-notice" class="footer-link">Enlimonado Estrategias. Todos los derechos reservados.</a>
      </div>
      <div class="d-flex flex-column flex-sm-row">
        <a href="/aviso-legal" class="footer-link me-6">Aviso legal</a>
        <a href="/politica-de-privacidad" class="footer-link me-6">Política de privacidad</a>
      </div>
    </div>
  </footer>
</section>

<!-- FOOTER STYLE -->
@php
$containerFooter = (isset($configData['contentLayout']) && $configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
@endphp

<style>
  /* Footer general */
footer.footer {
  background-color: #000000; /* Fondo negro */
}

/* Enlaces en el footer */
.footer-link {
  color: #e1e1e1; /* Gris claro con mayor contraste */
  text-decoration: none;
  transition: color 0.2s ease;
}

/* Hover en enlaces */
.footer-link:hover {
  color: #B9FF38; /* Verde brillante para el hover, con buen contraste */
}

.icon-green{
  color: #B9FF38;
}

/* Encabezados en el footer */
.footer-heading {
  font-size: 1.25rem;
  font-weight: bold;
  color: #e1e1e1; /* Gris claro para los encabezados */
}

/* Iconos sociales */
.footer-social-icon {
  color: #e1e1e1; /* Gris claro para los iconos */
}

/* Iconos sociales en hover */
.footer-social-icon:hover {
  color: #B9FF38;
}
</style>

<!-- FOOTER HTML -->
<section id="adv-footer">
  <footer class="footer" style="background-color: #000000;">
    <div class="container-fluid container pt-12 pb-6">
      <div class="row">
        <!-- Brand + social -->
        <div class="col-12 col-md-4 mb-6">
          <h4 class="fw-bold fs-4 mb-3 text-white">
            <a href="#" class="text-uppercase text-white" style="text-decoration: none;">
              <!-- Aquí ponemos la imagen en lugar del texto ENLIMONADO -->
              <img src="{{ asset('assets/img/enlimonado/logo/Log2.webp') }}" alt="Logo Enlimonado" style="height: auto; width: 180px;">
            </a>
          </h4>
          <p style="color: #ffffff; font-family:Poppins, sans-serif">"Si no te lo cuestionan, es que no lo hiciste bien."</p>
          <div class="mt-3">
            <a href="https://www.instagram.com/enlimonadoproducciones/" target="_blank" aria-label="Enlace a Instagram"><i class="ti ti-brand-instagram footer-social-icon"></i></a>
            <a href="//wa.me/667073126" target="_blank" aria-label="Enlace a Instagram"><i class="ti ti-brand-whatsapp footer-social-icon"></i></a>
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
    <div class="container-fluid container d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 py-4">
      <div class="text-body footer-link">
        © <script>document.write(new Date().getFullYear())</script>
        <a href="/legal-notice" class="footer-link">Enlimonado Estrategias. Todos los derechos reservados.</a>
      </div>
      <div class="d-flex flex-column flex-sm-row">
        <a href="/politica-de-privacidad" class="footer-link me-6">Política de privacidad</a>
        <a href="/politica-de-cookies" class="footer-link me-6">Política de cookies</a>
      </div>
    </div>
  </footer>
</section>

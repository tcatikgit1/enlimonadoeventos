
@php
$containerFooter = (isset($configData['contentLayout']) && $configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
@endphp

@section('page-style')
@vite('resources/css/enlimonado/footer.css')
@endsection



<!-- Advanced footer -->
<section id="adv-footer">
  <footer class="footer" style="background-color: #021224;">
    <div class="container-fluid container pt-12 pb-6">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 mb-6 mb-sm-0">
          <h4 class="fw-bold mb-4"><a href="{{ config('variables.livePreview') }}" target="_blank"
              class="footer-text text-white"> <span style="color: #5ABFFF;">Enlimonado</span> Estrategias </a></h4>
          <span style="color: #929ba5; transition: color 0.3s ease;">Ayudamos a negocios a crecer con estrategia, estructura y ventas. Desarrollamos planes personalizados
            para impulsar tus resultados comerciales.</span>
          <div class="social-icon my-4">
            <a href="javascript:void(0)">
              <i class="ti ti-brand-linkedin custom-icon"></i>
            </a>
            <a href="javascript:void(0)">
              <i class="ti ti-brand-twitter custom-icon"></i>
            </a>
            <a href="javascript:void(0)">
              <i class="ti ti-brand-instagram custom-icon"></i>
            </a>
            <a href="javascript:void(0)">
              <i class="ti ti-brand-youtube custom-icon"></i>
            </a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-6 mb-md-0">
          <h5 class="text-white">Enlaces Rápidos</h5>
          <ul class="list-unstyled">
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Inicio</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Servicios </a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Nosotros</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Casos de éxito</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Reseñas</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Blog</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Contacto</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-6 mb-sm-0">
          <h5 class="text-white">Servicios</h5>
          <ul class="list-unstyled">
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Consultoría comercial</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Estrategia de negocio</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Posicionamiento SEO</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Embudos de venta</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i>Expansión de mercados</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Retail offline y online</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Amazon & Marketplaces</a></li>
            <li><a href="javascript:void(0)" class="footer-link d-block pb-2 linkFooter"><i class="bi bi-chevron-right"></i> Coaching comercial</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <h5 class="text-white">Newsletter</h5>
          <ul class="list-unstyled">
            <li><p class="textFooter1">Suscribete para recibir nuestros mejores consejos sobre estrategia y ventas.</p></li>
            <li>
              <form id="newsletterForm" action="{{ route('newsletter')}}" method="POST">
                @csrf
                <div style="display: flex;">
                  <input type="email" name="email" id="emailInput"
                         class="border-0 inputFooter"
                         placeholder="Tu email" required >

                  <button type="submit"
                          class="buttonFooter">
                    <i class="bi bi-envelope"></i>
                  </button>
                </div>
              </form>
            </li>
            <li><p class="textFooter mt-3">Nunca compartiremos tu email. Puedes darte de baja en cualquier momento.</p></li>
          </ul>
        </div>
      </div>
    </div>
    <hr class="hrFooter" />
    <div class="container-fluid container d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-4">
      <div class="text-body linkFooter">
        ©
        <script>document.write(new Date().getFullYear())</script> <a href="" target="_blank"
          class="footer-link linkFooter">Enlimonado Estrategias. Todos los derechos reservados.</a>
      </div>
      <div class="d-flex flex-column flex-sm-row">
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-6 linkFooter" target="_blank">Política de
          privacidad</a>
        <a href="javascript:void(0)" class="footer-link me-6 linkFooter">Términos y condiciones</a>
        <a href="javascript:void(0)" class="footer-link me-6 linkFooter">Política de cookies</a>
      </div>
    </div>
  </footer>
</section>

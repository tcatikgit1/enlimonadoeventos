@php
$iconCheck = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
  stroke="rgb(61, 159, 255)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
  class="icon-check me-2" style="flex-shrink: 0;">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M5 12l5 5l10 -10"/>
  </svg>';

$diamond = '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 24 24" fill="rgb(61, 159, 255)""
  class="icon icon-tabler icons-tabler-filled icon-tabler-diamonds text-primary mb-2 me-2"><path  d="M0 0h24v24H0z"
  fill="none"/><path d="M12 2.005c-.777 0 -1.508 .367 -1.971 .99l-5.362 6.895c-.89 1.136 -.89 3.083 0 4.227l5.375 6.911a2.457 2.457 0 0 0 3.93 -.017l5.361 -6.894c.89 -1.136 .89 -3.083 0 -4.227l-5.375 -6.911a2.446 2.446 0 0 0 -1.958 -.974z" />
  </svg>';


@endphp
<section class="py-5 bg-white my-0">
  <div class="container">
    <div class="text-center mb-5 my-4">
      <span class="badge rounded-pill text-center px-3 px-sm-4 px-md-5 py-2 py-sm-3 fs-6 fs-sm-5 fs-md-4 my-4"
        style="background-color: rgba(20, 122, 227, 0.1); color: #0F5DAE;">
        Nuestros servicios
      </span>

      <h2 class="fw-bold mb-0" style="color: #052545; padding: 10px">Soluciones estratégicas para tu negocio</h2>
      <p class="fs-4 fs-md-4" style="color: rgb(15 93 174); padding-left: 20%; padding-right: 20%; padding-top: 10px; padding-bottom: 10px">
        Proporcionamos servicios especializados para cada área de tu negocio, enfocados en generar
        resultados medibles y sostenibles.
      </p>
    </div>

    <div class="row g-4">
      <!-- Tarjeta 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body d-flex flex-column">
            <div class="mb-3">
              <i class="bi bi-rocket-takeoff-fill fs-3" style= "color:rgb(61, 159, 255)"></i>
            </div>
            <h4 class="fw-bold">Estrategia de Mercado y Posicionamiento</h4>
            <p class="">Lanzamos, reposicionamos y activamos marcas con una hoja de ruta clara y realista.</p>
            <p class="">Diseñamos tu entrada (o reentrada) al mercado alineando visión de negocio, narrativa
              de marca, propuesta de valor y canales de venta.</p>
            <h6 class="mt-3">Incluye:</h6>
            <ul class="list-unstyled small">
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Auditoría estratégica 360° (modelo de negocio,
                competencia, canales, pricing, branding)</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Definición de propuesta de valor y diferenciación
                frente al mercado</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Estrategia de posicionamiento y storytelling
                comercial</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Plan de lanzamiento (90 a 180 días) totalmente
                personalizado</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Validación de mensajes, percepción de marca y
                testeo de mercado</li>
            </ul>
            <h6 class="mt-3">Para quién:</h6>
            <p class="">Empresas que buscan lanzar o relanzar un producto, abrir nuevos mercados,
              consolidar su marca o transformar un negocio tradicional en uno competitivo y rentable.</p>
            <div class="mt-auto d-flex justify-content-between">
              <a href="#" class="" style= "color:rgb(61, 159, 255)">Saber más →</a>
              <a href="#" class="text-danger">Ver detalle →</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tarjeta 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body d-flex flex-column">
            <div class="mb-3">
              <i class="bi bi-diagram-3-fill fs-3" style= "color:rgb(61, 159, 255)"></i>
            </div>
            <h4 class="fw-bold">Sistema Comercial y Canales de Venta</h4>
            <p class="">Convertimos tu oferta en ventas reales, con estructura, procesos y canales alineados.</p>
            <p class="">Aquí no improvisamos: analizamos tu modelo, optimizamos lo que tienes y diseñamos lo
              que falta.</p>
            <h6 class="mt-3">Incluye:</h6>
            <ul class="list-unstyled small">
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Estrategia de canales físicos y digitales:</li>
              <li class="ps-6 d-flex align-items-top mb-2">{!! $diamond !!} Retail tradicional · Pop-up Stores ·
                Franquicias · Distribuidores</li>
              <li class="ps-6 d-flex align-items-top mb-2">{!! $diamond !!} Ecommerce propio (PrestaShop, Shopify, Woo)
              </li>
              <li class="ps-6 d-flex align-items-top mb-2">{!! $diamond !!} Marketplaces (Amazon, PCComponentes, Carrefour, Zalando...)</li>
              <li class="ps-6 d-flex align-items-top mb-2">{!! $diamond !!} B2B/B2C/D2C · Plataformas internacionales
              </li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Diseño de procesos de captación, conversión y
                fidelización por canal</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Rediseño del sistema comercial (CRM, KPIs,
                workflows, discursos, propuestas)</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Acompañamiento en negociaciones con grandes
                cuentas y retailers</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Formación y coaching comercial a medida para
                equipos y directivos</li>
            </ul>
            <h6 class="mt-3">Para quién:</h6>
            <p class="">Empresas que quieren escalar ventas, abrir nuevos canales, internacionalizar su
              oferta o profesionalizar su equipo comercial.</p>
            <div class="mt-auto d-flex justify-content-between">
              <a href="#" class="" style="color:rgb(61, 159, 255)">Saber más →</a>
              <a href="#" class="text-danger">Ver detalle →</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tarjeta 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body d-flex flex-column">
            <div class="mb-3">
              <i class="bi bi-bullseye fs-3 text-danger"></i>
            </div>
            <h4 class="fw-bold">Atracción, Conversión y Crecimiento</h4>
            <p class="">Diseñamos sistemas de captación que no solo atraen, sino que convierten.</p>
            <p class="">Combinamos creatividad, segmentación y automatización para transformar tráfico en
              clientes. Medimos, ajustamos y escalamos.</p>
            <h6 class="mt-3">Incluye:</h6>
            <ul class="list-unstyled small">
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Diseño de embudos de conversión completos
                (Customer Journey)</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Automatización de procesos: CRM, email marketing,
                remarketing, retargeting</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Segmentación avanzada y copywriting comercial
                orientado a conversión</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Integración con herramientas como HubSpot,
                ActiveCampaign, Klaviyo, etc.</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} Campañas en Google Ads, Meta, TikTok, LinkedIn
                con estrategia clara de CPA</li>
              <li class="d-flex align-items-top mb-2">{!! $iconCheck !!} A/B Testing, optimización constante y análisis de
                rendimiento real</li>
            </ul>
            <h6 class="mt-3">Para quién:</h6>
            <p class="">Marcas que necesitan captar clientes de forma rentable, escalar sus campañas publicitarias o
              mejorar la conversión de
              sus canales digitales.</p>
            <div class="mt-auto d-flex justify-content-between">
              <a href="#" class="" style="color:rgb(61, 159, 255)">Saber más →</a>
              <a href="#" class="text-danger">Ver detalle →</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

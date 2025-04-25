<style>
  .mi-boton1 {
    background-color: #B9FF38;
    color: black;
    font-weight: bold;
  }

  .mi-boton1:hover {
    background-color: #7daa17 !important;
    color: black !important;
  }

  .mi-boton2 {
    color: white;
    border: 1px solid white;
    font-weight: bold;
  }

  .mi-boton2:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
    border-color: white;
  }

  .arrow-bounce {
    animation: bounce 1.5s infinite;
  }

  @keyframes bounce {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(10px);
    }
  }

  .text-gradient {
    background: linear-gradient(to right, #B9FF38, #9757EC);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    color: transparent;
    font-weight: bold;
  }

  .titulo-eventos {
    font-size: clamp(2.2rem, 6vw, 4.6rem);
    line-height: 1.2;
    margin-top: 9rem;
  }
</style>

<section class="py-5" style="background: linear-gradient(to bottom, #000000 30%, #160b24 100%);">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-10">
        <h2 class="fw-bold text-white titulo-eventos">
          Eventos <span style="color: #B9FF38;">top</span>, ácidos y <br>
          bizarros.<br>
          <span class="text-gradient">Como tú.</span>
        </h2>
      </div>
    </div>

    <div class="row justify-content-center text-center mb-4">
      <div class="col-lg-8">
        <p class="fs-5 text-light">
          En Enlimonado no organizamos eventos: los <span style="color: #B9FF38;">reventamos</span> (creativamente).
          Producción integral, ideas que no se repiten y resultados que no se olvidan.
        </p>
      </div>
    </div>

    <div class="row justify-content-center text-center mb-5">
      <div class="col-auto d-flex flex-column flex-md-row gap-3">
        <button type="button" class="btn btn-lg mi-boton1">
          Exprímele jugo a tu idea <i class="ti ti-arrow-narrow-right ms-2"></i>
        </button>

        <button type="button" class="btn btn-lg mi-boton2">
          Ver Proyectos
        </button>
      </div>
    </div>

    <div class="row justify-content-center text-center">
      <div class="col-auto">
        <i class="ti ti-chevrons-down arrow-bounce" style="font-size: 40px; color: #fff;"></i>
      </div>
    </div>
  </div>
</section>

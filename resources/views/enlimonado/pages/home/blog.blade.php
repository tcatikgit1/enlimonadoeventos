@php
$user = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user h-4 w-4 mr-1"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>';


$calendar = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-4 w-4 mr-1"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="2" rx="2"></rect><path d="M3 10h18"></path></svg>';

@endphp

<section class="py-5 bg-white my-0">
  <div class="container">
    <div class="text-center mb-9 my-4">
      <span class="badge rounded-pill text-center px-3 px-sm-4 px-md-5 py-2 py-sm-3 fs-6 fs-sm-5 fs-md-4 my-4"
        style="background-color: rgba(20, 122, 227, 0.1); color: #0F5DAE;">
        Blog
      </span>

      <h2 class="fw-bold mb-0" style="color: #052545; padding: 10px">Hablemos de tu proyecto</h2>
      <p class="fs-5 fs-md-4" style="color: rgb(15 93 174); padding-left: 30%; padding-right: 30%; padding-top: 10px">
        Estamos listos para ayudarte a alcanzar tus objetivos. Cuéntanos sobre tu negocio
        y descubre cómo podemos colaborar.
      </p>
    </div>

    <div class="row mb-12 g-3 justify-content-center">
      <div class="col-md-6 col-xl-3">
        <div class="card" style="border-radius: 15px; border: 1px solid #ddd;">
          <img class="card-img-top" src="{{asset('assets/img/enlimonado/blog/blog1.jpg')}}" alt="Card image cap" style="width: 100%; height: 200px; object-fit: cover; border-radius: 15px 15px 0 0;" />
          <div class="card-body">
            <h5 class="card-title fw-bold">Cómo diseñar una estrategia de lanzamiento efectiva en 2023</h5>
            <p class="card-text">
              Descubre las claves para crear una estrategia de lanzamiento que maximice el impacto de tu producto o servicio en el...
            </p>
            <p class="card-text">
              <small class="text-muted">{!! $user !!} Daniel Trefny • {!! $calendar !!} 10 Abril 2023</small>
            </p>
            <div class="mt-auto d-flex justify-content-between">
              <a href="#" class="" style="color:rgb(61, 159, 255)">Leer más →</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card" style="border-radius: 15px; border: 1px solid #ddd;">
          <img class="card-img-top" src="{{asset('assets/img/enlimonado/blog/blog2.jpg')}}" alt="Card image cap" style="width: 100%; height: 200px; object-fit: cover; border-radius: 15px 15px 0 0;" />
          <div class="card-body">
            <h5 class="card-title fw-bold">Los 7 errores más comunes en embudos de venta y cómo...</h5>
            <p class="card-text">
              Analizamos los fallos que comprometen la efectividad de los embudos de conversión y compartimos soluciones prácticas para...
            </p>
            <p class="card-text">
              <small class="text-muted">{!! $user !!} Laura Castañeda • {!! $calendar !!} 24 Marzo 2023</small>
            </p>
            <div class="mt-auto d-flex justify-content-between">
              <a href="#" class="" style="color:rgb(61, 159, 255)">Leer más →</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3">
        <div class="card" style="border-radius: 15px; border: 1px solid #ddd;">
          <img class="card-img-top" src="{{asset('assets/img/enlimonado/blog/blog3.jpg')}}" alt="Card image cap" style="width: 100%; height: 200px; object-fit: cover; border-radius: 15px 15px 0 0;" />
          <div class="card-body">
            <h5 class="card-title fw-bold">Posicionamiento SEO: Estrategias que funcionan en...</h5>
            <p class="card-text">
              Guía completa sobre técnicas avanzadas de SEO para destacar en sectores con alta competencia y generar tráfico cualificado.
            </p>
            <p class="card-text">
              <small class="text-muted">{!! $user !!} Laura Castañeda • {!! $calendar !!} 24 Marzo 2023</small>
            </p>
            <div class="mt-auto d-flex justify-content-between">
              <a href="#" class="" style="color:rgb(61, 159, 255)">Leer más →</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

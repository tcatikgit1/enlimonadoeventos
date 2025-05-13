@extends('layouts/principalLayout')

@section('title', 'Exitos - Apps')

@section('vendor-style')
    @vite([
    'resources/scss/styles/success/success.scss',
    'resources/scss/styles/components/btncontact.scss'
  ])
@endsection

@section('content')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Enlimonado Eventos",
  "url": "https://www.enlimonadoeventos.com"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Éxitos",
  "url": "https://www.enlimonadoeventos.com/exitos"
}
</script>


<script type="application/ld+json">
  {
  "@context": "https://schema.org",
  "@type": "Review",
  "author": {
    "@type": "Person",
    "name": "María López"
  },
  "datePublished": "2024-09-15",
  "reviewBody": "Nuestra convención pasó de aburrida a icónica en 24h. El equipo de Enlimonado creó una experiencia que nuestros empleados siguen comentando.",
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5",
    "bestRating": "5"
  },
  "itemReviewed": {
    "@type": "Service",
    "name": "Organización de eventos corporativos"
  }
},
{
  "@context": "https://schema.org",
  "@type": "Review",
  "author": {
    "@type": "Person",
    "name": "Carlos Rodríguez"
  },
  "datePublished": "2024-08-07",
  "reviewBody": "Nunca imaginé que un stand en un centro comercial generara tanto hype. La activación que diseñaron triplicó nuestras expectativas de visibilidad y conversión.",
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5",
    "bestRating": "5"
  },
  "itemReviewed": {
    "@type": "Service",
    "name": "Organización de eventos corporativos"
  }
},
{
  "@context": "https://schema.org",
  "@type": "Review",
  "author": {
    "@type": "Person",
    "name": "Laura Sánchez"
  },
  "datePublished": "2024-08-13",
  "reviewBody": "Su visión para nuestro lanzamiento fue brillante. Mezclaron tecnología, creatividad y un toque bizarro que generó exactamente el impacto que buscábamos.",
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5",
    "bestRating": "5"
  },
  "itemReviewed": {
    "@type": "Service",
    "name": "Organización de eventos corporativos"
  }
},
{
  "@context": "https://schema.org",
  "@type": "Review",
  "author": {
    "@type": "Person",
    "name": "Miguel Torres"
  },
  "datePublished": "2024-09-5",
  "reviewBody": "El team building que organizaron cambió completamente la dinámica de nuestro equipo. Combinar diversión con objetivos estratégicos fue un acierto total.",
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5",
    "bestRating": "5"
  },
  "itemReviewed": {
    "@type": "Service",
    "name": "Organización de eventos corporativos"
  }
},
{
  "@context": "https://schema.org",
  "@type": "Review",
  "author": {
    "@type": "Person",
    "name": "Elena Martín"
  },
  "datePublished": "2024-09-20",
  "reviewBody": "El festival que organizaron fue simplemente increíble. La combinación de música, arte y tecnología creó una atmósfera única que nos posicionó como referentes culturales.",
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5",
    "bestRating": "5"
  },
  "itemReviewed": {
    "@type": "Service",
    "name": "Organización de eventos corporativos"
  }
},
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "Caso de éxito: Transformación de convención corporativa",
  "description": "Convertimos una convención anual estándar en una experiencia inmersiva que aumentó el engagement y la retención de mensajes clave.",
  "url": "https://www.enlimonadoeventos.com/exitos/",
  "author": {
    "@type": "Organization",
    "name": "enlimonadoEventos"
  },
  "datePublished": "2024-11-10"
},
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "Caso de éxito: Activación en centro comercial",
  "description": "Diseñamos una experiencia interactiva que transformó un espacio comercial en una instalación artística participativa.",
  "url": "https://www.enlimonadoeventos.com/exitos/",
  "author": {
    "@type": "Organization",
    "name": "enlimonadoEventos"
  },
  "datePublished": "2024-08-23"
},
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "Caso de éxito: Festival musical inmersivo",
  "description": "Creamos un concepto de festival que fusionaba música electrónica con experiencias sensoriales y arte digital interactivo.",
  "url": "https://www.enlimonadoeventos.com/exitos/",
  "author": {
    "@type": "Organization",
    "name": "enlimonadoEventos"
  },
  "datePublished": "2024-12-04"
}
</script>

    <section class="py-5" style="background-color: #000000;">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <h1 class="visuallyhidden">Exitos</h1>
                    <h2 class="fw-bold display-3 mb-4 text-white">Nuestros <span class="fw-bold display-3 mb-4"
                            style="color: #B9FF38;">Éxitos</span></h2>
                    <p class="fs-4" style="color: rgba(255, 255, 255, 0.8);">Resultados que hablan por sí mismos. Proyectos
                        que superaron expectativas y clientes que quedaron fascinados con el "efecto Enlimonado".</p>
                </div>
            </div>
        </div>
    </section>

    @include('web.pages.success.exitosDestacados')
    @include('web.pages.success.clientesDicen')
    @include('web.pages.success.proximoExito')

@endsection

@extends('layouts/principalLayout')

@section('title', 'Contacto - Enlimonado Eventos')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/scss/styles/contact/contact.scss',
])
@endsection


@section('page-script')
@vite([
  'resources/assets/js/form-validation.js',
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
  "name": "Contacto",
  "url": "https://www.enlimonadoeventos.com/contacto"
}
</script>

 <section class="py-7 py-lg-9" style="background-color: #000000;">
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-xl-7 col-lg-8 col-md-10">
        <h1 class="fw-bold display-3 mb-4" style="color: #B9FF38;">Contáctanos</h1>
        <p class="fs-4 text-white-50">¿Tienes una marca, una idea o un marrón? Llámanos antes de que se agrie.</p>
      </div>
    </div>
  </div>
</section>

    @include('web.pages.contact.form')
    @include('web.pages.contact.map')

@endsection

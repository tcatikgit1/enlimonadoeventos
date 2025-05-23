<!DOCTYPE html>
@php
$menuFixed = ($configData['layout'] === 'vertical') ? ($menuFixed ?? '') : (($configData['layout'] === 'front') ? '' : $configData['headerType']);
$navbarType = ($configData['layout'] === 'vertical') ? ($configData['navbarType'] ?? '') : (($configData['layout'] === 'front') ? 'layout-navbar-fixed' : '');
$isFront = ($isFront ?? '') == true ? 'Front' : '';
$contentLayout = (isset($container) ? (($container === 'container-xxl') ? "layout-compact" : "layout-wide") : "");
@endphp



<html lang="{{ session()->get('locale') ?? app()->getLocale() }}"
  class="{{ $configData['style'] }}-style {{($contentLayout ?? '')}} {{ ($navbarType ?? '') }} {{ ($menuFixed ?? '') }} {{ $menuCollapsed ?? '' }} {{ $menuFlipped ?? '' }} {{ $menuOffcanvas ?? '' }} {{ $footerFixed ?? '' }} {{ $customizerHidden ?? '' }}"
  dir="{{ $configData['textDirection'] }}" data-theme="{{ $configData['theme'] }}"
  data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel"
  data-template="{{ $configData['layout'] . '-menu-' . $configData['themeOpt'] . '-' . $configData['styleOpt'] }}"
  data-style="{{$configData['styleOptVal']}}">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Enlimonado Eventos",
  "url": "https://www.enlimonadoeventos.com",
  "logo": "https://www.enlimonadoeventos.com/Log3.png",
  "sameAs": [
    "https://www.instagram.com/enlimonadoproducciones/",
    "https://www.linkedin.com/company/enlimonadoeventos",
    "https://www.tiktok.com/@enlimonadoproducciones?lang=es"
  ]
}
</script>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Enlimonado Eventos - Organización de eventos únicos y a medida en Canarias">
  <meta name="description"
  content="Enlimonado Eventos organiza eventos únicos y a medida en Canarias: corporativos, networking, lanzamientos, ferias, ruedas de prensa, activaciones de marca y teambuilding. Creamos experiencias originales, impactantes y alineadas con tu estrategia, sean bizarras, divertidas o serias.">
  <meta name="keywords"
  content="Organización de eventos Canarias, organización de eventos España, eventos corporativos, agencia de eventos, networking empresarial, lanzamientos de productos, presentaciones de marca, ruedas de prensa, activaciones de marca, campañas experienciales, ferias y congresos, eventos sectoriales, eventos de teambuilding, eventos creativos, eventos empresariales, eventos personalizados, experiencias de marca, eventos impactantes, eventos originales, enlimonado eventos  ">


  <!-- Script de cookies -->
  <script src="https://consent.cookiefirst.com/sites/enlimonadoeventos.com-6efaf787-1307-48bb-b07a-32f92105178a/consent.js"></script>

  {{-- <!-- Script para las cookies -->
    <script src="https://consent.cookiefirst.com/sites/autech.es-79f67677-51c3-4c80-ba54-80120c9956dc/consent.js"></script> --}}

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.enlimonadoeventos.com/" />
  <meta property="og:title" content="Enlimonado Eventos" />
  <meta property="og:description" content="Enlimonado Eventos organiza eventos únicos y a medida en Canarias: corporativos, networking, lanzamientos, ferias, ruedas de prensa, activaciones de marca y teambuilding. Creamos experiencias originales, impactantes y alineadas con tu estrategia, sean bizarras, divertidas o serias." />
  <meta property="og:image" content="https://www.enlimonadoeventos.com/public/assets/img/enlimonado/logo/previewimage.webp" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.enlimonadoeventos.com/" />
  <meta property="twitter:title" content="Enlimonado Eventos" />
  <meta property="twitter:description" content="Enlimonado Eventos organiza eventos únicos y a medida en Canarias: corporativos, networking, lanzamientos, ferias, ruedas de prensa, activaciones de marca y teambuilding. Creamos experiencias originales, impactantes y alineadas con tu estrategia, sean bizarras, divertidas o serias." />
  <meta property="twitter:image" content="https://www.enlimonadoeventos.com/public/assets/img/enlimonado/logo/previewimage.webp" />

  <!-- Estilo de la barra superior para Android Chrome, Firefox OS, Opera -->
  <meta name="theme-color" content="#000000">

  <!-- Color de la barra de navegación en Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#000000">

  <!-- Para Safari en iOS (modo web-app full screen) -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <!-- También para navegadores modernos que usen Web App Manifest -->
  <meta name="mobile-web-app-capable" content="yes">


  <title>@yield('title')

  </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Canonical SEO -->
  <link rel="canonical" href="{{ url()->current() }}" />
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico')}}?v={{config('app.version')}}" />
  <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}?v={{config('app.version')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}?v={{config('app.version')}}">

  <!-- DataTables Bootstrap 5 CSS -->
{{--  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">--}}

  <!-- Include Styles -->
  <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
  @include('layouts/sections/styles' . $isFront)

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- Google Consent Mode + gtag.js, pero solo cargado si el usuario acepta -->
  <!-- Google Analytics con CookieFirst y Consent Mode V2 -->
  <script type="text/plain" data-cookieconsent="analytics" data-cfasync="false">
    (function(w,d,s,l,i){
      w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
      j.async=true;j.src='https://www.googletagmanager.com/gtag/js?id=G-57TG40QS1K';
      f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','G-57TG40QS1K');
  </script>

  <script type="text/plain" data-cookieconsent="analytics" data-cfasync="false">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-57TG40QS1K');
  </script>


  <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
  @include('layouts/sections/scriptsIncludesFront' . $isFront)


</head>

<body>

  <!-- Layout Content -->
  @yield('layoutContent')
  <!--/ Layout Content -->



  <!-- Include Scripts -->
  <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  @include('layouts/sections/scripts' . $isFront)

</body>

</html>

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

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Enlimonado Eventos - Organización de eventos únicos y a medida en Canarias">
  <meta name="description"
  content="Enlimonado Eventos organiza eventos únicos y a medida en Canarias: corporativos, networking, lanzamientos, ferias, ruedas de prensa, activaciones de marca y teambuilding. Creamos experiencias originales, impactantes y alineadas con tu estrategia, sean bizarras, divertidas o serias.">
  <meta name="keywords"
  content="Organización de eventos Canarias, organización de eventos España, eventos corporativos, agencia de eventos, networking empresarial, lanzamientos de productos, presentaciones de marca, ruedas de prensa, activaciones de marca, campañas experienciales, ferias y congresos, eventos sectoriales, eventos de teambuilding, eventos creativos, eventos empresariales, eventos personalizados, experiencias de marca, eventos impactantes, eventos originales, enlimonado eventos  ">



  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.enlimonadoeventos.com/" />
  <meta property="og:title" content="Enlimonado Eventos" />
  <meta property="og:description" content="Enlimonado Eventos organiza eventos únicos y a medida en Canarias: corporativos, networking, lanzamientos, ferias, ruedas de prensa, activaciones de marca y teambuilding. Creamos experiencias originales, impactantes y alineadas con tu estrategia, sean bizarras, divertidas o serias." />
  <meta property="og:image" content="https://www.enlimonadoeventos.com/public/assets/img/enlimonado/logo/Preview.webp" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.enlimonadoeventos.com/" />
  <meta property="twitter:title" content="Enlimonado Eventos" />
  <meta property="twitter:description" content="Enlimonado Eventos organiza eventos únicos y a medida en Canarias: corporativos, networking, lanzamientos, ferias, ruedas de prensa, activaciones de marca y teambuilding. Creamos experiencias originales, impactantes y alineadas con tu estrategia, sean bizarras, divertidas o serias." />
  <meta property="twitter:image" content="https://www.enlimonadoeventos.com/public/assets/img/enlimonado/logo/Preview.webp" />


  <!-- Barra superior en dispositivos Android (Chrome, Firefox OS, etc.) -->
  <meta name="theme-color" content="#000000">

  <!-- Color de la barra de navegación en Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#000000">

  <!-- Estilo de la barra de estado en iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <title>@yield('title')

  </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Canonical SEO -->
  <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
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

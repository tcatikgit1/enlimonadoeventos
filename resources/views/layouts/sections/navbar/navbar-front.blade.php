@php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
$containerNav = ($configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
$navbarDetached = ($navbarDetached ?? '');
@endphp

<style>
    * {
      font-family: 'Poppins', sans-serif !important;
    }

    .custom-blur-nav {
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      transition: background 0.3s ease;
      z-index: 1030;
    }
    body {
      background-color: #000000; /* Asegura que el fondo no sea blanco */
    }

    .btn-outline-lime {
      border: 1px solid #B9FF38;
      color: #B9FF38;
      background-color: #000;
    }

    .btn-outline-lime:hover {
      background-color: rgba(160, 231, 46, 0.397); /* verde lima con transparencia */
      color: #ffffff;
    }

    /* Quitar el borde al botón del menú */
.navbar-toggler {
    border: none;
}

/* Quitar el borde alrededor del icono */
.navbar-toggler-icon {
    border: none;
}
</style>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent shadow-sm sticky-top custom-blur-nav">
  <div class="container">
    <a class="navbar-brand fw-bold fs-4" href="/">
      <img src="{{ asset('assets/img/enlimonado/logo/Logopeque.webp') }}" alt="Logo Enlimonado" style="height: auto; width: 180px;">
    </a>

    <!-- Botón de menú personalizado con un icono Tabler (ej: "menu-2") -->
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-label="Abrir menú de navegación" style="border: none; background: none;">
  <i class="ti ti-menu-deep" style="font-size: 24px; color: white;"></i>
</button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
      <ul class="navbar-nav align-items-center gap-7">
        <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('proyectos') }}">Proyectos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('exitos') }}">Éxitos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('proximos') }}">Próximos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">Contacto</a></li>
        <li class="nav-item ms-lg-3">
          <a href="//wa.me/{{ config('app.tel_whatsapp') }}" class="btn btn-outline-lime bg-transparent px-4 py-2 rounded"><i class="ti ti-brand-whatsapp" style="margin-right: 10px;"></i>Contáctanos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

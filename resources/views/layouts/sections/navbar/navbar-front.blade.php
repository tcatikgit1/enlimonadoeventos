

@php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
$containerNav = ($configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
$navbarDetached = ($navbarDetached ?? '');
@endphp

<nav class="navbar navbar-example navbar-expand-lg bg-white">
  <div class="{{ $containerNav }}">
    <a class="navbar-brand fs-4 fw-bold" href="/">
      <span style="color: rgb(61, 159, 255); font-weight: bold;">Enlimonado</span>
      <span style="color: rgb(15, 93, 174); font-weight: bold;">Estrategias</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-3">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-ex-6">
      <div class="navbar-nav ms-auto">
        <a class="nav-item nav-link active me-3" href="/">Inicio</a>
        <a class="nav-item nav-link active me-3" href="/services">Servicios</a>
        <a class="nav-item nav-link active me-3" href="/about-us">Nosotros</a>
        <a class="nav-item nav-link active me-3" href="/contact">Contacto</a>
        <a class="nav-item nav-link active me-3" href="/blog">Blog</a>

      </div>

      <form onsubmit="return false">
        <button class="btn" type="button" style="background-color: rgb(20, 122, 227); color: white;">
          Contactar
        </button>
      </form>
    </div>
  </div>
</nav>

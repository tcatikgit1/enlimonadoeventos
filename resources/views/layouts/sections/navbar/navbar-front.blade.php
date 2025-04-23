

@php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
$containerNav = ($configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
$navbarDetached = ($navbarDetached ?? '');
@endphp

<style>
.custom-blur-nav {
  background: rgba(0, 0, 0, 0.7);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  transition: background 0.3s ease;
  z-index: 1030;
}

.btn-outline-lime {
  border: 1px solid #B9FF38;
  color: #B9FF38;
  background-color: #000;
}

.btn-outline-lime:hover {
  background-color: rgba(163, 230, 53, 0.15); /* verde lima con transparencia */
  color: #ffffff;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent shadow-sm sticky-top custom-blur-nav">
  <div class="container">
    <a class="navbar-brand fw-bold fs-4" href="/">
      <span style="color: #B9FF38;">EN</span><span style="color: #fff;">LIMONADO</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="/about-us">Nosotros</a></li>
        <li class="nav-item"><a class="nav-link" href="/projects">Proyectos</a></li>
        <li class="nav-item"><a class="nav-link" href="/success">Éxitos</a></li>
        <li class="nav-item"><a class="nav-link" href="/upcoming">Próximos</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contacto</a></li>
        <li class="nav-item ms-lg-3">
          <a href="/contact" class="btn btn-outline-lime px-4 py-2 rounded">Contáctanos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


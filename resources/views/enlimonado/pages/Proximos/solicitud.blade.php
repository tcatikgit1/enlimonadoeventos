<div class="modal fade" id="modalSolicitud" tabindex="-1" aria-labelledby="modalSolicitudLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;"> <!-- Reducir ancho -->
    <div class="modal-content bg-dark text-white border-0 rounded-4">
      <div class="modal-header border-0">
        <h5 class="modal-title text-white" id="modalSolicitudLabel"> <!-- Título en blanco -->
          Inscripción: <span id="modalTituloEvento">Evento</span><br>
          <small class="text-muted fs-6" id="modalFechaEvento">Fecha y hora</small>
        </h5>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="nombre" class="form-label text-white">Nombre completo</label> <!-- Texto blanco -->
            <input type="text" class="form-control" id="nombre" required placeholder="Escribe tu nombre completo" value=""> <!-- Campo vacío -->
          </div>
          <div class="mb-3">
            <label for="email" class="form-label text-white">Correo electrónico</label> <!-- Texto blanco -->
            <input type="email" class="form-control" id="email" required placeholder="Escribe tu correo electrónico" value=""> <!-- Campo vacío -->
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label text-white">Teléfono</label> <!-- Texto blanco -->
            <input type="text" class="form-control" id="telefono" required placeholder="Escribe tu teléfono" value=""> <!-- Campo vacío -->
          </div>
          <div class="mb-3">
            <label for="mensaje" class="form-label text-white">Mensaje (opcional)</label> <!-- Texto blanco -->
            <textarea class="form-control" id="mensaje" rows="3" placeholder="Escribe un mensaje (opcional)"></textarea> <!-- Campo vacío -->
          </div>
          <div class="d-flex justify-content-end">
            <button type="button" class="btn-custom-cancelar me-2" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn-custom-enviar">Enviar inscripción</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  const modal = document.getElementById('modalSolicitud');
  modal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const titulo = button.getAttribute('data-evento');
    const fecha = button.getAttribute('data-fecha');

    document.getElementById('modalTituloEvento').textContent = titulo;
    document.getElementById('modalFechaEvento').textContent = fecha;
  });
</script>

<style>
  /* Estilo para el modal */
  .modal-content {
    background-color: #000 !important; /* Fondo negro */
    color: white !important; /* Texto blanco */
    border-radius: 10px; /* Bordes redondeados para el modal */
  }

  /* Eliminar la "X" en la esquina superior derecha */
  .modal-header .btn-close {
    display: none;
  }

  /* Estilos para el botón "Cancelar" personalizado */
  .btn-custom-cancelar {
    background-color: transparent;
    color: white;
    border: 2px solid white;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 8px; /* Bordes redondeados */
    transition: background-color 0.3s, border-color 0.3s;
  }

  /* Estilos para el botón "Cancelar" en hover */
  .btn-custom-cancelar:hover {
    background-color: red;
    border-color: red;
  }

  /* Estilos para el botón "Enviar inscripción" personalizado */
  .btn-custom-enviar {
    background-color: limegreen;
    color: black;
    border: 2px solid limegreen;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 8px; /* Bordes redondeados */
    transition: background-color 0.3s, border-color 0.3s;
  }

  /* Estilos para el botón "Enviar inscripción" en hover */
  .btn-custom-enviar:hover {
    background-color: lime;
    border-color: lime;
  }

  /* Estilo para los campos de texto */
  .form-control {
    background-color: #222; /* Fondo oscuro para inputs */
    color: white !important; /* Texto blanco */
    border: 1px solid #444; /* Bordes ligeramente más claros */
  }

  .form-control::placeholder {
    color: #888; /* Placeholder en gris claro */
  }

  .form-control:focus {
    border-color: #fff !important; /* Bordes blancos cuando el input está enfocado */
    box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25); /* Sombra blanca en el enfoque */
  }

  .form-control:disabled {
    background-color: #333; /* Fondo gris más oscuro para inputs deshabilitados */
    border-color: #444; /* Bordes más claros cuando el input está deshabilitado */
  }
</style>

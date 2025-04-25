<style>
    /* Estilo para el modal */
    .modal-content {
        background-color: #000 !important;
        color: white !important;
        border-radius: 10px;
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
        border-radius: 8px;
        transition: background-color 0.3s, border-color 0.3s;
    }

    /* Estilos para el botón "Cancelar" en hover */
    .btn-custom-cancelar:hover {
        background-color: red;
        border-color: red;
    }

    /* Estilos para el botón "Enviar inscripción" personalizado */
    .btn-custom-enviar {
        background-color: #B9FF38;
        color: black;
        border: 2px solid #B9FF38;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 8px;
        transition: background-color 0.3s, border-color 0.3s;
    }

    /* Estilos para el botón "Enviar inscripción" en hover */
    .btn-custom-enviar:hover {
        background-color: #9bd42f;
        border-color: #9bd42f;
    }

    /* Estilo para los campos de texto */
    .form-control {
        background-color: #222;
        color: white !important;
        border: 1px solid #444;
    }

    .form-control::placeholder {
        color: #888;
    }

    .form-control:focus {
        border-color: #fff !important;
        box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
    }

    .form-control:disabled {
        background-color: #333;
        border-color: #444;
    }
</style>


<div class="modal fade" id="modalSolicitud" tabindex="-1" aria-labelledby="modalSolicitudLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content bg-dark text-white border-0 rounded-4">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white" id="modalSolicitudLabel">
                    Inscripción: <span id="modalTituloEvento">Evento</span><br>
                    <small class="text-muted fs-6" id="modalFechaEvento">Fecha y hora</small>
                </h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('inscript.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-white">Nombre completo</label>
                        <input type="text" class="form-control" id="name" name="name" required
                            placeholder="Escribe tu nombre completo" value="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required
                            placeholder="Escribe tu correo electrónico" value="">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label text-white">Teléfono</label>
                        <input type="text" class="form-control" id="phone" name="phone" required
                            placeholder="Escribe tu teléfono" value="">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-white">Mensaje (opcional)</label>
                        <textarea class="form-control" id="message" rows="3" name="message" placeholder="Escribe un mensaje (opcional)"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn-custom-cancelar me-2"
                            data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn-custom-enviar">Enviar inscripción</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('modalSolicitud');
    modal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const titulo = button.getAttribute('data-evento');
        const fecha = button.getAttribute('data-fecha');

        document.getElementById('modalTituloEvento').textContent = titulo;
        document.getElementById('modalFechaEvento').textContent = fecha;
    });
</script>

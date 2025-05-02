<div class="modal fade" id="modalSolicitud" tabindex="-1" aria-labelledby="modalSolicitudLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.856); backdrop-filter: blur(5px);">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content bg-dark text-white border-0 rounded-4">
            <div class="modal-header border-0">
                <h3 class="modal-title text-white" id="modalSolicitudLabel">
                    Inscripción: <span id="modalTituloEvento">Evento</span><br>
                    <small class="text-muted fs-6" id="modalFechaEvento">Fecha y hora</small>
                </h3>
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

<section class="contact-section py-10" style="background: linear-gradient(to bottom, #000000 30%, #160b24 100%); ">
    <div class="container">
        <div class="row align-items-stretch" style="margin-bottom: 3rem;">
            <!-- Formulario -->
            <div class="col-lg-7 d-flex flex-column justify-content-center">
                <h2 class="fw-bold mb-3 text-white">Háblanos de tu proyecto</h2>
                <p class="mb-4 text-white-50">Cuéntanos lo que tienes en mente. Desde una idea inicial hasta un concepto
                    desarrollado, estamos aquí para transformar tu visión en una experiencia extraordinaria.</p>

                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="row g-8">
                        <div class="col-md-6">
                            <label class="form-label text-white">Nombre completo *</label>
                            <input type="text" name="name" class="form-control bg-dark text-white border-0"
                                placeholder="Tu nombre" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-white">Email *</label>
                            <input type="email" name="email" class="form-control bg-dark text-white border-0"
                                placeholder="tu@email.com" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-white">Empresa</label>
                            <input type="text" name="company" class="form-control bg-dark text-white border-0"
                                placeholder="Nombre de tu empresa">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-white">Teléfono</label>
                            <input type="text" name="phone" class="form-control bg-dark text-white border-0"
                                placeholder="+34 XXX XXX XXX">
                        </div>
                        <div class="col-12">
                            <label class="form-label text-white">Asunto *</label>
                            <input type="text" name="subject" class="form-control bg-dark text-white border-0"
                                placeholder="¿En qué podemos ayudarte?" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-white">Mensaje *</label>
                            <textarea name="message" rows="4" class="form-control bg-dark text-white border-0"
                                placeholder="Cuéntanos los detalles de tu proyecto..." required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn text-black mt-2 w-100" style="background-color: #B9FF38;">
                                Enviar mensaje <i class="ti ti-send ms-1"></i>
                            </button>
                        </div>
                        <div id="form-message" class="mt-3">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @elseif(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>

                    </div>
                </form>
            </div>

            <!-- Info de contacto -->
            <div class="col-lg-5 d-flex flex-column mt-5 mt-lg-0">
                <h2 class="fw-bold text-white mb-5">Información de contacto</h2>

                <div class="d-flex align-items-start mb-11">
                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                        style="width: 40px; height: 40px; background-color: #B9FF38;">
                        <i class="ti ti-mail text-black"></i>
                    </div>
                    <div>
                        <strong class="text-white">Email</strong><br>
                        <span class="text-white-50"><a href="mailto:{{ env('APP_MAIL') }}" class="footer-link text-muted">{{ env('APP_MAIL') }}</a></span>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-11">
                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                        style="width: 40px; height: 40px; background-color: #B9FF38;">
                        <i class="ti ti-phone text-black"></i>
                    </div>
                    <div>
                        <strong class="text-white">Teléfono</strong><br>
                        <span class="text-white-50"><a href="tel:+34828701918" class="footer-link text-muted">+34 828 701 918</a></span>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-11">
                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                        style="width: 40px; height: 40px; background-color: #B9FF38;">
                        <i class="ti ti-map-pin text-black"></i>
                    </div>
                    <div>
                        <strong class="text-white">Ubicación</strong><br>
                        <span class="text-white-50">Las Palmas de Gran Canaria, España</span><br>
                    </div>
                </div>

                <div class="p-4 rounded mt-4" style="background-color: #1c1c1e;">
                    <h3 class="fw-bold fs-5 text-white mb-2">¿Prefieres hablar por teléfono?</h3>
                    <p class="text-white-50 mb-3">Programa una llamada con nuestro equipo para discutir tu proyecto en
                        detalle.
                    </p>
                    <a href="tel:+34828701918" class="btn"
                        style="background-color: #000000; color: #B9FF38; border: 1px solid #B9FF38;">
                        Llamar ahora <i class="ti ti-arrow-right ms-1" aria-label="Enlace para contactar por número de teléfono"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-grey me-2">
            <i class="ti chevron-compact-down" style="font-weight: bold;"></i>
        </a>

        <div>
            <h3 class="fs-2 text-black">Nuestro Catálogo de Servicios</h3>
            <p class="fs-4 fs-md-2">Cada servicio está diseñado para abordar desafíos específicos de negocio, siempre con un enfoque estratégico y orientado a resultados medibles</p>
        </div>

        <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-grey me-2">
            <i class="ti chevron-compact-down" style="font-weight: bold;"></i>
        </a>

        @foreach($servicios as $servicio)

            <div class="service-item mb-4">
                <div class="border-top-0 border-end-0 border-bottom-0 border-4 ps-5" style="border: 2px solid {{ $servicio->iconoColor }};">
                    <h4 class="fs-2 text-black">{{ $servicio->nombre }}</h4>
                    <p class="fs-4 fs-md-2">{{ $servicio->descripcion }}</p>
                </div>

                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-grey me-2">
                    <i class="ti chevron-compact-down" style="font-weight: bold;"></i>
                </a>

                <div class="row align-items-stretch">
                    <div class="col-md-5 mb-4">
                        <div class="p-5 rounded shadow-sm h-100" style="background: #F9FAFB">
                            <i class="{{ $servicio->icono }} fs-1" style="color: {{ $servicio->iconoColor }}"></i>
                            <h5 class="fw-bold mb-4 text-black fs-4 pt-5">¿Qué incluye?</h5>

                            <ul class="list-unstyled">
                                @foreach($servicio->caracteristicas as $caracteristica)
                                    <li class="mb-3 ps-2 fs-5"><i class="bi bi-check-circle text-primary me-2"></i>{{ $caracteristica->caracteristica }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-7 d-flex flex-column justify-content-between h-100 border rounded p-4">
                        <div>
                            <h5 class="fw-bold fs-4">¿Para quién es ideal?</h5>
                            <div class="row">
                                @foreach($servicio->paraQuien as $paraQuien)
                                    <div class="col-md-6 mb-3">
                                        <div class="border rounded p-3 h-100">
                                            <h5>{{ $paraQuien->titulo }}</h5>
                                            <p class="fs-5 text-black">{{ $paraQuien->descripcion }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <h5 class="fw-bold text-black fs-4 mt-4">{{ $servicio->ComoTrabajamos }}</h5>
                            <p class="fs-5">{{ $servicio->textCT }}</p>
                        </div>

                        <div class="text-center pt-3">
                            <a href="#" class="btn btn-primary">Solicitar Información</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-grey me-2">
                <i class="ti ti-chevron-compact-down" style="font-weight: bold;"></i>
            </a>
        @endforeach
    </div>
</section>

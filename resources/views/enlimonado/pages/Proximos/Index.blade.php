@extends('layouts/principalLayout')

@section('title', 'Proximos Eventos - Enlimonado Eventos')

@section('vendor-style')
    @vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss', 'resources/assets/vendor/libs/@form-validation/form-validation.scss', 'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss'])
@endsection

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js', 'resources/assets/vendor/libs/@form-validation/popular.js', 'resources/assets/vendor/libs/@form-validation/bootstrap5.js', 'resources/assets/vendor/libs/@form-validation/auto-focus.js'])
@endsection

@section('page-script')
    @vite([/* 'resources/assets/js/app-access-roles.js', 'resources/assets/js/modal-add-role.js' */])
@endsection

@section('content')
    <section class="py-7 py-lg-9" style="background-color: #000000;">
        <div class="container">
            <div class="row justify-content-start" style="margin-top: 9%; margin-bottom: 9%;">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <h2 class="fw-bold display-3 mb-4" style="color: #ffffff;">Próximos <span
                            class="lime-text">Proyectos</span></h2>
                    <p class="fs-4 text-white">Un vistazo a lo que estamos preparando. Eventos que están a punto de
                        transformar la experiencia de sus participantes.</p>
                </div>
            </div>
        </div>
    </section>

    @include('enlimonado.pages.proximos.eventos')

    @include('enlimonado.pages.proximos.contacto')

    <!-- Add Role Modal -->
    @include('_partials/_modals/modal-add-role')
    <!-- / Add Role Modal -->
@endsection

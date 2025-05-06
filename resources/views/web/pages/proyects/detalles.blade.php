@extends('layouts.principalLayout')

@section('title', 'Eventos - Detalles')



@section('content')
<section class="py-7 py-lg-9" style="background: #000000;">
    <div class="container py-5" style="background: #000000 ;">
        <div class="row mb-4">
            <div class="col-12 img-container">
                <img src="{{ asset('assets/img/enlimonado/eventos/' . $project['img']) }}" class="img-fluid"
                    alt="Imagen del proyecto">
            </div>
        </div>

        <div class="row text-white">
            <div class="col-md-12 mb-3">
                <span class="badge" style="background-color: #B9FF38; color: black;">{{ $project['tag'] }}</span>
            </div>
            <div class="col-md-12">
                <h2 class="fw-bold" style="color: white">{{ $project['title'] }}</h2>
                <p class="mb-3">Por <strong>{{ $project['author'] }}</strong></p>
            </div>

            <div class="col-md-12">
                <h4 class="lime-heading">Objetivo</h4>
                <p class="white-text">{{ $project['objetivo'] }}</p>

                <h4 class="lime-heading">Qué se hizo</h4>
                <p class="white-text">{{ $project['que_se_hizo'] }}</p>

                <h4 class="lime-heading">Twist Enlimonado aplicado</h4>
                <p class="white-text">{{ $project['twist'] }}</p>
            </div>
        </div>
    </div>
</section>

    @include('web.pages.proyects.contacto2')
    <!-- Add Role Modal -->
    @include('_partials/_modals/modal-add-role')
    <!-- / Add Role Modal -->
@endsection

<style>
    .btn-lime {
        background-color: #B9FF38;
        color: black;
    }

    .btn-lime:hover {
        background-color: #7daa17 !important;
        color: black !important;
    }

    .btn-lime-contact {
        background-color: #B9FF38;
        color: black;
        font-weight: bold;
    }

    .btn-lime-contact:hover {
        background-color: #7daa17 !important;
        color: black !important;
    }

    .btn-lime-proyects {
        color: white;
        border: 1px solid white;
        font-weight: bold;
    }

    .btn-lime-proyects:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        border-color: white;
    }

    .arrow-bounce {
        animation: bounce 1.5s infinite;
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(10px);
        }
    }

    .text-gradient {
        background: linear-gradient(to right, #B9FF38, #9757EC);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
        font-weight: bold;
    }

    .titulo-eventos {
        font-size: clamp(2.2rem, 6vw, 4.6rem);
        line-height: 1.2;
        margin-top: 6rem;
    }

    @media (max-width: 768px) {
        .titulo-eventos {
            margin-top: 4rem;
        }
    }
</style>

<section class="py-5" style="background: linear-gradient(to bottom, #000000 30%, #160b24 100%);">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-12 col-lg-10">
                <h2 class="fw-bold text-white titulo-eventos">
                    Eventos <span style="color: #B9FF38;">top</span>, ácidos y <br>
                    bizarros.<br>
                    <span class="text-gradient">Como tú.</span>
                </h2>
            </div>
        </div>

        <div class="row justify-content-center text-center mb-4">
            <div class="col-12 col-lg-8">
                <p class="fs-5 text-light">
                    En Enlimonado no organizamos eventos: los <span style="color: #B9FF38;">reventamos</span>
                    (creativamente).
                    Producción integral, ideas que no se repiten y resultados que no se olvidan.
                </p>
            </div>
        </div>

        <div class="row justify-content-center text-center mb-5">
            <div class="col-12 d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 mt-4">
                <a href="/contact" class="btn btn-lg btn-lime-contact">
                    Exprímele jugo a tu idea <i class="ti ti-arrow-narrow-right ms-2"></i>
                </a>
                <a href="/projects" class="btn btn-lg btn-lime-proyects">
                    Ver Proyectos
                </a>
            </div>
        </div>

        <div class="row justify-content-center text-center pt-5 pt-lg-7">
            <div class="col-auto">
                <a href="#experiences" class="d-inline-block">
                    <i class="ti ti-chevrons-down arrow-bounce" style="font-size: 40px; color: #fff; cursor: pointer;"></i>
                </a>
            </div>
        </div>
    </div>
</section>

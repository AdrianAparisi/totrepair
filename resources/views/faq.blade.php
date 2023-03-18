@extends('layouts.faq')

@section('titulo', 'FAQ')

@section('head')

    {{-- Estilos de header, footer y el js para menú hamburguesa y slider --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">

    {{-- Librerias de JQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset('js/faq.js') }}"></script>

@endsection

@section('contenido')
    <div class="container">
        <h1 class="title">
            Preguntas más frecuentes
        </h1>
        <div class="acordeon">
            <div class="faq-img">
                <img src="{{ asset('img/faq.svg') }}" alt="foto de FAQ" class="acordeon-img">
            </div>
            <div class="content-acordeon">
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            ¿De qué maneras puedo contactar con ToTRepair?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Puedes contactarnos a tráves de nuestro teléfono de empresa (+34) 961 071 598,
                            envíarnos un WhatsApp al (+34) 623 09 10 19 o visitar nuestra página de contacto,
                            que la puedes encontrar en el pie de página.</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            ¿Hay gastos de devolución?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Dependiendo de cómo se realice la devolución. Si se realiza en tiendas o a través de Correos,
                            esta es totalmente gratuita. Si se realiza en Celeritas el coste es de 2 euros.
                        </p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            ¿Qué métodos de pago existen en ToTRepair?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Disponemos de los siguientes medios de pago: VISA, MASTERCARD, AMERICAN EXPRESS,
                            PAYPAL, APPLE PAY, GOOGLE PAY y BIZUM.
                        </p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            ¿Comprar es seguro?
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>La seguridad de la información de nuestros clientes es una de las
                            mayores prioridades. Invertimos gran cantidad de recursos y utilizamos las últimas
                            tecnologías disponibles para que tus datos de pago se procesen en entornos seguros.</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question">
                            Plazo de devolución
                        </h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>Recuerda que siempre tienes que entregar los artículos que quieras devolver en
                            el plazo de 15 días, antes de que expire el plazo de devolución. En el caso de
                            que hayas solicitado una recogida y no se haya efectuado, por favor, contacta
                            con nosotros para que podamos gestionar un nuevo intento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

</section>

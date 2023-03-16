@extends('layouts.layout')

@section('titulo', 'Inicio')

@section('head')
 {{-- Librerias de JQuery --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
 integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  {{-- Estilos de header, footer y el js para menú hamburguesa y slider --}}
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <script src="{{ asset('js/header.js') }}"></script>
@endsection

@section('contenido')
    <!--Bootstrap Slider Code-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 imgSlider" src="{{ asset('img/IM1.webp') }}" alt="First slide">
                <div class="contentSlider">
                    <h2 class="textSlide">Accesorios</h2>
                    <span class="secondTextSlide">En ToTRepair podrá encontrar gran variedad de accesorios para complementar
                        nuestros smartphones, como fundas, cargadores, auriculares, e incluso herramientas de reparación
                        entre otros...</span>
                    <a href="#" class="linkSlide">Ver más</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 imgSlider" src="{{ asset('img/IM2.webp') }}" alt="Second slide">
                <div class="contentSlider">
                    <h2 class="textSlide">Repuestos</h2>
                    <span class="secondTextSlide">En nuestra tienda de repuestos, se pueden encontrar una amplia
                        variedad de repuestos para diferentes modelos y marcas de teléfonos móviles, lo que permite a los
                        clientes encontrar la pieza exacta que necesitan para reparar su dispositivo.</span>
                    <a href="#" class="linkSlide">Ver más</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 imgSlider" src="{{ asset('img/IM3.webp') }}" alt="Third slide">
                <div class="contentSlider">
                    <h2 class="textSlide">Móviles</h2>
                    <span class="secondTextSlide">Desde ToTRepair ofrecemos una amplía variedad de dispositivos de
                        diferentes marcas y modelos, el que mejor se adapte a las necesidades y presupuesto del
                        cliente.</span>
                    <a href="#" class="linkSlide">Ver más</a>
                </div>
            </div>
        </div>
    </div>


@endsection

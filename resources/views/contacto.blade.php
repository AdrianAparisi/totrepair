@extends('layouts.layout')

@section('titulo', 'Contacto')

@section('head')
 {{-- Librerias de JQuery --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
 integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  {{-- Estilos de header, footer y el js para menú hamburguesa y slider --}}
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <script src="{{ asset('js/header.js') }}"></script>
@endsection

@section('contenido')
    <div class="content">
        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Formulario de Contacto</h3>
                <form action="">
                    <div>
                        <label>Nombre completo</label>
                        <input type="text" name="fullname">
                    </div>

                    <div>
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>

                    <div>
                        <label>Número de teléfono</label>
                        <input type="tel" name="phone">
                    </div>

                    <div>
                        <label>Asunto</label>
                        <input type="text" name="affair">
                    </div>

                    <div class="block">
                        <label>Mensaje</label>
                        <textarea name="message" rows="3"></textarea>
                    </div>

                    <div class="block">
                        <button>
                            Enviar
                        </button>
                    </div>

                </form>
            </div>

            <div class="contact-info">
                <h4>Más Info</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> C. Alcira</li>
                    <li><i class="fas fa-phone"></i> (+34) 961 150 798</li>
                    <li><i class="fas fa-envelope-open-text"></i> totrepair@gmail.com</li>
                </ul>
                <p>Si también desea puede mandarnos un Whatsapp al (+34) 623 09 10 19.</p>
                <p>ToTRepair.es</p>
            </div>
        </div>
    </div>
@endsection

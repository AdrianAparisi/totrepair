@extends('layouts.layout')

@section('titulo', 'Productos')

@section('head')


    {{-- Estilos de header, footer y el js para menú hamburguesa y slider --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    {{-- Librerias de JQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset('js/products.js') }}"></script>
@endsection

@section('contenido')

    <div class="main-products">
        <div class="container">
            <div id="product-list" class="row">
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="single-product">
                            <div class="img-content">
                                <a href="{{ route('productos', ['id' => $product->id]) }}"><img
                                        src="{{ $product->images->first()->route }}" alt="imagen"></a>
                            </div>
                            <div class="text-content">
                                <h3 class="product-title">{{ $product->name }}</h3>
                                <h4 class="product-price">{{ $product->price }} €</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Botón "Ver más" -->
        @if (count($products) < $totalProducts)
            <button id="load-more" data-offset="{{ $offset }}"><span>Ver más</span></button>
            <input type="hidden" id="total-products" data-total-products="{{ $totalProducts }}">
        @else
            <button disabled>No hay más productos</button>
        @endif
    </div>
@endsection

</section>

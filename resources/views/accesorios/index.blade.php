@extends('layouts.layout')

@section('titulo', 'Accesorios')

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
        {{-- Buscador --}}
        <form action="{{ route('search') }}" method="GET" class="form-inline">
            @csrf
            <input class="form-control" id="search" type="search" name="search" placeholder="Introducir producto...">
            <input type="submit" value="Buscar" class="btn btn-success">
        </form>
        <div class="container">
            <div id="product-list" class="row">
                @foreach ($accesorios as $accesorio)
                    <div class="productDiv">
                        <div class="single-product">
                            <div class="img-content">
                                <img src="{{ $accesorio->product->images->first()->route }}" alt="imagen">
                            </div>
                            <div class="text-content">
                                <h3 class="product-title">{{ $accesorio->product->name }}</h3>
                                <h4 class="product-price">{{ $accesorio->product->price }} €</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Botón "Ver más" -->
        {{-- @if (count($products) < $totalProducts)
            <button id="load-more" data-offset="{{ $offset }}"><span>Ver más</span></button>
            <input type="hidden" id="total-products" data-total-products="{{ $totalProducts }}">
        @else
            <button disabled>No hay más productos</button>
        @endif --}}
    </div>
@endsection

</section>

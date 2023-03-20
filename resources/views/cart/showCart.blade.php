@extends('layouts.products')

@section('titulo', 'Carrito')

@section('head')


    {{-- Estilos de header, footer y el js para menú hamburguesa y slider --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    {{-- Librerias de JQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/header.js') }}"></script>
@endsection

@section('contenido')
    @if (session()->has('message'))
        <div class="alert alert-danger" style="margin-top: 8rem;">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
    <table class="table table-responsive table-striped" style="padding:7rem 10rem 10rem 2rem; text-align:center;">
        <thead>
            <tr>
                <th>Nombre del producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $carts)
                <tr>
                    <td>{{ $carts->product_name }}</td>
                    <td>{{ $carts->quantity }}</td>
                    <td>{{ $carts->price }}</td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('deleteCart', $carts->id) }}">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

</section>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">

            <h3 class="">Корзина</h3>
            <a href="{{ route('remove-all-cart') }}" class="link link-danger fs-5">Очистить корзину</a>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">

                <li>{{ session('success') }}</li>

            </div>
        @endif

        <div class="d-flex flex-wrap">


            @php($carts = \Cart::session($_COOKIE['cart_id'])->getContent($_COOKIE['cart_id']))

            @php($allsum = 0)
            @foreach($carts as $cart)
                <div class="col-3">
                    <div class="card me-3 mb-3 border-success">


                        <div class="p-3 fs-5">
                            <div class="text-center mb-3">

                                {{ $cart->name }}
                            </div>

                            <div class="d-flex justify-content-center">

                                <img src="{{ '/storage/' . $cart->attributes->img }}" class="image shadow rounded"
                                     width="260" height="200" alt="">
                            </div>

                            <div class="text-break mt-3">Количество: {{ $cart->quantity }}</div>
                            <div class="text-break mt-3">Цена: {{ $cart->getPriceSum() }}</div>
                            <a href="{{ route('remove-one-product', $cart->id) }}"
                               class="link link-danger mt-3">Удалить</a>

                        </div>


                    </div>
                </div>

                @php($allsum += $cart->getPriceSum())
            @endforeach
        </div>
        @if($allsum > 0)
        <div class="fs-5 mt-3">Полная цена:
            {{ $allsum }} р.
        </div>
        <a href="{{ route('order') }}" class="btn btn-success mt-3">Оформить заказ</a>
        @endif
    </div>


    @push('scripts')

        <script src="{{ asset('js/cart.js') }}" defer></script>
    @endpush
@endsection

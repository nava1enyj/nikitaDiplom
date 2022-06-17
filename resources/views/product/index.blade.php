@extends('layouts.app')

@section('content')
    <div class="container">
        <button type="button" class="border-0 bg-light mb-5" id="btn-back-to-top">
            <i class=""><img src=" {{ asset('img/up-arrow.png') }} " alt=""></i>
        </button>


        <div class="d-flex justify-content-between flex-wrap align-items-center">


            <div class="col-12">
                <div class="p-3">
                    <div class="card border border-success">
                        <div class="p-3">
                            <input type="hidden" id='id' value="{{ $product->id }}">
                            <div class="d-flex justify-content-between ms-4 me- 4">
                                <div class="fs-5">{{ $product->name }}</div>
                                <div class="id">№{{ $product->id }}</div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <img src="{{ '/storage/' . $product->img }}" class="img-product shadow-lg rounded"
                                     alt="">
                            </div>
                            <div class="text-break fs-5 mt-3">
                                lorem100{{ $product->description }}
                            </div>
                            <div class="mt-3">
                                <div class="fs-4">Цена: {{ $product->price }} руб.</div>
                            </div>

                            <div class="form-floating mt-3 col-1">
                                <input type="number" class="form-control" name="number" id="number" value="1"
                                       placeholder="number">
                                <label for="floatingInput">Количество</label>
                            </div>
                           <div class="yes" id="success"> </div>

                            <button class="btn btn-success mt-3" id="addToCart">В корзину</button>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>

    @push('scripts')

        <script src="{{ asset('js/scrollToTop.js') }}" defer></script>
        <script src="{{ asset('js/cart.js') }}" defer></script>
    @endpush
@endsection

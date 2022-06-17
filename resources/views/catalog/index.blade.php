@extends('layouts.app')

@section('content')
    <div class="container">
        <button type="button" class="border-0 bg-light mb-5" id="btn-back-to-top">
            <i class=""><img src=" {{ asset('img/up-arrow.png') }} " alt=""></i>
        </button>


        <div class="border-success border-bottom fs-5 pb-1">
            <div class="ms-2 ps-5 pe-5">

                <div class="d-flex align-items-center">
                    <div class="col-3 fs-3 ms-4">Каталог</div>


                    <div class="col-6 ps-1">


                        Описание


                    </div>

                    <div class="col-1 ms-5 me-4">Цена</div>
                    <div class="col-1">Количество</div>
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-between flex-wrap align-items-center">

            @foreach($products as $product)

                <div class="col-12">
                    <div class="p-3">
                        <div class="card border border-success">
                            <div class="p-3">

                                <div class="d-flex justify-content-between ms-4 me- 4">
                                    <div class="fs-5">{{ $product['name'] }}</div>
                                    <div class="id">№{{ $product['id'] }}</div>
                                </div>


                                <div class="d-flex justify-content-between align-items-center">

                                    <div class="mt-3 mb-3 col-3">
                                        <div class="row justify-content-center">

                                            <img class="img-catalog rounded-3" src="{{ '/storage/' . $product['img'] }}"
                                                 alt="">
                                        </div>

                                    </div>

                                    <div class="text-break ps-3 col-6 pe-3"> lorem75{{ $product['description'] }}</div>
                                    <div class="col-1">

                                        <div class="fs-5 mt-3 me-3">{{ $product['price'] }} р.</div>


                                    </div>
                                    <div class="col-1 me-3">

                                        <div class="form-floating mt-3 ">
                                            <input type="number" class="form-control" name="price" id="floatingInput"
                                                   placeholder="price">
                                            <label for="floatingInput">Количество</label>
                                        </div>

                                    </div>

                                </div>

                                <a href="" class="btn btn-success mt-3 ms-3">Добавить в корзину</a>

                            </div>
                        </div>
                    </div>


                </div>

            @endforeach

        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/scrollToTop.js') }}" defer></script>
    @endpush
@endsection

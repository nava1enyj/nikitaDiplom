@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            <h3>Оформление заказа</h3>
            <div class="card">
                <div class="p-3">
                    <form class="row g-3" action="{{ route('order-add') }}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Город</label>
                            <input type="text" name="city" class="form-control" id="inputEmail4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Улица</label>
                            <input type="text" name="street" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-4">
                            <label for="inputPassword4" class="form-label">Номер дома</label>
                            <input type="number" name="number_house" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-4">

                            <label for="inputPassword4" class="form-label">Номер подъезда</label>
                            <input type="number" name="number_entrance" class="form-control" id="inputPassword4"
                                   required>
                        </div>

                        <div class="col-4">

                            <label for="inputPassword4" class="form-label">Номер квариры</label>
                            <input type="number" class="form-control" name="number_apartment" id="inputPassword4"
                                   required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Полный адресс(Продублируйте)</label>
                            <input type="text" class="form-control" id="inputAddress" name="full_address"
                                   placeholder="1234 Main St" required>
                        </div>

                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Почтовый индекс</label>
                            <input type="text" class="form-control" name="index" id="inputZip" required>
                        </div>
                        @php($carts = \Cart::session($_COOKIE['cart_id'])->getContent($_COOKIE['cart_id']))

                        @php($allsum = 0)


                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Количество</th>
                                <th scope="col">Название</th>
                                <th scope="col">Цена</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($carts as $key => $cart)

                                @php($allsum += $cart->getPriceSum())
                                <tr>


                                    <th scope="row">{{ $cart->quantity }}</th>
                                    <td>{{ $cart->name }}</td>
                                    <td>{{ $cart->getPriceSum() }} руб.</td>


                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <div class="mt-3 mb-3 fs-5 text-danger">Внимание! Опалата при получение товара!</div>
                        <div class="fs-4">Сумма заказа: {{ $allsum }} руб.</div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mt-4">Заказать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection


@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-3">Добавление товара</h3>
        <form action="{{ route('add-product') }}" method="post" enctype="multipart/form-data">
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
            @csrf

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name">
                <label for="floatingInput">Название товара</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="description" placeholder="Краткое описание товарам"
                          id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Краткое описание товара</label>
            </div>

                <div class="text mt-3">Выберите картинку</div>
            <input type="file" class="form-control mt-1" name="img" id="floatingInputInvalid" placeholder="img"
                   value="test@example.com">



            <div class="form-floating mt-3">
                <input type="number" class="form-control" name="price" id="floatingInput" placeholder="price">
                <label for="floatingInput">Цена товара(в руб.)</label>
            </div>
            <button class="btn btn-success mt-3">Создать лот</button>
        </form>
        <div class="mt-5">
            <h3>Пользователи которые имеют заказ</h3>
            <div class="d-flex mt-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Email пользователя</th>
                        <th scope="col">Номер телефона</th>
                        <th scope="col">Название товара</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Действие</th>

                    </tr>
                    </thead>
                    <tbody>


                    @foreach($orders as $order)

                        <tr>
                            <th scope="row">

                                {{ $order->id }}
                            </th>

                            <td>{{ $order->users['email'] }}</td>
                            <td>{{ $order->users['phone'] }}</td>
                            <td>{{ $order->products['name'] }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>
                                @if($order->status == 0)
                                    <div class="text-danger">Ожидание</div>
                                @elseif($order->status == 1)
                                    <div class="text-warning">В пути</div>
                                @else
                                    <div class="text-success">Доставленно</div>
                                @endif
                            </td>
                            <td>{{ $order->price }}</td>
                            <td><a href="{{ route('admin-one-order' , $order->users['id']) }}" class="link link-success">Подробнее</a></td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">

        @foreach($orders as $order)
            @php( $name = $order->users['name'] )
        @endforeach

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
        <h3>Заказы пользователя: {{ $name }}</h3>
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
                <th scope="col">Cменить статус</th>


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
                    <td><a class="link-warning" href="{{ route('v-p' , $order->id ) }}">Статус: В пути</a></td>

                    <td><a  class="link-success" href="{{ route('v-d' , $order->id ) }}">Статус: Доставлено</a></td>
                </tr>

            @endforeach
            </tbody>
        </table>

            @foreach($orders as $order)
                @php( $adress = $order->adresses['full_adress'] )
                @php( $street = $order->adresses['street'] )
                @php( $city = $order->adresses['city'] )
                @php( $number_apartament = $order->adresses['number_apartment'] )

            @endforeach
            <h3>Адресс</h3>
            <div class="mt-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Город</th>
                        <th scope="col">Улица</th>
                        <th scope="col">Квартира</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $city }}</td>
                        <td>{{ $street }}</td>
                        <td>{{ $number_apartament }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        <div class="mt-3 fs-5">
          Полнеый адрес:   {{  $adress }}
        </div>
    </div>
@endsection

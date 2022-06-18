@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Ваши заказы</h3>
        <div class="card mb-3 mt-3">
            <div class="p-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Название товара</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Цена</th>

                    </tr>
                    </thead>
                    <tbody>


                    @foreach($orders as $order)

                        <tr>
                            <th scope="row">

                                {{ $order->id }}
                            </th>

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
                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    </div>
@endsection

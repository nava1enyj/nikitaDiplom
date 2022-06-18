@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Привет , {{ \Auth::user()->name }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="mt-3">Логин: {{ \Auth::user()->login }}</div>
                        <div class="mt-3">Имя: {{ \Auth::user()->name }}</div>
                        <div class="mt-3">Фамилия: {{ \Auth::user()->lastname }}</div>
                        <div class="mt-3">Телефон: {{ \Auth::user()->phone }}</div>
                        <div class="mt-3">Email: {{ \Auth::user()->email }}</div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

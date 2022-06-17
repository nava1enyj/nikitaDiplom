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

    </div>

@endsection

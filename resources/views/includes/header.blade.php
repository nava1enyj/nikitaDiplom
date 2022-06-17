<nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('welcome') }}">{{ __('Главная') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('catalog') }}">{{ __('Каталог') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('where-we') }}">{{ __('Наш офис') }}</a>
                </li>

                <li class="nav-item">

                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->


                @guest

                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        </li>
                    @endif
                @else

                    <a class="navbar-brand" href="{{ route('cart') }}">
                        <img src="{{ asset('img/cart.png') }}" alt="" width="32" height="32">
                        (<span class="fs-6 cart-qty">
                            {{\Cart::session($_COOKIE['cart_id'])->getTotalQuantity()}}
                        </span>)
                    </a>



                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('cart') }}">{{ __('Корзина') }}</a>

                            @if (Auth::user()->isAdmin == 1)

                                <a class="dropdown-item" href="{{ route('admin') }}">{{ __('Панель управления') }}</a>

                            @endif
                            <a class="dropdown-item" href="{{ route('home') }}">{{ __('Профиль') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Выход') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

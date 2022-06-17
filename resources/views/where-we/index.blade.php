@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-3">Наш адресс</h3>
        <div class="border-top border-success">
            <div class="fs-5 text-break mt-3">Если у вас есть предложения или вопросы, вы можете связаться с нами любым из
                предложенных способов, мы будем рады сотрудничеству и ответим на все интересующие вас вопросы.
            </div>

            <div class="d-flex mt-3 align-items-center">
                <img src="{{ asset('img/map-marker.png') }}" class="me-2" alt="">
                <div>

                    107140, г. Москва, улица Верхняя Красносельская, дом 16
                </div>

            </div>

            <div class="d-flex mt-3 align-items-center">
                <img src="{{ asset('img/red_phone_icon-icons.com_59526.png') }}" class="me-2" alt="">
                <div class="me-5">

                   +7 (915)-031-50-40
                </div>
                <img src="{{ asset('img/mailbox_mail_message_7239.png') }}" class="me-2" alt="">
                <div class="me-3">

                   pochtaprimer@example.com
                </div>
            </div>
        </div>

            <div class="mt-4 justify-content-center d-flex">
                <div id="map-test" class="map"></div>

                    @push('scripts')
                        <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU">
                        </script>
                        <script src="{{ asset('js/maps.js') }}"></script>
                    @endpush

                </div>
            </div>

    </div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
    <h3 class="">О нас</h3>
        <div class=" border-top border-success p-3">

            <div class="text-break fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto
                dignissimos
                eligendi illo illum. Accusamus adipisci, aliquid aperiam assumenda aut culpa cupiditate distinctio error
                facilis fuga id illum ipsa ipsam iure magni modi nulla odit officiis omnis placeat quibusdam quis quo
                quod
                rem repellat rerum ullam veniam voluptas voluptatem voluptates. Accusantium consequatur corporis dicta
                distinctio dolore error est facere, harum incidunt iure iusto laboriosam modi nesciunt nihil optio
                quisquam
                quod, repudiandae suscipit, temporibus ullam. Accusamus aliquid cum, cumque dicta dolorem ea eius eos
                est
                exercitationem explicabo ipsam itaque laboriosam maxime modi nemo nulla porro quae quaerat qui, sapiente
                sit
                voluptates.
            </div>
        </div>
        <div class="mt-3">
            <h3 class="text">Почему мы?</h3>


            <div class=" border-top border-success p-3">

                <div class="d-flex justify-content-between ">
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <div class="d-flex justify-content-center">

                                <img src="{{ asset('img/speed2.jpg') }}" class="card-img-top img-welcome" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Cкорость</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <div class="d-flex justify-content-center">

                                <img src="{{ asset('img/def.jpg') }}" class="card-img-top img-welcome" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Надежность</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <div class="d-flex justify-content-center">

                                <img src="{{ asset('img/udobstvo.png') }}" class="card-img-top img-welcome" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Удобство</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <div class="d-flex justify-content-center">

                                <img src="{{ asset('img/kachestvo.jpeg') }}" class="card-img-top img-welcome" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Качество</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
@endsection

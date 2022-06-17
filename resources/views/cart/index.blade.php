@extends('layouts.app')

@section('content')
    <div class="container">
        <button class="btn" id="btn">Dfserdg</button>
    </div>

    @push('scripts')

        <script src="{{ asset('js/cart.js') }}" defer></script>
    @endpush
@endsection

@extends('layouts.app')

@section('title-page')
    Comics - {{ $elem->title }}
@endsection

@section('main-content')
    <div class="jumbo">

    </div>
    <div class="blue-bar bg-primary">
        <div class="w-50 mx-auto single-img-container">
            <img class="single-img" src="{{ $elem->thumb }}" alt="">
        </div>
    </div>
    {{-- <h1 class="text-center">{{ $elem->title }}</h1> --}}
    <div class="w-50 mx-auto ">

        <h2 class="text-primary">{{ $elem->title }}</h2>
        <div class="d-flex justify-content-between">
            <div class="d-flex w-75 mt-4">
                <div class="bg-green w-75 d-flex p-3 px-4 text-white">
                    <div class="d-flex w-100 justify-content-between">
                        <div>U.S. Price: $ <span class="fw-bold">{{ $elem->price }}</span> </div>
                        <div>AVAILABLE</div>
                    </div>
                </div>
                <div class="fw-bold bg-green text-white p-3 px-4 select">
                    Check Availability
                </div>
            </div>
            <div>
                <div class="d-flex justify-content-end">ADVERTISEMENT</div>
                <img src="{{ asset('img/adv.jpg') }}" alt="">
            </div>
        </div>





        <p>
            {{ $elem->description }}
        </p>
    </div>
@endsection
<style>
    .adve {
        background-image: url("{{ asset('img/jumbotron.jpg') }}");
    }

    .bg-green {
        background-color: rgb(77, 201, 77);
        height: 60px;
    }

    .single-img-container {
        position: relative;
    }

    .single-img {
        position: absolute;
        bottom: 20px;

        width: 200px
    }

    .blue-bar {
        height: 70px;
    }

    .jumbo {
        background-image: url("{{ asset('img/jumbotron.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
        height: 450px;
    }
</style>

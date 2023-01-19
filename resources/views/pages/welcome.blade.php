@extends('layouts.app')
@section('title-page', 'COMICS - Home')
@section('main-content')
    <h1>Home Page</h1>
    <div class="jumbo">

    </div>
@endsection
<style>
    .jumbo {
        background-image: url("{{ asset('img/jumbotron.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
        height: 300px;
    }
</style>
@section('footer-content')

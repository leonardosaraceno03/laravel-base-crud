@extends('layouts.app')

@section('title-page')
    Comics - {{ $elem->title }}
@endsection

@section('main-content')
    <h1 class="text-center">{{ $elem->title }}</h1>
    <div>
        <p>
            {{ $elem->description }}
        </p>
    </div>
@endsection

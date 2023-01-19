@extends('layouts.app')
@section('title-page', 'Comics - Home')
@section('main-content')
    <h1>Comics List</h1>

    <div>
        <a href="{{ route('comics.create') }}">Create Comics</a>
    </div>
    <ul class="d-flex mx-auto list-comics">
        @foreach ($comics as $elem)
            <li class="mx-2">
                <a href="{{ route('comics.show', $elem->id) }}">
                    <img src="{{ $elem->thumb }}" alt="">
                    <div>{{ $elem->title }}</div>

                </a>
                {{-- <td>{{ $elem->id }}</td>
                <td>
                    <a href="{{ route('comics.show', $elem->id) }}">
                        {{ $elem->title }}
                    </a>
                </td>
                <td>{!! $elem->description !!}</td>
                <td>{{ $elem->thumb }}</td>
                <td>{{ $elem->price }}</td>
                <td>{{ $elem->series }}</td>
                <td>{{ $elem->sale_date }}</td>
                <td>{{ $elem->type }}</td> --}}
            </li>
        @endforeach
    </ul>
    {{-- @foreach ($comics as $elem)
        <tr>
            <td>{{ $elem->id }}</td>
            <td>
                <a href="{{ route('comics.show', $elem->id) }}">
                    {{ $elem->title }}
                </a>
            </td>
            <td>{!! $elem->description !!}</td>
            <td>{{ $elem->thumb }}</td>
            <td>{{ $elem->price }}</td>
            <td>{{ $elem->series }}</td>
            <td>{{ $elem->sale_date }}</td>
            <td>{{ $elem->type }}</td>
        </tr>
    @endforeach --}}



    {{ $comics->links() }}

@endsection

<style>
    .list-comics {
        list-style: none;
    }

    a {
        text-decoration: ;
        color: black
    }
</style>

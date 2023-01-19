@extends('layouts.app')

@section('title-page')
    Comic - Create
@endsection

@section('main-content')
    <h1 class="text-center">Form per la Create</h1>

    <form method="POST" action="{{ route('comics.store') }}">

        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">description</label>
            <textarea name="description" class="form-control" id="description"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">thumb</label>
            <input name="thumb" type="text" class="form-control" id="thumb">
        </div>

        <div class="mb-3">
            <label class="form-label">price</label>
            <input name="price" type="text" class="form-control" id="price">
        </div>

        <div class="mb-3">
            <label class="form-label">series</label>
            <input name="series" type="text" class="form-control" id="series">
        </div>

        <div class="mb-3">
            <label class="form-label">sale date</label>
            <input name="sale_date" type="text" class="form-control" id="sale_date">
        </div>
        <div class="mb-3">
            <label class="form-label">type</label>
            <input name="type" type="text" class="form-control" id="type">
        </div>

        <button type="submit" class="btn btn-primary">Crea record</button>
    </form>
@endsection

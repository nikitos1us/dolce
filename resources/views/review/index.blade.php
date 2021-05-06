@extends('layout')

@section('title')
    <title>Отзывы</title>
@endsection

@section('main-content')

    <div class="d-flex flex-wrap mt-3">
        <h1 class="text-dark ">Отзывы</h1>
        <form method="get" action="/rev/create" class="ml-5 mt-1">
            <button class="btn btn-dark" type="submit">Написать отзыв</button>
        </form>
    </div>


    @foreach($rev as $el)
        <div class="alert alert-success mt-4">
            <h3>{{ $el->name }}  {{ $el->email}}</h3>
            <p>{{$el->comment}}</p>
        </div>

    @endforeach

@endsection

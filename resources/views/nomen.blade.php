@extends('layout')

@section('title')
    <title>Ассортимент</title>
@endsection

@section('main-content')
    <div class="container text-dark text-center mt-3">
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">Наименование</th>
                <th scope="col">Цена</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($nomen as $v)
                <tr>
                    <td>{{$v->title}}</td>
                    <td>{{$v->price}}</td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

@extends('layout')

@section('title')
    <title>Отзывы</title>
@endsection

@section('main-content')
    <div class="container mt-2">
        <h1>Форма добавления отзыва</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>

        @endif
        <form method="post" action="/rev/check">

            @csrf
            <input type="email" name="email" id="email" placeholder="Enter E-mail" class="form-control"><br>
            <input type="text" name="type" id="type" placeholder="Введите тему отзыва" class="form-control"><br>
            <textarea name="comment" id="comment" placeholder="Введите ваш отзыв" class="form-control"></textarea><br>


            <button type="submit" class="btn btn-success">Отправить</button>
        </form>

    </div>
@endsection

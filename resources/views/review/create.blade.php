@extends('layout')

@section('title')
    <title>Новый отзыв</title>
@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-12">
            <br/>
            <h3 aling="center" class="text-home bg-dark text-center">Отзыв</h3>
            <br/>

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(\Session::has('null'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('null') }}</p>
                </div>
            @endif

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif
            @if(\Session::has('FAIL'))
                <div class="allert allert-">
                    <p> {{  \Session::get('FAIL') }} </p>
                </div>
            @endif

            <form method="post" action="{{ route('review.store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control " placeholder="Enter Name"/>
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control " placeholder="Enter Email"/>
                </div>
                <div class="form-group">
                    <input type="text" name="type" class="form-control " placeholder="Enter Type"/>
                </div>
                <div class="form-group">
                    <input type="text" name="comment" class="form-control" placeholder="Enter Comment"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>

        </div>
    </div>
@endsection

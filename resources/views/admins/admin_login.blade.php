@extends("admins.admin_layout")

@section('title')
@endsection

@section('main-content')

    <form style="margin-top: 100px;" action="{{route('adminpanel.check')}}" method="post">
        @if(Session::get('fail'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{Session::get('fail')}}</strong>
            </div>

        @endif

        @csrf

        <h1><span>Вход в административную панель</span></h1>


        <div class="form-group">
            <label for="name">Login</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Login" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password-input" name="passwd" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary" value='Войти' id='login'>Enter</button>
    </form>


@endsection



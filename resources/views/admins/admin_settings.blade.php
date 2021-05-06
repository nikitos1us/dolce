@extends("admins.admin_layout")

@section('title')
    @include("admins.admin_navbar")
@endsection

@section('main-content')
    <p class="h1 text-center"  style="margin-top: 25px; color: #560faf"><em>Информация об администраторе</em></p>

    <p class="h1 text-center"  style="margin-top: 25px; color: #1a202c;">{{ session()->get('LoggedAdmin')}}</p>





@endsection

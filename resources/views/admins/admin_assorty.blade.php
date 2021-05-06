@extends("admins.admin_layout")

@section('title')
    @include("admins.admin_navbar");
@endsection

@section('main-content')
    <p class="h1 text-center"  style="margin-top: 25px; color: #560faf"><em>Ассортимент</em></p>


    <form class="form-inline" style="margin-top: 30px;margin-bottom: 50px;">
        @if(Session::get('fail'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{Session::get('fail')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif
        @csrf
        <div class="form-group">
            <label for="title" style="margin-right: 10px; "> Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group" style="margin-left: 20px;">
            <label for="price" style="margin-right: 10px; "> Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Price">
        </div>
        <div class="form-group" style="margin-left: 20px;">
            <input type="submit" class="btn btn-primary" style="margin-left: 20px;"
                   formaction="{{route('adminpanel.asscheck')}}" value="Добавить"/>
        </div>
    </form>



    <table class="table table-striped table-dark">
        <thead>
        <tr>

            <th class="text-center">Title</th>
            <th class="text-center">Price</th>
            <th style="width: 100px;"></th>
            <th style="width: 100px;"></th>
        </tr>
        </thead>

        <tbody>
        @foreach ($assorty as $v)
            <tr>

                <td class="text-center">{{ $v->title }}</td>
                <td class="text-center">{{ $v->price }}</td>
                <td class="text-center"><a href="{{ route('adminpanel.assedit',$v->id) }}">
                        <button type="button" class="btn btn-primary">Change</button>
                    </a></td>
                <td class="text-center"><a href="{{ route('adminpanel.assdel',$v->id) }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a></td>
            </tr>
        @endforeach

        </tbody>
    </table>




@endsection



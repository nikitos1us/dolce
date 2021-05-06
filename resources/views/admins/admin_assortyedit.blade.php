@extends("admins.admin_layout")

@section('title')
    @include("admins.admin_navbar");
@endsection

@section('main-content')


    <form method="post" style="margin-top: 30px;margin-bottom: 50px;" action="{{route('adminpanel.asseditsubmit',$data->id)}}">

        @csrf
        <div class="form-group">
            <label for="title" style="margin-right: 10px; "> Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $data->title}}">
        </div>
        <div class="form-group" style="margin-left: 20px;">
            <label for="price" style="margin-right: 10px; "> Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="{{ $data->price}}">
        </div>
        <div class="form-group" style="margin-left: 20px;">
            <input type="submit" class="btn btn-primary" style="margin-left: 20px;"
                    value="Сохранить изменения"/>
        </div>
    </form>





@endsection



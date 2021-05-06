@extends("admins.admin_layout")

@section('title')
    @include("admins.admin_navbar");
@endsection

@section('main-content')
    <p class="h1 text-center"  style="margin-top: 25px; color: #560faf"><em>Отзывы</em></p>

<div style="margin-top: 50px; background-color: palevioletred; ">
    <table class="table table-striped table-dark" >
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
            <th></th>

        </tr>
        </thead>

        <tbody>
        @foreach ($review as $v)
            <tr>

                <td>{{ $v->name }}</td>
                <td>{{ $v->email }}</td>
                <td>{{ $v->comment }}</td>
                <td><a href="{{ route('adminpanel.revdel',$v->id) }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>



@endsection

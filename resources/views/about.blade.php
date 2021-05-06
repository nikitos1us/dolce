@extends('layout')

@section('title')
    <title>Про нас</title>
@endsection
@section('main-content')

    <div class="container text-dark mt-3" >
        <h1 class="bg-dark text-home text-center">Про нас</h1>
        <h3 class="bg-dark text-home text-center">Греция,остров Дия</h3>
        <div class="container"  style="height: 30vw;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26003.0329169842!2d25.198722822741377!3d35.44540764799383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149a43a3b0c85ce3%3A0x2cbc42dfe0203751!2z0JTQuNGP!5e0!3m2!1sru!2sru!4v1617045162475!5m2!1sru!2sru"
                    width="100%" height="100%" style="border:10px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@endsection

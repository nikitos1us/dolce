@extends('layout')

@section('title')
    <title>Главная</title>
@endsection
@section('main-content')

    <div class="container">
        <div class="jumbotron jumbotron-fluid mt-3 bg-dark ">
            <div class="container">
                <h1 class="display-4 text-home text-center">Магазин сладостей Dolce</h1>
                <p class="lead text-center">В нашем магазине вы сможете найти сладости из многих уголков мира. Например,
                    из Японии,
                    США и Китая.</p>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <p class="text-dark  text-center font-weight-bold"> Первая конфета - родом из Египта</p>
        <p class="text-dark"> Конфета имеет историю, гораздо длиннее, чем мы можем предположить.
            Ее прошлое охватывает географию всего мира. Говорят, что первой конфете три тысячи лет. Родилась она в
            Древнем Египте и была простым шариком, скатанным из мелко порубленных фиников, меда и орехов. На древнем
            Востоке конфеты делали из инжира, миндаля, меда и тех же орехов.
            В Древнем Риме их обваливали в маковых зернах, кунжуте. </p>

    </div>



    <div class="card-group">
        <div class="card border-5">
            <img class="card-img-top uk-animation-reverse uk-transform-origin-top-right"
                 uk-scrollspy="cls: uk-animation-kenburns; repeat: true" src="images/drinks.jpg" alt="Card image cap">

        </div>
        <div class="card">
            <img class="card-img-top uk-animation-reverse uk-transform-origin-top-right"
                 uk-scrollspy="cls: uk-animation-kenburns; repeat: true" src="images/halva.jpg" alt="Card image cap">

        </div>
        <div class="card">
            <img class="card-img-top uk-animation-reverse uk-transform-origin-top-right"
                 uk-scrollspy="cls: uk-animation-kenburns; repeat: true" src="images/sweet.jpg" alt="Card image cap">

        </div>
    </div>

@endsection

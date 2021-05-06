<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>

    @yield('title')

</head>

<div class="header ">
    <header class="pt-3 pb-3 bg-light pl-0 ">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center ">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-black-50 text-decoration-none">
                    <img class="bi me-2" width="32" height="32" src="/images/ice.png" alt="">
                    Dolce
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/nomen" class="nav-link px-2 text-danger">Ассортимент</a></li>
                    <li><a href="/hto" class="nav-link px-2 text-danger">Как заказать</a></li>
                    <li><a href="/about" class="nav-link px-2 text-danger">Про нас</a></li>
                    <li><a href="/rev/index" class="nav-link px-2 text-danger">Отзывы</a></li>
                </ul>

            </div>
        </div>
    </header>
</div>
<body class="text-white">

<main class="content">
    <div class="container">
        @yield('main-content')
    </div>
</main>

<footer class="footer mt-0 text-center bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <a href="#">Instagram</a>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

</footer>
</body>
</html>

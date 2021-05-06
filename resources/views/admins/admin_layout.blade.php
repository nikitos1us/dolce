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



</head>

<div class="header ">
    <header class="pt-3 pb-3 bg-light pl-0 ">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center ">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-black-50 text-decoration-none">
                    <img class="bi me-2" width="32" height="32" src="/images/ice.png" alt="">
                    Dolce
                </a>

                @yield('title')

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

</body>
</html>

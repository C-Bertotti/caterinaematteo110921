<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pageTitle')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header></header>
        <main>
            @yield('main')
        </main>
        
        <footer>
            <div class="mycontainer container-m">
                <div>
                    <img class="footer__sposi" src="{{asset('storage/img/icone/sposa.svg')}}" alt="">
                    <p>392 03 25 501</p>
                </div>
                <div>
                    <p>346 01 64 085</p>
                    <img class="footer__sposi" src="{{asset('storage/img/icone/sposo.svg')}}" alt="">
                </div>    
            </div>
        </footer>
    </body>
</html>

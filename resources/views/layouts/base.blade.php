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

        {{-- swiper --}}
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        @yield('links')
    </head>
    <body>
        <header>
            @yield('header')
        </header>

        <main>
            @yield('main')
        </main>
        
        <footer>
            <div class="mycontainer container-m">
                <div>
                    <img class="footer__sposi" src="{{asset('storage/img/icone/sposa.svg')}}" alt="Icona di una sposa">
                    <p>392 03 25 501</p>
                </div>
                <div>
                    <p>346 01 64 085</p>
                    <img class="footer__sposi" src="{{asset('storage/img/icone/sposo.svg')}}" alt="Icona di uno sposo">
                </div>    
            </div>
        </footer>

        {{-- script --}}
        @yield('script')
        <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous">
        </script>

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>   

        <script src="{{ asset('js/app.js') }}"></script> 
    </body>
</html>

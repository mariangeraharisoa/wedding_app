<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    @if(Auth::check())
    <link rel="stylesheet" href="{{ asset('css/inscrit.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AOS/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/coordinate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/orgacomplete.css') }}">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    @include('frontoffice.components.header')

    @yield('content')

    <div data-aos="fade-up">
        @include('frontoffice.components.footer')
    </div>
    @if (Auth::check())
    <script src="{{ asset('js/inscrit.js') }}"></script>
    @else
    <script src="{{ asset('js/script.js') }}"></script>
    @endif
    <script src="{{ asset('js/coordinate.js') }}"></script>

    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('AOS/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

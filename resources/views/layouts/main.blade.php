<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- add favicon --}}
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <meta name="description" content="Szkoła dla młodych małżeństw w Krakowie, przygotowująca do sakramentalnego życia w Chrystusie. Zapisz się i weź udział w naszych zajęciach!">
    <meta name="keywords" content="młode małżeństwa, szkoła małżeństw, katechumenat, Kraków, sakrament, chrześcijaństwo, wspólnota małżeńska">
    <meta name="author" content="Młode Małżeństwa">

    <!-- Open Graph tags -->
    <meta property="og:title" content="Szkoła Młodych Małżeństw w Krakowie - Młode Małżeństwa">
    <meta property="og:description" content="Szkoła dla młodych małżeństw w Krakowie, przygotowująca do sakramentalnego życia w Chrystusie. Zapisz się i weź udział w naszych zajęciach!">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:url" content="https://mlodemalzenstwa.pl">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pl_PL">

    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Szkoła Młodych Małżeństw w Krakowie - Młode Małżeństwa">
    <meta name="twitter:description" content="Szkoła dla młodych małżeństw w Krakowie, przygotowująca do sakramentalnego życia w Chrystusie. Zapisz się i weź udział w naszych zajęciach!">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <title> @yield('title', 'Młode Małżeństwa') </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')
    <script defer data-domain="mlodemalzenstwa.pl" src="https://analytics.overhost.pl/js/script.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .custom-number-input {
            -moz-appearance: textfield;
        }

        .custom-number-input::-webkit-outer-spin-button,
        .custom-number-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .custom-number-input-wrapper {
            position: relative;
            width: 100%;
        }

        .custom-number-input::after {
            content: "\25B2";
            /* Unicode dla strzałki w górę */
            font-size: 12px;
            position: absolute;
            right: 10px;
            top: 8px;
            cursor: pointer;
            color: white;
        }

        .custom-number-input::before {
            content: "\25BC";
            /* Unicode dla strzałki w dół */
            font-size: 12px;
            position: absolute;
            right: 10px;
            bottom: 8px;
            cursor: pointer;
            color: white;
        }

    </style>
</head>
<body class="antialiased">
    <div class="relative min-h-screen bg-[#FEF4EA] ">
        @include('partials.navbar')
        <main class="w-full mx-auto max-w-7xl">
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Szkoła dla młodych małżeństw w Krakowie, przygotowująca do sakramentalnego życia w Chrystusie. Zapisz się i weź udział w naszych zajęciach!">
    <meta name="keywords" content="młode małżeństwa, szkoła małżeństw, katechumenat, Kraków, sakrament, chrześcijaństwo, wspólnota małżeńska">
    <meta name="author" content="Młode Małżeństwa">

    <!-- Open Graph tags -->
    <meta property="og:title" content="Szkoła Młodych Małżeństw w Krakowie - Młode Małżeństwa">
    <meta property="og:description" content="Szkoła dla młodych małżeństw w Krakowie, przygotowująca do sakramentalnego życia w Chrystusie. Zapisz się i weź udział w naszych zajęciach!">
    <meta property="og:image" content="https://mlodemalzenstwa.pl/path/to/image.jpg">
    <meta property="og:url" content="https://mlodemalzenstwa.pl">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pl_PL">

    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Szkoła Młodych Małżeństw w Krakowie - Młode Małżeństwa">
    <meta name="twitter:description" content="Szkoła dla młodych małżeństw w Krakowie, przygotowująca do sakramentalnego życia w Chrystusie. Zapisz się i weź udział w naszych zajęciach!">
    <meta name="twitter:image" content="https://mlodemalzenstwa.pl/path/to/image.jpg">

    <title inertia>{{ config('app.name', 'Młode Małżeństwa') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @routes
    @viteReactRefresh
    @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
    @inertiaHead

    <script defer data-domain="mlodemalzenstwa.pl" src="https://analytics.overhost.pl/js/script.js"></script>
</head>
<body class="font-sans antialiased">
    @inertia
</body>
</html>

<!doctype html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/app.js" defer></script>
    <title>{{ $page->title }}</title>
    <script src="/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/css/aos.css">
    <script src="/js/aos.js"></script>
    <script src="/js/typed.js"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/init.css') }}">

    <meta name="title" content="De Twister" />
    <meta name="description" content="Welkom bij de twister! De beste kantoorvak-, boek- en speelgoedhandel in Amstelveen (Westwijk). Van postpunten zoals DHL en PostNL naar speelgoed, wij hebben het allemaal." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://detwister.com" />
    <meta property="og:title" content="De Twister" />
    <meta property="og:description" content="Welkom bij de twister! De beste kantoorvak-, boek- en speelgoedhandel in Amstelveen (Westwijk). Van postpunten zoals DHL en PostNL naar speelgoed, wij hebben het allemaal." />
    <meta property="og:image" content="https://examples.luciousdev.nl/images/mikalinuxlogo.png" />
    <meta name="theme-color" content="#F34B6C">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://detwister.com" />
    <meta property="twitter:title" content="De Twister" />
    <meta property="twitter:description" content="Welkom bij de twister! De beste kantoorvak-, boek- en speelgoedhandel in Amstelveen (Westwijk). Van postpunten zoals DHL en PostNL naar speelgoed, wij hebben het allemaal." />
    <meta property="twitter:image" content="https://examples.luciousdev.nl/images/mikalinuxlogo.png" />
</head>

<!-- <body class="bg-gray-100 font-sans leading-normal text-gray-800">
    <div class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center">
    </div>
</body> -->

<body>
    {{ $page->template_content }}
</body>

<script>
    AOS.init();
</script>

</html>

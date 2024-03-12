<!doctype html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/app.js" defer></script>
    <title>{{ $page->title }}</title>
    <script src="/js/bootstrap.js"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/deuren.css') }}">

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


<body>
    <div class="container-fluid">
        <div class="desktop">
            <div class="row" style="height:18vh; background-color: #B0A48C;">
                <div class="col d-flex align-items-center justify-content-center">
                    <img class="logo" src="{{ $page->logo }}">
                </div>
            </div>

            <div class="row" style="height:18vh;">
                <div class="col-5 d-flex align-items-center justify-content-center" style="background-color: #B0A48C;">
                    <div class="text-center titles">
                        <p>{{ $page->kop_deur_links }}</p>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5 d-flex align-items-center justify-content-center" style="background-color: #B0A48C;">
                    <div class="text-center titles">
                        <p>{{ $page->kop_deur_rechts }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-5" style="padding:0;">
                    <a href="/home">
                        <img class="door" src="{{ $page->image_left }}">
                    </a>
                </div>
                <div class="col-2"></div>
                <div class="col-5" style="padding:0;">
                    <a href="https://libris.nl/winkels/Twister">
                        <img class="door" src="{{ $page->image_right }}">
                    </a>
                </div>
            </div>
        </div>

        <div class="mobile">
            <div class="row">
                <div class="col">
                    <div class="cards">
                        <img class="logo" src="{{ $page->logo }}" style="max-height: 18vh; width:auto;">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="/home">
                        <div class="card-clickable">
                            <p>{{ $page->kop_deur_links }}</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="cards">
                        <p>Maak een keuze:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="https://libris.nl/winkels/Twister">
                        <div class="card-clickable">
                            <p>{{ $page->kop_deur_rechts }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

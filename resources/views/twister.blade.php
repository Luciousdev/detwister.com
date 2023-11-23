@include('layout')

<!-- NAV BAR -->
<section class="navContainer">
    <header class="header" id="header">
        <nav class="navbar containerNormal">
            <img src="/images/logo.png" alt="" class="brand">
            <div class="burger" id="burger">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </div>
            <div class="menu" id="menu">
                <ul class="menu-inner">
                    @foreach (Statamic::tag('nav:main_navbar')->params(['include_home' => true])->sort('order')->fetch() as $index => $entry)
                        {{-- @if ($index > 0) --}}
                        <li class="menu-item"><a class="menu-link" href="{{ $entry['url']->value() }}">{{ $entry['title']->value() }}</a></li>
                        {{-- @endif --}}
                    @endforeach
                </ul>
            </div>
        </nav>
    </header>
</section>


<!-- HERO -->
<section class="heroContainer" data-aos="fade-down" data-aos-duration="500" data-aos-offset="-100000">
    <div class="container-fluid col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6" data-aos="fade-up" data-aos-delay="400" data-aos-offset="-100000" data-aos-duration="500">
                <img src="{{ $page->hero_image }}" class="d-block mx-lg-auto img-fluid" alt="{{ $page->hero_image->alt }}" loading="lazy">
            </div>
            <div class="col-lg-6 heroTextMain" data-aos="fade-up" data-aos-delay="400" data-aos-offset="-100000" data-aos-duration="500">
                <div class="mb-3">
                    <div>
                        <h1>{{ $page->hero_title }}</h1>
                    </div>
                </div>

                <div class="lc-block mb-3">
                    <div editable="rich">
                        <p class="lead">
                            {{ $page->hero_text }}<br>
                            <span id='typer'></span>
                        </p>
                    </div>
                </div>

                <div class="lc-block d-grid gap-2 d-md-flex justify-content-md-start">
                    <a class="btn btn-light px-4 me-md-2" href="#main-content" role="button">{{ $page->button_text }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <!-- MAIN CONTENT -->

    @if ($page->main_header)
    <section class="" id="main-content">
            <div class="container-fluid container-settings" data-aos="fade-up" data-aos-delay="50">
                <div class="row">
                    <div class="col">
                        <h2 class="">{{ $page->main_header }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col" data-aos="fade-up" data-aos-delay="150">
                        <p>
                            {{ $page->content }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endif


    <!-- Image Carousel -->

    @if ($page->section_header)
    <section>
            <div class="container-fluid container-settings" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col">
                        <h2>{{ $page->section_header }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            {{ $page->image_section_text }}
                        </p>
                    </div>
                </div>
                <div class="carousel" data-carousel data-aos="fade-up" data-aos-delay="200">
                    <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                    <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                    <ul data-slides>
                        <li class="slide" data-active>
                            <img src="{{ $page->first_slider_image }}" alt="{{ $page->first_slider_image->alt }}">
                        </li>
                        @foreach ($page->other_slider_images as $image)
                            <li class="slide">
                                <img src="{{ $image->url }}" alt="{{ $image->alt }}">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    @endif


    <!-- Contact Form -->

    @if($page->contact_form_header)
        <section>
            <div class="container-fluid container-settings" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col">
                        <h2>{{ $page->contact_form_header }}</h2>
                        <p>{{ $page->contact_form_text }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form action="/contact-submit" method="post" id="contactForm" class="styled-form">
                            <textarea name="contactText" form="contactForm" class="large-textarea" placeholder="Laat je creativiteit los." required></textarea>
                            <div class="small-fields">
                                @csrf
                                <input type="text" name="title" placeholder="Onderwerp" required>
                                <input type="email" name="email" placeholder="E-mail" required>
                                <input type="text" name="name" placeholder="Je naam" required>
                                <button type="submit">Verstuur</button>
                            </div>
                        </form>
                    </div>
            </div>
        </section>
    @endif

    {{-- Image Text --}}
    @if($page->image_text_title)
    <section class="image-text <?php if($page->image_text_image_to_the_right){ echo "image-text--image-right";} ?>">
        <div class="container-fluid container-settings">
            <div class="row">
                <div class="col-12 col-lg-6 <?php if($page->image_text_image_to_the_right){ echo "order-2";} ?>">
                    <img src="{{ $page->image_text_image }}" alt="{{ $page->image_text_image->alt }}">
                </div>
                <div class="col">
                    <div class="image-text__text-container">
                        <h2><?php echo $page->image_text_title; ?></h2>
                        <p class="image-text__text"><?php echo $page->image_text_text; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif


    <!-- NEWSLETTER -->

    {{-- <div class="container-fluid containerSpace newsletterContainer" data-aos="fade-down" data-aos-offset="20" data-aos-delay="50">
        <div class="row">
            <div class="col text-center">
                <h2>Nieuwsbrief</h2><br>
                <p>Wilt u op de hoogte blijven van onze aanbiedingen en nieuwe producten? Schrijf u dan in voor onze nieuwsbrief!</p>
            </div>
            <div class="col text-center">
                <p>Je ontvangt maximaal 1x per maand een mail van ons.</p>

                <form action="/subscribe-newsletter" method="post">
                    @csrf
                    <input type="text" name="email" placeholder="email@email.com">
                    <input type="submit" value="➔">
                </form>
            </div>
        </div>
    </div> --}}
</main>

<!-- FOOTER -->
<div class="container-fluid footerContainer" data-aos="fade-down" data-aos-offset="-200" data-aos-delay="100">
    <div class="row" style="padding-top: 50px;">
        <div class="col-md text-center my-auto">
            <h3>Locatie & Contact:</h3>
            <ul>
                @if ($footer->locatie_en_contact)
                    @foreach ($footer->locatie_en_contact as $locatie)
                        <li><?php echo $locatie; ?></li>
                    @endforeach
                @endif
                <li><a href="tel:0206476688">020 - 6476688</a></li>
                <li><a href="mailto:de.twister@planet.nl">de.twister@planet.nl</a></li>
            </ul>
        </div>
        <div class="col-md text-center my-auto openingsTijden">
            <h3>Openingstijden:</h3>
            <ul>
                @if ($footer->openings_tijden)
                    @foreach($footer->openings_tijden as $openings_tijd)
                        <li><?php echo $openings_tijd; ?></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <p>© Copyright 2020 | Powered by Twister</p>
        </div>
    </div>
</div>


<script>
    let typed = new Typed('#typer', {
        strings: ['Wij verkopen kantoorartikelen.', 'Wij verkopen boeken.', 'Wij verkopen speelgoed.', 'En nog veel meer!'],
        typeSpeed: 80,
        backSpeed: 20,
        loop: true
    });
</script>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! settings()->get("scripts_head") !!}

    <title>{{ settings()->get("page_title") }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get("page_description") }}">
    <meta name="robots" content="{{ settings()->get("page_robots") }}">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="DNS-prefetch" href="//fonts.googleapis.com"/>

    @stack('style')
</head>
<body class="{{ !empty($body_class) ? $body_class : '' }}">
{!! settings()->get("scripts_afterbody") !!}

@include('layouts.partials.header')

<div id="slider">
    <a href="#about" class="scroll-to" data-offset="0"><i class="las la-arrow-circle-down"></i></a>
    <img src="{{ asset('/images/header.jpg') }}" width="1920" height="900" alt="" class="w-100">

    <div class="slider-apla">
        <h1>Najnowsza inwestycja <br><b>Białołęka przy ul. Ostródzkiej</b></h1>
    </div>

    <div class="contact-form d-none">
        <div class="row">
            <div class="col-12">
                <label for="formName" class="form-label">Imię</label>
                <input type="text" name="name" class="form-control" id="formName">
            </div>
            <div class="col-6 mt-4">
                <label for="formEmail" class="form-label">E-mail *</label>
                <input type="email" name="email" class="form-control" id="formEmail">
            </div>
            <div class="col-6 mt-4">
                <label for="formPhone" class="form-label">Telefon *</label>
                <input type="tel" name="phone" class="form-control" id="formPhone">
            </div>
            @foreach ($rules as $r)
                <div class="col-12 mt-4">
                    <div class="rodo-rule clearfix">
                        <input name="rule_{{$r->id}}" id="zgoda_{{$r->id}}" value="1" type="checkbox" @if($r->required === 1) class="validate[required]" @endif data-prompt-position="topLeft:0">
                        <label for="zgoda_{{$r->id}}">{!! $r->text !!}</label>
                    </div>
                </div>
            @endforeach

            <div class="col-12">
                <script type="text/javascript">
                    document.write("<button class=\"bttn\" type=\"submit\">ZAMÓW ROZMOWĘ <i class=\"las la-envelope-open-text\"></i></button>");
                </script>
                <noscript><p><b>Do poprawnego działania, Java musi być włączona.</b><p></noscript>
            </div>
        </div>
    </div>
</div>

<section id="about" class="d-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <blockquote class="mb-0">
                    <h2>Najnowsza inwestycja <br><b>Białołęka przy ul. Ostródzkiej</b></h2>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-6 ps-0 pe-5">
                <div class="half-img">
                    <img src="{{ asset('/images/wizualizacja-osiedla.jpg') }}" alt="" width="1200" height="700">
                </div>
            </div>
            <div class="col-6 pe-0 ps-5">
                <div class="d-flex align-items-center h-100 bg-grey">
                    <div class="half-text">
                        <p>Zaprojektowaliśmy budynek wielorodzinny, w którym zostanie zrealizowanych 168 mieszkań oraz lokale usługowe od strony ulicy. Trzykondygnacyjny budynek będzie się charakteryzował ciekawą bryłą, wykorzystującą padające od południa słońce, tak, aby jak najbardziej doświetlić mieszkania.</p>
                        <p>&nbsp;</p>
                        <p>Wewnętrzne półotwarte dziedzińce będą miały zróżnicowane formy i zostaną zagospodarowane zielenią, która wieczorem będzie punktowo podświetlona.</p>
                        <p>&nbsp;</p>
                        <p>Pośród zróżnicowanej zielonej przestrzeni Mieszkańcy będą wypoczywać w przylegających do mieszkań indywidualnych ogródkach.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-0">
    <div class="container-fluid p-0">
        <div class="row flex-row-reverse m-0">
            <div class="col-6 pe-5 ps-5">
                <div class="half-img pe-5">
                    <img src="{{ asset('/images/karuzela-1.jpg') }}" alt="" width="1060" height="1593">
                </div>
            </div>
            <div class="col-6 ps-0 pe-5">
                <div class="d-flex align-items-center h-100 bg-blue">
                    <div class="half-text">
                        <p>Mieszkania zostały zaprojektowane z dużą dbałością o wygodę Mieszkańców. Duże zróżnicowanie rozkładowych mieszkań zapewni Klientom możliwość wyboru pośród mieszkań 2, 3 i 4 pokojowych.</p>
                        <p>&nbsp;</p>
                        <p>Do każdego z mieszkania na pierwszym i drugim piętrze przylegać będą balkony wykończone szklanymi balustradami.</p>
                        <p>&nbsp;</p>
                        <p>Wyróżniająca się elewacja będzie w kolorze antracytowym, nawiązując do nazwy inwestycji ANTRACYT.</p>
                        <p>&nbsp;</p>
                        <p>Części wspólne – hole windowe i korytarze – będą miały nowoczesny charakter i zostaną wykończone w betonie architektonicznym oraz w drewnie.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features" class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="icon-box">
                    <img src="{{ asset('/images/icon-pokoje.svg') }}" alt="Ikonka planu mieszkania">
                    <h2>2, 3 i 4 pokoje</h2>
                </div>
            </div>
            <div class="col-4">
                <div class="icon-box">
                    <img src="{{ asset('/images/icon-standard.svg') }}" alt="Ikonka certyfikatu">
                    <h2>Podwyższony standard</h2>
                </div>
            </div>
            <div class="col-4">
                <div class="icon-box">
                    <img src="{{ asset('/images/icon-winda.svg') }}" alt="Ikonka windy">
                    <h2>Garaż z windą</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<picture>
    <source srcset="{{ asset('/images/parking-z-ladowaniem-baner.webp') }}" type="image/webp">
    <source srcset="{{ asset('/images/parking-z-ladowaniem-baner.jpg') }}" type="image/jpeg">
    <img src="{{ asset('/images/parking-z-ladowaniem-baner.jpg') }}" alt="Możliwość ładowania samochodu w garażu" loading="lazy" width="1919" height="622" class="w-100">
</picture>

<section id="contact" class="p-0">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-7">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-text">
                            <div class="row">
                                <div class="col-4 text-start d-flex align-items-center">
                                    <div>
                                        <p>tel. <a href="tel:226536560">22 653 65 60</a></p>
                                        <p>tel. <a href="tel:226536562">22 653 65 62</a></p>
                                        <p><a href="mailto:warszawa@antczak.pl">warszawa@antczak.pl</a></p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <a href="">
                                        <img src="{{ asset("images/antczak-logo.png") }}" width="580" height="223" alt="ANTCZAK logo">
                                    </a>
                                </div>
                                <div class="col-4 text-end d-flex align-items-center justify-content-end">
                                    <div>
                                        <p>Atrium Plaza,</p>
                                        <p>Al. Jana Pawła II 29</p>
                                        <p>00-867 Warszawa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-12">
                                    <label for="formName" class="form-label">Imię</label>
                                    <input type="text" name="name" class="form-control" id="formName">
                                </div>
                                <div class="col-6 mt-4">
                                    <label for="formEmail" class="form-label">E-mail *</label>
                                    <input type="email" name="email" class="form-control" id="formEmail">
                                </div>
                                <div class="col-6 mt-4">
                                    <label for="formPhone" class="form-label">Telefon *</label>
                                    <input type="tel" name="phone" class="form-control" id="formPhone">
                                </div>
                                @foreach ($rules as $r)
                                    <div class="col-12 mt-4">
                                        <div class="rodo-rule clearfix">
                                            <input name="rule_{{$r->id}}" id="zgoda_{{$r->id}}" value="1" type="checkbox" @if($r->required === 1) class="validate[required]" @endif data-prompt-position="topLeft:0">
                                            <label for="zgoda_{{$r->id}}">{!! $r->text !!}</label>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-12">
                                    <script type="text/javascript">
                                        document.write("<button class=\"bttn\" type=\"submit\">ZAMÓW ROZMOWĘ <i class=\"las la-envelope-open-text\"></i></button>");
                                    </script>
                                    <noscript><p><b>Do poprawnego działania, Java musi być włączona.</b><p></noscript>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9773.339338319072!2d20.99410913250968!3d52.2373015947623!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ed3f560b487f3%3A0xb86d964623fc3473!2sFB%20ANTCZAK%20Warszawa!5e0!3m2!1spl!2spl!4v1684837449631!5m2!1spl!2spl" width="600" height="450" style="border:0;width: 100%;height: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

@include('layouts.partials.footer')

@include('layouts.partials.cookies')

<!-- Styles -->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/styles.min.css') }}" rel="stylesheet">

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/app.min.js') }}" charset="utf-8"></script>

@if(settings()->get("popup_status") == 1)
    <div class="modal" tabindex="-1" id="popModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! settings()->get("popup_text") !!}
                </div>
            </div>
        </div>
    </div>
@endif
<script type="text/javascript">
    $(document).ready(function(){
        $('#slider ul').responsiveSlides({
                auto:true,
                pager:true,
                nav:true,
                timeout:9000,
                random:false,
                speed: 500
            });

        @if(settings()->get("popup_status") == 1)
            const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
                keyboard: false
            });
        @endif
        @if($popup == 1)
        popModal.show();
            setTimeout( function(){
                popModal.hide();
            }, {{ settings()->get("popup_timeout") }} );
        @endif
    });
    @if (session('success')||session('warning'))
    $(window).load(function() {
        const aboveHeight = $('header').outerHeight();
        $('html, body').stop().animate({
            scrollTop: $('.alert').offset().top-aboveHeight
        }, 1500, 'easeInOutExpo');
    });
    @endif
</script>

{!! settings()->get("scripts_beforebody") !!}

</body>
</html>

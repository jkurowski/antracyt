@extends('layouts.page', ['body_class' => 'no-bottom contact-page'])

@section('meta_title', 'Kontakt')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'contact.jpg'])
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="las la-map-marked-alt"></i>
                    </div>
                    <h3>Adres</h3>
                    <p><a href="" target="_blank">ul. Śliska 3 lok. 1B, 00-127 Warszawa</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-0">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="las la-envelope-open-text"></i>
                    </div>
                    <h3>Napisz do nas</h3>
                    <p><a href="mailto:kontakt@sgdevelopment.pl">kontakt@sgdevelopment.pl</a></p>
                </div>
            </div>
            <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="las la-phone"></i>
                    </div>
                    <h3>Zadzwoń do nas</h3>
                    <p><a href="tel:+48607823400">+48 607 823 400</a></p>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-12 col-md-6">
                <div class="contact-box p-3 p-md-4">
                    <picture>
                        <source type="image/webp" srcset="{{asset('/images/biuro.webp') }}">
                        <source type="image/jpeg" srcset="{{asset('/images/biuro.jpg') }}">
                        <img src="{{asset('/images/biuro.jpg') }}" alt="Zdjecie biura sprzedaży" width="786" height="545">
                    </picture>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="contact-box p-3 p-md-4 h-100 w-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2443.8488972493083!2d21.090783999999996!3d52.22796299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTLCsDEzJzQwLjciTiAyMcKwMDUnMjYuOCJF!5e0!3m2!1spl!2spl!4v1681812920396!5m2!1spl!2spl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center pt-4 pt-xl-5 mt-4 mt-xl-5">
            <div class="col-12">
                <div class="section-title text-center mb-4">
                    <span>KONTAKT Z NAMI</span>
                    <h2>MASZ PYTANIA? NAPISZ LUB ZADZWOŃ DO NAS!</h2>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="text-center">
                    <p>Nasza kadra to doświadczeni i wykwalifikowani menadżerowie, projektanci, sprzedawcy i inżynierowie, którzy są w stanie sprostać każdemu wyzwaniu, jakie niesie ze sobą proces inwestycyjny.</p>
                </div>
            </div>
            <div class="col-12 col-xl-9 mt-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        @if (session('success'))
                            <div class="alert alert-success border-0">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning border-0">
                                {{ session('warning') }}
                            </div>
                        @endif
                        <form method="post" id="contact-form" action="" class="validateForm">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12 col-md-4 form-input">
                                    <label for="form_name">Imię <span class="text-danger">*</span></label>
                                    <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-4 form-input col-input-important">
                                    <label for="form_surnames">Nazwisko <span class="text-danger">*</span></label>
                                    <input name="form_surnames" id="form_surnames" class="form-control" type="text" value="{{ old('form_surname') }}">
                                </div>
                                <div class="col-12 col-md-4 form-input">
                                    <label for="form_email">E-mail <span class="text-danger">*</span></label>
                                    <input name="form_email" id="form_email" class="validate[required] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-4 form-input">
                                    <label for="form_phone">Telefon <span class="text-danger">*</span></label>
                                    <input name="form_phone" id="form_phone" class="validate[required] form-control @error('form_phone') is-invalid @enderror" type="text" value="{{ old('form_phone') }}">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-1 form-input">
                                    <label for="form_message">Treść wiadomości <span class="text-danger">*</span></label>
                                    <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                                    @error('message')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="rodo-rules">
                                    @foreach ($rules as $r)
                                        <div class="col-12">
                                            <div class="rodo-rule clearfix">
                                                <input name="rule_{{$r->id}}" id="rule_{{$r->id}}" value="1" type="checkbox" @if($r->required === 1) class="validate[required]" @endif data-prompt-position="topLeft:0">
                                                <label for="zgoda_{{$r->id}}" class="rules-text">{!! $r->text !!}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row row-form-submit">
                                <div class="col-12 pt-3">
                                    <div class="input text-center">
                                        <input name="form_page" type="hidden" value="homepage">
                                        <script type="text/javascript">
                                            document.write("<button class=\"bttn\" type=\"submit\">WYŚLIJ WIADOMOŚĆ</button>");
                                        </script>
                                        <noscript><p><b>Do poprawnego działania, Java musi być włączona.</b><p></noscript>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="googlemap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d747.7781201550663!2d21.002542069720267!3d52.232258161798256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc8c3d482a45%3A0xa91f29e0b8cb9278!2sSD%20Development!5e0!3m2!1spl!2spl!4v1680476515705!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection
@push('scripts')
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
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
@endpush

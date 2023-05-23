<div class="header-holder">
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-lg-2">
                    <div id="logo">
                        <a href="/" aria-label="Link strony głównej">
                            <img src="{{ asset("images/antracyt-logo.png") }}" alt="Logo {{ settings()->get("page_title") }}" width="328" height="73">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-10">
                    <nav class="h-100">
                        <ul class="mb-0 list-unstyled d-block d-lg-flex h-100 justify-content-end ps-0 ps-lg-5">
                            <li><a href="#about" class="scroll-to" data-offset="-40">O inwestycji</a></li>
                            <li><a href="#features" class="scroll-to" data-offset="80">Atuty</a></li>
                            <li><a href="#contact" class="scroll-to" data-offset="0">Kontakt</a></li>
                        </ul>
                        <div id="antczak">
                            <a href="">
                                <img src="{{ asset("images/antczak-logo.png") }}" width="580" height="223" alt="ANTCZAK logo">
                            </a>
                        </div>
                    </nav>
                    <div id="triggermenu" class="d-block d-lg-none"><i class="las la-bars"></i> MENU</div>
                </div>
            </div>
        </div>
    </header>
</div>

<aside>
    <ul class="mb-0 list-unstyled socials">
        @if(settings()->get("social_facebook"))
        <li class="socials-fb"><a href="{{ settings()->get("social_facebook") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Facebook"><i class="lab la-facebook-f"></i></a></li>
        @endif
        @if(settings()->get("social_youtube"))
        <li class="socials-yt"><a href="{{ settings()->get("social_youtube") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Youtube"><i class="lab la-youtube"></i></a></li>
        @endif
        @if(settings()->get("social_linkedin"))
        <li class="socials-linkedin"><a href="{{ settings()->get("social_linkedin") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Linkedin"><i class="lab la-linkedin-in"></i></a></li>
        @endif
        @if(settings()->get("social_instagram"))
        <li class="socials-instagram"><a href="{{ settings()->get("social_instagram") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Instagram"><i class="lab la-instagram"></i></a></li>
        @endif
        <li class="socials-contact">
            <a href="{{ route('contact.index') }}" aria-label="Link do strony Kontakt">
                <i class="las la-phone"></i>
            </a>
        </li>
    </ul>
</aside>
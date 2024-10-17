<!DOCTYPE html>
<html @if(App::getLocale() == 'ru') lang="ru" @elseif(App::getLocale() == 'kk')  lang="kz"  @else  lang="en" @endif>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Almax Asia</title>

    <link rel="stylesheet" href="/assets/css/reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="/assets/css/main.css" />
</head>
<body>
<header class="header hedaer_container">
    <div class="logo"><a href="/"><img src="/assets/img/Logo.svg" alt="logo" /></a></div>
    <div class="burger-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <?php
    $contact = \App\Models\Contact::first();
    ?>
    <div class="icons">
        <a href="{{ route('home') }}" class="icon"><img src="/assets/img/Home.svg" alt="Home" /></a>
        <a href="{{ $contact->vk }}" class="icon"><img src="/assets/img/vk.svg" alt="vk" /></a>
        <a href="{{ $contact->telegram }}" class="icon"><img src="/assets/img/tg.svg" alt="telegram" /></a>
        <a href="#" class="icon"><img src="/assets/img/Ru.svg" alt="Ru" /></a>
    </div>
    <nav class="nav-menu" @if(App::getLocale()=='kk') style="gap: 40px;margin-right: 30px;" @endif>
        @if(App::getLocale() == 'ru')  <a href="{{ route('home') }}">О компании </a>
        @elseif(App::getLocale() == 'kk')
            <a href="{{ route('home') }}">Компания туралы</a>

        @else
            <a href="{{ route('home') }}">About the company</a>

        @endif

        <div class="dropdown">
            <a href="#services" class="dropbtn">
                @if(App::getLocale() == 'ru')  <a href="{{ route('home') }}">Услуги</a>
                @elseif(App::getLocale() == 'kk')
                    <a href="{{ route('home') }}">Қызметтер</a>
                @else
                    <a href="{{ route('home') }}">Services</a>
                @endif

                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.01168 5.5L0.671377 0.25L9.35199 0.250001L5.01168 5.5Z" fill="#DA1931" />
                </svg></a>
            <div class="dropdown-content">
                @if(App::getLocale() == 'ru')
                    <a href="{{ route('page2') }}">Налоговое и бухгалтерское консультирование в странах ЕАЭС</a>
                    <a href="{{ route('page3') }}">Управление и операции с недвижимым имуществом в странах ЕАЭС
                    </a>
                    <a href="{{ route('page4') }}">Международные консалтинговые услуги в странах BRICS
                    </a>
                    <a href="{{ route('page5') }}">Управление зарубежными проектами в странах BRICS</a>
                    <a href="{{ route('page6') }}">Big Data</a>
                @elseif(App::getLocale() == 'kk')
                        <a href="{{ route('page2') }}">ЕАЭО елдерінде салық және бухгалтерлік есеп бойынша кеңес беру</a>
                    <a href="{{ route('page3') }}">ЕАЭО елдеріндегі жылжымайтын мүлікті басқару және онымен операциялар</a>
                    <a href="{{ route('page4') }}">BRICS елдеріндегі халықаралық консалтингтік қызметтер</a>
                    <a href="{{ route('page5') }}">БРИКС елдерінде шетелдік жобаларды басқару</a>
                    <a href="{{ route('page6') }}">Big Data</a>
                @else
                    <a href="{{ route('page2') }}">Tax and accounting consulting in the EAEU countries</a>
                    <a href="{{ route('page3') }}">Management and operations with immovable property in the EAEU countries</a>
                    <a href="{{ route('page4') }}">International consulting services in BRICS countries</a>
                    <a href="{{ route('page5') }}">Management of foreign projects in BRICS countries</a>
                    <a href="{{ route('page6') }}">Big Data</a>
                @endif

            </div>
        </div>
        @if(App::getLocale() == 'ru')
            <a href="#contacts">Контакты</a>
            @elseif(App::getLocale() == 'kk')
                <a href="#contacts">Контактілер</a>
            @else
                <a href="#contacts">Contacts</a>
            @endif


        <div class="dropdown">
            <a href="#services" class="dropbtn lang" style="text-transform: capitalize">{{  App::getLocale() == 'kk' ? 'kz' : App::getLocale() }} <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.01168 5.5L0.671377 0.25L9.35199 0.250001L5.01168 5.5Z" fill="#DA1931" />
                </svg></a>
            <div class="dropdown-content lang">
                <a href="{{ route('switchLang', ['lang' => 'ru']) }}" data-lang="ru">RU</a>
                <a href="{{ route('switchLang', ['lang' => 'kk']) }}" data-lang="kk">KZ</a>
                <a href="{{ route('switchLang', ['lang' => 'en']) }}" data-lang="en">EN</a>
            </div>
        </div>
    </nav>
    @if(App::getLocale() == 'ru')
        <button class="contact-button">Свяжитесь с нами</button>
    @elseif(App::getLocale() == 'kk')
        <button class="contact-button">Бізбен хабарласыңыз</button>
    @else
        <button class="contact-button">Contact us</button>
    @endif

</header>

@yield('content')

<footer class="footer-section">
    <div class="container container-footer">
        @if(App::getLocale() == 'ru')
            <div class="column left-columns">
                <div class="logo">
                    <img src="/assets/img/Logo.svg" alt="Логотип" />
                </div>
                <p class="copyright">Авторское право © 2025 almaxasia.kz</p>
                <a href="#privacy-policy" class="privacy-link"
                >Политика конфиденциальности</a
                >
            </div>
        @elseif(App::getLocale() == 'kk')
            <div class="column left-columns">
                <div class="logo">
                    <img src="/assets/img/Logo.svg" alt="Логотип" />
                </div>
                <p class="copyright">Авторлық құқық © 2025 almaxasia.kz </p>
                <a href="#privacy-policy" class="privacy-link">Құпиялылық саясаты</a>
            </div>
        @else
            <div class="column left-columns">
                <div class="logo">
                    <img src="/assets/img/Logo.svg" alt="Логотип" />
                </div>
                <p class="copyright">Copyright © 2025 almaxasia.kz</p>
                <a href="#privacy-policy" class="privacy-link">Privacy policy</a>
            </div>

        @endif
        @if(App::getLocale() == 'ru')
            <div class="column right-columns">
                <div class="menu">
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a style="color:inherit" href="{{ route('home') }}">
                                О компании!
                            </a>
                        </li>
                        <li class="menu-item">
                            <a style="color:inherit" href="{{ route('page2') }}">
                                Услуги
                            </a>
                        </li>
                        <li class="menu-item">Контакты</li>
                    </ul>
                </div>

                <div class="address">
                    <p class="address-text">Almax Asia</p>
                    <p class="address-text">
                        {{ $contact->address }}
                    </p>
                </div>
                <div class="contacts">
                    <p class="contacts-text">
                        {{ $contact->phone1 }} <br />
                        {{ $contact->phone2 }}
                    </p>
                    <p class="contacts-text">{{ $contact->email }}</p>
                </div>
                <div class="social-media">
                    <a href="{{ $contact->vk }}" class="social-link"
                    ><img src="/assets/img/vk_b.svg" alt=""
                        /></a>
                    <a href="{{ $contact->telegram }}" class="social-link"
                    ><img src="/assets/img/tg_b.svg" alt=""
                        /></a>
                    <a href="#" class="social-link"
                    ><img src="/assets/img/Ru_b.svg" alt=""
                        /></a>
                </div>
            </div>

        @elseif(App::getLocale() == 'kk')
            <div class="column right-columns">
                <div class="menu">
                    <ul class="menu-list">
                        <li class="menu-item"> Компания туралы</li>
                        <li class="menu-item">Қызметтер</li>
                        <li class="menu-item">Контактілер</li>
                    </ul>
                </div>

                <div class="address">
                    <p class="address-text">Almax Asia</p>
                </div>
                <div class="contacts">
                    <p class="contacts-text">
                        {{ $contact->phone1 }} <br />
                        {{ $contact->phone2 }}
                    </p>
                    <p class="contacts-text">{{ $contact->email }}</p>
                </div>
                <div class="social-media">
                    <a href="{{ $contact->vk }}" class="social-link"
                    ><img src="/assets/img/vk_b.svg" alt=""
                        /></a>
                    <a href="{{ $contact->telegram }}" class="social-link"
                    ><img src="/assets/img/tg_b.svg" alt=""
                        /></a>
                    <a href="#" class="social-link"
                    ><img src="/assets/img/Ru_b.svg" alt=""
                        /></a>
                </div>
            </div>
        @else
            <div class="column right-columns">
                <div class="menu">
                    <ul class="menu-list">
                        <li class="menu-item">About the company</li>
                        <li class="menu-item">Services</li>
                        <li class="menu-item">Contacts</li>
                    </ul>
                </div>

                <div class="address">
                    <p class="address-text">Almax Asia</p>
                </div>
                <div class="contacts">
                    <p class="contacts-text">
                        {{ $contact->phone1 }} <br />
                        {{ $contact->phone2 }}
                    </p>
                    <p class="contacts-text">{{ $contact->email }}</p>
                </div>
                <div class="social-media">
                    <a href="{{ $contact->vk }}" class="social-link"
                    ><img src="/assets/img/vk_b.svg" alt=""
                        /></a>
                    <a href="{{ $contact->telegram }}" class="social-link"
                    ><img src="/assets/img/tg_b.svg" alt=""
                        /></a>
                    <a href="#" class="social-link"
                    ><img src="/assets/img/Ru_b.svg" alt=""
                        /></a>
                </div>
            </div>
        @endif
    </div>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="/assets/js/main.js"></script>
<script>
    document.querySelector('.burger-menu').addEventListener('click', function() {
        document.querySelector('.nav-menu').classList.toggle('active');
        document.querySelector('.contact-button').classList.toggle('actives');
        document.querySelector('.icons').classList.toggle('activeses');
    });


</script>

</body>
</html>
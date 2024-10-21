@extends('layouts.base')
@section('content')
    <section class="main-section container page-2">
            <div class="content">
                <h2 class="content-title"     data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="50"
                    data-aos-duration="1000">{{$page->title}}</h2>
                <p class="content-description"     data-aos="fade-up"
                   data-aos-offset="200"
                   data-aos-delay="50"
                   data-aos-duration="1000">{!! $page->content  !!}</p>
            </div>

        <div class="image">
            <img src="/assets/img/page5.png " alt="Описание изображения" />
        </div>
        <div class="scroll-arrow"></div>

    </section>

    <section class="offer container">
        @if(App::getLocale() == 'ru')
            <h1 class="offer__title">Перечень услуг:</h1>
        @elseif(App::getLocale() == 'en')
            <h1 class="offer__title">List of services:</h1>
        @else
            <h1 class="offer__title">Қызметтер тізімі:</h1>
        @endif

        <div class="offer__cards card_page5"     data-aos="fade-up"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000">
                @foreach($pageElements as $page)
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_11.svg" alt="" />
                    </div>
                    <div class="offer__card-title">
                        {{$page->title}}
                    </div>
                    <div class="offer__card-description">{{$page->content}}</div>
                </div>

                @endforeach


        </div>
    </section>

    @if(App::getLocale() == 'ru')
        <div class="advantages advantages-page3 container"   data-aos="fade-up"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000">
            <h2 class="advantages__title mar-b">Готовы начать сотрудничество?</h2>
            <div class="advantages_wrap nogap">
                <div class="block_advgs page4-avd">
                    <p>
                        Мы предлагаем широкий спектр международных консалтинговых услуг для
                        выхода на рынки стран BRICS. Закажите консультацию онлайн, и наши
                        эксперты помогут вам эффективно реализовать ваши бизнес-цели.
                    </p>
                    <button class="advantages__button">Заказать услугу онлайн</button>
                </div>
                <img
                        src="/assets/img/comp.png"
                        alt="Изображение"
                        class="advantages__image"
                />
            </div>
        </div>
    @elseif(App::getLocale() == 'en')
        <div class="advantages advantages-page3 container"   data-aos="fade-up"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000">
            <h2 class="advantages__title mar-b">Are you ready to start cooperation?</h2>
            <div class="advantages_wrap nogap">
                <div class="block_advgs page4-avd">
                    <p>We offer a wide range of international consulting services for
                        access to the markets of the BRICS countries. Order a consultation online, and our
                        Experts will help you effectively achieve your business goals.</p>
                    <button class="advantages__button">Order the service online</button>
                </div>
                <img
                        src="/assets/img/comp.png"
                        alt="Изображение"
                        class="advantages__image"
                />
            </div>
        </div>
    @else
        <div class="advantages advantages-page3 container"   data-aos="fade-up"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000">
            <h2 class="advantages__title mar-b">Ынтымақтастықты бастауға дайынсыз ба?</h2>
            <div class="advantages_wrap nogap">
                <div class="block_advgs page4-avd">
                    <p>Біз халықаралық консалтингтік қызметтердің кең спектрін ұсынамыз
                        BRICS елдерінің нарықтарына шығу. Кеңес алуға онлайн тапсырыс беріңіз және біздің
                        сарапшылар сіздің бизнес мақсаттарыңызды тиімді жүзеге асыруға көмектеседі.</p>
                    <button class="advantages__button">Қызметке онлайн тапсырыс беру</button>
                </div>
                <img
                        src="/assets/img/comp.png"
                        alt="Изображение"
                        class="advantages__image"
                />
            </div>
        </div>
    @endif
@endsection
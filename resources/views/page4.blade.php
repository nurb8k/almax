@extends('layouts.base')
@section('content')
    <section class="main-section container page-2">
        <div class="content"     data-aos="fade-up"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000">
            <h2 class="content-title"     data-aos="fade-up"
                data-aos-offset="200"
                data-aos-delay="50"
                data-aos-duration="1000">
                {{ $page->title }}
            </h2>
            <div class="content-description" style="color:white !important;">
                {!!  $page->content  !!}
            </div>
        </div>
        <div class="image">
            <img src="{{asset('storage/' . $page->image)}} " alt="Описание изображения" />
        </div>
        <div class="scroll-arrow"></div>

    </section>

    <section class="offer container">
        @if(App::getLocale() == 'ru')
            <h1 class="offer__title">Что мы предлагаем:</h1>
        @elseif(App::getLocale() == 'en')
            <h1 class="offer__title">What we offer:</h1>
        @else
            <h1 class="offer__title">Біз не ұсынамыз:</h1>
        @endif
        <div class="offer__cards card_page4">
            @foreach($pageElements as $key => $page)
                @if($loop->odd)
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">{{$page->title}}</div>
                        <div class="offer__card-description">{{$page->content}}</div>
                    </div>
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                       <img src="{{$page->image != null ? asset('storage/' . $page->image): "/assets/img/pic_11.png"}}" alt="" />
                    </div>
                @else
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <img src="{{$page->image != null ? asset('storage/' . $page->image): "/assets/img/pic_11.png"}}" alt="" />
                    </div>
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">{{$page->title}}</div>
                        <div class="offer__card-description">{{$page->content}}</div>
                    </div>
                @endif
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
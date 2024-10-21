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
            <h2 class="advantages__title mar-b">Ынтымақтастықты <br> бастауға дайынсыз ба?</h2>
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

    <div id="popup" class="popup" style="display:none;">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h2>Закажите услугу онлайн</h2>
            <p>Заполните форму, и наш специалист свяжется с вами для подтверждения заказа и обсуждения деталей услуги.</p>
            <form class="contact-form" action="{{ route('send') }}" method="post">
                @csrf
                @method('POST')
                @if(App::getLocale() == 'ru')
                    <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Имя / Компания *"
                            class="form-input"
                            required
                    />
                    <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Телефон *"
                            class="form-input"
                            required
                    />
                    <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Ваша почта *"
                            class="form-input"
                            required
                    />

                @elseif(App::getLocale() == 'en')
                    <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Name / Company *"
                            class="form-input"
                            required
                    />
                    <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Phone *"
                            class="form-input"
                            required
                    />
                    <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Email *"
                            class="form-input"
                            required
                    />
                @else
                    <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Атыңыз / Компания *"
                            class="form-input"
                            required
                    />
                    <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Телефон *"
                            class="form-input"
                            required
                    />
                    <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Сіздің пошта *"
                            class="form-input"
                            required
                    />
                @endif
                <label for="consent" class="form-label">
                    <input
                            type="checkbox"
                            id="consent"
                            name="consent"
                            class="form-checkbox"
                            required
                    />
                    @if(App::getLocale() == 'ru')
                        Я согласен на обработку моих персональных данных

                    @elseif(App::getLocale() == 'en')

                        I agree to the processing of my personal data

                    @else

                        Менің жеке деректерімді өңдеуге келісемін

                    @endif

                </label>

                <button type="submit" class="form-button">
                    @if(App::getLocale() == 'ru')
                        Отправить
                    @elseif(App::getLocale() == 'en')
                        Send
                    @else
                        Жіберу
                    @endif
                </button>
            </form>
        </div>
    </div>

@endsection
@extends('layouts.base')
@section('content')
    <section class="main-section container page-2">
        @if(App::getLocale() == 'ru')
            <div class="content">
                <h2 class="content-title"     data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="50"
                    data-aos-duration="1000">Разработка стратегии управления проектами</h2>
                <p class="content-description"     data-aos="fade-up"
                   data-aos-offset="200"
                   data-aos-delay="50"
                   data-aos-duration="1000">
                    Мы предоставляем комплексные услуги по управлению проектами в странах
                    BRICS, гарантируя успешную реализацию проектов с учётом региональных
                    особенностей. Наши эксперты поддерживают ваши инициативы на всех
                    стадиях — от планирования до контроля исполнения.
                </p>
            </div>
        @elseif(App::getLocale() == 'en')
            <div class="content">
                <h2 class="content-title"     data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="50"
                    data-aos-duration="1000">Development of a project management strategy</h2>
                <p class="content-description"     data-aos="fade-up"
                   data-aos-offset="200"
                   data-aos-delay="50"
                   data-aos-duration="1000">We provide comprehensive project management services in the following countries
                    BRICS, ensuring the successful implementation of projects taking into account regional
                    features. Our experts support your initiatives at all levels
                    stages — from planning to execution control.</p>
            </div>
        @else
            <div class="content">
                <h2 class="content-title"     data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="50"
                    data-aos-duration="1000">Жобаларды басқару стратегиясын әзірлеу</h2>
                <p class="content-description"     data-aos="fade-up"
                   data-aos-offset="200"
                   data-aos-delay="50"
                   data-aos-duration="1000">Біз елдердегі жобаларды басқару бойынша кешенді қызметтерді ұсынамыз
                    BRICS, аймақтық жобаларды ескере отырып, жобаларды сәтті жүзеге асыруға кепілдік береді
                    ерекшеліктері. Біздің сарапшылар сіздің барлық бастамаларыңызды қолдайды
                    кезеңдері-жоспарлаудан бастап орындалуын бақылауға дейін.</p>
            </div>
        @endif

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
            @if(App::getLocale() == 'ru')
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_11.svg" alt="" />
                    </div>
                    <div class="offer__card-title">
                        Разработка стратегии управления проектами
                    </div>
                    <div class="offer__card-description">
                        Мы создаём индивидуальные стратегии для успешного выполнения
                        проектов, адаптированные под правовые, экономические и культурные
                        особенности стран BRICS.
                    </div>
                </div>
            @elseif(App::getLocale() == 'en')
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_11.svg" alt="" />
                    </div>
                    <div class="offer__card-title">
                        Development of a project management strategy
                    </div>
                    <div class="offer__card-description">We create customized strategies for successful execution of projects adapted to legal, economic and cultural requirements of the BRICS countries.</div>
                </div>
            @else
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_11.svg" alt="" />
                    </div>
                    <div class="offer__card-title">
                        Жобаларды басқару стратегиясын әзірлеу
                    </div>
                    <div class="offer__card-description">Біз сәтті орындау үшін теңшелген стратегияларды жасаймыз
                        құқықтық, экономикалық және мәдени бейімделген жобалар
                        BRICS елдерінің ерекшеліктері.</div>
                </div>
            @endif

            @if(App::getLocale() == 'ru')
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Планирование, организация и контроль выполнения проектов
                        </div>
                        <div class="offer__card-description">
                            Обеспечиваем комплексное управление проектами, начиная с
                            формирования планов и графиков, заканчивая мониторингом всех этапов
                            исполнения для соблюдения сроков и бюджета.
                        </div>
                    </div>
            @elseif(App::getLocale() == 'en')
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Planning, organizing and monitoring the implementation of projects
                        </div>
                        <div class="offer__card-description">We provide comprehensive project management, from the formation of plans and schedules to monitoring all stages of implementation to ensure compliance with deadlines and budget.</div>
                    </div>
            @else
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Жобаның орындалуын жоспарлау, ұйымдастыру және бақылау
                        </div>
                        <div class="offer__card-description">бастап біз кешенді жобаларды басқаруды қамтамасыз етеміз
                            барлық кезеңдердің мониторингімен аяқталатын жоспарлар мен кестелерді қалыптастыру
                            мерзімдер мен бюджетке сәйкес орындалуы.</div>
                    </div>
            @endif

            @if(App::getLocale() == 'ru')
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">Управление рисками</div>
                        <div class="offer__card-description">
                            Анализируем и минимизируем возможные правовые, экономические и
                            политические риски, характерные для работы в странах BRICS, создавая
                            устойчивые механизмы защиты.
                        </div>
                    </div>
            @elseif(App::getLocale() == 'en')
                <div class="offer__card"     data-aos="fade-up"
                     data-aos-offset="200"
                     data-aos-delay="50"
                     data-aos-duration="1000">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_11.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Risk management</div>
                    <div class="offer__card-description">We analyze and minimize possible legal, economic and political risks typical for working in BRICS countries, creating sustainable protection mechanisms.</div>
                </div>
            @else
                <div class="offer__card"     data-aos="fade-up"
                     data-aos-offset="200"
                     data-aos-delay="50"
                     data-aos-duration="1000">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_11.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Тәуекелдерді басқару</div>
                    <div class="offer__card-description">Біз талдау және ықтимал құқықтық, экономикалық және барынша азайтамыз
                        құру, БРИКС елдерінде жұмыс істеуге тән саяси тәуекелдер
                        тұрақты қорғаныс механизмдері.</div>
                </div>

            @endif

            @if(App::getLocale() == 'ru')
                <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Разрешение конфликтов и управление взаимоотношениями
                        </div>
                        <div class="offer__card-description">
                            Предоставляем консультации по предотвращению конфликтов и управляем
                            взаимодействием с местными партнёрами и клиентами, обеспечивая
                            бесперебойную работу и поддержку доверительных отношений.
                        </div>
                </div>
            @elseif(App::getLocale() == 'en')
               <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Conflict resolution and relationship management
                        </div>
                        <div class="offer__card-description">We provide conflict prevention advice and manage interactions with local partners and clients, ensuring smooth operations and maintaining trusting relationships.</div>
                </div>
            @else
                <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Қақтығыстарды шешу және қарым-қатынасты басқару
                        </div>
                        <div class="offer__card-description">Біз қақтығыстардың алдын алу және басқару бойынша кеңестер береміз
                            қамтамасыз ету, жергілікті серіктестермен және клиенттермен өзара әрекеттесу
                            үзіліссіз жұмыс және сенімді қарым-қатынастарды қолдау.</div>
                    </div>
            @endif

            @if(App::getLocale() == 'ru')
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Координация международных команд и подрядчиков
                        </div>
                        <div class="offer__card-description">
                            Обеспечиваем бесперебойную координацию между проектными командами,
                            подрядчиками и местными партнёрами, улучшая коммуникацию и
                            синхронизацию действий на всех уровнях.
                        </div>
                    </div>
            @elseif(App::getLocale() == 'en')
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Coordination of international teams and contractors
                        </div>
                        <div class="offer__card-description">We ensure seamless coordination between project teams, contractors and local partners, improving communication and synchronization of actions at all levels.</div>
                    </div>
            @else
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Халықаралық топтар мен мердігерлерді үйлестіру
                        </div>
                        <div class="offer__card-description">Біз жобалық топтар арасындағы үйлесімді үйлестіруді қамтамасыз етеміз,
                            мердігерлер мен жергілікті серіктестер, байланысты жақсарту және
                            барлық деңгейдегі әрекеттерді синхрондау.</div>
                    </div>

            @endif

            @if(App::getLocale() == 'ru')
            <div class="offer__card"     data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer_11.svg" alt="" />
                </div>
                <div class="offer__card-title">
                    Соответствие нормативным требованиям
                </div>
                <div class="offer__card-description">
                    Помогаем обеспечить полное соответствие проектной деятельности
                    местным законам и нормативным требованиям в странах BRICS,
                    минимизируя риски правовых нарушений.
                </div>
            </div>
            @elseif(App::getLocale() == 'en')
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Compliance with regulatory requirements
                        </div>
                        <div class="offer__card-description">We help ensure full compliance with the project activity
                            local laws and regulations in the BRICS countries,
                            minimizing the risk of legal violations.</div>
                    </div>
            @else
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Нормативтік талаптарға сәйкестік
                        </div>
                        <div class="offer__card-description">Біз жоба әрекеттеріне толық сәйкестікті қамтамасыз етуге көмектесеміз
                            БРИКС елдеріндегі жергілікті заңдар мен ережелер,
                            құқық бұзушылық тәуекелдерін азайту.</div>
                    </div>
            @endif
                @if(App::getLocale() == 'ru')
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Логистика, поставки и таможенное оформление
                        </div>
                        <div class="offer__card-description">
                            Консультируем по вопросам международной логистики и таможенного
                            оформления, оптимизируя цепочки поставок и снижая временные и
                            финансовые затраты.
                        </div>
                    </div>
                @elseif(App::getLocale() == 'en')
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Logistics, delivery and customs clearance
                        </div>
                        <div class="offer__card-description">We consult on issues of international logistics and customs
                            processing, optimizing the supply chain and reducing time
                            financial costs.</div>
                    </div>
                @else
                    <div class="offer__card"     data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            Логистика, жабдықтау және кедендік ресімдеу
                        </div>
                        <div class="offer__card-description">Біз халықаралық логистика және кедендік мәселелер бойынша кеңес береміз
                            тазарту, жеткізу тізбегін оңтайландыру және уақытты қысқарту және
                            қаржылық шығындар.</div>
                    </div>
                @endif

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
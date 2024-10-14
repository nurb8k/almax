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
                {{ $page4->title }}
            </h2>
            <div class="content-description" style="color:white !important;">
                {!!  $page4->content  !!}
            </div>
        </div>
        <div class="image">
            <img src="/assets/img/page4.png " alt="Описание изображения" />
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
            <div class="offer__card"     data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer_11.svg" alt="" />
                </div>
                @if(App::getLocale() == 'ru')
                    <div class="offer__card-title">Управление зарубежными проектами</div>
                    <div class="offer__card-description">
                        Мы предлагаем комплексные услуги консультирования на этапе
                        переговоров и предпроектных работ. Наши решения включают менеджмент
                        проектов, структурирование задач, планирование и контроль
                        выполнения. Мы организуем командные роли и взаимодействия, управляем
                        ресурсами, проводим подбор, контроль и обучение персонала,
                        обеспечиваем качественные коммуникации, управление рисками, а также
                        внедрение современных технологий. Оказываем поддержку в вопросах
                        социальной и экологической ответственности, открытии зарубежных
                        представительств, анализе и экспансии рынков сбыта. Наш опыт в
                        международном проектном менеджменте повышает эффективность работы на
                        разных рынках и культурах, гарантируя успех и инновации.
                    </div>
                @elseif(App::getLocale() == 'en')
                    <div class="offer__card-title">Management of foreign projects</div>
                    <div class="offer__card-description">We offer comprehensive consulting services at the stage of
                        negotiations and pre-design work. Our solutions include management
                        projects, task structuring, planning and control
                        execution. We organize team roles and interactions, manage
                        resources, we carry out the selection, control and training of personnel,
                        we provide high-quality communications, risk management, and
                        the introduction of modern technologies. We provide support in the following matters
                        social and environmental responsibility, the opening of foreign
                        representative offices, analysis and expansion of sales markets. Our experience in
                        international project management improves the efficiency of work in
                        different markets and cultures, guaranteeing success and innovation.</div>
                @else
                    <div class="offer__card-title">Шетелдік жобаларды басқару</div>
                    <div class="offer__card-description">Біз кезең бойынша кешенді кеңес беру қызметтерін ұсынамыз
                        келіссөздер және жобалау алдындағы жұмыстар. Біздің шешімдерімізге менеджмент кіреді
                        жобалар, тапсырмаларды құрылымдау, жоспарлау және бақылау
                        орындау. Біз командалық рөлдер мен өзара әрекеттесулерді ұйымдастырамыз, басқарамыз
                        ресурстармен, қызметкерлерді іріктеу, бақылау және оқытуды жүргіземіз,
                        біз сапалы коммуникацияларды, тәуекелдерді басқаруды, сондай-ақ
                        заманауи технологияларды енгізу. Мәселелерде қолдау көрсетеміз
                        Әлеуметтік және экологиялық жауапкершілік, шетелдік
                        өткізу нарықтарын талдау және кеңейту. Біздің тәжірибеміз
                        халықаралық жобалық менеджмент жұмыс тиімділігін арттырады
                        әр түрлі нарықтар мен Мәдениеттер, сәттілік пен инновацияға кепілдік береді.</div>
                @endif

            </div>
            <div class="offer__card"     data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <img src="/assets/img/pic_11.png" alt="" />
            </div>
            <div class="offer__card"     data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <img src="/assets/img/pic_22.png" alt="" />
            </div>
            <div class="offer__card"     data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer_14.svg" alt="" />
                </div>
                @if(App::getLocale() == 'ru')
                    <div class="offer__card-title">Международные закупки</div>
                    <div class="offer__card-description">
                        Эффективная организация международных закупок играет ключевую роль в
                        обеспечении устойчивого успеха компании в условиях усиливающейся
                        конкуренции. Это требует постоянных и, порой, значительных усилий по
                        снижению затрат, оптимизации производственных процессов, улучшению
                        качества услуг и логистики, а также быстрого реагирования на запросы
                        клиентов и изменения рыночных требований.
                    </div>
                @elseif(App::getLocale() == 'en')
                    <div class="offer__card-title">International procurement</div>
                    <div class="offer__card-description">Effective organization of international procurement plays a key role in
                        ensuring the sustainable success of the company in an increasingly
                        competition. This requires constant and, at times, significant efforts to
                        cost reduction, optimization of production processes, improvement
                        quality of services and logistics, as well as quick response to requests
                        customers and changes in market requirements.</div>
                @else
                    <div class="offer__card-title">Халықаралық сатып алулар</div>
                    <div class="offer__card-description">Халықаралық сатып алулар
                        Халықаралық сатып алуды тиімді ұйымдастыру шешуші рөл атқарады
                        компанияның тұрақты табысын күшейту жағдайында қамтамасыз ету
                        бәсекелестік. Бұл тұрақты және кейде айтарлықтай күш-жігерді қажет етеді
                        шығындарды азайту, өндірістік процестерді оңтайландыру, жақсарту
                        қызмет көрсету және логистика сапасы, сондай-ақ сұраныстарға жылдам жауап беру
                        клиенттер мен нарықтық талаптардың өзгеруі.

                        Халықаралық сатып алуды тиімді ұйымдастыру шешуші рөл атқарады
                        компанияның тұрақты табысын күшейту жағдайында қамтамасыз ету
                        бәсекелестік. Бұл тұрақты және кейде айтарлықтай күш-жігерді қажет етеді
                        шығындарды азайту, өндірістік процестерді оңтайландыру, жақсарту
                        қызмет көрсету және логистика сапасы, сондай-ақ сұраныстарға жылдам жауап беру
                        клиенттер мен нарықтық талаптардың өзгеруі.</div>
                @endif

            </div>
            <div class="offer__card"     data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer_15.svg" alt="" />
                </div>
                @if(App::getLocale() == 'ru')
                    <div class="offer__card-title">Консалтинг по ВЭД</div>
                    <div class="offer__card-description">
                        Мы предоставляем консультации по всем аспектам ВЭД, включая правовое
                        и таможенное регулирование, оптимизацию логистики и налоговой
                        нагрузки, а также анализ и выход на международные рынки. Наши услуги
                        охватывают подбор надежных зарубежных партнеров, сопровождение
                        внешнеторговых контрактов, управление валютными рисками и
                        сопровождение сделок в разных юрисдикциях.
                    </div>
                @elseif(App::getLocale() == 'en')
                    <div class="offer__card-title">Consulting on foreign economic activity</div>
                    <div class="offer__card-description">We provide consultations on all aspects of foreign economic activity, including legal
                        and customs regulation, optimization of logistics and tax
                        loads, as well as analysis and access to international markets. Our services
                        they cover the selection of reliable foreign partners, support
                        foreign trade contracts, currency risk management and
                        transaction support in different jurisdictions.</div>
                @else
                    <div class="offer__card-title">СЭҚ бойынша Консалтинг</div>
                    <div class="offer__card-description">Біз СЭҚ-тың барлық аспектілері, соның ішінде құқықтық аспектілері бойынша кеңес береміз
                        және кедендік реттеу, логистика мен салықты оңтайландыру
                        жүктемелер, сондай-ақ талдау және халықаралық нарықтарға шығу. Біздің қызметтер
                        сенімді шетелдік серіктестерді таңдауды, сүйемелдеуді қамтиды
                        сыртқы сауда келісімшарттарын басқару, валюталық тәуекелдерді басқару және
                        әр түрлі юрисдикциялардағы мәмілелерді сүйемелдеу.</div>
                @endif

            </div>
            <div class="offer__card"     data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <img src="/assets/img/pic_13.png" alt="" />
            </div>
            <div class="offer__card"     data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <img src="/assets/img/pic_44.png" alt="" />
            </div>
            <div class="offer__card"     data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer_14.svg" alt="" />
                </div>
                @if(App::getLocale() == 'ru')
                    <div class="offer__card-title">Инвестиционный консалтинг</div>
                    <div class="offer__card-description">
                        Инвестиционно-финансовый консалтинг от Almax Asia направлен на выбор
                        оптимальных источников финансирования, что является ключевой задачей
                        для бизнеса. Будущее компании, её конкурентоспособность и возможные
                        риски напрямую зависят от привлечённых инвестиций. Одним из наиболее
                        серьёзных рисков является утрата контроля над бизнесом, что может
                        произойти в результате враждебного поглощения или неспособности
                        компании выполнить обязательства перед инвесторами. Эти аспекты
                        крайне важны для учёта при планировании привлечения капитала в
                        будущем.
                    </div>
                @elseif(App::getLocale() == 'en')
                    <div class="offer__card-title">Investment consulting</div>
                    <div class="offer__card-description">Investment and financial consulting from Almix Asia is aimed at choosing
                        optimal sources of financing, which is a key task
                        for business. The future of the company, its competitiveness and possible
                        the risks directly depend on the attracted investments. One of the most
                        A serious risk is the loss of control over the business, which can
                        occur as a result of a hostile takeover or inability to
                        companies fulfill their obligations to investors. These aspects
                        it is extremely important to take into account when planning to raise capital in
                        the future.</div>
                @else
                    <div class="offer__card-title">Инвестициялық консалтинг</div>
                    <div class="offer__card-description">Almix Asia инвестициялық-қаржылық консалтингі таңдауға бағытталған
                        қаржыландырудың оңтайлы көздері, бұл негізгі міндет болып табылады
                        бизнес үшін. Компанияның болашағы, оның бәсекеге қабілеттілігі және мүмкін
                        тәуекелдер тартылған инвестицияларға тікелей байланысты. Ең бірі
                        елеулі тәуекелдер-бұл бизнесті бақылауды жоғалту, ол мүмкін
                        дұшпандық басып алу немесе қабілетсіздік нәтижесінде пайда болады
                        компаниялар инвесторлар алдындағы міндеттемелерді орындайды. Бұл аспектілер
                        капиталды тартуды жоспарлау кезінде бухгалтерлік есеп үшін өте маңызды
                        болашақта.</div>
                @endif

            </div>
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
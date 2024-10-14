@extends('layouts.base')
@section('content')

    <section class="main-section container page-2">
        <div class="content">
            <h2 class="content-title">Big Data</h2>
            <p class="content-description">
                @if(App::getLocale() == 'ru')
                    Мы живем в эпоху цифровой трансформации, где информация становится
                    самым ценным ресурсом. Практически любая компания в современном мире,
                    в том числе и ваша, генерирует и получает огромные объемы данных,
                    которые могут стать ключом к успеху. Мы предлагаем вам воспользоваться
                    преимуществами Big Data, чтобы вывести ваш бизнес на новый уровень.
                @elseif(App::getLocale() == 'en')
                    We live in an era of digital transformation, where information becomes
                    the most valuable resource. Almost any company in the modern world,
                    including yours, generates and receives huge amounts of data,
                    which can become the key to success. We offer you to take advantage
                    of Big Data to take your business to the next level.
                @else
                    Біз цифрлық трансформация дәуірінде өмір сүріп жатырмыз, мұнда ақпарат
                    ең құнды ресурсқа айналады. Қазіргі әлемдегі кез келген компания,
                    соның ішінде сіздің компанияңыз да үлкен көлемде деректерді жасайды және алады,
                    бұл табысқа жетудің кілті болуы мүмкін. Біз сізге Big Data артықшылықтарын пайдалануды ұсынамыз,
                    бизнесіңізді жаңа деңгейге көтеру үшін.
                @endif
            </p>
        </div>
        <div class="image">
            <img src="/assets/img/page6.png " alt="Описание изображения" />
        </div>
        <div class="scroll-arrow"></div>
    </section>

    <section class="big-data container">
        <div class="big-data__content">
            <h2 class="big-data__title" data-aos="fade-up"
                data-aos-offset="200"
                data-aos-delay="50"
                data-aos-duration="1000">
                @if(App::getLocale() == 'ru')
                    Что такое Big Data и почему это важно?
                @elseif(App::getLocale() == 'en')
                    What is Big Data and why is it important?
                @else
                    Big Data дегеніміз не және ол неге маңызды?
                @endif
            </h2>
            <p class="big-data__description" data-aos="fade-up"
               data-aos-offset="200"
               data-aos-delay="50"
               data-aos-duration="1000">
                @if(App::getLocale() == 'ru')
                    Big Data – это инновационный подход к сбору, хранению и анализу
                    больших объемов данных, который позволяет извлекать ценную информацию
                    и превращать её в действенные инсайты.
                @elseif(App::getLocale() == 'en')
                    Big Data is an innovative approach to collecting, storing, and analyzing
                    large volumes of data, which allows extracting valuable information
                    and turning it into actionable insights.
                @else
                    Big Data – бұл деректердің үлкен көлемін жинауға, сақтауға және талдауға арналған инновациялық тәсіл,
                    бұл құнды ақпаратты алуға және оны әрекетке жарамды түсініктерге айналдыруға мүмкіндік береді.
                @endif
            </p>
        </div>
        <div class="big-data__image-container">
            <img
                    src="./assets/img/bigdata.png"
                    alt="Big Data"
                    class="big-data__image"
            />
        </div>
    </section>

    <section class="offer container">
        <h1 class="offer__title">
            @if(App::getLocale() == 'ru')
                Наша услуга по работе с большими данными поможет вам:
            @elseif(App::getLocale() == 'en')
                Our Big Data service will help you:
            @else
                Біздің Big Data қызметіміз сізге көмектеседі:
            @endif
        </h1>
        <div class="offer__cards card_page5 backnone">
            <div class="offer__card" data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer_11.svg" alt="" />
                </div>
                <div class="offer__card-title">
                    @if(App::getLocale() == 'ru')
                        Разработка стратегии управления проектами
                    @elseif(App::getLocale() == 'en')
                        Development of project management strategy
                    @else
                        Жобаларды басқару стратегиясын әзірлеу
                    @endif
                </div>
                <div class="offer__card-description">
                    @if(App::getLocale() == 'ru')
                        Мы создаём индивидуальные стратегии для успешного выполнения
                        проектов, адаптированные под правовые, экономические и культурные
                        особенности стран BRICS.
                    @elseif(App::getLocale() == 'en')
                        We create individual strategies for the successful implementation
                        of projects, adapted to the legal, economic, and cultural
                        characteristics of the BRICS countries.
                    @else
                        Біз BRICS елдерінің құқықтық, экономикалық және мәдени ерекшеліктеріне бейімделген
                        жобаларды сәтті жүзеге асыру үшін жеке стратегиялар жасаймыз.
                    @endif
                </div>
            </div>

            <div class="offer__card" data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer_11.svg" alt="" />
                </div>
                <div class="offer__card-title">
                    @if(App::getLocale() == 'ru')
                        Планирование, организация и контроль выполнения проектов
                    @elseif(App::getLocale() == 'en')
                        Planning, organizing, and controlling project execution
                    @else
                        Жобаларды орындауды жоспарлау, ұйымдастыру және бақылау
                    @endif
                </div>
                <div class="offer__card-description">
                    @if(App::getLocale() == 'ru')
                        Обеспечиваем комплексное управление проектами, начиная с
                        формирования планов и графиков, заканчивая мониторингом всех этапов
                        исполнения для соблюдения сроков и бюджета.
                    @elseif(App::getLocale() == 'en')
                        We provide comprehensive project management, from
                        forming plans and schedules to monitoring all stages
                        of execution to meet deadlines and budget.
                    @else
                        Біз жоспарлар мен кестелерді құрудан бастап барлық кезеңдерді бақылауға дейін
                        жобаларды кешенді басқаруды қамтамасыз етеміз
                        мерзімдер мен бюджетті сақтау үшін орындау.
                    @endif
                </div>
            </div>

            <div class="offer__card" data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer_11.svg" alt="" />
                </div>
                <div class="offer__card-title">
                    @if(App::getLocale() == 'ru')
                        Управление рисками
                    @elseif(App::getLocale() == 'en')
                        Risk management
                    @else
                        Тәуекелдерді басқару
                    @endif
                </div>
                <div class="offer__card-description">
                    @if(App::getLocale() == 'ru')
                        Анализируем и минимизируем возможные правовые, экономические и
                        политические риски, характерные для работы в странах BRICS, создавая
                        устойчивые механизмы защиты.
                    @elseif(App::getLocale() == 'en')
                        We analyze and minimize possible legal, economic, and
                        political risks characteristic of working in the BRICS countries, creating
                        sustainable protection mechanisms.
                    @else
                        Біз BRICS елдерінде жұмыс істеуге тән ықтимал құқықтық, экономикалық және
                        саяси тәуекелдерді талдаймыз және азайтамыз, тұрақты қорғау механизмдерін жасаймыз.
                    @endif
                </div>
            </div>

            <div class="offer__card" data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer_11.svg" alt="" />
                </div>
                <div class="offer__card-title">
                    @if(App::getLocale() == 'ru')
                        Разрешение конфликтов и управление взаимоотношениями
                    @elseif(App::getLocale() == 'en')
                        Conflict resolution and relationship management
                    @else
                        Қақтығыстарды шешу және қарым-қатынасты басқару
                    @endif
                </div>
                <div class="offer__card-description">
                    @if(App::getLocale() == 'ru')
                        Предоставляем консультации по предотвращению конфликтов и управляем
                        взаимодействием с местными партнёрами и клиентами, обеспечивая
                        бесперебойную работу и поддержку доверительных отношений.
                    @elseif(App::getLocale() == 'en')
                        We provide consultations on conflict prevention and manage
                        interaction with local partners and clients, ensuring
                        smooth operation and support of trusting relationships.
                    @else
                        Біз қақтығыстардың алдын алу бойынша кеңес береміз және жергілікті серіктестермен және клиенттермен
                        өзара әрекеттесуді басқарамыз, үздіксіз жұмыс істеуді және сенімді қарым-қатынасты қолдауды қамтамасыз етеміз.
                    @endif
                </div>
            </div>

            <div class="offer__card" data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer_11.svg" alt="" />
                </div>
                <div class="offer__card-title">
                    @if(App::getLocale() == 'ru')
                        Координация международных команд и подрядчиков
                    @elseif(App::getLocale() == 'en')
                        Coordination of international teams and contractors
                    @else
                        Халықаралық командалар мен мердігерлерді үйлестіру
                    @endif
                </div>
                <div class="offer__card-description">
                    @if(App::getLocale() == 'ru')
                        Обеспечиваем бесперебойную координацию между проектными командами,
                        подрядчиками и местными партнёрами, улучшая коммуникацию и
                        синхронизацию действий на всех уровнях.
                    @elseif(App::getLocale() == 'en')
                        We ensure seamless coordination between project teams,
                        contractors, and local partners, improving communication and
                        synchronization of actions at all levels.
                    @else
                        Біз жобалық командалар, мердігерлер және жергілікті серіктестер арасында үздіксіз үйлестіруді қамтамасыз етеміз,
                        барлық деңгейлерде коммуникация мен әрекеттерді синхрондауды жақсарту.
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div class="advantages container">
        <div class="advantages_wrap nowarp w54">
            <h2 class="advantages__title">
                @if(App::getLocale() == 'ru')
                    Наши услуги включают:
                @elseif(App::getLocale() == 'en')
                    Our services include:
                @else
                    Біздің қызметтерімізге мыналар кіреді:
                @endif
            </h2>
            <ul class="advantages__list">
                <li class="advantages__item">
                    @if(App::getLocale() == 'ru')
                        Сбор и хранение данных: Мы поможем вам настроить процессы сбора и
                        надежного хранения данных из различных источников.
                    @elseif(App::getLocale() == 'en')
                        Data collection and storage: We will help you set up processes for collecting and
                        securely storing data from various sources.
                    @else
                        Деректерді жинау және сақтау: біз сізге әртүрлі көздерден деректерді жинау және сенімді сақтау процестерін орнатуға көмектесеміз.
                    @endif
                </li>
                <li class="advantages__item">
                    @if(App::getLocale() == 'ru')
                        Анализ данных: С использованием современных инструментов и
                        технологий мы проведем анализ ваших данных, чтобы выявить ключевые
                        инсайты.
                    @elseif(App::getLocale() == 'en')
                        Data analysis: Using modern tools and
                        technologies, we will analyze your data to identify key
                        insights.
                    @else
                        Деректерді талдау: заманауи құралдар мен технологияларды пайдалана отырып, біз сіздің деректеріңізді талдаймыз
                        негізгі түсініктерді анықтау үшін.
                    @endif
                </li>
                <li class="advantages__item">
                    @if(App::getLocale() == 'ru')
                        Разработка и внедрение решений: На основе полученных данных мы
                        предложим и внедрим решения, которые помогут вам достичь ваших
                        бизнес-целей.
                    @elseif(App::getLocale() == 'en')
                        Development and implementation of solutions: Based on the data obtained, we
                        will propose and implement solutions that will help you achieve your
                        business goals.
                    @else
                        Шешімдерді әзірлеу және енгізу: алынған деректер негізінде біз сізге бизнес мақсаттарыңызға жетуге көмектесетін шешімдерді ұсынамыз және енгіземіз.
                    @endif
                </li>
            </ul>
            <button class="advantages__button">
                @if(App::getLocale() == 'ru')
                    Заказать услугу онлайн
                @elseif(App::getLocale() == 'en')
                    Order the service online
                @else
                    Қызметке онлайн тапсырыс беру
                @endif
            </button>
        </div>
        <img
                src="/assets/img/bas.png"
                alt="Изображение"
                class="advantages__image"
        />
    </div>
@endsection
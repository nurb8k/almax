@extends('layouts.base')
@section('content')

    <section class="main-section container page-2">
        <div class="content">
            <h2 class="content-title">Big Data</h2>
            <p class="content-description">
                @if(App::getLocale() == 'ru')
                    Мы живем в эпоху цифровой трансформации, где информация становится самым ценным ресурсом. Практически любая компания в современном мире, в том числе и ваша, генерирует и получает огромные объемы данных, которые могут стать ключом к успеху. Мы предлагаем вам воспользоваться преимуществами Big Data, чтобы вывести ваш бизнес на новый уровень.
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
                        Оптимизировать бизнес-процессы:
                    @elseif(App::getLocale() == 'en')
                        Development of project management strategy
                    @else
                        Жобаларды басқару стратегиясын әзірлеу
                    @endif
                </div>
                <div class="offer__card-description">
                    @if(App::getLocale() == 'ru')
                        Благодаря анализу данных можно выявить узкие места и улучшить эффективность работы всех подразделений.
                    @elseif(App::getLocale() == 'en')
                        By analyzing data, you can identify bottlenecks and improve the efficiency of all departments.
                    @else
                        By analyzing data, you can identify bottlenecks and improve the efficiency of all departments.
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
                        Принять обоснованные решения:
                    @elseif(App::getLocale() == 'en')
                        Make informed decisions:
                    @else
                        Саналы шешімдер қабылдау:
                    @endif
                </div>
                <div class="offer__card-description">
                    @if(App::getLocale() == 'ru')
                        Информация, полученная из больших данных, позволяет делать точные прогнозы и разрабатывать стратегии, основанные на реальных данных, а не на интуиции.
                    @elseif(App::getLocale() == 'en')
                        Information obtained from big data allows you to make accurate forecasts and develop strategies based on real data, not intuition.
                    @else
                        Үлкен деректерден алынған ақпарат интуицияға емес, нақты деректерге негізделген нақты болжамдар жасауға және стратегияларды әзірлеуге мүмкіндік береді.
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
                        Понять своих клиентов:
                    @elseif(App::getLocale() == 'en')
                        Risk management
                    @else
                        Тәуекелдерді басқару
                    @endif
                </div>
                <div class="offer__card-description">
                    @if(App::getLocale() == 'ru')
                        Анализ поведения и предпочтений клиентов поможет вам предложить им именно то, что они хотят, что увеличит их удовлетворенность и лояльность.
                    @elseif(App::getLocale() == 'en')
                        Analyzing customer behavior and preferences will help you offer them exactly what they want, which will increase their satisfaction and loyalty.
                    @else
                        Клиенттердің мінез-құлқы мен қалауларын талдау сізге олар қалаған нәрсені ұсынуға көмектеседі, бұл олардың қанағаттанушылығы мен адалдығын арттырады.
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
                        Увеличить прибыль:
                    @elseif(App::getLocale() == 'en')
                        Increase profits:
                    @else
                        Табысты ұлғайту:
                    @endif
                </div>
                <div class="offer__card-description">
                    @if(App::getLocale() == 'ru')
                        Эффективное использование данных позволяет выявлять новые возможности для роста и снижения затрат, что напрямую влияет на вашу прибыльность.
                    @elseif(App::getLocale() == 'en')
                        Effective use of data allows you to identify new opportunities for growth and cost reduction, which directly impacts your profitability.
                    @else
                        Деректерді тиімді пайдалану өсу мен шығындарды азайтудың жаңа мүмкіндіктерін анықтауға мүмкіндік береді, бұл сіздің кірістілігіңізге тікелей әсер етеді.@endif
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
                        Предотвращать риски:
                    @elseif(App::getLocale() == 'en')
                        Prevent risks:
                    @else
                        Тәуекелдердің алдын алу:
                    @endif
                </div>
                <div class="offer__card-description">
                    @if(App::getLocale() == 'ru')
                        Анализ больших данных помогает вовремя выявлять потенциальные угрозы и принимать меры для их минимизации.
                    @elseif(App::getLocale() == 'en')
                        Big data analysis helps to identify potential threats in a timely manner and take measures to minimize them.
                    @else
                        Үлкен деректерді талдау әлеуетті қауіптерді дер кезінде анықтауға және оларды азайту шараларын қабылдауға көмектеседі.
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
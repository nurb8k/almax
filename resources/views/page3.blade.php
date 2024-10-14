@extends('layouts.base')
@section('content')
    <section class="main-section container page-2">
        <div class="content">
            @if(App::getLocale() == 'ru')
                <h2 class="content-title" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                    Управление и операции с недвижимым имуществом в странах ЕАЭС
                </h2>
                <p class="content-description" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                    Мы предлагаем комплексные услуги по управлению и сопровождению операций с недвижимостью на территории стран Евразийского экономического союза (ЕАЭС). Наши эксперты помогут вам эффективно управлять активами, сопровождать сделки и обеспечивать соблюдение всех правовых норм в странах ЕАЭС.
                </p>
            @elseif(App::getLocale() == 'en')
                <h2 class="content-title" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                    Management and operations with real estate in the EAEU countries
                </h2>
                <p class="content-description" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                    We offer comprehensive services for the management and support of real estate transactions in the territory of the Eurasian Economic Union (EAEU) countries. Our experts will help you effectively manage assets, support transactions, and ensure compliance with all legal norms in the EAEU countries.
                </p>
            @else
                <h2 class="content-title" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                    ЕАЭО елдеріндегі жылжымайтын мүлікпен басқару және операциялар
                </h2>
                <p class="content-description" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                    Біз Еуразиялық экономикалық одақ (ЕАЭО) елдеріндегі жылжымайтын мүлікпен басқару және операцияларды қолдау бойынша кешенді қызметтер ұсынамыз. Біздің сарапшылар активтерді тиімді басқаруға, мәмілелерді қолдауға және ЕАЭО елдеріндегі барлық заңдық нормаларды сақтауға көмектеседі.
                </p>
            @endif
        </div>
        <div class="image">
            <img src="/assets/img/page3.png" alt="Описание изображения" />
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
        <div class="offer__cards" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            @if(App::getLocale() == 'ru')
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_11.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Управление объектами недвижимости</div>
                    <div class="offer__card-description">
                        Предоставляем услуги по управлению коммерческой недвижимостью. Это включает контроль за техническим состоянием объектов, взаимодействие с арендаторами, расчет арендных платежей и обеспечение эффективного использования активов.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_12.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Консультации по сделкам с недвижимостью</div>
                    <div class="offer__card-description">
                        Оказываем консультации по вопросам покупки, продажи или аренды недвижимости. Наши специалисты помогут вам оценить рыночную стоимость объектов, выбрать оптимальную стратегию для сделки и провести переговоры с контрагентами.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_13.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Сопровождение сделок</div>
                    <div class="offer__card-description">
                        Предоставляем полное юридическое сопровождение сделок с недвижимостью — от подготовки документов до регистрации прав собственности. Обеспечиваем соблюдение всех правовых норм и исключаем возможные риски при совершении сделок.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_14.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Оценка недвижимости</div>
                    <div class="offer__card-description">
                        Проводим профессиональную оценку стоимости объектов недвижимости, учитывая актуальные рыночные условия в странах ЕАЭС. Это помогает принять взвешенные решения при покупке, продаже или аренде объектов.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_15.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Юридическая проверка объектов</div>
                    <div class="offer__card-description">
                        Проводим комплексную юридическую проверку объектов недвижимости, чтобы убедиться в их чистоте и отсутствии правовых обременений. Это минимизирует риски при заключении сделок и гарантирует безопасность вашего инвестирования.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_16.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Налоговое сопровождение операций с недвижимостью</div>
                    <div class="offer__card-description">
                        Консультируем по налоговым вопросам, связанным с владением и операциями с недвижимостью. Помогаем минимизировать налоговые обязательства и правильно учитывать все расходы и доходы от объектов.
                    </div>
                </div>
            @elseif(App::getLocale() == 'en')
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_11.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Real Estate Management</div>
                    <div class="offer__card-description">
                        We provide commercial real estate management services. This includes monitoring the technical condition of properties, interacting with tenants, calculating rental payments, and ensuring the efficient use of assets.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_12.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Real Estate Transaction Consulting</div>
                    <div class="offer__card-description">
                        We provide consulting services on the purchase, sale, or rental of real estate. Our specialists will help you assess the market value of properties, choose the optimal strategy for the transaction, and negotiate with counterparties.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_13.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Transaction Support</div>
                    <div class="offer__card-description">
                        We provide full legal support for real estate transactions — from document preparation to property rights registration. We ensure compliance with all legal norms and eliminate possible risks when conducting transactions.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_14.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Real Estate Valuation</div>
                    <div class="offer__card-description">
                        We conduct professional valuation of real estate properties, taking into account current market conditions in the EAEU countries. This helps make informed decisions when buying, selling, or renting properties.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_15.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Legal Due Diligence</div>
                    <div class="offer__card-description">
                        We conduct comprehensive legal due diligence of real estate properties to ensure their cleanliness and absence of legal encumbrances. This minimizes risks when concluding transactions and guarantees the safety of your investment.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_16.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Tax Support for Real Estate Transactions</div>
                    <div class="offer__card-description">
                        We provide tax consulting services related to the ownership and transactions of real estate. We help minimize tax liabilities and properly account for all expenses and income from properties.
                    </div>
                </div>
            @else
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_11.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Жылжымайтын мүлікті басқару</div>
                    <div class="offer__card-description">
                        Біз коммерциялық жылжымайтын мүлікті басқару қызметтерін ұсынамыз. Бұл объектілердің техникалық жағдайын бақылауды, жалға алушылармен өзара әрекеттесуді, жалдау төлемдерін есептеуді және активтерді тиімді пайдалануды қамтиды.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_12.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Жылжымайтын мүлік мәмілелері бойынша кеңес беру</div>
                    <div class="offer__card-description">
                        Біз жылжымайтын мүлікті сатып алу, сату немесе жалға алу мәселелері бойынша кеңес беру қызметтерін ұсынамыз. Біздің мамандар сізге объектілердің нарықтық құнын бағалауға, мәміле үшін оңтайлы стратегияны таңдауға және қарсы тараптармен келіссөздер жүргізуге көмектеседі.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_13.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Мәмілелерді қолдау</div>
                    <div class="offer__card-description">
                        Біз жылжымайтын мүлік мәмілелерін толық заңды қолдауды қамтамасыз етеміз — құжаттарды дайындаудан бастап меншік құқықтарын тіркеуге дейін. Біз барлық заңдық нормалардың сақталуын қамтамасыз етеміз және мәмілелерді жүргізу кезінде ықтимал тәуекелдерді жоямыз.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_14.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Жылжымайтын мүлікті бағалау</div>
                    <div class="offer__card-description">
                        Біз ЕАЭО елдеріндегі ағымдағы нарықтық жағдайларды ескере отырып, жылжымайтын мүлік объектілерінің кәсіби бағалауын жүргіземіз. Бұл объектілерді сатып алу, сату немесе жалға алу кезінде негізделген шешімдер қабылдауға көмектеседі.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_15.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Объектілердің заңды тексерісі</div>
                    <div class="offer__card-description">
                        Біз жылжымайтын мүлік объектілерінің кешенді заңды тексерісін жүргіземіз, олардың тазалығына және заңды ауыртпалықтардың болмауына көз жеткізу үшін. Бұл мәмілелерді жасасу кезінде тәуекелдерді азайтады және сіздің инвестицияларыңыздың қауіпсіздігін қамтамасыз етеді.
                    </div>
                </div>
                <div class="offer__card">
                    <div class="offer__card-icon">
                        <img src="/assets/img/offer_16.svg" alt="" />
                    </div>
                    <div class="offer__card-title">Жылжымайтын мүлік операциялары бойынша салықтық қолдау</div>
                    <div class="offer__card-description">
                        Біз жылжымайтын мүлікке меншік және операциялармен байланысты салық мәселелері бойынша кеңес беру қызметтерін ұсынамыз. Біз салық міндеттемелерін азайтуға және объектілерден барлық шығындар мен кірістерді дұрыс есепке алуға көмектесеміз.
                    </div>
                </div>
            @endif
        </div>
    </section>

    <div class="advantages advantages-page3 container" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        @if(App::getLocale() == 'ru')
            <h2 class="advantages__title">Преимущества работы с нами:</h2>
            <div class="advantages_wrap">
                <div class="block_advg">
                    <p>
                        Мы гарантируем профессиональное управление вашими объектами недвижимости и безопасное проведение операций в странах ЕАЭС, чтобы вы могли сосредоточиться на росте и развитии вашего бизнеса.
                    </p>
                    <img src="/assets/img/adv-img.png" alt="" />
                </div>
                <div class="block_advgs">
                    <img src="/assets/img/page_b.png" alt="Изображение" class="advantages__image" />
                    <ul class="advantages__list">
                        <li class="advantages__item">Знание правовых и экономических аспектов рынка недвижимости стран ЕАЭС.</li>
                        <li class="advantages__item">Индивидуальный подход к каждому клиенту и проекту.</li>
                        <li class="advantages__item">Обеспечение надежности и прозрачности всех операций с недвижимостью.</li>
                    </ul>
                    <button class="advantages__button">Заказать услугу онлайн</button>
                </div>
            </div>
        @elseif(App::getLocale() == 'en')
            <h2 class="advantages__title">Advantages of working with us:</h2>
            <div class="advantages_wrap">
                <div class="block_advg">
                    <p>
                        We guarantee professional management of your real estate properties and safe conduct of transactions in the EAEU countries, so you can focus on the growth and development of your business.
                    </p>
                    <img src="/assets/img/adv-img.png" alt="" />
                </div>
                <div class="block_advgs">
                    <img src="/assets/img/page_b.png" alt="Image" class="advantages__image" />
                    <ul class="advantages__list">
                        <li class="advantages__item">Knowledge of the legal and economic aspects of the real estate market in the EAEU countries.</li>
                        <li class="advantages__item">Individual approach to each client and project.</li>
                        <li class="advantages__item">Ensuring the reliability and transparency of all real estate transactions.</li>
                    </ul>
                    <button class="advantages__button">Order service online</button>
                </div>
            </div>
        @else
            <h2 class="advantages__title">Бізбен жұмыс істеудің артықшылықтары:</h2>
            <div class="advantages_wrap">
                <div class="block_advg">
                    <p>
                        Біз сіздің жылжымайтын мүлік объектілеріңізді кәсіби басқаруға және ЕАЭО елдеріндегі операцияларды қауіпсіз жүргізуге кепілдік береміз, осылайша сіз өз бизнесіңіздің өсуі мен дамуына назар аудара аласыз.
                    </p>
                    <img src="/assets/img/adv-img.png" alt="" />
                </div>
                <div class="block_advgs">
                    <img src="/assets/img/page_b.png" alt="Сурет" class="advantages__image" />
                    <ul class="advantages__list">
                        <li class="advantages__item">ЕАЭО елдеріндегі жылжымайтын мүлік нарығының құқықтық және экономикалық аспектілерін білу.</li>
                        <li class="advantages__item">Әрбір клиентке және жобаға жеке көзқарас.</li>
                        <li class="advantages__item">Жылжымайтын мүлік операцияларының сенімділігі мен ашықтығын қамтамасыз ету.</li>
                    </ul>
                    <button class="advantages__button">Қызметке онлайн тапсырыс беру</button>
                </div>
            </div>
        @endif
    </div>
@endsection
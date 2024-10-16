<?php

namespace Database\Seeders;

use App\Models\PageElement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageElementSeeder extends Seeder
{
    private array $array = [
        //content
        [
            'title' => [
                'ru' => 'Управление объектами недвижимости',
                'en' => 'Real estate management',
                'kk' => 'Мүлікті басқару',
            ],
            'content' => [
                'ru' => 'Предоставляем услуги по управлению коммерческой недвижимостью. Это включает контроль за техническим состоянием объектов, взаимодействие с арендаторами, расчет арендных платежей и обеспечение эффективного использования активов.',
                'en' => 'We provide commercial real estate management services. This includes monitoring the technical condition of properties, interacting with tenants, calculating rental payments and ensuring the efficient use of assets.',
                'kk' => 'Біз коммерциялық мүлікті басқару қызметтерін ұсынамыз. Бұл нысандардың техникалық жағдайын бақылау, жалға алушылармен өзара іс-қимыл жасау, жалдау төлемдерін есептеу және активтерді тиімді пайдалануды қамтамасыз ету.',
            ],
            'type' => 1,
            'page_id' => 3,
        ],
        [
            'title' => [
                'ru' => 'Консультации по сделкам с недвижимостью',
                'en' => 'Consulting on real estate transactions',
                'kk' => 'Жылжымайтын мүлікпен операциялар бойынша кеңес беру',
            ],
            'content' => [
                'ru' => 'Оказываем консультации по вопросам покупки, продажи или аренды недвижимости. Наши специалисты помогут вам оценить рыночную стоимость объектов, выбрать оптимальную стратегию для сделки и провести переговоры с контрагентами.',
                'en' => 'We provide consultations on the purchase, sale or lease of real estate. Our specialists will help you assess the market value of properties, choose the optimal strategy for the transaction and negotiate with counterparties.',
                'kk' => 'Біз жылжымайтын мүлікті сатып алу, сату немесе жалға беру бойынша кеңес береміз. Біздің мамандар сізге объектілердің нарықтық құнын бағалауға, транзакцияның оңтайлы стратегиясын таңдауға және контрагенттермен келіссөздер жүргізуге көмектеседі.',
            ],
            'type' => 1,
            'page_id' => 3,
        ],
        [
            'title' => [
                'ru' => 'Сопровождение сделок',
                'en' => 'Transaction support',
                'kk' => 'Транзакцияны қолдау',
            ],
            'content' => [
                'ru' => 'Предоставляем полное юридическое сопровождение сделок с недвижимостью — от подготовки документов до регистрации прав собственности. Обеспечиваем соблюдение всех правовых норм и исключаем возможные риски при совершении сделок.',
                'en' => 'We provide full legal support for real estate transactions - from document preparation to registration of property rights. We ensure compliance with all legal regulations and eliminate possible risks when making transactions',
                'kk' => 'Біз жылжымайтын мүлікпен мәмілелерді толық құқықтық қамтамасыз етеміз - құжаттарды дайындаудан бастап меншік құқығын тіркеуге дейін. Біз барлық құқықтық нормалардың сақталуын қамтамасыз етеміз және транзакциялар жасау кезінде ықтимал тәуекелдерді жоямыз.',
            ],
            'type' => 1,
            'page_id' => 3,
        ],
        [
            'title' => [
                'ru' => 'Оценка недвижимости',
                'en' => 'Real estate appraisal',
                'kk' => 'Жылжымайтын мүлікті бағалау',
            ],
            'content' => [
                'ru' => 'Проводим профессиональную оценку стоимости объектов недвижимости, учитывая актуальные рыночные условия в странах ЕАЭС. Это помогает принять взвешенные решения при покупке, продаже или аренде объектов.',
                'en' => 'We conduct a professional appraisal of the value of real estate, taking into account the current market conditions in the EAEU countries. This helps make informed decisions when buying, selling or renting properties.',
                'kk' => 'Біз ЕАЭО елдеріндегі ағымдағы нарықтық жағдайларды ескере отырып, жылжымайтын мүліктің құнын кәсіби бағалауды жүзеге асырамыз. Бұл мүлікті сатып алу, сату немесе жалға алу кезінде саналы шешім қабылдауға көмектеседі.',
            ],
            'type' => 1,
            'page_id' => 3,
        ],
        [
            'title' => [
                'ru' => 'Юридическая проверка объектов',
                'en' => 'Legal due diligence of properties',
                'kk' => 'Объектілерді құқықтық тексеру',
            ],
            'content' => [
                'ru' => 'Проводим комплексную юридическую проверку объектов недвижимости, чтобы убедиться в их чистоте и отсутствии правовых обременений. Это минимизирует риски при заключении сделок и гарантирует безопасность вашего инвестирования.',
                'en' => 'We conduct a comprehensive legal due diligence of real estate to ensure that it is clean and free of legal encumbrances. This minimizes risks when concluding transactions and guarantees the safety of your investment.',
                'kk' => 'Біз жылжымайтын мүліктің таза және заңды ауыртпалықсыз болуын қамтамасыз ету үшін кешенді құқықтық аудит жүргіземіз. Бұл транзакцияларды жасау кезінде тәуекелдерді азайтады және сіздің инвестицияңыздың қауіпсіздігіне кепілдік береді.',
            ],
            'type' => 1,
            'page_id' => 3,
        ],
        [
            'title' => [
                'ru' => 'Налоговое сопровождение операций с недвижимостью',
                'en' => 'Tax support for real estate transactions',
                'kk' => 'Жылжымайтын мүлікпен операцияларды салықтық қолдау',
            ],
            'content' => [
                'ru' => 'Консультируем по налоговым вопросам, связанным с владением и операциями с недвижимостью. Помогаем минимизировать налоговые обязательства и правильно учитывать все расходы и доходы от объектов.',
                'en' => 'We consult on tax issues related to ownership and transactions with real estate. We help minimize tax liabilities and correctly account for all expenses and income from properties.',
                'kk' => 'Меншікке және жылжымайтын мүлікпен мәмілелерге қатысты салық мәселелері бойынша кеңес береміз. Біз салық міндеттемелерін барынша азайтуға және объектілерден түсетін барлық шығыстар мен кірістерді дұрыс есепке алуға көмектесеміз.',
            ],
            'type' => 1,
            'page_id' => 3,
        ],
        //sub content
        [
            'title' => [
                'ru' => 'Преимущества работы с нами:',
                'en' => 'Benefits of working with us:',
                'kk' => 'Бізбен жұмыс істеудің артықшылықтары:',
            ],
            'content' => [
                'ru' => 'Знание правовых и экономических аспектов рынка недвижимости стран ЕАЭС.
Индивидуальный подход к каждому клиенту и проекту.
Обеспечение надежности и прозрачности всех операций с недвижимостью.',
                'en' => '• Knowledge of the legal and economic aspects of the real estate market in the EAEU countries.
• Individual approach to each client and project.
• Ensuring the reliability and transparency of all real estate transactions.',
                'kk' => 'ЕАЭО елдерінің жылжымайтын мүлік нарығының құқықтық және экономикалық аспектілерін білу.
• Әрбір клиентке және жобаға жеке көзқарас.
• Барлық жылжымайтын мүлік операцияларының сенімділігі мен ашықтығын қамтамасыз ету.',
            ],
            'type' => 1,
            'page_id' => 3,
        ],

//----------------------------------------------------

        [
            'title' => [
                'ru' => 'Управление зарубежными проектами',
                'en' => 'Foreign project management',
                'kk' => 'Шетелдік жобаларды басқару',
            ],
            'content' => [
                'ru' => 'Мы предлагаем комплексные услуги консультирования на этапе переговоров и предпроектных работ. Наши решения включают менеджмент проектов, структурирование задач, планирование и контроль выполнения. Мы организуем командные роли и взаимодействия, управляем ресурсами, проводим подбор, контроль и обучение персонала, обеспечиваем качественные коммуникации, управление рисками, а также внедрение современных технологий. Оказываем поддержку в вопросах социальной и экологической ответственности, открытии зарубежных представительств, анализе и экспансии рынков сбыта. Наш опыт в международном проектном менеджменте повышает эффективность работы на разных рынках и культурах, гарантируя успех и инновации.',
                'en' => 'We offer comprehensive consulting services at the negotiation and pre-project stage. Our solutions include project management, task structuring, planning and control of implementation. We organize team roles and interactions, manage resources, conduct personnel selection, control and training, ensure high-quality communications, risk management, and the implementation of modern technologies. We provide support in matters of social and environmental responsibility, opening foreign representative offices, analysis and expansion of sales markets. Our experience in international project management increases the efficiency of work in different markets and cultures, guaranteeing success and innovation.',
                'kk' => 'Біз келіссөздер және жоба алдындағы жұмыстар сатысында жан-жақты кеңес беру қызметтерін ұсынамыз. Біздің шешімдерімізге жобаны басқару, тапсырмаларды құрылымдау, жоспарлау және орындауды бақылау кіреді. Біз командалық рөлдерді және өзара әрекеттесуді ұйымдастырамыз, ресурстарды басқарамыз, персоналды таңдаймыз, қадағалаймыз және оқытамыз, жоғары сапалы коммуникацияларды, тәуекелдерді басқаруды қамтамасыз етеміз және заманауи технологияларды енгіземіз. Біз әлеуметтік және экологиялық жауапкершілік, шетелдік өкілдіктерді ашу, өткізу нарықтарын талдау және кеңейту мәселелерінде қолдау көрсетеміз. Халықаралық жобаларды басқарудағы тәжірибеміз табыс пен инновацияны қамтамасыз ете отырып, нарықтар мен мәдениеттер бойынша өнімділікті арттырады.',
            ],
            'type' => 1,
            'page_id' => 4,
        ],
        [
            'title' => [
                'ru' => 'Консалтинг по ВЭД',
                'en' => 'Foreign economic activity consulting',
                'kk' => 'Сыртқы сауда қызметі бойынша кеңес беру',
            ],
            'content' => [
                'ru' => 'Мы предоставляем консультации по всем аспектам ВЭД, включая правовое и таможенное регулирование, оптимизацию логистики и налоговой нагрузки, а также анализ и выход на международные рынки. Наши услуги охватывают подбор надежных зарубежных партнеров, сопровождение внешнеторговых контрактов, управление валютными рисками и сопровождение сделок в разных юрисдикциях.',
                'en' => 'We provide consultations on all aspects of foreign economic activity, including legal and customs regulation, optimization of logistics and tax burden, as well as analysis and entry into international markets. Our services include selection of reliable foreign partners, support of foreign trade contracts, currency risk management and support of transactions in different jurisdictions.',
                'kk' => 'Біз сыртқы сауда қызметінің барлық аспектілері бойынша кеңес береміз, соның ішінде құқықтық және кедендік реттеу, логистика мен салық жүктемесін оңтайландыру, сондай-ақ талдау және халықаралық нарықтарға шығу. Біздің қызметтеріміз сенімді шетелдік серіктестерді таңдауды, сыртқы сауда келісімшарттарын қолдауды, валюталық тәуекелдерді басқаруды және әртүрлі юрисдикциялардағы транзакцияларды қолдауды қамтиды.',
            ],
            'type' => 1,
            'page_id' => 4,
        ],
        [
            'title' => [
                'ru' => 'Международные закупки',
                'en' => 'International procurement',
                'kk' => 'Халықаралық сатып алулар',
            ],
            'content' => [
                'ru' => 'Эффективная организация международных закупок играет ключевую роль в обеспечении устойчивого успеха компании в условиях усиливающейся конкуренции. Это требует постоянных и, порой, значительных усилий по снижению затрат, оптимизации производственных процессов, улучшению качества услуг и логистики, а также быстрого реагирования на запросы клиентов и изменения рыночных требований.',
                'en' => 'Efficient organization of international procurement plays a key role in ensuring sustainable success of the company in the face of increasing competition. This requires constant and sometimes significant efforts to reduce costs, optimize production processes, improve the quality of services and logistics, as well as quick response to customer requests and changes in market requirements.',
                'kk' => 'Тиімді халықаралық сатып алулар барған сайын бәсекелестік ортада компанияның тұрақты табысын қамтамасыз етуде шешуші рөл атқарады. Бұл шығындарды азайту, өндірістік процестерді оңтайландыру, қызметтер мен логистика сапасын жақсарту, сондай-ақ тұтынушылардың сұраныстары мен өзгеретін нарықтық сұраныстарға жедел жауап беру үшін тұрақты және кейде айтарлықтай күш-жігерді қажет етеді.',
            ],
            'type' => 1,
            'page_id' => 4,
        ],[
            'title' => [
                'ru' => 'Инвестиционный консалтинг',
                'en' => 'Investment consulting',
                'kk' => 'Инвестициялық консалтинг',
            ],
            'content' => [
                'ru' => 'Инвестиционно-финансовый консалтинг от Almax Asia направлен на выбор оптимальных источников финансирования, что является ключевой задачей для бизнеса. Будущее компании, её конкурентоспособность и возможные риски напрямую зависят от привлечённых инвестиций. Одним из наиболее серьёзных рисков является утрата контроля над бизнесом, что может произойти в результате враждебного поглощения или неспособности компании выполнить обязательства перед инвесторами. Эти аспекты крайне важны для учёта при планировании привлечения капитала в будущем.',
                'en' => 'Investment and financial consulting from Almax Asia is aimed at choosing the best sources of financing, which is a key task for business. The future of the company, its competitiveness and possible risks directly depend on the investments attracted. One of the most serious risks is the loss of control over the business, which may occur as a result of a hostile takeover or the company`s inability to fulfill its obligations to investors. These aspects are extremely important to consider when planning to raise capital in the future.',
                'kk' => 'Almax Asia компаниясының инвестициялық және қаржылық консалтингі бизнес үшін негізгі міндет болып табылатын оңтайлы қаржыландыру көздерін таңдауға бағытталған. Компанияның болашағы, оның бәсекеге қабілеттілігі және ықтимал тәуекелдері тартылған инвестицияларға тікелей байланысты. Ең маңызды тәуекелдердің бірі – бизнесті бақылауды жоғалту, ол дұшпандық басып алу немесе компанияның инвесторлар алдындағы міндеттемелерін орындамау нәтижесінде туындауы мүмкін. Бұл аспектілерді болашақта капиталды тартуды жоспарлау кезінде ескеру өте маңызды.',
            ],
            'type' => 1,
            'page_id' => 4,
        ],
        //--------------------------------------------------------------------------------

        [
            'title' => [
                'ru' => 'Разработка стратегии управления проектами',
                'en' => 'Project management strategy development',
                'kk' => 'Жобаны басқару стратегиясын әзірлеу',
            ],
            'content' => [
                'ru' => 'Мы создаём индивидуальные стратегии для успешного выполнения проектов, адаптированные под правовые, экономические и культурные особенности стран BRICS.',
                'en' => 'We create individual strategies for successful project implementation, adapted to the legal, economic and cultural specifics of BRICS countries.',
                'kk' => 'Біз БРИКС елдерінің заңды, экономикалық және мәдени ерекшеліктеріне бейімделген, жобаларды сәтті жүзеге асыруға арналған жеке стратегиялар жасаймыз.',
            ],
            'type' => 1,
            'page_id' => 5,
        ], [
            'title' => [
                'ru' => 'Планирование, организация и контроль выполнения проектов',
                'en' => 'Project planning, organization and control',
                'kk' => 'Жобаны жоспарлау, ұйымдастыру және бақылау',
            ],
            'content' => [
                'ru' => 'Обеспечиваем комплексное управление проектами, начиная с формирования планов и графиков, заканчивая мониторингом всех этапов исполнения для соблюдения сроков и бюджета.',
                'en' => 'We provide comprehensive project management, starting with the formation of plans and schedules, ending with monitoring of all stages of implementation to meet deadlines and budget.',
                'kk' => 'Біз жобаны басқарудың толық кешенін қамтамасыз етеміз, жоспарлар мен кестелерді құрудан бастап барлық кезеңдерді орындауды бақылауға дейін, мерзімдер мен бюджетке сәйкес жүзеге асырамыз.',
            ],
            'type' => 1,
            'page_id' => 5,
        ],
        [
            'title' => [
                'ru' => 'Управление рисками',
                'en' => 'Risk management',
                'kk' => 'Тәуекелдерді басқару',
            ],
            'content' => [
                'ru' => 'Анализируем и минимизируем возможные правовые, экономические и политические риски, характерные для работы в странах BRICS, создавая устойчивые механизмы защиты.',
                'en' => 'We analyze and minimize possible legal, economic and political risks typical for work in BRICS countries, creating sustainable protection mechanisms.',
                'kk' => 'БРИКС елдерінде жұмыс істеуге тән заңды, экономикалық және саяси тәуекелдерді талдап, азайтып, тұрақты қорғаныс механизмдерін құрамыз.',
            ],
            'type' => 1,
            'page_id' => 5,
        ],[
            'title' => [
                'ru' => 'Координация международных команд и подрядчиков',
                'en' => 'Coordination of international teams and contractors   ',
                'kk' => 'Халықаралық командалар мен мердігерлерді үйлестіру',
            ],
            'content' => [
                'ru' => 'Обеспечиваем бесперебойную координацию между проектными командами, подрядчиками и местными партнёрами, улучшая коммуникацию и синхронизацию действий на всех уровнях.',
                'en' => 'We ensure uninterrupted coordination between project teams, contractors and local partners, improving communication and synchronization of actions at all levels.',
                'kk' => 'Жобалық топтар, мердігерлер және жергілікті серіктестер арасында үздіксіз үйлестіруді қамтамасыз етеміз, барлық деңгейлерде байланысты жақсартып, әрекеттерді синхрондаймыз.',
            ],
            'type' => 1,
            'page_id' => 5,
        ],[
            'title' => [
                'ru' => 'Разрешение конфликтов и управление взаимоотношениями',
                'en' => 'Conflict Resolution and Relationship Management',
                'kk' => 'Қақтығыстарды шешу және қарым-қатынасты басқару',
            ],
            'content' => [
                'ru' => 'Предоставляем консультации по предотвращению конфликтов и управляем взаимодействием с местными партнёрами и клиентами, обеспечивая бесперебойную работу и поддержку доверительных отношений.',
                'en' => 'We provide advice on conflict prevention and manage interactions with local partners and clients, ensuring smooth operations and maintaining trusting relationships.',
                'kk' => 'Біз жергілікті серіктестермен және клиенттермен өзара әрекеттестікті басқарумен қатар, қақтығыстардың алдын алу бойынша кеңес береміз, бұл жұмыстардың тұрақты болуын қамтамасыз етеді және сенімді қарым-қатынастарды сақтаймыз.',
            ],
            'type' => 1,
            'page_id' => 5,
        ],[
            'title' => [
                'ru' => 'Соответствие нормативным требованиям',
                'en' => 'Regulatory Compliance',
                'kk' => 'Заң талаптарына сәйкестік',
            ],
            'content' => [
                'ru' => 'Помогаем обеспечить полное соответствие проектной деятельности местным законам и нормативным требованиям в странах BRICS, минимизируя риски правовых нарушений.',
                'en' => 'We help ensure full compliance of project activities with local laws and regulations in BRICS countries, minimizing the risks of legal violations.',
                'kk' => 'БРИКС елдерінде жоба қызметінің толық заңдарға сәйкестігін қамтамасыз етуге көмектесеміз, заң бұзушылықтар қаупін барынша азайтамыз.',
            ],
            'type' => 1,
            'page_id' => 5,
        ],[
            'title' => [
                'ru' => 'Логистика, поставки и таможенное оформление',
                'en' => 'Logistics, Supply Chain and Customs Clearance',
                'kk' => 'Логистика, жеткізу тізбегі және кедендік рәсімдеу',
            ],
            'content' => [
                'ru' => 'Консультируем по вопросам международной логистики и таможенного оформления, оптимизируя цепочки поставок и снижая временные и финансовые затраты.',
                'en' => 'We advise on international logistics and customs clearance, optimizing supply chains and reducing time and cost.',
                'kk' => 'Халықаралық логистика және кедендік рәсімдеу бойынша кеңес береміз, жеткізу тізбегін оңтайландырып, уақыт пен шығындарды азайтамыз.',
            ],
            'type' => 1,
            'page_id' => 5,
        ],

        //--------------------------------------------------------------------------------



        [
            'title' => [
                'ru' => 'Оптимизировать бизнес-процессы',
                'en' => 'Optimize business processes',
                'kk' => 'Бизнес-процестерді оңтайландыру',
            ],
            'content' => [
                'ru' => 'Благодаря анализу данных можно выявить узкие места и улучшить эффективность работы всех подразделений',
                'en' => 'Thanks to data analysis, you can identify bottlenecks and improve the efficiency of all departments.',
                'kk' => 'Деректерді талдаудың арқасында сіз кедергілерді анықтап, барлық бөлімдердің тиімділігін арттыра аласыз',
            ],
            'type' => 1,
            'page_id' => 6,
        ],
        [
            'title' => [
                'ru' => 'Принять обоснованные решения',
                'en' => 'Make informed decisions',
                'kk' => 'Саналы шешімдер қабылдау',
            ],
            'content' => [
                'ru' => 'Информация, полученная из больших данных, позволяет делать точные прогнозы и разрабатывать стратегии, основанные на реальных данных, а не на интуиции.',
                'en' => ' Information obtained from Big Data allows you to make accurate forecasts and develop strategies based on real data, not intuition.',
                'kk' => 'Үлкен деректерден алынған ақпарат түйсікке емес, нақты деректерге негізделген нақты болжамдар жасауға және стратегияларды әзірлеуге мүмкіндік береді.',
            ],
            'type' => 1,
            'page_id' => 6,
        ],[
            'title' => [
                'ru' => 'Понять своих клиентов',
                'en' => 'Understand your customers',
                'kk' => 'Клиенттеріңізді түсіну',
            ],
            'content' => [
                'ru' => 'Анализ поведения и предпочтений клиентов поможет вам предложить им именно то, что они хотят, что увеличит их удовлетворенность и лояльность',
                'en' => 'Analyzing customer behavior and preferences will help you offer them exactly what they want, which will increase their satisfaction and loyalty.',
                'kk' => 'Клиенттердің мінез-құлқы мен қалауларын талдау сізге олар қалаған нәрсені ұсынуға көмектеседі, бұл олардың қанағаттануы мен адалдығын арттырады.',
            ],
            'type' => 1,
            'page_id' => 6,
        ],[
            'title' => [
                'ru' => 'Увеличить прибыль',
                'en' => 'Increase profits',
                'kk' => 'Табысты ұлғайту',
            ],
            'content' => [
                'ru' => 'Эффективное использование данных позволяет выявлять новые возможности для роста и снижения затрат, что напрямую влияет на вашу прибыльность.
',
                'en' => 'Efficient use of data allows you to identify new opportunities for growth and cost reduction, which directly affects your profitability',
                'kk' => 'Деректерді тиімді пайдалану өсу мен шығындарды азайтудың жаңа мүмкіндіктерін анықтауға мүмкіндік береді, бұл сіздің кірістілігіңізге тікелей әсер етеді.',
            ],
            'type' => 1,
            'page_id' => 6,
        ],
        [
            'title' => [
                'ru' => 'Предотвращать риски',
                'en' => 'Prevent risks',
                'kk' => 'Тәуекелдердің алдын алу',
            ],
            'content' => [
                'ru' => 'Анализ больших данных помогает вовремя выявлять потенциальные угрозы и принимать меры для их минимизации.',
                'en' => 'Big data analysis helps you identify potential threats in time and take measures to minimize them.',
                'kk' => 'Үлкен деректерді талдау әлеуетті қауіптерді дер кезінде анықтауға және оларды азайту шараларын қабылдауға көмектеседі.',
            ],
            'type' => 1,
            'page_id' => 6,
        ],


        [
            'title' => [
                'ru' => 'Что такое Big Data и почему это важно для вас?',
                'en' => 'What is Big Data and why is it important for you?',
                'kk' => 'Big Data дегеніміз не және ол сіз үшін неге маңызды?',
            ],
            'content' => [
                'ru' => 'Big Data – это инновационный подход к сбору, хранению и анализу больших объемов данных, который позволяет извлекать ценную информацию и превращать её в действенные инсайты.',
                'en' => 'Big Data is an innovative approach to collecting, storing and analyzing large amounts of data, which allows you to extract valuable information and turn it into actionable insights.',
                'kk' => 'Big Data- бұл құнды ақпаратты алуға және оны іске асырылатын түсініктерге айналдыруға мүмкіндік беретін үлкен көлемдегі деректерді жинау, сақтау және талдаудың инновациялық тәсілі.',
            ],
            'type' => 1,
            'page_id' => 6,
        ],
        [
            'title' => [
                'ru' => 'Наши услуги включают',
                'en' => 'Our services include:',
                'kk' => 'Біздің қызметтерімізге мыналар кіреді:',
            ],
            'content' => [
                'ru' => 'Сбор и хранение данных: Мы поможем вам настроить процессы сбора и надежного хранения данных из различных источников.
                Анализ данных: С использованием современных инструментов и технологий мы проведем анализ ваших данных, чтобы выявить ключевые инсайты.
                Разработка и внедрение решений: На основе полученных данных мы предложим и внедрим решения, которые помогут вам достичь ваших бизнес-целей.',
                'en' => 'Data collection and storage: We will help you set up processes for collecting and securely storing data from various sources.
                Data analysis: Using modern tools and technologies, we will analyze your data to identify key insights.
                Development and implementation of solutions: Based on the data received, we will propose and implement solutions that will help you achieve your business goals.',
                'kk' => 'Деректерді жинау және сақтау: Біз сізге әртүрлі көздерден деректерді жинау және қауіпсіз сақтау процестерін орнатуға көмектесеміз.
                Деректерді талдау: заманауи құралдар мен технологияларды пайдалана отырып, біз негізгі түсініктерді анықтау үшін деректеріңізді талдаймыз.
                Шешімдерді әзірлеу және енгізу: Алынған деректер негізінде бизнес мақсаттарыңызға жетуге көмектесетін шешімдерді ұсынып, жүзеге асырамыз.',
            ],
            'type' => 1,
            'page_id' => 6,
        ],
    ];
    public function run(): void
    {
        foreach ($this->array as $array){
            PageElement::create($array);
        }
    }
}

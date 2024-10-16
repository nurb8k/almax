<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder{
    private array $pages = [
        [
            'title' => [
                'ru' => 'ALMAX ASIA – партнер в оптимизации вашего бизнеса в Казахстане и управлении зарубежными проектами в странах ЕАЭС и BRICS',
                'kk' => 'ALMAX ASIA – Қазақстандағы бизнесіңізді оңтайландыру және ЕАЭО және BRICS елдеріндегі шетелдік жобаларды басқару бойынша серіктес',
                'en' => 'ALMAX ASIA – a partner in optimizing your business in Kazakhstan and managing foreign projects in the EAEU and BRICS countries',
            ],
            'content' => [
                'ru' => '<p>Мы предлагаем бизнес решения и технологии, которые позволяют преодолеть новые вызовы внешней среды и внедрить необходимые изменения.</p>',
                'en' => '<p>We offer business solutions and technologies that will allow us to overcome new challenges of the external environment and implement the necessary changes.</p>',
                'kk' => '<p>Біз сыртқы ортадағы жаңа қиындықтарды жеңуге және қажетті өзгерістерді енгізуге мүмкіндік беретін бизнес шешімдері мен технологияларын ұсынамыз.</p>',
            ],
            'image' => 'pages/page0.png',
        ],
        [
        'title' => [
            'ru' => 'Налоговое и бухгалтерское консультирование в странах ЕАЭС',
            'kk' => 'ЕАЭО елдерінде салық және бухгалтерлік есеп бойынша кеңес беру',
            'en' => 'Tax and accounting consulting in the EAEU countries',
        ],
        'content' => [
            'ru' => 'Мы предоставляем полный спектр налоговых и бухгалтерских услуг для бизнеса, работающего на территории Евразийского экономического союза (ЕАЭС). Наша команда экспертов поможет вам эффективно управлять финансовыми и налоговыми вопросами, минимизировать риски и обеспечить соответствие требованиям законодательства каждой страны.',
            'en' => 'We provide a full range of tax and accounting services for businesses operating in the Eurasian Economic Union (EAEU). Our team of experts will help you effectively manage financial and tax issues, minimize risks and ensure compliance with the legislation of each country.',
            'kk' => 'Біз Еуразиялық экономикалық одақ (ЕАЭО) аумағында жұмыс істейтін бизнес үшін салық және бухгалтерлік қызметтердің толық кешенін ұсынамыз. Біздің сарапшылар тобы сізге қаржылық және салықтық мәселелеріңізді тиімді басқаруға, тәуекелдерді азайтуға және әр елдің заң талаптарына сәйкестігін қамтамасыз етуге көмектеседі.',
            ],
        'image' => 'pages/page1.png',
        ],
//=================================
        [
            'title' => [
                'ru' => 'Управление и операции с недвижимым имуществом в странах ЕАЭС',
                'en' => 'Real estate management and operations in the EAEU countries',
                'kk' => 'ЕАЭО елдеріндегі жылжымайтын мүлікпен басқару және операциялар',
            ],
            'content' => [
                'ru' => 'Мы предлагаем комплексные услуги по управлению и сопровождению операций с недвижимостью на территории стран Евразийского экономического союза (ЕАЭС). Наши эксперты помогут вам эффективно управлять активами, сопровождать сделки и обеспечивать соблюдение всех правовых норм в странах ЕАЭС.',
                'en' => 'We offer comprehensive services for the management and support of real estate transactions in the countries of the Eurasian Economic Union (EAEU). Our experts will help you effectively manage assets, support transactions and ensure compliance with all legal regulations in the EAEU countries.',
                'kk' => 'Біз Еуразиялық экономикалық одақ (ЕАЭО) елдеріндегі жылжымайтын мүлік операцияларын басқару және қолдау бойынша кешенді қызметтерді ұсынамыз. Біздің сарапшылар сізге активтерді тиімді басқаруға, транзакцияларды қолдауға және ЕАЭО елдеріндегі барлық құқықтық нормалардың сақталуын қамтамасыз етуге көмектеседі.',
            ],
            'image' => 'pages/page2.png',
        ],
        //=================================
        [
            'title' => [
                'ru' => 'Международные консалтинговые услуги в странах BRICS',
                'en' => 'International consulting services in BRICS countries',
                'kk' => 'BRICS елдеріндегі халықаралық консалтингтік қызметтер',
            ],
            'content' => [
                'ru' => 'Международный консалтинг от Almax Asia поможет организовать выход компании на зарубежный рынок, эффективное позиционирование и масштабирование деятельности предприятия в глобальном масштабе.',
                'en' => 'International consulting from Almax Asia will help organize the company`s entry into foreign markets, effective positioning and scaling of the enterprise`s activities on a global scale.',
                'kk' => 'Almax Asia компаниясының халықаралық консалтингі компанияның сыртқы нарықтарға шығуын ұйымдастыруға, кәсіпорын қызметін жаһандық ауқымда тиімді орналастыруға және масштабтауға көмектеседі.',
            ],
            'image' => 'pages/page3.png',
        ],

        //=================================
        [
            'title' => [
                'ru' => 'Управление зарубежными проектами в странах BRICS',
                'en' => 'Management of foreign projects in BRICS countries',
                'kk' => 'БРИКС елдерінде шетелдік жобаларды басқару',
            ],
            'content' => [
                'ru' => 'Мы предоставляем комплексные услуги по управлению проектами в странах BRICS, гарантируя успешную реализацию проектов с учётом региональных особенностей. Наши эксперты поддерживают ваши инициативы на всех стадиях — от планирования до контроля исполнения.',
                'en' => 'We provide comprehensive project management services in the BRICS countries, ensuring the successful implementation of projects taking into account regional specifics. Our experts support your initiatives at all stages — from planning to execution control.',
                'kk' => 'Біз БРИКС елдерінде жобаларды басқару бойынша кешенді қызметтер ұсынамыз, аймақтық ерекшеліктерді ескере отырып, жобаларды сәтті жүзеге асыруды қамтамасыз етеміз. Біздің мамандар сіздің бастамаларыңызды жоспарлаудан бастап орындалуын бақылауға дейін барлық кезеңдерде қолдайды.',
            ],
            'image' => 'pages/page4.png',
        ],
        //=================================
        [
            'title' => [
                'ru' => 'Big Data',
                'en' => 'Big Data',
                'kk' => 'Big Data',
            ],
            'content' => [
                'ru' => 'Мы живем в эпоху цифровой трансформации, где информация становится самым ценным ресурсом. Практически любая компания в современном мире, в том числе и ваша, генерирует и получает огромные объемы данных, которые могут стать ключом к успеху. Мы предлагаем вам воспользоваться преимуществами Big Data, чтобы вывести ваш бизнес на новый уровень.',
                'en' => 'We live in the era of digital transformation, where information is becoming the most valuable resource. Almost any company in the modern world, including yours, generates and receives huge amounts of data, which can become the key to success. We invite you to take advantage of Big Data to take your business to the next level.',
                'kk' => 'Біз ақпарат ең құнды ресурсқа айналып жатқан цифрлық трансформация дәуірінде өмір сүріп жатырмыз. Заманауи әлемдегі әрбір дерлік компания, соның ішінде сіздікі де, табыстың кілті болуы мүмкін үлкен көлемдегі деректерді жасайды және алады. Біз сізді бизнесіңізді келесі деңгейге көтеру үшін Big Data мүмкіндіктерін пайдалануға шақырамыз.',
            ],
            'image' => 'pages/page5.png',
        ],
    ];
    public function run(): void
    {
        $this->call(PageElementSeeder::class);
//        User::create([
//            'name' => 'admin',
//            'email' => 'admin@admin.com',
//            'password' => bcrypt('password'),
//        ]);
//
//        $sourcePath = public_path('pages');
//        $destinationPath = storage_path('app/public/pages');
//        File::copyDirectory($sourcePath, $destinationPath);
//        foreach ($this->pages as $page){
//            Page::create($page);
//        }
    }
}

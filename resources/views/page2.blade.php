 @extends('layouts.base')
 @section('content')
<section class="main-section container page-2">
    <div class="content">
        <h2 class="content-title"     data-aos="fade-up"
            data-aos-offset="200"
            data-aos-delay="50"
            data-aos-duration="1000">
{{ $page->title }}
        </h2>
        <div class="content-description"     data-aos="fade-up"
           data-aos-offset="200"
           data-aos-delay="50"
           data-aos-duration="1000">{!!
              $page->content  !!}
        </div>
    </div>
    <div class="image">
        <img src="{{ asset('storage/'.$page->image) }} " alt="Описание изображения" />
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

    <div class="offer__cards">
        @foreach($pageElements as $element)
            @if($element->id == 9)
                <?php continue; ?>
            @endif
            <div class="offer__card"    data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <div class="offer__card-icon">
                    <img src="/assets/img/offer-1.svg" alt="" />
                </div>
                <div class="offer__card-title" >
                    {{ $element->title }}
                </div>
                <div class="offer__card-description">
                    {!!  $element->content  !!}
                </div>
            </div>

        @endforeach
    </div>
</section>

<div class="advantages container pg-21"     data-aos="fade-up"
     data-aos-offset="200"
     data-aos-delay="50"
     data-aos-duration="1000">
    <div class="advantages_wrap nowarp">
        <h2 class="advantages__title">{{ $pageElements[6]->titleа }}</h2>
        @if(App::getLocale() == 'kz')
            <ul class="advantages__list">
                <li class="advantages__item">ЕАЭО елдерінің заңнамасын терең білу.</li>
                <li class="advantages__item">Бизнесіңіздің ерекшеліктеріне бейімделген жекелендірілген кеңестер.</li>
                <li class="advantages__item">Салық салу және бухгалтерлік есеп саласындағы мәселелерді жедел шешу.</li>
            </ul>
            <button class="advantages__button">Қызметке онлайн тапсырыс беру</button>
        @elseif(App::getLocale() == 'ru')
            <ul class="advantages__list">
                <li class="advantages__item">Глубокое знание законодательства стран ЕАЭС.</li>
                <li class="advantages__item">Персонализированные консультации с учетом специфики вашего бизнеса.</li>
                <li class="advantages__item">Оперативное решение вопросов в сфере налогообложения и учета.</li>
            </ul>
            <button class="advantages__button">Заказать услугу онлайн</button>
        @else
            <ul class="advantages__list">
                <li class="advantages__item">Deep knowledge of the legislation of the EAEU countries.</li>
                <li class="advantages__item">Personalized consultations taking into account the specifics of your business.</li>
                <li class="advantages__item">Prompt resolution of issues in the field of taxation and accounting.</li>
            </ul>
            <button class="advantages__button">Order service online</button>
        @endif


    </div>
    <img src="/assets/img/page_b.png" alt="Изображение" class="advantages__image ">
</div>

<!-- Попап (изначально скрыт) -->
<div id="popup" class="popup" style="display:none;">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h2>Закажите услугу онлайн</h2>
        <p>Заполните форму, и наш специалист свяжется с вами для подтверждения заказа и обсуждения деталей услуги.</p>
        <form id="popup-form">
            <input type="text" name="name" placeholder="Имя / Компания *" required><br>

            <input type="tel" name="phone" placeholder="Телефон *" required><br>

            <input type="email" name="email" placeholder="Ваша почта *" required><br>

            <div>
                <input type="checkbox" name="consent" required>
                <span>Я согласен на обработку моих персональных данных</span>
            </div>

            <button type="submit">Отправить заявку</button>
            <button type="button" class="cancel">Отмена</button>
        </form>
    </div>
</div>

<!-- Попап с благодарностью -->
<div id="thankyou-popup" class="popup" style="display:none;">
    <div class="popup-content">
        <h2>Спасибо!
            Ваша заявка успешно отправлена.</h2>
        <p>Наш специалист свяжется с вами в течение 24 часов для подтверждения заказа и обсуждения деталей. Мы благодарим вас за выбор наших услуг!</p>
        <button type="button" class="close-thankyou">Закрыть</button>
    </div>
</div>
@endsection


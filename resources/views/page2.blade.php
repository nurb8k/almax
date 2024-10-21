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
{{--            @dd($pageElements)--}}
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
        <h2 class="advantages__title">{{ $pageElements[6]->title }}</h2>
        {!! $pageElements[6]->content !!}
{{--        TODO design am bolvatr--}}
    </div>
    <img src="/assets/img/page_b.png" alt="Изображение" class="advantages__image ">
</div>

<!-- Попап (изначально скрыт) -->
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
<style>
    /*ul{*/
    /*    padding-left: 15px;*/
    /*}*/

    /*li{*/
    /*    content: url(/assets/img/marker.svg);*/
    /*    font-weight: 600;*/
    /*    font-size: 18px;*/
    /*    line-height: 150%;*/
    /*    color: #53595a;*/
    /*    list-style-type: disc;*/
    /*    padding-left: 10px;*/
    /*    margin-bottom: 16px;*/
    /*}*/
</style>

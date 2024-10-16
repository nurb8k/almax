@extends('layouts.base')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <section class="main-section container">
        <div class="content"     data-aos="fade-up"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000">
            <h1 class="content-title">
                {{ $page->title }}
            </h1>
            <div class="content-description">
             {!!  $page->content !!}
            </div>
        </div>
        <div class="image"   >
            <img src="{{ asset('storage/'.$page->image) }}" alt="Описание изображения" />
        </div>
        <div class="scroll-arrow"></div>

    </section>

    <section class="services-section" >
        <div class="container container-services">
            <section class="eaec-section">

                <h2 class="eaec-title">{{ $pageElements[4]->title }}</h2>
                <ul class="eaec-list"  data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="50"
                    data-aos-duration="1000">
                    {!!
                        $pageElements[4]->content
                    !!}
                </ul>
            </section>

            <section class="brics-section">
                <h2 class="brics-title">{{ $pageElements[5]->title }}</h2>
                <ul class="brics-list"     data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="50"
                    data-aos-duration="1000">
                    {!!
                        $pageElements[5]->content
                    !!}
                </ul>
            </section>
        </div>
    </section>

    <section class="about-us-section">
        <div class="container container_about">
            <div class="column left-column">
                <div class="about-us-texts">
                    <h2 class="about-us-title">{{ $pageElements[0]->title }}</h2>
                    <div class="about-us-text one-text">
                        {!!  $pageElements[0]->content  !!}
                    </div>
                </div>
                <img
                        src="{{ asset('storage/'. $pageElements[0]->image) }}"
                        alt="image_1"
                        class="about_images"
                />
                {!! $pageElements[1]->content !!}
            </div>
            <div class="column right-column"  data-aos="fade-up"
                 data-aos-offset="200"
                 data-aos-delay="50"
                 data-aos-duration="1000">
                <img
                        src="/assets/img/image_2.png"
                        alt="image_2"
                        class="about_images_2"
                />
                <div class="services-text one-serv">{!! $pageElements[2]->content !!}</div>
                <div class="services-text two-serv">
                    {!! $pageElements[3]->content !!}
                </div>
            </div>
        </div>
    </section>

    <section class="category-section"  data-aos="fade-up"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000">
        <div class="container">
            <div class="cards-container">
                <div class="card">

                    <h3 class="card-title">{{  $pageElements[6]->title }}</h3>
                    <p class="card-text">
                        {{  $pageElements[6]->content }}
                    </p>
                </div>
                @foreach($pages as $page)
                    <div class="card">
                        <p class="card-text">
                            <a href="{{ route('page'.$loop->index+2) }}" style="color:inherit">
                            {{ $page->title  }}
                            </a>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="contact-section"  data-aos="fade-up"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000">
        <div class="container container-contact">
            <div class="column photo-column">
                <img
                        src="/assets/img/contact_image.png"
                        alt="Описание изображения"
                        class="contact-image"
                />
            </div>

            <div class="column form-column">
                @if(App::getLocale() == 'ru')
                    <h2 class="contact-title">Остались вопросы?</h2>

                @elseif(App::getLocale() == 'en')
                    <h2 class="contact-title">Any questions?</h2>
                @else
                    <h2 class="contact-title">Сұрақтарыңыз бар ма?</h2>
                @endif
                <form class="contact-form" action="{{ route('send') }}" method="post">
                    @csrf
                    @method('POST')
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
    </section>

    <section class="contact-info-section"  data-aos="fade-up"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000">
        <div class="container-info">
            <div class="column contact-column">
                @if(App::getLocale() == 'ru')
                    <h2 class="contact-info-title">Контакты</h2>
                @elseif(App::getLocale() == 'en')
                    <h2 class="contact-info-title">Contacts</h2>
                @else
                    <h2 class="contact-info-title">Контактілер</h2>
                @endif

                <ul class="contact-info-list">
                    @if(App::getLocale() == 'ru')
                        <li class="contact-info-item">
                            <img src="/assets/img/loc.svg" alt="" />Almax Asia<br />
                            Республика Казахстан, г. Алматы,<br />
                            ул. Ауэзова, 60
                        </li>
                    @elseif(App::getLocale() == 'kk')
                        <li class="contact-info-item">
                            <img src="/assets/img/loc.svg" alt="" />Almax Asia<br />
                            Қазақстан Республикасы, Алматы қ.<br />
                            ул. Ауэзова, 60
                        </li>
                    @else

                        <li class="contact-info-item">
                            <img src="/assets/img/loc.svg" alt="" />Almax Asia<br />
                            Kazakhstan, Almaty<br />
                            st. Auezova, 60
                        </li>
                    @endif

                    <li class="contact-info-item">
                        <img src="/assets/img/tel.svg" alt="" /> +7 705 433 54 56,<br />
                        +7 708 983 79 99
                    </li>
                    <li class="contact-info-item">
                        <img src="/assets/img/email.svg" alt="" />
                        <a href="mailto:almaxasia@gmail.com" style="color:inherit">info@almaxasia.kz
                        </a>
                    </li>
                </ul>
            </div>
            <div class="column map-column">
                <div class="google-map">
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d69.06834135000001!3d43.23894905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b0cc379e9c3%3A0x4a4b0b1d4976059e!2z0JzQvtGB0LrQstCwINCa0LjRgNCw0LQ!5e0!3m2!1sru!2skz!4v1634507774612!5m2!1sru!2skz"
                            width="100%"
                            height="914 "
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                    >
                    </iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
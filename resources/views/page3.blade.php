@extends('layouts.base')
@section('content')
    <section class="main-section container page-2">
        <div class="content">
                <h2 class="content-title" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                    {{$page->title}}
                </h2>
                <p class="content-description" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                    {{$page->content}}

                </p>
        </div>
        <div class="image">
            <img src="{{asset('storage/' . $page->image)}}" alt="Описание изображения" />
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
            @foreach($pageElements as $key => $page)
                @if(!$loop->last)
                    <div class="offer__card">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">{{$page->title}}</div>
                        <div class="offer__card-description">
                            {{$page->content}}
                        </div>
                    </div>
                @endif

            @endforeach


        </div>
    </section>
    <div class="advantages advantages-page3 container" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
            <h2 class="advantages__title">{{$pageElements->last()->title}}</h2>
            <div class="advantages_wrap">
                <div class="block_advg">
                    <p>
                        {{$pageElements->last()->content}}
                    </p>
                    <img src="/assets/img/adv-img.png" alt="" />
                </div>
                <div class="block_advgs">
                    <img src="/assets/img/page_b.png" alt="Изображение" class="advantages__image" />
                    <ul class="advantages__list">
                        {!! $pageElements->last()->content !!}
                    </ul>
                    <button id="contacts" class="advantages__button">@if(App::getLocale() == 'ru')
                            Заказать услугу онлайн
                        @elseif(App::getLocale() == 'en')
                            Order the service online
                        @else
                            Қызметке онлайн тапсырыс беру
                        @endif</button>
                </div>
            </div>
    </div>
@endsection
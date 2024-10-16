@extends('layouts.base')
@section('content')

    <section class="main-section container page-2">
        <div class="content">
            <h2 class="content-title">                {{$page->title}}
            </h2>
            <p class="content-description">
                {{$page->content}}
            </p>
        </div>
        <div class="image">
            <img src="{{asset('storage/' . $page->image)}} " alt="Описание изображения" />
        </div>
        <div class="scroll-arrow"></div>
    </section>

    <section class="big-data container">
        <div class="big-data__content">
            <h2 class="big-data__title" data-aos="fade-up"
                data-aos-offset="200"
                data-aos-delay="50"
                data-aos-duration="1000">
                <?php $predLastPageId = $pageElements->last()->id - 1;
$asd = $pageElements->whereIn('id',$predLastPageId)->first();
?>
                {{$asd->title}}

            </h2>
            <p class="big-data__description" data-aos="fade-up"
               data-aos-offset="200"
               data-aos-delay="50"
               data-aos-duration="1000">
                {{$asd->content}}
            </p>
        </div>
        <div class="big-data__image-container">
            <img
                    src="{{$asd->image ?asset('storage/' . $asd->image): './assets/img/bigdata.png'}}"
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
            @foreach($pageElements as $key => $pageElement)

                @if(!$loop->last && $pageElement->id != $asd->id)

                    <div class="offer__card" data-aos="fade-up"
                         data-aos-offset="200"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <div class="offer__card-icon">
                            <img src="/assets/img/offer_11.svg" alt="" />
                        </div>
                        <div class="offer__card-title">
                            {{$pageElement->title}}
                        </div>
                        <div class="offer__card-description">
                            {{$pageElement->content}}

                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </section>

    <div class="advantages container">
        <div class="advantages_wrap nowarp w54">
            <h2 class="advantages__title">
                {{$pageElements->last()->title}}
            </h2>
            <ul class="advantages__list">

                    {!! $pageElements->last()->content !!}

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
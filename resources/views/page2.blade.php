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
        <h2 class="advantages__title">{!!  $pageElements[6]->title  !!}</h2>
        {!! $pageElements[6]->content !!}
    </div>
    <img src="/assets/img/page_b.png" alt="Изображение" class="advantages__image ">
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

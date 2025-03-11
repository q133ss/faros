<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-uii">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('inc.style')
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    @include('inc.seo', ['post' => $video])
</head>
<body class="_bgLightGray">
<style>
    @keyframes light {
        0% {
            transform: rotateZ(4deg) translate(-0.5%, 0);
        }
        100% {
            transform: rotateZ(-4deg) translate(0.5%, 0);
        }
    }

    ._colorBlack a {
        color: #1a1a1a;
        text-decoration: none;
        transition: 0.5s;
    }

    ._colorBlack a:hover {
        opacity: 0.5;
        transition: 0.5s;
    }

    form.res-message {
        font-size: 48px;
        text-align: center;
    }

    #map {
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
    }
</style>

<!--Header START-->
@include('inc.header')
@include('inc.mobmenu')
<!--Header END--><div class="hidden" id="hidden">
    <div class="wrapper" id="wrapper">

        <div class="authorWrap authorWrap_footer">
            <div class="authorWrap__left videoPage">
                <ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{{route('index')}}" title="Главная" itemprop="item">
                            <span itemprop="name">Главная</span>
                            <meta itemprop="position" content="0">
                        </a>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{{route('video.index')}}" title="Мы в эфире" itemprop="item">
                            <span itemprop="name">Мы в эфире</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a title="{{$video->title}}" itemprop="item">
                            <span itemprop="name">{{$video->title}}</span>
                            <meta itemprop="position" content="2">

                        </a>
                    </li>
                </ul>
                <div class="sinpleHeader">
                    <div class="sinpleHeader__bread">
                        <a href="{{route('index')}}" class="sinpleHeader__bread__tag">ВИДЕО</a>
                    </div>
                </div>

                <h1 class="sinpleHeaderTitle">{{$video->title}}</h1>

                <div class="sinpleHeader__data">
                    <div class="sinpleHeader__data__item">
                        <img src="/images/min/icons/calendar_gray.svg" alt="Faros media" class="sinpleHeader__data__item__ico">
                        <p class="sinpleHeader__data__item__text">{{$video->created_at?->format('d.m.Y')}}</p>
                    </div>

                    <div class="sinpleHeader__data__item">
                        <img src="/images/min/icons/eye_gray.svg" alt="Faros media" class="sinpleHeader__data__item__ico">
                        <p class="sinpleHeader__data__item__text">{{$video->views_count}} просмотров</p>
                    </div>
                </div>

                {!! $video->iframe !!}

                <div class="blogBG blogBG_nomt"></div>

                <div class="simpleSliderWrap">
                    <p class="simpleSliderWrap__tit">Похожие видео</p>

                    <div class="simpleSlider" id="simpleSlider">
                        @foreach(\App\Models\Video::where('id', '!=', $video->id)->limit(6)->get() as $relation)
                        <a href="{{route('video.show', $relation->slug)}}" class="simpleSlider__slide">
                            <div class="simpleSlider__slide__picWrap">
                                <picture class="simpleSlider__slide__picWrap__pic">
                                    <img src="{{$relation->img}}" title="Faros Media" alt="Faros Media">
                                </picture>
                                <img class="simpleSlider__slide__picWrap__play" alt="Faros Media" src="/images/min/icons/play.svg">
                            </div>
                            <p class="simpleSlider__slide__text">{{$relation->title}}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="vidgets">
                @include('inc.articles')
            </div>
            <!--full height, contacts home block START-->
            @include('inc.contacts')
            <!--full height, contacts home block END-->        </div>
    </div>
</div><!--PDF POPUP-->
<div class="pdf-popap" style="display: none;" id="pdfPopUp">
    <div class="pdf-popap__close"></div>
    <div class="pdf-popap__dark">
        <div class="pdf-popap__block" id="pdfPopup">
            <embed src="/" width="100%" class="pdf-popap__embed"  />
        </div>
    </div>
</div>
<script src="/js/script.js" data-detail="true" defer></script>
</body>
</html>

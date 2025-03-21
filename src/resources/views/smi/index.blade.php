<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-uii">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('inc.style')
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    @include('inc.seo')
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
</head>
<body class="">
<!--Header START-->
@include('inc.header')
@include('inc.mobmenu')
<div class="hidden" id="hidden">
    <div class="wrapper" id="wrapper">
        <!--news home menu START-->
        <div class="horizMenu _bgWhite">


            <p class="bread horizMenu__menu horizMenu__menu__media">СМИ о нас</p>

            <div class="horizMenu__filter horizMenu__filter_mw">
                <img src="/images/min/icons/top_bottom.svg" loading="lazy" alt="Faros media"
                     class="horizMenu__filter__sort horizMenu__filter__sort_abs">
                <select class="selectWrap__sel" id="sortSelMedia">
                    <option value="new">Новые</option>
                    <option value="old">Старые</option>
                    <option value="popular">По популярности</option>
                </select>
                <img src="/images/min/icons/arroworange.svg" loading="lazy" alt="Faros media"
                     class="horizMenu__filter__arrow horizMenu__filter__arrow_abs">
            </div>
        </div>
        <!--news home menu END-->

        <div class="media">
            @foreach($smi as $post)
                @if($post->type == 'gray_bg')
                    <div class="articlesDoubleBlock _bgGray16 scene">
                        <div class="articlesDoubleBlock__content">
                            <div class="articlesDoubleBlock__content__top">
                                @if($post->logo != '')
                                <!--noindex--><a href="{{$post->source}}" target="_blank" class="articlesDoubleBlock__content__top__logo" rel="nofollow">
                                    <picture class="articlesDoubleBlock__content__top__logo__img">
                                        <img src="{{$post->logo}}" loading="lazy" title="Faros Media" alt="Faros Media">
                                    </picture>
                                </a><!--/noindex-->
                                @endif
                            </div>
                            <a href="{{route('smi.show', $post->slug)}}"
                               class="articlesDoubleBlock__content__title _colorBlack">{!! $post->list_title !!}</a>
                        </div>

                        <picture class="articlesDoubleBlock__pic parallax">
                            <img src="{{$post->img}}" loading="lazy" title="Faros Media" data-depth="0.6" alt="Faros Media">
                        </picture>
                    </div>
                @elseif($post->type == 'yellow_bg')
                        <div class="articlesDoubleBlock _bgYellow">
                            <div class="articlesDoubleBlock__content">
                                <div class="articlesDoubleBlock__content__top">
                                    @if($post->logo != '')
                                    <!--noindex--><a target="_blank" href="{{$post->source}}" class="articlesDoubleBlock__content__top__logo" rel="nofollow">
                                        <picture class="articlesDoubleBlock__content__top__logo__img">
                                            <img src="{{$post->logo}}" loading="lazy" title="Faros Media" alt="Faros Media" data-depth="0.6">
                                        </picture>
                                    </a><!--/noindex-->
                                    @endif
                                    <div class="articlesDoubleBlock__content__top__viz">

                                    </div>
                                </div>
                                <p class="articlesDoubleBlock__content__title _colorBlack"><a
                                        href="{{route('smi.show', $post->slug)}}">{!! $post->list_title !!}</a></p>
                            </div>
                            <a href="{{route('smi.show', $post->slug)}}">
                                <picture class="articlesDoubleBlock__pic articlesDoubleBlock__pic_second">
                                    <img src="{{$post->img}}" loading="lazy" title="Faros Media" alt="Faros Media" data-depth="0.6">
                                </picture>
                            </a>
                        </div>
                @else
                    <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                        <a href="{{route('smi.show', $post->slug)}}">
                            <picture class="newsMiniBlock__pic">
                                <img src="{{$post->img}}" loading="lazy" title="Faros Media" alt="Faros Media" data-depth="0.6">
                            </picture>
                        </a>

                        <div class="newsMiniBlock__cont">

                            <p class="newsMiniBlock__cont__tit _colorBlack"><a
                                    href="{{route('smi.show', $post->slug)}}">{!! $post->list_title !!}</a></p>
                            <div class="grow-full"></div>
                            @if($post->logo != '')
                            <!--noindex--><a target="_blank" href="{{$post->source}}"  class="newsMiniBlock__cont__logo" rel="nofollow">
                                <picture class="newsMiniBlock__cont__logo__pic">
                                    <img src="{{$post->logo}}" loading="lazy" title="Faros Media" alt="Faros Media" data-depth="0.6">
                                </picture>
                            </a><!--/noindex-->
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
</div><!--PDF POPUP-->
<div class="pdf-popap" style="display: none;" id="pdfPopUp">
    <div class="pdf-popap__close"></div>
    <div class="pdf-popap__dark">
        <div class="pdf-popap__block" id="pdfPopup">
            <embed src="/" style="width: 100%;" class="pdf-popap__embed"  />
        </div>
    </div>
</div>
<script src="/js/script.js" data-detail="true" defer></script>
</body>
</html>

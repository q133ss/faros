<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-uii">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('inc.style')
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    @include('inc.seo', ['post' => $case])

    <style>
        @media screen and (max-width: 760px){
            .sinpleHeaderTitle__text{
                padding: 20px;
            }
        }

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
<body class="_bgLightGray">
<!--Header START-->
@include('inc.header')
@include('inc.mobmenu')
<!--Header END-->
<div class="hidden" id="hidden">
    <div class="wrapper" id="wrapper">

        <div class="authorWrap authorWrap_footer">
            <div class="authorWrap__left">
                <ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{{route('index')}}" title="Главная" itemprop="item">
                            <span itemprop="name">Главная</span>
                            <meta itemprop="position" content="0">
                        </a>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{{route('case.index')}}" title="Кейсы" itemprop="item">
                            <span itemprop="name">Кейсы</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a title="{{$case->post_name}}" href="#" itemprop="item">
                            <span itemprop="name">{{$case->post_name}}</span>
                            <meta itemprop="position" content="2">
                        </a>
                    </li>
                </ul>
                <div class="sinpleHeaderTitle sticker">
                    <h1 class="sinpleHeaderTitle__text">{{$case->post_name}}</h1>
                </div>


                <div class="sinpleHeader__data">
                    <div class="sinpleHeader__data__item">
                        <img src="../../images/min/icons/calendar_gray.svg" loading="lazy" alt="Faros media" class="sinpleHeader__data__item__ico">
                        <p class="sinpleHeader__data__item__text">{{$case->created_at?->format('d.m.Y')}}</p>
                    </div>
                    <div class="sinpleHeader__data__item">
                        @foreach($case->tags as $tag)
                        <a href="{{route('case.index')}}"
                           class="sinpleHeader__data__item__tag">#{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>

                @if($case->img != null && $case->img != '/images/case/')
                <picture class="authorWrap__left__banner authorWrap__left__banner_case">
                    <img src="{{$case->img}}" loading="lazy" title="Faros Media" alt="Faros Media">
                </picture>
                @endif

                <div class="author1 blog">
                    <div class="author1__partName author1__partName_center">
                    </div>


                    <div class="author1__partCont">{!! $case->text !!}</div>


                    <div class="author1__partName author1__partName_center">
                    </div>


                    <div class="author1__partCont">

                    </div>

                    <p class="author1__partName">Теги статьи</p>

                    <div class="author1__partCont author1__partCont_tags">
                        @foreach($case->tags as $tag)
                            <a href="{{route('case.index')}}"
                               class="author1__partCont__tag">{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>

                <div class="blogBG blogBG_mtBig"></div>

                <div class="simpleSliderWrap">
                    <p class="simpleSliderWrap__tit">Наши другие кейсы</p>

                    <div class="simpleSlider" id="simpleSlider">
                        @foreach($related as $post)
                        <a href="{{route('case.show', $post->slug)}}" class="simpleSlider__slide">
                            <div class="simpleSlider__slide__picWrap">
                                <picture class="simpleSlider__slide__picWrap__pic">
                                    <img src="{{$post->list_img}}" loading="lazy" title="Faros Media" alt="Faros Media">
                                </picture>
                            </div>
                            <p class="simpleSlider__slide__text">{{$post->list_name}}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="vidgets">
                @include('inc.articles')
                <div class="blogBG blogBG_big"></div>
                <div class="authVidget">
                    <div class="authVidget__header">
                        <div class="authVidget__body__item authVidget__body__item_top">
                            @if($case->author_img != null)
                            <picture class="authVidget__body__item__pic">
                                @if($case->author_id != null)
                                    <a href="{{route('team.show', $case->author?->id)}}">
                                        <img src="{{$case->author_img}}" loading="lazy" title="Faros Media" alt="Faros Media">
                                    </a>
                                @else
                                    <a href="#">
                                        <img src="{{$case->author_img}}" loading="lazy" title="Faros Media" alt="Faros Media">
                                    </a>
                                @endif
                            </picture>
                            @endif
                            <div class="authVidget__body__item__data">
                                @if($case->author_id != null)
                                    <a href="{{route('team.show', $case->author?->id)}}"
                                       class="authVidget__body__item__data__name">{{$case->author_name}}</a>
                                    <p class="authVidget__body__item__data__post">{{$case->author_post}}</p>
                                @else
                                    <a href="#"
                                       class="authVidget__body__item__data__name">{{$case->author_name}}</a>
                                    <p class="authVidget__body__item__data__post">{{$case->author_post}}</p>
                                @endif
                            </div>
                        </div>

                        <img src="../../images/min/icons/sayw.svg" loading="lazy" alt="Faros media" class="authVidget__header__ico">
                    </div>

                    <div class="blogBG"></div>

                    <p class="authVidget__wText">{{$case->author_quote}}</p>
                </div>

            </div>
            <!--full height, contacts home block START-->
            <div class="contacts contacts__vertical">
                <div class="contacts__data">
                    <div class="grow-full"></div>

                    <div class="contacts__data__logoWrap">
                        <img src="../../images/min/logourl.svg" loading="lazy" alt="Faros Media" class="contacts__data__logoWrap__logo"/>
                    </div>
                    <p class="contacts__data__adress">
                        Бизнес-центр «West plaza», г. Москва, ул.Рябиновая, д. 26, стр. 10
                    </p>
                    <div class="contacts__data__items">
                        <div class="contacts__data__items__part">
                            <a href="mailto:info@faros.media" class="contacts__data__items__part__contact">info@faros.media</a>
                            <p class="contacts__data__items__part__descr">
                                По всем вопросам пишите нам
                            </p>
                        </div>
                        <div class="contacts__data__items__part">
                            <a href="tel:88006008613" class="contacts__data__items__part__contact">8 800 600 86 13</a>
                            <p class="contacts__data__items__part__descr">
                                Звонок по РФ бесплатен
                            </p>
                        </div>
                    </div>
                    <br>        <div id="coordinates" style="display: none">55.69451, 37.422584</div>
                    <div class="grow-full"></div>

                    <div class="contacts__data__links">
                        <div class="contacts__data__links__nav">
                            <a href="{{route('index')}}" class="contacts__data__links__nav__link">Команда</a>
                            <a href="{{route('service.index')}}" class="contacts__data__links__nav__link">Услуги</a>
                            <a href="{{route('case.index')}}" class="contacts__data__links__nav__link">Кейсы</a>
                        </div>

                        <div class="contacts__data__links__soc">
                            <!--noindex--><a  href="https://vk.com/faros.media"  class="contacts__data__links__soc__link" rel="nofollow">
                                <svg viewBox="0 0 48 48" class="contacts__data__links__soc__link__img">
                                    <circle cx="24" cy="24" r="23.5" stroke="#EAEAEA" fill="rgba(26,26,26, 0)"/>
                                    <g clip-path="url(#clip0)">
                                        <path d="M31.915 25.028C31.527 24.538 31.638 24.32 31.915 23.882C31.92 23.877 35.123 19.451 35.453 17.95L35.455 17.949C35.619 17.402 35.455 17 34.662 17H32.038C31.37 17 31.062 17.345 30.897 17.731C30.897 17.731 29.561 20.929 27.671 23.002C27.061 23.601 26.779 23.793 26.446 23.793C26.282 23.793 26.027 23.601 26.027 23.054V17.949C26.027 17.293 25.84 17 25.287 17H21.161C20.742 17 20.493 17.306 20.493 17.591C20.493 18.213 21.438 18.356 21.536 20.106V23.903C21.536 24.735 21.385 24.888 21.05 24.888C20.158 24.888 17.993 21.677 16.71 18.002C16.451 17.289 16.198 17.001 15.525 17.001H12.9C12.151 17.001 12 17.346 12 17.732C12 18.414 12.892 21.805 16.148 26.285C18.318 29.343 21.374 31 24.154 31C25.825 31 26.029 30.632 26.029 29.999C26.029 27.077 25.878 26.801 26.715 26.801C27.103 26.801 27.771 26.993 29.331 28.468C31.114 30.217 31.407 31 32.405 31H35.029C35.777 31 36.156 30.632 35.938 29.906C35.439 28.379 32.067 25.238 31.915 25.028Z" fill="#1A1A1A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white" transform="translate(12 12)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a><!--/noindex-->
                            <!--noindex--><a  href="https://t.me/Farosmedia"  class="contacts__data__links__soc__link" rel="nofollow">
                                <svg viewBox="0 0 48 48" class="contacts__data__links__soc__link__img">
                                    <circle cx="24" cy="24" r="23.5" stroke="#EAEAEA" fill="rgba(26,26,26, 0)"/>
                                    <g clip-path="url(#clip0)">
                                        <path d="M21.4172 27.181L21.0202 32.765C21.5882 32.765 21.8342 32.521 22.1292 32.228L24.7922 29.683L30.3102 33.724C31.3222 34.288 32.0352 33.991 32.3082 32.793L35.9302 15.821L35.9312 15.82C36.2522 14.324 35.3902 13.739 34.4042 14.106L13.1142 22.257C11.6612 22.821 11.6832 23.631 12.8672 23.998L18.3102 25.691L30.9532 17.78C31.5482 17.386 32.0892 17.604 31.6442 17.998L21.4172 27.181Z" fill="#1A1A1A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip1">
                                            <rect width="24" height="24" fill="white" transform="translate(12 12)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a><!--/noindex-->
                        </div>
                    </div>

                    <p class="contacts__data__copyrigth">© 2025 FAROS MEDIA. Все права защищены.</p>
                </div>

                <div class="contacts__map">
                    <div class="contacts__map__pic" id="map"></div>
                </div>
            </div>
            <!--full height, contacts home block END-->        </div>
    </div>
</div>

<!--PDF POPUP-->
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

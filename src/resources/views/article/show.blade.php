<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-uii">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('inc.style')
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    @include('inc.seo', ['post' => $post])
    <style>
        .hidden{
            height: auto!important;
        }
    </style>
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
                        <a href="{{route('articles.index')}}" title="Статьи" itemprop="item">
                            <span itemprop="name">Статьи</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a title="{{$post->post_name}}" href="#" itemprop="item">
                            <span itemprop="name">{{$post->post_name}}</span>
                            <meta itemprop="position" content="2">
                        </a>
                    </li>
                </ul>
                <div class="sinpleHeaderTitle sticker">
                    <div class="sinpleHeader">
                        <div class="sinpleHeader__bread">
                            <a href="{{route('team.show', $post->author?->slug)}}"
                               class="sinpleHeader__bread__link">{{$post->author?->name}}</a>
                            @if($post->category_id)
                                <a href="{{route('articles.index')}}?category={{$post->category_id}}" class="sinpleHeader__bread__tag">{{$post->category?->name}}</a>
                            @endif
                        </div>
                    </div>
                    <h1 class="sinpleHeaderTitle">{{$post->post_name}}</h1>
                </div>


                <div class="sinpleHeader__data">
                    <div class="sinpleHeader__data__item">
                        <img src="/images/min/icons/calendar_gray.svg" loading="lazy" alt="Faros Media" class="sinpleHeader__data__item__ico">
                        <p class="sinpleHeader__data__item__text">{{$post->created_at?->format('d.m.Y')}}</p>
                    </div>

                    <div class="sinpleHeader__data__item">
                        <img src="/images/min/icons/eye_gray.svg" loading="lazy" alt="Faros Media" class="sinpleHeader__data__item__ico">
                        <p class="sinpleHeader__data__item__text">{{$post->views}} просмотров</p>
                    </div>
                    <div class="sinpleHeader__data__item sinpleHeader__data__item_headerTags">
                        @foreach($post->tags as $tag)
                        <a href="{{route('articles.index')}}"
                           class="sinpleHeader__data__item__tag">#{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>

                <picture class="authorWrap__left__banner authorWrap__left__banner_articles">
                    <img src="{{$post->img}}" loading="lazy" alt="{{$post->post_name}}" title="{{$post->post_name}}">
                </picture>

                <div class="author1 blog">
                    <p class="author1__partName"></p>

                    <div class="author1__partCont">{!! $post->pre_title !!}</div>

                    <div class="author1__partName author1__partName_contents">
                        <div class="author1__partName_contents__button" id="contentButton">
                            <img src="/images/min/icons/slickprev.svg" loading="lazy" alt="Faros Media"
                                 class="author1__partName_contents__button__arrow">
                            <span>Содержание статьи</span>
                        </div>
                    </div>

                    <div class="author1__partCont author1__partCont_contents">
                        <div class="author1__partCont__dataWrap top-content" id="content">
                            <ul>

                            </ul>
                        </div>
                    </div>

                    <div class="author1__partName author1__partName_center">
                        <div class="author1__partName__persent">
                        </div>
                    </div>

                    <div class="author1__partCont">
                        {!! $post->content !!}
                    </div>

                </div>

                <div class="blogBG blogBG_mtBig blogBG_nomb"></div>


                <div class="pageAuthor">
                    <div class="pageAuthor__left">
                        <picture class="pageAuthor__left__pic">
                            <a href="{{route('team.show', $post->author?->slug)}}">
                                <img src="{{$post->author?->img}}" alt="{{$post->author?->name}}" loading="lazy" title="{{$post->author?->name}}">
                            </a>
                        </picture>

                        <div class="pageAuthor__left__data">
                            <a href="{{route('team.show', $post->author?->slug)}}"
                               class="pageAuthor__left__name">{{$post->author?->name}}</a>
                            <p class="pageAuthor__left__post">{{$post->author?->list_post}}</p>
                        </div>
                    </div>


                    <div class="pageAuthor__right">
                        <button class="pageAuthor__right__top" id="scrolltotop">
                            <img class="pageAuthor__right__top__ico" loading="lazy" alt="Faros Media" src="/images/min/icons/top.svg">
                            <span class="pageAuthor__right__top__text">Наверх</span>
                        </button>

                        <div class="subscribeWrap">
                            <button class="subscribe" type="button" id="toggleSoc">
                                <img src="/images/min/icons/shareblog.svg" loading="lazy" alt="Faros Media" class="subscribe__ico">
                                <span class="subscribe__text">Поделиться статьей</span>
                            </button>

                            <div class="subscribeWrap__soc" id="social">
                                <!--noindex--><a  href="http://vk.com/share.php?url=https://faros.media/articles/kak-zagubit-loyalnost-marketingovymi-aktivnostyami/&title=Как"  загубить лояльность маркетинговыми активностями&image=https://faros.media/upload/iblock/043/80k2o2kijoqou5jqac1h2a9w6dd5yvd7/webpc-passthru.webp"
                                                  target="_blank " class="subscribeWrap__soc__link" rel="nofollow">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M14.9363 9.771C14.6453 9.4035 14.7285 9.24 14.9363 8.9115C14.94 8.90775 17.3422 5.58825 17.5897 4.4625L17.5912 4.46175C17.7143 4.0515 17.5913 3.75 16.9965 3.75H15.0285C14.5275 3.75 14.2965 4.00875 14.1727 4.29825C14.1727 4.29825 13.1707 6.69675 11.7533 8.2515C11.2957 8.70075 11.0843 8.84475 10.8345 8.84475C10.7115 8.84475 10.5203 8.70075 10.5203 8.2905V4.46175C10.5203 3.96975 10.38 3.75 9.96525 3.75H6.87075C6.5565 3.75 6.36975 3.9795 6.36975 4.19325C6.36975 4.65975 7.0785 4.767 7.152 6.0795V8.92725C7.152 9.55125 7.03875 9.666 6.7875 9.666C6.1185 9.666 4.49475 7.25775 3.5325 4.5015C3.33825 3.96675 3.1485 3.75075 2.64375 3.75075H0.675C0.11325 3.75075 0 4.0095 0 4.299C0 4.8105 0.669 7.35375 3.111 10.7138C4.7385 13.0073 7.0305 14.25 9.1155 14.25C10.3688 14.25 10.5218 13.974 10.5218 13.4993C10.5218 11.3078 10.4085 11.1008 11.0363 11.1008C11.3273 11.1008 11.8282 11.2448 12.9982 12.351C14.3355 13.6628 14.5553 14.25 15.3038 14.25H17.2717C17.8328 14.25 18.117 13.974 17.9535 13.4295C17.5793 12.2843 15.0503 9.9285 14.9363 9.771Z"
                                                  fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a><!--/noindex-->
                                <!--noindex--><a  href="https://www.facebook.com/sharer/sharer.php?u=https://faros.media/articles/kak-zagubit-loyalnost-marketingovymi-aktivnostyami/"
                                                  target="_blank" class="subscribeWrap__soc__link" rel="nofollow">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.3936 18V9.78996H13.1482L13.5615 6.58941H10.3936V4.54632C10.3936 3.61998 10.6498 2.98869 11.9796 2.98869L13.673 2.98799V0.125307C13.3802 0.0872508 12.3749 0 11.2049 0C8.76181 0 7.08919 1.49127 7.08919 4.22934V6.58941H4.32617V9.78996H7.08919V18H10.3936Z"
                                              fill="white"/>
                                    </svg>
                                </a><!--/noindex-->
                                <!--noindex--><a  href="https://www.instagram.com/farosmedia/"  target="_blank"
                                                  class="subscribeWrap__soc__link" rel="nofollow">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path class="st0" d="M9.1,17.7c-0.1,0-0.1,0-0.2,0c-1.4,0-2.6,0-3.8-0.1C4,17.5,3,17.1,2.2,16.4c-0.8-0.6-1.3-1.5-1.6-2.6
                                    c-0.2-0.9-0.2-1.8-0.3-2.7c0-0.6,0-1.4,0-2.1c0-0.8,0-1.5,0-2.1c0-0.9,0-1.8,0.3-2.7c0.3-1.1,0.8-1.9,1.6-2.6C3,1,4,0.6,5.1,0.5
                                    C6.4,0.5,7.6,0.4,9,0.4c1.4,0,2.6,0,3.8,0.1c1.1,0.1,2.1,0.5,2.9,1.1c0.8,0.6,1.3,1.5,1.6,2.6c0.2,0.9,0.2,1.8,0.3,2.7
                                    c0,0.6,0,1.4,0,2.1v0c0,0.8,0,1.5,0,2.1c0,0.9,0,1.8-0.3,2.7c-0.3,1.1-0.8,1.9-1.6,2.6c-0.8,0.7-1.8,1-2.9,1.1
                                    C11.6,17.6,10.4,17.7,9.1,17.7z M9,16.3c1.3,0,2.5,0,3.7-0.1c0.8-0.1,1.6-0.3,2.2-0.8c0.6-0.5,0.9-1.1,1.1-1.8
                                    c0.2-0.8,0.2-1.6,0.2-2.4c0-0.6,0-1.4,0-2.1c0-0.8,0-1.5,0-2.1c0-0.8,0-1.6-0.2-2.4c-0.2-0.8-0.6-1.4-1.1-1.8
                                    c-0.6-0.5-1.3-0.8-2.2-0.8C11.5,1.8,10.3,1.8,9,1.8c-1.3,0-2.5,0-3.7,0.1C4.4,1.9,3.7,2.2,3.1,2.7C2.5,3.1,2.1,3.8,1.9,4.5
                                    C1.7,5.3,1.7,6.1,1.7,6.9c0,0.6,0,1.4,0,2.1c0,0.7,0,1.5,0,2.1c0,0.8,0,1.6,0.2,2.4c0.2,0.8,0.6,1.4,1.1,1.8
                                    c0.6,0.5,1.3,0.8,2.2,0.8C6.4,16.3,7.6,16.3,9,16.3z M8.9,13.2c-2.3,0-4.2-1.9-4.2-4.2c0-2.3,1.9-4.2,4.2-4.2
                                    c2.3,0,4.2,1.9,4.2,4.2C13.1,11.4,11.2,13.2,8.9,13.2z M8.9,6.2C7.3,6.2,6.1,7.5,6.1,9c0,1.6,1.3,2.9,2.9,2.9
                                    c1.6,0,2.9-1.3,2.9-2.9C11.8,7.5,10.5,6.2,8.9,6.2z M13.6,3.5c-0.6,0-1,0.5-1,1c0,0.6,0.5,1,1,1c0.6,0,1-0.5,1-1
                                    C14.6,3.9,14.2,3.5,13.6,3.5z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip1">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a><!--/noindex-->
                                <!--noindex--><a  href="https://t.me/share/url?url=https://faros.media/articles/kak-zagubit-loyalnost-marketingovymi-aktivnostyami/&text=Как"  загубить лояльность маркетинговыми активностями"
                                target="_blank" class="subscribeWrap__soc__link" rel="nofollow">
                                <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M7.06288 11.3861L6.76513 15.5741C7.19113 15.5741 7.37563 15.3911 7.59688 15.1713L9.59413 13.2626L13.7326 16.2933C14.4916 16.7163 15.0264 16.4936 15.2311 15.5951L17.9476 2.86605L17.9484 2.8653C18.1891 1.7433 17.5426 1.30455 16.8031 1.5798L0.835633 7.69306C-0.254117 8.11606 -0.237617 8.72356 0.650383 8.99881L4.73263 10.2686L14.2149 4.3353C14.6611 4.0398 15.0669 4.2033 14.7331 4.4988L7.06288 11.3861Z"
                                              fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip2">
                                            <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                </a><!--/noindex-->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="blogBG blogBG_nomt"></div>

                <div class="simpleSliderWrap">
                    <p class="simpleSliderWrap__tit">Читать далее</p>

                    <div class="simpleSlider" id="simpleSlider">
                        @foreach($relation as $rpost)
                        <a href="{{route('articles.show', $rpost->slug)}}" class="simpleSlider__slide">
                            <div class="simpleSlider__slide__picWrap">
                                <picture class="simpleSlider__slide__picWrap__pic">
                                    <img src="{{$rpost->list_img}}" loading="lazy" title="Faros Media" alt="Faros Media">
                                </picture>
                            </div>
                            <p class="simpleSlider__slide__text">{{$rpost->list_name}}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="vidgets">
                @include('inc.articles')
            </div>
            <!--full height, contacts home block START-->
            <div class="contacts contacts__vertical">
                <div class="contacts__data">
                    <div class="grow-full"></div>

                    <div class="contacts__data__logoWrap">
                        <img src="/images/min/logourl.svg" loading="lazy" alt="Faros Media" class="contacts__data__logoWrap__logo"/>
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
                            <a href="/team/" class="contacts__data__links__nav__link">Команда</a>
                            <a href="/service/" class="contacts__data__links__nav__link">Услуги</a>
                            <a href="/case/" class="contacts__data__links__nav__link">Кейсы</a>
                        </div>

                        <div class="contacts__data__links__soc">
                            <!--noindex--><a  href="https://vk.com/faros.media"  class="contacts__data__links__soc__link" rel="nofollow">
                                <svg viewBox="0 0 48 48" class="contacts__data__links__soc__link__img">
                                    <circle cx="24" cy="24" r="23.5" stroke="#EAEAEA" fill="rgba(26,26,26, 0)"/>
                                    <g clip-path="url(#clip0)">
                                        <path d="M31.915 25.028C31.527 24.538 31.638 24.32 31.915 23.882C31.92 23.877 35.123 19.451 35.453 17.95L35.455 17.949C35.619 17.402 35.455 17 34.662 17H32.038C31.37 17 31.062 17.345 30.897 17.731C30.897 17.731 29.561 20.929 27.671 23.002C27.061 23.601 26.779 23.793 26.446 23.793C26.282 23.793 26.027 23.601 26.027 23.054V17.949C26.027 17.293 25.84 17 25.287 17H21.161C20.742 17 20.493 17.306 20.493 17.591C20.493 18.213 21.438 18.356 21.536 20.106V23.903C21.536 24.735 21.385 24.888 21.05 24.888C20.158 24.888 17.993 21.677 16.71 18.002C16.451 17.289 16.198 17.001 15.525 17.001H12.9C12.151 17.001 12 17.346 12 17.732C12 18.414 12.892 21.805 16.148 26.285C18.318 29.343 21.374 31 24.154 31C25.825 31 26.029 30.632 26.029 29.999C26.029 27.077 25.878 26.801 26.715 26.801C27.103 26.801 27.771 26.993 29.331 28.468C31.114 30.217 31.407 31 32.405 31H35.029C35.777 31 36.156 30.632 35.938 29.906C35.439 28.379 32.067 25.238 31.915 25.028Z" fill="#1A1A1A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip3">
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
                                        <clipPath id="clip4">
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
            <!--full height, contacts home block END-->

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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Находим все элементы с классом 'hidden'
        const hiddenElement = document.querySelector('.hidden');
        hiddenElement.style.height = 'auto';
    });
</script>
</body>
</html>

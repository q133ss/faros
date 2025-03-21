<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-uii">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('inc.style')
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    @include('inc.seo', ['post' => $post])
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
            <div class="authorWrap__left">
                <ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{{route('index')}}" title="Главная" itemprop="item">
                            <span itemprop="name">Главная</span>
                            <meta itemprop="position" content="0">
                        </a>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{{route('smi.index')}}" title="СМИ" itemprop="item">
                            <span itemprop="name">СМИ</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a title="{{$post->post_title}}" itemprop="item">
                            <span itemprop="name">{{$post->post_title}}</span>
                            <meta itemprop="position" content="2">
                        </a>
                    </li>
                </ul>
                <div class="sinpleHeaderTitle sticker">
                    <div class="sinpleHeader">
                        <div class="sinpleHeader__bread">
                            <a href="{{route('smi.show', $post->slug)}}" class="sinpleHeader__bread__tag">РЕПУТАЦИЯ</a>
                        </div>
                    </div>


                    <h1 class="sinpleHeaderTitle">{{$post->post_title}}</h1>
                </div>
                <div class="sinpleHeader__data">
                    <div class="sinpleHeader__data__item">
                        <img src="/images/min/icons/calendar_gray.svg" loading="lazy" alt="Faros media" class="sinpleHeader__data__item__ico">
                        <p class="sinpleHeader__data__item__text">{{$post->created_at->format('d.m.Y')}}</p>
                    </div>

                    <div class="sinpleHeader__data__item">
                        <img src="/images/min/icons/eye_gray.svg" loading="lazy" alt="Faros media" class="sinpleHeader__data__item__ico">
                        <p class="sinpleHeader__data__item__text">{{$post->views}} просмотр(ов)</p>
                    </div>
                </div>

                <picture class="authorWrap__left__banner">
                </picture>

                <div class="author1 blog">
                    <div class="author1__partName author1__partName_center">
                        <div class="author1__partName__persent">
                        </div>
                    </div>


                    <div class="author1__partCont">{!! $post->text !!}</div>
                </div>

                <div class="blogBG blogBG_mtBig blogBG_nomb"></div>

                <div class="pageAuthor">
                    @if($post->logo != '')
                    <div class="pageAuthor__left">
                        <picture class="pageAuthor__left__pic pageAuthor__left__pic_logo">
                            <img src="{{$post->logo}}" alt="Faros media" loading="lazy" title="Faros Media">
                        </picture>
                    </div>
                    @endif
                    <div class="pageAuthor__center">
                        <!--noindex--><a  href="{{$post->source}}"  target="_blank" class="pageAuthor__center__link" rel="nofollow">
                            <svg class="pageAuthor__center__link__ico" viewBox="0 0 16 16"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.99973 0C3.58165 0 0 3.58192 0 7.99984C0 12.4178 3.58165 16 7.99973 16C12.4178 16 15.9999 12.418 15.9999 7.99984C15.9999 3.58171 12.4178 0 7.99973 0ZM12.0193 6.57611L10.0627 8.53269C9.85051 8.74491 9.56837 8.86176 9.26832 8.86176C8.96832 8.86176 8.68613 8.74485 8.47392 8.5328L8.39728 8.45616L8.18896 8.66448L8.26544 8.74096C8.70352 9.17904 8.70352 9.89184 8.26544 10.3299L6.30912 12.2865C6.09691 12.4987 5.81477 12.6156 5.51456 12.6156C5.2144 12.6156 4.93221 12.4987 4.71989 12.2863L3.98043 11.5467C3.54235 11.1089 3.54235 10.3961 3.98027 9.95787L5.93701 8.00139C6.14923 7.78917 6.43136 7.67232 6.73157 7.67232C7.03179 7.67232 7.31376 7.78923 7.52613 8.00139L7.60251 8.07776L7.81083 7.86944L7.73445 7.79307C7.29637 7.35515 7.29637 6.64235 7.73419 6.20427L9.69093 4.24768C9.90325 4.03536 10.1854 3.91845 10.4855 3.91845C10.7855 3.91845 11.0677 4.03536 11.2801 4.24752L12.0197 4.98741C12.4574 5.42523 12.4574 6.13813 12.0193 6.57611Z"
                                      fill="#3987B2"/>
                                <path d="M7.60304 9.25086L7.22475 9.62915L6.63798 9.04254L7.01627 8.66425L6.9399 8.58787C6.88443 8.53257 6.81072 8.50195 6.73243 8.50195C6.65398 8.50195 6.58027 8.53251 6.5248 8.58787L4.56822 10.5442C4.45382 10.6587 4.45382 10.8449 4.56822 10.9593L5.30795 11.6992C5.41905 11.8103 5.61238 11.8101 5.72321 11.6993L7.67952 9.74275C7.79408 9.62824 7.79408 9.4419 7.67952 9.32734L7.60304 9.25086Z"
                                      fill="#3987B2"/>
                                <path d="M10.6922 4.83407C10.6367 4.77861 10.5629 4.74805 10.4844 4.74805C10.406 4.74805 10.3321 4.77861 10.2766 4.83423L8.32003 6.79072C8.20579 6.90522 8.2058 7.09141 8.3202 7.20597L8.39667 7.28234L8.97694 6.70192L9.56371 7.28869L8.98345 7.86912L9.05993 7.9456C9.17102 8.05637 9.36409 8.05653 9.47518 7.94544L11.4317 5.98912C11.5461 5.87461 11.5461 5.68842 11.4317 5.57386L10.6922 4.83407Z"
                                      fill="#3987B2"/>
                            </svg>
                            <span class="pageAuthor__center__link__text">Перейти к источнику</span>
                        </a><!--/noindex-->
                    </div>

                    <div class="pageAuthor__right">
                        <button class="pageAuthor__right__top" id="scrolltotop">
                            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                 class="pageAuthor__right__top__ico">
                                <path d="M8 0C3.5785 0 0 3.57803 0 8C0 12.4215 3.57803 16 8 16C12.4215 16 16 12.422 16 8C16 3.5785 12.422 0 8 0ZM10.9774 8.58603H9.47997V11.7638C9.47997 12.0583 9.24119 12.2971 8.94662 12.2971H7.05337C6.75884 12.2971 6.52003 12.0583 6.52003 11.7638V8.58603H5.02259C4.57841 8.58603 4.32994 8.07353 4.60209 7.72463L7.57947 3.90812C7.79309 3.63434 8.20737 3.63494 8.4205 3.90812L11.3979 7.72463C11.6701 8.07359 11.4216 8.58603 10.9774 8.58603Z"
                                      fill="#DEDEDE"/>
                            </svg>
                            <span class="pageAuthor__right__top__text">Наверх</span>
                        </button>

                        <div class="subscribeWrap">
                            <button class="subscribe" type="button" id="toggleSoc">
                                <img src="/images/min/icons/subscribe.svg" alt="Faros media" loading="lazy" class="subscribe__ico">
                                <span class="subscribe__text">Подписаться</span>
                            </button>

                            <div class="subscribeWrap__soc" id="social">
                                <a href="https://vk.com/faros.media" class="subscribeWrap__soc__link">
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
                                </a>
                                <a href="https://www.facebook.com/Faros.Media" class="subscribeWrap__soc__link">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.3936 18V9.78996H13.1482L13.5615 6.58941H10.3936V4.54632C10.3936 3.61998 10.6498 2.98869 11.9796 2.98869L13.673 2.98799V0.125307C13.3802 0.0872508 12.3749 0 11.2049 0C8.76181 0 7.08919 1.49127 7.08919 4.22934V6.58941H4.32617V9.78996H7.08919V18H10.3936Z"
                                              fill="white"/>
                                    </svg>
                                </a>
                                <a href="https://x.com" class="subscribeWrap__soc__link">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M18 3.41887C17.3306 3.7125 16.6174 3.90712 15.8737 4.00162C16.6388 3.54487 17.2226 2.82712 17.4971 1.962C16.7839 2.38725 15.9964 2.68763 15.1571 2.85525C14.4799 2.13413 13.5146 1.6875 12.4616 1.6875C10.4186 1.6875 8.77387 3.34575 8.77387 5.37863C8.77387 5.67113 8.79862 5.95237 8.85938 6.22012C5.7915 6.0705 3.07687 4.60013 1.25325 2.36025C0.934875 2.91263 0.748125 3.54488 0.748125 4.2255C0.748125 5.5035 1.40625 6.63637 2.38725 7.29225C1.79437 7.281 1.21275 7.10888 0.72 6.83775C0.72 6.849 0.72 6.86363 0.72 6.87825C0.72 8.6715 1.99912 10.161 3.6765 10.5041C3.37612 10.5863 3.04875 10.6256 2.709 10.6256C2.47275 10.6256 2.23425 10.6121 2.01038 10.5626C2.4885 12.024 3.84525 13.0984 5.4585 13.1332C4.203 14.1154 2.60888 14.7071 0.883125 14.7071C0.5805 14.7071 0.29025 14.6936 0 14.6565C1.63462 15.7106 3.57188 16.3125 5.661 16.3125C12.4515 16.3125 16.164 10.6875 16.164 5.81175C16.164 5.64862 16.1584 5.49113 16.1505 5.33475C16.8829 4.815 17.4982 4.16587 18 3.41887Z"
                                                  fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="https://telegram.org" class="subscribeWrap__soc__link">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M7.06288 11.3861L6.76513 15.5741C7.19113 15.5741 7.37563 15.3911 7.59688 15.1713L9.59413 13.2626L13.7326 16.2933C14.4916 16.7163 15.0264 16.4936 15.2311 15.5951L17.9476 2.86605L17.9484 2.8653C18.1891 1.7433 17.5426 1.30455 16.8031 1.5798L0.835633 7.69306C-0.254117 8.11606 -0.237617 8.72356 0.650383 8.99881L4.73263 10.2686L14.2149 4.3353C14.6611 4.0398 15.0669 4.2033 14.7331 4.4988L7.06288 11.3861Z"
                                                  fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blogBG blogBG_nomt"></div>

                <div class="simpleSliderWrap">
                    <p class="simpleSliderWrap__tit">Похожие видео</p>

                    <div class="simpleSlider" id="simpleSlider">
                        @foreach($videos as $video)
                        <a href="{{route('video.show', $video->slug)}}" class="simpleSlider__slide">
                            <div class="simpleSlider__slide__picWrap">
                                <picture class="simpleSlider__slide__picWrap__pic">
                                    <img src="{{$video->img}}" loading="lazy" title="Faros Media" alt="Faros Media">
                                </picture>

                                <img class="simpleSlider__slide__picWrap__play" loading="lazy" src="/images/min/icons/play.svg" alt="Faros Media">
                            </div>
                            <p class="simpleSlider__slide__text">Екатерина Тулянкина для канала Москва24: отзывы и их сила</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="vidgets">
                @include('inc.articles')
            </div>
            @include('inc.contacts')</div>

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

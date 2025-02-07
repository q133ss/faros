@extends('layouts.case')
@section('title', 'Кейсы по управлению репутацией от агентства Faros.Media')
@section('wrap_class', 'wrapper_cases')
@section('content')
    <!--home mMini blocks START-->
    <div class="homeMiniBlocks allcases homeMiniBlocks_allcases">
        @foreach($mainCases as $case)
            @if($case->type == 'default')
            <div class="miniBlock _bgDarkBlue scene "
             style="background-color: {{$case->bg_color}}"
        >
            <div class="miniBlock__layer">
                <span class="miniBlock__layer__pic parallax">
                        <img src="{{$case->list_img}}" data-depth="0.6">
                </span>
            </div>

            <div class="miniBlock__wrap">
                <span class="miniBlock__wrap__pic">
                    @if($case->logo != null)
                        <img src="{{$case->logo}}">
                    @endif
                </span>

                <a href="{{route('case.show', $case->slug)}}" style="color: {{$case->text_color}}!important;" class="miniBlock__wrap__tit _colorWhite"
                >{{$case->list_name}}</a>
                <div class="miniBlock__wrap__hashWrap">
                    @foreach($case->tags as $tag)
                    <a href="?tag={{$tag->id}}"
                       class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #b9b9b9"
                    >#{{$tag->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
            @elseif($case->type == 'double')
            <div class="miniBlock _bgDarkBlue scene miniBlock_double"
             style="background-color: {{$case->bg_color}}"
        >
            <div class="miniBlock__layer">
                <span class="miniBlock__layer__pic parallax">
                        <img src="{{$case->list_img}}" data-depth="0.6">
                </span>
            </div>

            <div class="miniBlock__wrap">
                <span class="miniBlock__wrap__pic">
                    @if($case->logo != null)
                        <img src="{{$case->logo}}">
                    @endif
                </span>
                <a href="{{route('case.show', $case->slug)}}" style="color: {{$case->text_color}}!important;" class="miniBlock__wrap__tit _colorWhite"
                >{{$case->list_name}}</a>
                <div class="miniBlock__wrap__hashWrap">
                    @foreach($case->tags as $tag)
                    <a href="?tag={{$tag->id}}"
                       class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #7494b9"
                    >#{{$tag->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
            @endif
        @endforeach
        <!--1/2 height, min width, home miniBlock END-->
    </div>
    <!--home mMini blocks END-->

    <!--full height, yellow allcases block START-->
    <div class="projBlock _bgYellow">
        <div class="projBlock__cont">
            <p class="projBlock__cont__name">СПЕЦПРОЕКТ</p>
            <p class="projBlock__cont__title _colorBlack">Как удалить негатив в банковской сфере</p>
        </div>

        <picture class="projBlock__bg">
            <img src="../upload/resize_cache/webp/iblock/4cf/oeuo0yblidd5bcd9rirjtqfidcq9kn5e/projbg.webp">
        </picture>
    </div>        <!--full height, yellow allcases block END-->


    <!--home mMini blocks START-->
    <div class="homeMiniBlocksLast other-cases" title="10" style="grid-template-columns: repeat(10, max-content);">
        <!--1/2 height, min width, home miniBlock START-->

        @foreach($otherCases as $case)
        <div class="miniBlock _bgDarkBlue scene "
             style="background-color: {{$case->bg_color}}"
        >
            <div class="miniBlock__layer">
                <span class="miniBlock__layer__pic parallax">
                        <img src="{{$case->list_img}}" data-depth="0.6">
                </span>
            </div>

            <div class="miniBlock__wrap">
                @if($case->logo != null)
                <span class="miniBlock__wrap__pic">
                        <img src="{{$case->logo}}">
                </span>
                @endif
                <a href="{{route('case.show', $case->slug)}}" style="color: {{$case->text_color}}!important;" class="miniBlock__wrap__tit _colorWhite"
                >{{$case->list_name}}</a>

                <div class="miniBlock__wrap__hashWrap">
                    @foreach($case->tags as $tag)
                        <a href="?tag={{$tag->id}}"
                           class="miniBlock__wrap__hashWrap__link _colorSky"
                           style="color: #7494b9"
                        >#{{$tag->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!--home mMini blocks END-->


    <!--full height, form START-->
    <div class="formBlockWrap _bgLightGray" id="form">
        @include('inc.feedback')

        <div class="formSoc">
            <!--noindex--><a  href="https://vk.com/faros.media"  class="formSoc__item" rel="nofollow">
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
            <!--<!--noindex--><a  href="https://www.facebook.com/Faros.Media"  class="formSoc__item" rel="nofollow">
                <svg viewBox="0 0 48 48" class="contacts__data__links__soc__link__img">
                    <circle cx="24" cy="24" r="23.5" stroke="#EAEAEA" fill="rgba(26,26,26, 0)"/>
                    <path d="M25.8594 36V25.0533H29.5323L30.0833 20.7859H25.8594V18.0618C25.8594 16.8266 26.201 15.9849 27.9742 15.9849L30.232 15.984V12.1671C29.8415 12.1163 28.5012 12 26.9412 12C23.6837 12 21.4536 13.9884 21.4536 17.6391V20.7859H17.7695V25.0533H21.4536V36H25.8594Z" fill="#1A1A1A"/>
                </svg>
            </a><!--/noindex-->-->
            <!--<!--noindex--><a  href="https://instagram.com/farosmedia"  class="formSoc__item" rel="nofollow">
                <svg viewBox="0 0 48 48" class="contacts__data__links__soc__link__img">
                    <circle cx="24" cy="24" r="23.5" stroke="#EAEAEA" fill="rgba(26,26,26, 0)"/>
                    <g clip-path="url(#clip0)">
                        <path d="M24.2,34c-0.1,0-0.1,0-0.2,0c-1.6,0-3,0-4.4-0.1c-1.3-0.1-2.5-0.5-3.4-1.3c-0.9-0.7-1.5-1.7-1.8-3
                            c-0.3-1.1-0.3-2.1-0.3-3.1c0-0.7,0-1.6,0-2.5c0-0.9,0-1.7,0-2.5c0-1,0-2.1,0.3-3.1c0.3-1.2,0.9-2.2,1.8-3c0.9-0.8,2.1-1.2,3.4-1.3
                            C21,14,22.4,14,24,14c1.6,0,3,0,4.4,0.1c1.3,0.1,2.5,0.5,3.4,1.3c0.9,0.7,1.5,1.7,1.8,3c0.3,1.1,0.3,2.1,0.3,3.1c0,0.7,0,1.6,0,2.5
                            v0c0,0.9,0,1.7,0,2.5c0,1,0,2.1-0.3,3.1c-0.3,1.2-0.9,2.2-1.8,3c-0.9,0.8-2.1,1.2-3.4,1.3C27.1,34,25.7,34,24.2,34z M24,32.4
                            c1.5,0,3,0,4.3-0.1c1-0.1,1.8-0.4,2.5-0.9c0.6-0.5,1.1-1.2,1.3-2.1c0.2-0.9,0.2-1.9,0.3-2.8c0-0.7,0-1.6,0-2.5c0-0.9,0-1.7,0-2.5
                            c0-0.9,0-1.9-0.3-2.8c-0.2-0.9-0.7-1.6-1.3-2.1c-0.7-0.6-1.5-0.9-2.5-0.9c-1.4-0.1-2.8-0.1-4.3-0.1c-1.5,0-3,0-4.3,0.1
                            c-1,0.1-1.8,0.4-2.5,0.9c-0.6,0.5-1.1,1.2-1.3,2.1c-0.2,0.9-0.2,1.9-0.3,2.8c0,0.7,0,1.6,0,2.5c0,0.9,0,1.7,0,2.5
                            c0,0.9,0,1.9,0.3,2.8c0.2,0.9,0.7,1.6,1.3,2.1c0.7,0.6,1.5,0.9,2.5,0.9C21,32.4,22.5,32.4,24,32.4z M24,28.9
                            c-2.7,0-4.9-2.2-4.9-4.9c0-2.7,2.2-4.9,4.9-4.9c2.7,0,4.9,2.2,4.9,4.9C28.8,26.7,26.7,28.9,24,28.9z M24,20.7
                            c-1.8,0-3.3,1.5-3.3,3.3c0,1.8,1.5,3.3,3.3,3.3c1.8,0,3.3-1.5,3.3-3.3C27.3,22.2,25.8,20.7,24,20.7z M29.4,17.6
                            c-0.6,0-1.2,0.5-1.2,1.2c0,0.6,0.5,1.2,1.2,1.2c0.6,0,1.2-0.5,1.2-1.2C30.6,18.1,30,17.6,29.4,17.6z" fill="#1A1A1A"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="24" height="24" fill="white" transform="translate(12 12)"/>
                        </clipPath>
                    </defs>
                </svg>
            </a><!--/noindex-->-->
            <!--noindex--><a  href="https://t.me/Farosmedia"  class="formSoc__item" rel="nofollow">
                <svg viewBox="0 0 48 48" class="contacts__data__links__soc__link__img">
                    <circle cx="24" cy="24" r="23.5" stroke="#EAEAEA" fill="rgba(26,26,26, 0)"/>
                    <g clip-path="url(#clip0)">
                        <path d="M21.4172 27.181L21.0202 32.765C21.5882 32.765 21.8342 32.521 22.1292 32.228L24.7922 29.683L30.3102 33.724C31.3222 34.288 32.0352 33.991 32.3082 32.793L35.9302 15.821L35.9312 15.82C36.2522 14.324 35.3902 13.739 34.4042 14.106L13.1142 22.257C11.6612 22.821 11.6832 23.631 12.8672 23.998L18.3102 25.691L30.9532 17.78C31.5482 17.386 32.0892 17.604 31.6442 17.998L21.4172 27.181Z" fill="#1A1A1A"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="24" height="24" fill="white" transform="translate(12 12)"/>
                        </clipPath>
                    </defs>
                </svg>
            </a><!--/noindex-->

        </div>
    </div>
    <div class="fullHeightMinWidth fullHeightMinWidth_thanks" style="display: none;">
        <img src="../images/min/home/thanks.svg" class="fullHeightMinWidth__thanks-img">
        <p class="fullHeightMinWidth__thanks-tit">Спасибо, что обратились в нашу кампанию!</p>
        <p class="fullHeightMinWidth__thanks-descr">Мы перезвоним в течение 20 минут.</p>
        <a href="index.html" class="button">НАШИ КЕЙСЫ</a>
    </div>
    <!--full height, form END-->

    <!--full height, contacts home block START-->
    <div class="contacts" id="contacts_case">
        <div class="contacts__data">
            <div class="grow-full"></div>

            <div class="contacts__data__logoWrap">
                <img src="../images/min/logourl.svg" class="contacts__data__logoWrap__logo"/>
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
                    <a href="../team/index.html" class="contacts__data__links__nav__link">Команда</a>
                    <a href="../service/index.html" class="contacts__data__links__nav__link">Услуги</a>
                    <a href="index.html" class="contacts__data__links__nav__link">Кейсы</a>
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
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(12 12)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a><!--/noindex-->
                </div>
            </div>

            <p class="contacts__data__copyrigth">© {{date('Y')}} FAROS MEDIA. Все права защищены.</p>
        </div>

        <div class="contacts__map">
            <div class="contacts__map__pic" id="map"></div>
        </div>
    </div>        <!--full height, form END-->
@endsection

@extends('layouts.app')
@section('title', 'Услуги')
@section('content')
    <!--Full height, big width START-->
    <div class="fullHeightBigWidthSlider _first">
        <div class="fullHeightBigWidth fullHeightBigWidth__allservices">
            <picture class="fullHeightBigWidth__bg absolute-full">
                <source type="image/webp" srcset="/images/min/allservices/firstBG.webp">
                <img src="../images/min/allservices/firstBG.png" alt="Услуги">
            </picture>

            <div class="fullHeightBigWidth__wrap">
                <h1 class="fullHeightBigWidth__wrap__title">Управление восприятием и продвижение Вашего
                    бренда/компании</h1>
                <p class="fullHeightBigWidth__wrap__subtitle">Оказываем услуги не только как исполнитель, а как
                    личный
                    бизнес-консультант</p>
                <div class="fullHeightBigWidth__wrap__control">
                    <a href="{{route('index')}}#form" class="button fullHeightBigWidth__wrap__control__button">КОНСУЛЬТАЦИЯ</a>
                </div>

                <div class="fullHeightBigWidth__wrap__afterGrow"></div>
            </div>
        </div>
    </div>
    <!--Full height, big width END-->


    <!--home mMini blocks START-->
    <div class="allServiceMiniBlocks">
        @foreach($services as $service)
        <a href="{{route('service.show', $service->slug)}}" class="miniBlock _bgRed1 scene addY" style="background-color: {{$service->bg_color}}">
            <div class="miniBlock__wrap">
                <p class="allServiceMiniBlocks__title _colorWhite">{{$service->name}}</p>
                <p class="allServiceMiniBlocks__content _colorWhite">{{$service->subtitle}}</p>
            </div>

            <div class="miniBlock__layer miniBlock__layer_first parallax">
                <picture class="miniBlock__layer__pic miniBlock__layer__pic_first" data-depth="0.6">
                    <img src="{{$service->img}}" title="Faros Media" alt="Услуги">
                </picture>

                <picture class="miniBlock__layer__pic miniBlock__layer__pic_mob">
                    <img src="{{$service->img}}" title="Faros Media" alt="Услуги">
                </picture>
            </div>

            <button class="allServiceMiniBlocks__mobButton" type="button">
                <img src="../images/min/icons/awworWhiteBGOrange.svg"
                     class="allServiceMiniBlocks__mobButton__ico"
                     alt="Услуги"
                >
            </button>
        </a>
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
        <img src="../images/min/home/thanks.svg" class="fullHeightMinWidth__thanks-img" alt="Услуги">
        <p class="fullHeightMinWidth__thanks-tit">Спасибо, что обратились в нашу кампанию!</p>
        <p class="fullHeightMinWidth__thanks-descr">Мы перезвоним в течение 20 минут.</p>
        <a href="{{route('case.index')}}" class="button">НАШИ КЕЙСЫ</a>
    </div>
    <!--full height, form END-->

    @include('inc.contacts')
@endsection

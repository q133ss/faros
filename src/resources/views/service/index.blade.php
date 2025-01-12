@extends('layouts.app')
@section('title', 'Услуги')
@section('content')
    <!--Full height, big width START-->
    <div class="fullHeightBigWidthSlider _first">
        <div class="fullHeightBigWidth fullHeightBigWidth__allservices">
            <picture class="fullHeightBigWidth__bg absolute-full">
                <source type="image/webp" srcset="/images/min/allservices/firstBG.webp">
                <img src="../images/min/allservices/firstBG.png">
            </picture>

            <div class="fullHeightBigWidth__wrap">
                <h1 class="fullHeightBigWidth__wrap__title">Управление восприятием и продвижение Вашего
                    бренда/компании</h1>
                <p class="fullHeightBigWidth__wrap__subtitle">Оказываем услуги не только как исполнитель, а как
                    личный
                    бизнес-консультант</p>
                <div class="fullHeightBigWidth__wrap__control">
                    <a href="/#form" class="button fullHeightBigWidth__wrap__control__button">КОНСУЛЬТАЦИЯ</a>
                </div>

                <div class="fullHeightBigWidth__wrap__afterGrow"></div>
            </div>
        </div>
    </div>
    <!--Full height, big width END-->


    <!--home mMini blocks START-->
    <div class="allServiceMiniBlocks">
        <!--1/2 height, min width, home miniBlock START-->
        <a href="{{route('service.orm')}}" class="miniBlock _bgRed1 scene addY"
        >
            <div class="miniBlock__wrap">
                <p class="allServiceMiniBlocks__title _colorWhite">ORM</p>
                <p class="allServiceMiniBlocks__content _colorWhite">Комплексное управление репутацией от ведущего SERM и ORM агентства</p>
            </div>

            <div class="miniBlock__layer miniBlock__layer_first parallax">
                <picture class="miniBlock__layer__pic miniBlock__layer__pic_first" data-depth="0.6">
                    <img src="../upload/iblock/c9c/k25xohuxr8oi31l8l3lv7yuy20k3jl6u/s.png">
                </picture>

                <picture class="miniBlock__layer__pic miniBlock__layer__pic_mob">
                    <img src="../upload/iblock/c9c/k25xohuxr8oi31l8l3lv7yuy20k3jl6u/s.png">
                </picture>
            </div>

            <button class="allServiceMiniBlocks__mobButton" type="button">
                <img src="../images/min/icons/awworWhiteBGOrange.svg"
                     class="allServiceMiniBlocks__mobButton__ico">
            </button>
        </a>
        <!--1/2 height, min width, home miniBlock END-->
        <!--1/2 height, min width, home miniBlock START-->
        <a href="{{route('service.smm')}}" class="miniBlock _bgRed1 scene addY"
           style="background-color: #1B236D"
        >
            <div class="miniBlock__wrap">
                <p class="allServiceMiniBlocks__title _colorWhite">SMM</p>
                <p class="allServiceMiniBlocks__content _colorWhite">выстроим эффективную коммуникацию в соцсетях и поднимем продажи</p>
            </div>

            <div class="miniBlock__layer miniBlock__layer_first parallax">
                <picture class="miniBlock__layer__pic miniBlock__layer__pic_first" data-depth="0.6">
                    <img src="../upload/resize_cache/webp/iblock/02a/52uvd0o8zykwtm6mimza3z78jbihms6m/clip-online-advertising-smm&#32;1.webp">
                </picture>

                <picture class="miniBlock__layer__pic miniBlock__layer__pic_mob">
                    <img src="../upload/resize_cache/webp/iblock/02a/52uvd0o8zykwtm6mimza3z78jbihms6m/clip-online-advertising-smm&#32;1.webp">
                </picture>
            </div>

            <button class="allServiceMiniBlocks__mobButton" type="button">
                <img src="../images/min/icons/awworWhiteBGOrange.svg"
                     class="allServiceMiniBlocks__mobButton__ico">
            </button>
        </a>
        <!--1/2 height, min width, home miniBlock END-->
        <!--1/2 height, min width, home miniBlock START-->
        <a href="{{route('service.pr')}}" class="miniBlock _bgRed1 scene addY"
           style="background-color: #000000"
        >
            <div class="miniBlock__wrap">
                <p class="allServiceMiniBlocks__title _colorWhite">PR</p>
                <p class="allServiceMiniBlocks__content _colorWhite">Обеспечим рост популярности вашего бренда через продвижение на авторитетных площадках</p>
            </div>

            <div class="miniBlock__layer miniBlock__layer_first parallax">
                <picture class="miniBlock__layer__pic miniBlock__layer__pic_first" data-depth="0.6">
                    <img src="../upload/iblock/a17/ca0vky3miofiklevfums4qfeudrurcj9/ss.png">
                </picture>

                <picture class="miniBlock__layer__pic miniBlock__layer__pic_mob">
                    <img src="../upload/iblock/a17/ca0vky3miofiklevfums4qfeudrurcj9/ss.png">
                </picture>
            </div>

            <button class="allServiceMiniBlocks__mobButton" type="button">
                <img src="../images/min/icons/awworWhiteBGOrange.svg"
                     class="allServiceMiniBlocks__mobButton__ico">
            </button>
        </a>
        <!--1/2 height, min width, home miniBlock END-->
        <!--1/2 height, min width, home miniBlock START-->
        <a href="{{route('service.marketing')}}" class="miniBlock _bgRed1 scene addY"
           style="background-color: #B945D6"
        >
            <div class="miniBlock__wrap">
                <p class="allServiceMiniBlocks__title _colorWhite">Комплекс для фарм.продуктов</p>
                <p class="allServiceMiniBlocks__content _colorWhite">ORM-SERM-PR-SMM для препаратов &#40;рецептурные и безрецептурные лекарства, БАДы&#41;</p>
            </div>

            <div class="miniBlock__layer miniBlock__layer_first parallax">
                <picture class="miniBlock__layer__pic miniBlock__layer__pic_first" data-depth="0.6">
                    <img src="../upload/resize_cache/webp/iblock/ab6/y63njkoqpnh3ntdjgd93vfak8wxad38t/19&#32;-&#32;Medecine.webp">
                </picture>

                <picture class="miniBlock__layer__pic miniBlock__layer__pic_mob">
                    <img src="../upload/resize_cache/webp/iblock/ab6/y63njkoqpnh3ntdjgd93vfak8wxad38t/19&#32;-&#32;Medecine.webp">
                </picture>
            </div>

            <button class="allServiceMiniBlocks__mobButton" type="button">
                <img src="../images/min/icons/awworWhiteBGOrange.svg"
                     class="allServiceMiniBlocks__mobButton__ico">
            </button>
        </a>
        <!--1/2 height, min width, home miniBlock END-->
    </div>
    <!--home mMini blocks END-->


    <!--full height, form START-->
    <div class="formBlockWrap _bgLightGray" id="form">
        <form action="/#" class="formBlock" id="feedback">
            <div class="formBlock__top">
                <p class="formBlock__title _colorBlack">Чтобы оставить заявку на звонок, пожалуйста, заполните бриф</p>

                <select class="formBlock__top__sel _noVis768" id="mainFormServicies" name="services[]">
                    <option value="" disabled selected>Выберите тип услуги</option>
                    <option value="комплексный ORM"
                    >комплексный ORM</option>
                    <option value="работа с Яндекс/Google-картами"
                    >работа с Яндекс/Google-картами</option>
                    <option value="комплексный SERM"
                    >комплексный SERM</option>
                    <option value="PR"
                    >PR</option>
                    <option value="аналитика и стратегия"
                    >аналитика и стратегия</option>
                    <option value="просто поработать с отзывами"
                    >просто поработать с отзывами</option>
                    <option value="корпоративное обучение репутационному менеджменту"
                    >корпоративное обучение репутационному менеджменту</option>
                    <option value="ситуация на Otzovik, Irecommend и других сайтах"
                    >ситуация на Otzovik, Irecommend и других сайтах</option>
                </select>

                <input type="text" name="name" pattern="^[A-Za-zА-Яа-яЁё\s]+$" class="formBlock__input"
                       placeholder="Как к Вам обращаться?" required/>
                <input type="email" name="email" class="formBlock__input" placeholder="Адрес корпоративной почты" required/>
                <input type="text" name="phone" class="formBlock__input phone_mask" placeholder="Ваш номер телефона"
                       required/>
                <input type="text" name="site" class="formBlock__input" placeholder="Сайт или название компании" required/>
            </div>

            <div class="grow-full formBlock__FGAftertop"></div>

            <div class="formBlock__checkBlock formBlock__checkBlock_mb formBlock__checkBlock_fullHeight400 _noVisMax768">
                <p class="formBlock__checkBlock__title">Выберите тип услуги</p>
                <div class="formBlock__checkBlock__wrap">
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check284" name="services[]" value="комплексный ORM" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"
                        />
                        <label for="check284" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>комплексный ORM</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check285" name="services[]" value="работа с Яндекс/Google-картами" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"
                        />
                        <label for="check285" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>работа с Яндекс/Google-картами</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check286" name="services[]" value="комплексный SERM" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"
                        />
                        <label for="check286" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>комплексный SERM</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check287" name="services[]" value="PR" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"
                        />
                        <label for="check287" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>PR</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check288" name="services[]" value="аналитика и стратегия" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"
                        />
                        <label for="check288" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>аналитика и стратегия</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check289" name="services[]" value="просто поработать с отзывами" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"
                        />
                        <label for="check289" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>просто поработать с отзывами</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check290" name="services[]" value="корпоративное обучение репутационному менеджменту" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"
                        />
                        <label for="check290" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>корпоративное обучение репутационному менеджменту</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check291" name="services[]" value="ситуация на Otzovik, Irecommend и других сайтах" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"
                        />
                        <label for="check291" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>ситуация на Otzovik, Irecommend и других сайтах</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="formBlock__checkBlock formBlock__checkBlock_mb _noVisMax768">
                <p class="formBlock__checkBlock__title">С какой проблемой Вы столкнулись</p>

                <div class="formBlock__checkBlock__wrap">
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check-problem-0" name="problems[]" value="репутационный кризис" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"/>
                        <label for="check-problem-0"
                               class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>репутационный кризис</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check-problem-1" name="problems[]" value="проблемы HR-бренда" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"/>
                        <label for="check-problem-1"
                               class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>проблемы HR-бренда</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check-problem-2" name="problems[]" value="снижение выручки и уровня продаж" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"/>
                        <label for="check-problem-2"
                               class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>снижение выручки и уровня продаж</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check-problem-3" name="problems[]" value="низкая узнаваемость" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"/>
                        <label for="check-problem-3"
                               class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>низкая узнаваемость</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check-problem-4" name="problems[]" value="вывод нового продукта на рынок" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"/>
                        <label for="check-problem-4"
                               class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>вывод нового продукта на рынок</span>
                        </label>
                    </div>
                    <div class="formBlock__checkBlock__wrap__item _colorBlack">
                        <input id="check-problem-5" name="problems[]" value="корректировка восприятия и стереотипов" type="checkbox"
                               class="formBlock__checkBlock__wrap__item__inp"/>
                        <label for="check-problem-5"
                               class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                            <span>корректировка восприятия и стереотипов</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="grow-full"></div>

            <div class="formBlock__footer">
                <button type="submit" class="button formBlock__footer__button">Отправить</button>
                <p class="formBlock__footer__text _colorGray14">Нажимая “Отправить”, вы соглашаетесь с <a target="_blank"
                                                                                                          href="/Политика_в_отношении_обработки_персональных_данных.pdf"
                                                                                                          class="formBlock__footer__text__link _colorBlack">Политикой
                        конфиденциальности</a></p>
            </div>
        </form>

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
        <a href="../case/" class="button">НАШИ КЕЙСЫ</a>
    </div>
    <!--full height, form END-->

    @include('inc.contacts')
@endsection

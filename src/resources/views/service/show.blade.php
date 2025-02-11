@extends('layouts.service')
@section('title', 'SMM агентство Faros.Media')
@section('content')
    <div class="ormBanner"
         style="background-color: {{$service->bg_color}}">
        <div class="ormBanner__left">
            <a href="#" class="ormBanner__left__tag">{{$service->name}}</a>
            <h1 class="ormBanner__left__tit">{{$service->subtitle}}</h1>
            <p class="ormBanner__left__descr"></p>
            <a href="#orderservice" type="submit" class="button ormButton">ЗАКАЗАТЬ УСЛУГУ</a>

            <picture class="ormBanner__left__pic">
                <img src="{{$service->img}}">
            </picture>
        </div>

        <picture class="ormBanner__right">
            <img src="{{$service->img}}">
        </picture>
    </div>

    <div class="ormBlock">
        <div class="ormBlock__left">
            <div class="ormBlock__left__persent">
                <img src="/images/min/icons/info.svg" alt="" class="ormBlock__left__persent__ico">

                <div class="ormBlock__left__persent__data">
                    <p class="ormBlock__left__persent__data__count">{{$service->section_one_percent}}</p>
                    <p class="ormBlock__left__persent__data__descr">{{$service->section_one_percent_description}}</p>
                </div>
            </div>
        </div>

        <div class="ormBlock__right">
            <div class="ormBlock__right__content">
                <div class="ormBlock__right__content__mini">
                    <p class="ormBlock__right__content__mini__tit">{{$service->section_one_title}}</p>
                    <p class="ormBlock__right__content__mini__text">{!! $service->section_one_text !!}</p>
                </div>

                <div class="ormBlock__right__content__iconBlock ormBlock__right__content__slider1200"
                     id="ormAdvantage">
                    @foreach($service->advantages as $adv)
                    <div class="ormBlock__right__content__iconBlock__block">
                        <img src="{{$adv['img']}}" alt=""
                             class="ormBlock__right__content__iconBlock__block__ico">
                        <p class="ormBlock__right__content__iconBlock__block__text">{{$adv['text']}}</p>
                    </div>
                    @endforeach
                </div>

                <a href="/#audit" type="submit" class="button">ОСТАВИТЬ ЗАЯВКУ</a>
            </div>
        </div>
    </div>

    <div class="ormBlock _bgWhite">
        <div class="ormBlock__left">
            <div class="ormBlock__left__persent">
                <img src="/images/min/icons/info.svg" alt="" class="ormBlock__left__persent__ico">

                <div class="ormBlock__left__persent__data">
                    <p class="ormBlock__left__persent__data__count">{{$service->section_two_percent}}</p>
                    <p class="ormBlock__left__persent__data__descr">{{$service->section_two_percent_description}}</p>
                </div>
            </div>
        </div>

        <div class="ormBlock__right">
            <div class="ormBlock__right__content">
                <div class="ormBlock__right__content__mini">
                    <p class="ormBlock__right__content__mini__tit">{{$service->section_two_title}}</p>
                    <div class="author1__partCont">
                        {!! $service->section_two_text !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ormBlock">
        <div class="ormBlock__left">
            <div class="ormBlock__left__persent">
                <div class="ormBlock__left__persent__data">
                    <p class="ormBlock__left__persent__data__descr">3 простых шага для начала работы</p>
                </div>
            </div>
        </div>

        <div class="ormBlock__right">
            <div class="ormBlock__right__content">
                <div class="ormBlock__right__content__mini">
                    <p class="ormBlock__right__content__mini__tit ormBlock__right__content__mini__tit__noMb">Как
                        это
                        работает?</p>
                </div>

                <div class="ormBlock__right__content__iconBlock ormBlock__right__content__slider1000600"
                     id="ormWork">
                    @php $step = 0; @endphp
                    @foreach($service->how_it_works as $work)
                        @php $step++; @endphp
                    <div class="ormBlock__right__content__iconBlock__block ormBlock__right__content__iconBlock__block__work _bgWhite">
                        <img src="{{$work['img']}}" alt=""
                             class="ormBlock__right__content__iconBlock__block__work__workIco">
                        <div class="ormBlock__right__content__iconBlock__block__work__content">
                            <p class="ormBlock__right__content__iconBlock__work__content__light ormBlock__right__content__iconBlock__block__work__content__mb">
                                Шаг {{$step}}</p>
                            <p class="ormBlock__right__content__iconBlock__block__work__content__black">{{$work['text']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="ormBlock ormBlock_form _bgYellow" id="audit">
        <div class="ormBlock__left"></div>

        <div class="ormBlock__right ormBlock__right_form">
            <div class="ormBlock__right__formBlock">
                <p class="ormBlock__right__formBlock__title">Оставьте заявку сейчас и получите экспресс-анализ
                    бесплатно!</p>

                <div class="ormBlock__right__formBlock__bottom">
                    <form action="#" class="ormBlock__right__formBlock__bottom__form" id="audit_form">
                        <input type="hidden" name="form_name" value="Оставьте заявку сейчас и получите экспресс-анализ
                бесплатно!">
                        <input type="hidden" name="page" value="SMM">
                        <input name="name" type="text" class="ormBlock__right__formBlock__bottom__form__inp"
                               placeholder="Как к Вам обращаться?" required/>
                        <input name="phone" type="text"
                               class="ormBlock__right__formBlock__bottom__form__inp phone_mask"
                               placeholder="Ваш номер телефона" required/>

                        <div class="ormBlock__right__formBlock__bottom__form__footer">
                            <button type="submit"
                                    class="button ormBlock__right__formBlock__bottom__form__footer__button">
                                ОТПРАВИТЬ
                            </button>
                            <p class="ormBlock__right__formBlock__bottom__form__footer__descr">Нажимая “Отправить”,
                                вы
                                соглашаетесь с <a target="_blank"
                                                  href="/Политика_в_отношении_обработки_персональных_данных.pdf"
                                                  class="formBlock__footer__text__link _colorBlack">Политикой
                                    конфиденциальности</a></p>
                        </div>
                    </form>
                </div>
            </div>

            <picture class="ormBlock__right__formPic">
                <source type="image/webp" srcset="/images/min/orm/form.webp">
                <img src="/images/min/orm/form.png">
            </picture>
        </div>
    </div>

    <div class="ormBlock">
        <div class="ormBlock__left"></div>
        <div class="ormBlock__right">
            <div class="ormBlock__right__content">
                <div class="ormBlock__right__content__mini">
                    <p class="ormBlock__right__content__mini__tit ormBlock__right__content__mini__tit__noMb">
                        Почему
                        стоит
                        выбрать нас</p>
                </div>

                <div class="ormBlock__right__content__iconBlock ormBlock__right__content__slider1400700" id="ormWe">
                    @foreach($service->why_choose_us as $why)
                    <div class="ormBlock__right__content__iconBlock__block ormBlock__right__content__iconBlock__block__work _bgWhite">
                        <img src="{{$why['img']}}" alt=""
                             class="ormBlock__right__content__iconBlock__block__work__workIco">
                        <div class="ormBlock__right__content__iconBlock__block__work__content">
                            <p class="ormBlock__right__content__iconBlock__block__work__content__black ormBlock__right__content__iconBlock__block__work__content__mb grow-full">{{$why['title']}}</p>
                            <p class="ormBlock__right__content__iconBlock__block__work__content__light">{{$why['text']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="ormBlock _bgYellow">
        <div class="ormBlock__left"></div>

        <div class="ormBlock__right">
            <div class="ormBlock__right__content">
                <p class="ormBlock__right__content__mini__tit ormBlock__right__content__mini__tit__noMb">Наши
                    тарифы</p>

                <div class="ormBlock__right__content__iconBlock ormBlock__right__content__slider1400"
                     id="ormTarif">
                    <div class="ormBlock__right__content__iconBlock__block ormBlock__right__content__iconBlock__block__we">
                        <div class="ormBlock__right__content__iconBlock__block__we__top _bgWhite">
                            <div class="ormBlock__right__content__iconBlock__block__we__lab">LITE</div>

                            <div class="ormBlock__right__content__iconBlock__block__we__cont">
                            </div>
                        </div>

                        <div class="ormBlock__right__content__iconBlock__block__we__bottom _bgWhite">
                            <div class="ormBlock__right__content__iconBlock__block__we__bottom__right">
                                <p class="ormBlock__right__content__iconBlock__block__we__cont__item__data _colorBlack11 _mr">
                                    от 65 000</p>
                                <p class="ormBlock__right__content__iconBlock__block__we__cont__item__name _colorGray19">
                                    руб./мес.</p>
                            </div>

                            <a href="../@price=&amp;service_id=68#form"
                               class="ormBlock__right__content__iconBlock__block__we__bottom__plus _bgBlack7">
                                <svg class="ormBlock__right__content__iconBlock__block__we__bottom__plus__ico"
                                     viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.0145 7.59576H17.0156H10.4062V0.998831C10.4062 0.455904 9.96658 0.00195312 9.42366 0.00195312H8.57795C8.03517 0.00195312 7.59366 0.455904 7.59366 0.998831V7.59576H0.984439C0.441805 7.59576 0 8.03478 0 8.57786V9.42839C0 9.97103 0.441659 10.4081 0.984439 10.4081H7.5938V17.0289C7.5938 17.5716 8.03517 18.0018 8.5781 18.0018H9.42381C9.96673 18.0018 10.4063 17.5714 10.4063 17.0289V10.4081H17.0145C17.5575 10.4081 18 9.97088 18 9.42839V8.57786C18 8.03478 17.5575 7.59576 17.0145 7.59576Z"
                                          fill="#FECE2F"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="ormBlock__right__content__iconBlock__block ormBlock__right__content__iconBlock__block__we">
                        <div class="ormBlock__right__content__iconBlock__block__we__top _bgWhite">
                            <div class="ormBlock__right__content__iconBlock__block__we__lab">OPTIMUM</div>

                            <div class="ormBlock__right__content__iconBlock__block__we__cont">
                            </div>
                        </div>

                        <div class="ormBlock__right__content__iconBlock__block__we__bottom _bgWhite">
                            <div class="ormBlock__right__content__iconBlock__block__we__bottom__right">
                                <p class="ormBlock__right__content__iconBlock__block__we__cont__item__data _colorBlack11 _mr">
                                    от 90 000</p>
                                <p class="ormBlock__right__content__iconBlock__block__we__cont__item__name _colorGray19">
                                    руб./мес.</p>
                            </div>

                            <a href="../@price=&amp;service_id=68#form"
                               class="ormBlock__right__content__iconBlock__block__we__bottom__plus _bgBlack7">
                                <svg class="ormBlock__right__content__iconBlock__block__we__bottom__plus__ico"
                                     viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.0145 7.59576H17.0156H10.4062V0.998831C10.4062 0.455904 9.96658 0.00195312 9.42366 0.00195312H8.57795C8.03517 0.00195312 7.59366 0.455904 7.59366 0.998831V7.59576H0.984439C0.441805 7.59576 0 8.03478 0 8.57786V9.42839C0 9.97103 0.441659 10.4081 0.984439 10.4081H7.5938V17.0289C7.5938 17.5716 8.03517 18.0018 8.5781 18.0018H9.42381C9.96673 18.0018 10.4063 17.5714 10.4063 17.0289V10.4081H17.0145C17.5575 10.4081 18 9.97088 18 9.42839V8.57786C18 8.03478 17.5575 7.59576 17.0145 7.59576Z"
                                          fill="#FECE2F"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="ormBlock__right__content__iconBlock__block ormBlock__right__content__iconBlock__block__we">
                        <div class="ormBlock__right__content__iconBlock__block__we__top _bgBlack7">
                            <div class="ormBlock__right__content__iconBlock__block__we__lab">PRO</div>

                            <div class="ormBlock__right__content__iconBlock__block__we__cont">
                            </div>
                        </div>

                        <div class="ormBlock__right__content__iconBlock__block__we__bottom _bgBlack7">
                            <div class="ormBlock__right__content__iconBlock__block__we__bottom__right">
                                <p class="ormBlock__right__content__iconBlock__block__we__cont__item__data _colorWhite _mr">
                                    от 180 000</p>
                                <p class="ormBlock__right__content__iconBlock__block__we__cont__item__name _colorGray19">
                                    руб./мес.</p>
                            </div>

                            <a href="../@price=&amp;service_id=68#form"
                               class="ormBlock__right__content__iconBlock__block__we__bottom__plus _bgYellow">
                                <svg class="ormBlock__right__content__iconBlock__block__we__bottom__plus__ico"
                                     viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.0145 7.59576H17.0156H10.4062V0.998831C10.4062 0.455904 9.96658 0.00195312 9.42366 0.00195312H8.57795C8.03517 0.00195312 7.59366 0.455904 7.59366 0.998831V7.59576H0.984439C0.441805 7.59576 0 8.03478 0 8.57786V9.42839C0 9.97103 0.441659 10.4081 0.984439 10.4081H7.5938V17.0289C7.5938 17.5716 8.03517 18.0018 8.5781 18.0018H9.42381C9.96673 18.0018 10.4063 17.5714 10.4063 17.0289V10.4081H17.0145C17.5575 10.4081 18 9.97088 18 9.42839V8.57786C18 8.03478 17.5575 7.59576 17.0145 7.59576Z"
                                          fill="#2A2A2A"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ormBlock _bgWhite">
        <div class="ormBlock__left">
            <div class="ormBlock__left__persent">
                <img src="/images/min/icons/info.svg" alt="" class="ormBlock__left__persent__ico">

                <div class="ormBlock__left__persent__data">
                    <p class="ormBlock__left__persent__data__count"></p>
                    <p class="ormBlock__left__persent__data__descr"></p>
                </div>
            </div>
        </div>

    </div>

    <div class="ormBlock _bgWhite" id="orderservice">
        <div class="ormBlock__left"></div>

        <div class="ormBlock__right">
            <div class="ormBlock__right__content">
                <p class="ormBlock__right__content__mini__tit">Оставьте заявку на расчет рекламной стратегии</p>

                <!--full height, form START-->
                <div class="formBlockWrap">
                    <form action="#" class="formBlock" id="orderservice_form">
                        <div class="formBlock__top">
                            <input type="hidden" name="form_name"
                                   value="Оставьте заявку на расчет рекламной стратегии">
                            <input type="hidden" name="page" value="SMM">
                            <input name="email" type="email" class="formBlock__input" placeholder="Укажите Email"
                                   required/>
                            <input name="name" type="text" pattern="^[A-Za-zА-Яа-яЁё\s]+$" class="formBlock__input"
                                   placeholder="Как к Вам обращаться?" required/>
                            <input name="site" type="text" class="formBlock__input" placeholder="Сайт компании"
                                   required/>
                            <input name="phone" type="text" class="formBlock__input phone_mask"
                                   placeholder="Ваш номер телефона" required/>
                        </div>

                        <div class="grow-full formBlock__FGAftertop"></div>

                        <div class="formBlock__footer">
                            <button type="submit" class="button formBlock__footer__button">Отправить</button>
                            <p class="formBlock__footer__text _colorGray14">Нажимая “Отправить”, вы соглашаетесь с
                                <a target="_blank"
                                   href="/Политика_в_отношении_обработки_персональных_данных.pdf"
                                   class="formBlock__footer__text__link _colorBlack">Политикой
                                    конфиденциальности</a></p>
                        </div>
                    </form>
                </div>
                <!--full height, form END-->
            </div>
        </div>
    </div>

    @include('inc.service.footer')
@endsection

@extends('layouts.app')
@section('title', 'Агентство Faros.Media - управление репутацией и восприятием с 2016 года')
@section('content')
    <!--Full height, big width START-->     <div class="fullHeightBigWidth _first">
        <img src="images/min/home/firstScrBg.svg" alt="" class="fullHeightBigWidth__bg-first">

        <div class="fullHeightBigWidth__wrap">
            <div class="fullHeightBigWidth__wrap__beforeGrow"></div>

            <h1 class="fullHeightBigWidth__wrap__title">Управление восприятием и продвижение бизнеса</h1>
            <p class="fullHeightBigWidth__wrap__subtitle"><span style="font-size: 14pt;"><span style="color: #000000;">Существует два средства обрести хорошую репутацию: похвала от честных людей и поношения от негодяев. </span><br>
<span style="color: #000000;"> </span><br>
<span style="color: #000000;">
Лучше всего обеспечить себе первое, потому что второе обязательно последует само собой.</span><br>
<span style="color: #000000;"> </span></span><br>
                <span style="color: #000000;">(Чарьлз Калеб Колтон о репутации)</span><br>
                <br></p>
            <div class="fullHeightBigWidth__wrap__control">
                <a href="/#form" class="button fullHeightBigWidth__wrap__control__button">КОНСУЛЬТАЦИЯ</a>
                <a href="{{route('service.index')}}" class="arrow-link">
                    <span class="arrow-link__text">Все услуги</span>
                    <img src="images/min/icons/yellowarrow.svg" alt="" class="arrow-link__arrow">
                </a>
            </div>

            <div class="fullHeightBigWidth__wrap__afterGrow"></div>

            <div class="fullHeightBigWidth__awardsB">
                <div class="fullHeightBigWidth__awardsB__item">
                    <div class="fullHeightBigWidth__awardsB__item__img">
                        <img src="upload/iblock/966/ht1fswgdnz4cz9ih7euchvk7bixz2a8n/RUWARD.png" class="fullHeightMinWidthAwards__awards__item__ico">
                    </div>

                    <div class="fullHeightBigWidth__awardsB__item__cont">
                        <div class="fullHeightBigWidth__awardsB__item__cont__date">
                            <p class="fullHeightBigWidth__awardsB__item__cont__date__text">RUWARD SERM AWARDS</p>

                            <picture class="fullHeightBigWidth__awardsB__item__cont__date__speed">
                            </picture>
                        </div>

                        <p class="fullHeightBigWidth__awardsB__item__cont__descr">№3 в топ-10 ORM/SERM агентств в 2021</p>
                    </div>
                </div>
                <div class="fullHeightBigWidth__awardsB__item">
                    <div class="fullHeightBigWidth__awardsB__item__img">
                        <img src="upload/iblock/b69/gbgfyt3cel1xwffvkbhb3pan38891lhh/REPA_logo.png" class="fullHeightMinWidthAwards__awards__item__ico">
                    </div>

                    <div class="fullHeightBigWidth__awardsB__item__cont">
                        <div class="fullHeightBigWidth__awardsB__item__cont__date">
                            <p class="fullHeightBigWidth__awardsB__item__cont__date__text">REPA AWARDS</p>

                            <picture class="fullHeightBigWidth__awardsB__item__cont__date__speed">
                            </picture>
                        </div>

                        <p class="fullHeightBigWidth__awardsB__item__cont__descr">1-е по клиентоориентированности и сервису</p>
                    </div>
                </div>
            </div>

            <div class="fullHeightBigWidth__wrap__afterGrow"></div>
        </div>
    </div>
    <!--Full height, big width END--> <!--Full height, min width, home first START-->
    <div class="fullHeightMinWidth">
        <div class="fullHeightMinWidth__top">
            <div class="fullHeightMinWidth__top__comp">
                <img src="http://faros.media/local/templates/faros/images/min/home/gerb.svg" alt="" class="fullHeightMinWidth__top__comp__gerb">
                <p class="fullHeightMinWidth__top__comp__amount">170</p>
                <img src="http://faros.media/local/templates/faros/images/min/home/gerb.svg" alt=""
                     class="fullHeightMinWidth__top__comp__gerb fullHeightMinWidth__top__comp__gerb_right">
            </div>

            <p class="fullHeightMinWidth__top__tit">Довольных клиентов</p>
            <p class="fullHeightMinWidth__top__descr">Наш источник вдохновения – это наши клиенты. Мы помогли более 170 компаниям улучшить репутацию и увеличить обороты.</p>

            <a href="team.1.html" class="arrow-link">
                <span class="arrow-link__text">Наша команда</span>
                <img src="http://faros.media/local/templates/faros/images/min/icons/yellowarrow.svg" alt=""
                     class="arrow-link__arrow fullHeightMinWidth__top__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidth__bottom">
            <picture class="fullHeightMinWidth__bottom__bg">
                <img src="https://faros.media/upload/resize_cache/webp/iblock/0ab/grf92k70c07d2pxjq7niiu4z0lyajtdq/%D0%BF%D1%80%D0%BE%D0%B4%D0%B2%D0%B8%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BF%D0%BE%D1%85%D1%83%D0%B4%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%BF%D1%80%D0%B5%D0%BF%D0%B0%D1%80%D0%B0%D1%82%D0%BE%D0%B2.webp">
            </picture>
            <div class="fullHeightMinWidth__bottom__content">
                <p class="fullHeightMinWidth__bottom__content__status">НОВЫЙ КЕЙС</p>
                <a class="fullHeightMinWidth__bottom__content__title" href="case/ubeditelnyy-brending-kurinogo-myasa-dlya-detskogo-pitaniya/index.html">Нейминг и брендинг для новой категории продуктов детского питания - куриного мяса "Фрегат Kids"</a>

                <div class="fullHeightMinWidth__bottom__content__tags">
                    <a href="{{route('case.index')}}@tag=Р‘СЂРµРЅРґ-РјРµРЅРµРґР¶РјРµРЅС‚.html" class="fullHeightMinWidth__bottom__content__tags__item">#Бренд-менеджмент</a>
                    <a href="{{route('case.index')}}@tag=РќРµР№РјРёРЅРі.html" class="fullHeightMinWidth__bottom__content__tags__item">#Нейминг</a>
                </div>
            </div>
        </div>
    </div>
    <!--Full height, min width, home first END--> <!--Full height, min width, home secщnd START--> <div class="fullHeightMinWidthComentsSlider slider" id="fullHeightMinWidthComentsSlider">
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="https://faros.media/upload/resize_cache/webp/iblock/18c/8miz0v6c8jbkq0mh86fkelj6ixxnmyc3/%D0%B1%D0%B5%D0%BB%D1%8B%D0%B8%CC%86%20%D1%84%D1%80%D0%B5%D0%B3%D0%B0%D1%82%20%D0%BB%D0%BE%D0%B3%D0%BE.webp" alt=""
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
            </div>

            <img src="images/min/home/say.svg" alt="" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="https://faros.media/upload/resize_cache/webp/iblock/18c/8miz0v6c8jbkq0mh86fkelj6ixxnmyc3/%D0%B1%D0%B5%D0%BB%D1%8B%D0%B8%CC%86%20%D1%84%D1%80%D0%B5%D0%B3%D0%B0%D1%82%20%D0%BB%D0%BE%D0%B3%D0%BE.webp">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Сеть химчисток "Диана"</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Директор по маркетингу</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Благодарность за успешное и плодотворное оказание услуг по репутационному менеджменту с мая 2019 года по настоящий момент. </p>

                <a href="http://faros.media/upload/iblock/3a1/s2pbbosj4o9zrizqtszww3a7ek624n13/dryclean%20%D0%A0%D1%97%D0%A0%D1%91%D0%A1%D0%83%D0%A1%D0%8A%D0%A0%D1%98%D0%A0%D1%95%20FarosMedia.pdf" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="reviews/index.html" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt=""
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="https://faros.media/upload/resize_cache/webp/iblock/26c/qhk4qmnqvr08xazu5ugux9rhcn04b4sm/%D0%B3%D0%B5%D0%BC%D0%BE%D1%82%D0%B5%D1%81%D1%82%20%D0%BB%D0%BE%D0%B3%D0%BE.webp" alt=""
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
            </div>

            <img src="images/min/home/say.svg" alt="" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="https://faros.media/upload/resize_cache/webp/iblock/26c/qhk4qmnqvr08xazu5ugux9rhcn04b4sm/%D0%B3%D0%B5%D0%BC%D0%BE%D1%82%D0%B5%D1%81%D1%82%20%D0%BB%D0%BE%D0%B3%D0%BE.webp">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Сеть лабораторий "Гемотест"</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Руководитель отдела интернет-маркетинга</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Благодарим Faros.Media за оказание услуг по мониторингу, анализу и управлению репутацией бренда Гемотест в период с мая 2019 по март 2021 года. </p>

                <a href="http://faros.media/upload/iblock/d6c/mrpurssa48g9sosvqfoi4ryd6qy6lpr1/faros-%D0%A0%D1%96%D0%A0%C2%B5%D0%A0%D1%98%D0%A0%D1%95%D0%A1%E2%80%9A%D0%A0%C2%B5%D0%A1%D0%83%D0%A1%E2%80%9A.pdf" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="reviews/index.html" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt=""
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="https://faros.media/upload/resize_cache/webp/iblock/18c/8miz0v6c8jbkq0mh86fkelj6ixxnmyc3/%D0%B1%D0%B5%D0%BB%D1%8B%D0%B8%CC%86%20%D1%84%D1%80%D0%B5%D0%B3%D0%B0%D1%82%20%D0%BB%D0%BE%D0%B3%D0%BE.webp" alt=""
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="https://faros.media/cases/55/" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="https://faros.media/upload/resize_cache/webp/iblock/18c/8miz0v6c8jbkq0mh86fkelj6ixxnmyc3/%D0%B1%D0%B5%D0%BB%D1%8B%D0%B8%CC%86%20%D1%84%D1%80%D0%B5%D0%B3%D0%B0%D1%82%20%D0%BB%D0%BE%D0%B3%D0%BE.webp">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">ГК "Белый фрегат"</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Спасибо за реализацию сложной задачи: в кратчайшие сроки на основе недоработанного прототипа создали сайт группы компаний с отображением производственных площадок, торговых марок, взаимодействующий с конечными клиентами по форме отзывов и обратной связи. </p>

                <a href="http://faros.media/upload/iblock/1f9/y2exprd80sg16t15wge8wmpfch2vejrx/faros_%D0%A0%D1%97%D0%A0%D1%91%D0%A1%D0%83%D0%A1%D0%8A%D0%A0%D1%98%D0%A0%D1%95_%D0%A0%C2%B1%D0%A0%C2%B5%D0%A0%C2%BB%D0%A1%E2%80%B9%D0%A0%D1%91%D0%9C%E2%80%A0%20%D0%A1%E2%80%9E%D0%A1%D0%82%D0%A0%C2%B5%D0%A0%D1%96%D0%A0%C2%B0%D0%A1%E2%80%9A.pdf" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="reviews/index.html" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt=""
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/fe5/0mgpfzzgmpms3ygie9kqw9de1b3adfho/ross.jpg" alt=""
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="https://faros.media/cases/55/" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/fe5/0mgpfzzgmpms3ygie9kqw9de1b3adfho/ross.jpg">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Ross Medical Group</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Выражаем агентству Faros.Media благодарность за профессиональную поддержку нашей компании в социальных медиа и оперативное консультирование по вопросам управления репутацией.</p>

                <a href="upload/iblock/e6a/3eubmd07f7nx3529n6se4m0y4xtlg0p5/ross1.jpg" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="reviews/index.html" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt=""
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/f54/hrv2n63xjvz84pzxaqzijf9mt2pdpzi6/chees.png" alt=""
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="https://faros.media/cases/90/" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/f54/hrv2n63xjvz84pzxaqzijf9mt2pdpzi6/chees.png">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Cheeseberry</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Выражаем агентству Faros.Media благодарность за профессиональную поддержку нашей компании в социальных медиа и оперативное консультирование по вопросам управления репутацией.</p>

                <a href="upload/iblock/8e5/07dh2vx67n1uy84l7fc5d1eukzqdlibe/chees1.png" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="reviews/index.html" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt=""
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/bd4/dw9pct9lgca27j6wfjzyuvp3oepan40j/donstroy.png" alt=""
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="https://faros.media/cases/90/" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/bd4/dw9pct9lgca27j6wfjzyuvp3oepan40j/donstroy.png">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Донстрой</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Компания "СМАРТ СЕРВИС" выражает благодарность Екатерине Тулянкиной и компании Faros.Media за профессионализм и плодотворное сотрудничество в сфере управления репутацией. Наша совместная работа длится уже более двух лет, и мы надеемся на ее продолжение в дальнейшем.</p>

                <a href="upload/iblock/701/xszh36rro05z2ockh5apn6yl3nxwb3rs/donstroy1.jpg" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="reviews/index.html" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt=""
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/cd1/4pq2clizge31it53t8uf1b9qat4p591c/pavel.jpeg" alt=""
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="https://faros.media/cases/60/" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/cd1/4pq2clizge31it53t8uf1b9qat4p591c/pavel.jpeg">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Студия интерьеров Павел Полынов</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Студия дизайна интерьеров Павла Полынова выражает благодарность агентству Faros.Media и лично Екатерине Тулянкиной за многолетнее и плодотворное сотрудничество в сфере интернет-маркетинга и управления восприятием бренда. Рекомендуем как надежного и креативного партнера.</p>

                <a href="upload/iblock/4a4/ovmhixuza7v84d5wlhhny61881y4a0yg/pavel1.jpg" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="reviews/index.html" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt=""
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/72c/svbsobjrdsln4zlft2zjrzsveb7cv712/cipa.png" alt=""
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="https://faros.media/cases/60/" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/72c/svbsobjrdsln4zlft2zjrzsveb7cv712/cipa.png">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Торговая марка Цыпа</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Выражаем благодарность всему творческому коллективу не только за качественную и оперативную работу, которая выполняется профессионально и в срок, но и за высокое чувство стиля и креативный подход к решению поставленных задач, смесь которых лишь подтверждает врожденный утонченный вкус, отшлифованный профильным образованием и опытом работы.</p>

                <a href="upload/iblock/921/wq8ctpdsp33k8iy4pdnew35n2vtk5xif/cipa1.jpg" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="reviews/index.html" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt=""
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/6e5/prgag0odmjoqw9alrouo68v3li1xvh3q/abn.png" alt=""
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="https://faros.media/cases/57/" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/6e5/prgag0odmjoqw9alrouo68v3li1xvh3q/abn.png">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">АБН Консалт</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Благодарим агентство Faros.Media (ООО "ПД") за профессиональную поддержку в области управления репутацией и продвижения услуг компании ООО «АБН-Консалт» с июня 2016-го года по настоящий момент. Желаем дальнейших успехов и процветания.</p>

                <a href="upload/iblock/49f/uxi3qloefkdqq77jjrqfkf5b0iqfztrv/abn1.jpg" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="reviews/index.html" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt=""
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
    </div> <!--Full height, min width, home secщnd END-->     <!--Full height, min width, home awards START-->
    <div class="fullHeightMinWidthAwards scene">
        <p class="fullHeightMinWidthAwards__tit">Наши награды</p>

        <div class="fullHeightMinWidthAwards__awards">
            <div class="fullHeightMinWidthAwards__awards__item">
                <div class="fullHeightMinWidthAwards__awards__item__img">
                    <img src="upload/iblock/966/ht1fswgdnz4cz9ih7euchvk7bixz2a8n/RUWARD.png" class="fullHeightMinWidthAwards__awards__item__ico">
                </div>

                <div class="fullHeightMinWidthAwards__awards__item__cont">
                    <div class="fullHeightMinWidthAwards__awards__item__cont__date">
                        <p class="fullHeightMinWidthAwards__awards__item__cont__date__text">RUWARD SERM AWARDS</p>

                        <picture class="fullHeightMinWidthAwards__awards__item__cont__date__speed">
                        </picture>
                    </div>

                    <p class="fullHeightMinWidthAwards__awards__item__cont__descr">№3 в топ-10 ORM/SERM агентств в 2021</p>
                </div>
            </div>
            <div class="fullHeightMinWidthAwards__awards__item">
                <div class="fullHeightMinWidthAwards__awards__item__img">
                    <img src="upload/iblock/b69/gbgfyt3cel1xwffvkbhb3pan38891lhh/REPA_logo.png" class="fullHeightMinWidthAwards__awards__item__ico">
                </div>

                <div class="fullHeightMinWidthAwards__awards__item__cont">
                    <div class="fullHeightMinWidthAwards__awards__item__cont__date">
                        <p class="fullHeightMinWidthAwards__awards__item__cont__date__text">REPA AWARDS</p>

                        <picture class="fullHeightMinWidthAwards__awards__item__cont__date__speed">
                        </picture>
                    </div>

                    <p class="fullHeightMinWidthAwards__awards__item__cont__descr">1-е по клиентоориентированности и сервису</p>
                </div>
            </div>
        </div>

        <picture class="fullHeightMinWidthAwards__bg parallax">
            <source type="image/webp" srcset="/images/min/home/awardsbg.webp">
            <img src="images/min/home/awardsbg.png" data-depth="0.6">
        </picture>
    </div>
    <!--Full height, min width, home awards END-->
    <!--home mMini blocks START--> <div class="homeMiniBlocks">

        <!--1/2 height, min width, home miniBlock START-->
        <div class="miniBlock _bgDarkBlue scene"
             style="background-color: #b5cf4d"
        >
            <div class="miniBlock__layer">
                <picture class="miniBlock__layer__pic parallax">
                    <img src="https://faros.media/upload/resize_cache/webp/upload/iblock/439/gmg0a4xb1xa59q6lvsow6gxwvfvho9qm/%D0%A4%D1%80%D0%B5%D0%B3%D0%B0%D1%82Kids_2.webp" data-depth="0.6">
                </picture>
            </div>

            <div class="miniBlock__wrap">

                <picture class="miniBlock__wrap__pic">
                    <img src="https://faros.media/upload/resize_cache/webp/upload/iblock/f84/cawj4mvta1z73if6c9he1m8rq8hvtn5q/%D0%A4%D1%80%D0%B5%D0%B3%D0%B0%D1%82Kids_2.webp">
                </picture>


                <a href="case/ubeditelnyy-brending-kurinogo-myasa-dlya-detskogo-pitaniya/index.html"
                   class="miniBlock__wrap__tit _colorWhite"
                   style="color: #6b2421;"
                >Нейминг и брендинг для новой категории продуктов детского питания - куриного мяса "Фрегат Kids"</a>

                <div class="miniBlock__wrap__hashWrap">
                    <a href="{{route('case.index')}}@tag=Р‘СЂРµРЅРґ-РјРµРЅРµРґР¶РјРµРЅС‚.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #6b2421"
                    >#Бренд-менеджмент</a>
                    <a href="{{route('case.index')}}@tag=РќРµР№РјРёРЅРі.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #6b2421"
                    >#Нейминг</a>
                </div>
            </div>
        </div>
        <!--1/2 height, min width, home miniBlock END-->
        <!--1/2 height, min width, home miniBlock START-->
        <div class="miniBlock _bgDarkBlue scene"
             style="background-color: #ffba07"
        >
            <div class="miniBlock__layer">
                <picture class="miniBlock__layer__pic parallax">
                    <img src="https://faros.media/upload/resize_cache/webp/iblock/71d/joc7tg7bi8e2pchvmrb6c7psjt0nv6by/%D1%8D%D0%BB%D1%8C%D0%B1%D1%80%D1%83%D1%81%20%D0%B4%D0%BE%D0%BC.webp" data-depth="0.6">
                </picture>
            </div>

            <div class="miniBlock__wrap">

                <picture class="miniBlock__wrap__pic">
                    <img src="https://faros.media/upload/iblock/864/mi14bbk2504n8eo1gcz3nocvnwz3795c/%D1%8D%D0%BB%D1%8C%D0%B1%D1%80%D1%83%D1%81%20%D0%BB%D0%BE%D0%B3%D0%BE.png">
                </picture>


                <a href="case/kompleksnyy-marketing-i-rabota-s-reputatsiey-stroitelnoy-kompanii/index.html"
                   class="miniBlock__wrap__tit _colorWhite"
                   style="color: #000000;"
                >Комплекс&nbsp;услуг по репозиционированию бренда строительной компании</a>

                <div class="miniBlock__wrap__hashWrap">
                    <a href="{{route('case.index')}}@tag=РґРµСЂРµРІСЏРЅРЅРѕРµ&#32;СЃС‚СЂРѕРёС‚РµР»СЊСЃС‚РІРѕ.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #000000"
                    >#деревянное строительство</a>
                </div>
            </div>
        </div>
        <!--1/2 height, min width, home miniBlock END-->
        <!--1/2 height, min width, center home miniBlock START-->
        <div class="miniCenterBlock _bgWhite">
            <div class="miniCenterBlock__layer">
                <div class="miniCenterBlock__layer__pic">
                    <img src="images/min/home/flesh.svg">
                </div>
            </div>

            <div class="miniCenterBlock__wrap">
                <div class="miniCenterBlock__wrap__top">
                    <p class="miniCenterBlock__wrap__top__data _colorYellow">>400</p>
                    <p class="miniCenterBlock__wrap__top__text _colorBlack">Кейсов<br/>за нашими плечами</p>
                </div>

                <p class="miniCenterBlock__wrap__descr _colorBlack">Наш источник вдохновения – это наши клиенты. Мы помогли
                    более 150 компаниям улучшить репутацию и увеличить обороты.</p>

                <a href="{{route('case.index')}}" class="button">ВСЕ КЕЙСЫ</a>

                <p class="miniCenterBlock__wrap__subdescr _colorGray12">Нажимая “Отправить”, вы соглашаетесь с Политикой
                    конфиденциальности</p>
            </div>
        </div>
        <!--1/2 height, min width, center home miniBlock END-->
        <!--1/2 height, min width, home miniBlock START-->
        <div class="miniBlock _bgDarkBlue scene"
             style="background-color: #fefffd"
        >
            <div class="miniBlock__layer">
                <picture class="miniBlock__layer__pic parallax">
                    <img src="upload/iblock/a38/llgjaxk2s59wijb63hx12sv1q1wmbp9s/baby_PNG51721.png" data-depth="0.6">
                </picture>
            </div>

            <div class="miniBlock__wrap">

                <picture class="miniBlock__wrap__pic">
                    <img src="upload/iblock/0bf/nc6t6mt8ziu6f3a7mfjx46dsevaac30x/store-image-3511.jpeg">
                </picture>


                <a href="case/smm-dlya-brenda-detskikh-tovarov-na-primere-podguznikov-libero/index.html"
                   class="miniBlock__wrap__tit _colorWhite"
                   style="color: #500b76;"
                >SMM-прокачка мирового бренда подгузников в соцсетях</a>

                <div class="miniBlock__wrap__hashWrap">
                    <a href="{{route('case.index')}}@tag=РљРµР№СЃС‹&#32;РїРѕ&#32;smm.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #500b76"
                    >#Кейсы по smm</a>
                    <a href="{{route('case.index')}}@tag=KPI.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #500b76"
                    >#KPI</a>
                    <a href="{{route('case.index')}}@tag=Instagram.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #500b76"
                    >#Instagram</a>
                    <a href="{{route('case.index')}}@tag=Р»РѕСЏР»СЊРЅРѕСЃС‚СЊ&#32;Рє&#32;Р±СЂРµРЅРґСѓ.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #500b76"
                    >#лояльность к бренду</a>
                </div>
            </div>
        </div>
        <!--1/2 height, min width, home miniBlock END-->
        <!--1/2 height, min width, home miniBlock START-->
        <div class="miniBlock _bgDarkBlue scene"
             style="background-color: #8FDDD0"
        >
            <div class="miniBlock__layer">
                <picture class="miniBlock__layer__pic parallax">
                    <img src="upload/iblock/99f/u2yqx2jvq1t3wnzguerogd3pxad73ytw/1126.png" data-depth="0.6">
                </picture>
            </div>

            <div class="miniBlock__wrap">

                <picture class="miniBlock__wrap__pic">
                </picture>


                <a href="case/nejming-dlya-obrazovatelnogo-proekta/index.html"
                   class="miniBlock__wrap__tit _colorWhite"
                >Нейминг для образовательного проекта </a>

                <div class="miniBlock__wrap__hashWrap">
                    <a href="{{route('case.index')}}@tag=Р‘СЂРµРЅРґ-РјРµРЅРµРґР¶РјРµРЅС‚.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #7494b9"
                    >#Бренд-менеджмент</a>
                    <a href="{{route('case.index')}}@tag=РњР°СЂРєРµС‚РёРЅРі.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #7494b9"
                    >#Маркетинг</a>
                    <a href="{{route('case.index')}}@tag=РќРµР№РјРёРЅРі.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #7494b9"
                    >#Нейминг</a>
                    <a href="{{route('case.index')}}@tag=РћР±СЂР°Р·РѕРІР°РЅРёРµ.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #7494b9"
                    >#Образование</a>
                </div>
            </div>
        </div>
        <!--1/2 height, min width, home miniBlock END-->
        <!--1/2 height, min width, home miniBlock START-->
        <div class="miniBlock _bgDarkBlue scene"
             style="background-color: #104076"
        >
            <div class="miniBlock__layer">
                <picture class="miniBlock__layer__pic parallax">
                    <img src="upload/iblock/bbc/pv46pijhkimfwmcm9fx1vbjuc1btlo9i/1124.png" data-depth="0.6">
                </picture>
            </div>

            <div class="miniBlock__wrap">

                <picture class="miniBlock__wrap__pic">
                </picture>


                <a href="case/shkola-inostrannyh-yazykov/index.html"
                   class="miniBlock__wrap__tit _colorWhite"
                >Школа иностранных языков</a>

                <div class="miniBlock__wrap__hashWrap">
                    <a href="{{route('case.index')}}@tag=SMM.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                    >#SMM</a>
                    <a href="{{route('case.index')}}@tag=РљРѕРЅРєСѓСЂСЃРЅС‹Рµ&#32;РјРµС…Р°РЅРёРєРё.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                    >#Конкурсные механики</a>
                    <a href="{{route('case.index')}}@tag=РњР°СЂРєРµС‚РёРЅРі-РєРѕРЅСЃР°Р»С‚РёРЅРі.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                    >#Маркетинг-консалтинг</a>
                    <a href="{{route('case.index')}}@tag=РџСЂРѕРґРІРёР¶РµРЅРёРµ&#32;Р±СЂРµРЅРґР°.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                    >#Продвижение бренда</a>
                    <a href="{{route('case.index')}}@tag=Р¤РѕСЂРјРёСЂРѕРІР°РЅРёРµ&#32;СЃРїСЂРѕСЃР°.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                    >#Формирование спроса</a>
                    <a href="{{route('case.index')}}@tag=РЇР·С‹РєРѕРІР°СЏ&#32;С€РєРѕР»Р°.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                    >#Языковая школа</a>
                </div>
            </div>
        </div>
        <!--1/2 height, min width, home miniBlock END-->
        <!--1/2 height, min width, home miniBlock START-->
        <div class="miniBlock _bgDarkBlue scene"
             style="background-color: #114076"
        >
            <div class="miniBlock__layer">
                <picture class="miniBlock__layer__pic parallax">
                    <img src="upload/iblock/dc3/dv2wb72dknys2271zsyl3zrp5xxuqs7p/1127.png" data-depth="0.6">
                </picture>
            </div>

            <div class="miniBlock__wrap">

                <picture class="miniBlock__wrap__pic">
                    <img src="upload/iblock/d48/6m9dlv1tjtxa5w4yxaf4gxhgplf2a43u/logo2.png">
                </picture>


                <a href="case/prodvizhenie-brendovyh-kormov-dlya-domashnih-zhivotnyh/index.html"
                   class="miniBlock__wrap__tit _colorWhite"
                >Продвижение брендовых кормов для домашних животных</a>

                <div class="miniBlock__wrap__hashWrap">
                    <a href="{{route('case.index')}}@tag=SMM.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #fff"
                    >#SMM</a>
                    <a href="{{route('case.index')}}@tag=РљРѕСЂРј&#32;РґР»СЏ&#32;Р¶РёРІРѕС‚РЅС‹С….html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #fff"
                    >#Корм для животных</a>
                    <a href="{{route('case.index')}}@tag=Р›РёРґРѕРіРµРЅРµСЂР°С†РёСЏ.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #fff"
                    >#Лидогенерация</a>
                    <a href="{{route('case.index')}}@tag=РњР°СЂРєРµС‚РёРЅРі.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #fff"
                    >#Маркетинг</a>
                    <a href="{{route('case.index')}}@tag=Р РµРєР»Р°РјР°&#32;РІ&#32;СЃРѕС†СЃРµС‚СЏС….html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #fff"
                    >#Реклама в соцсетях</a>
                    <a href="{{route('case.index')}}@tag=РўР“Р‘.html" class="miniBlock__wrap__hashWrap__link _colorSky"
                       style="color: #fff"
                    >#ТГБ</a>
                </div>
            </div>
        </div>
        <!--1/2 height, min width, home miniBlock END-->


    </div> <!--home mMini blocks END--> <!--full height, form START--> <div class="formBlockWrap _bgLightGray" id="form">
        <form action="index.html#" class="formBlock" id="feedback">
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
                                                                                                          href="http://faros.media/%D0%A0%D1%9F%D0%A0%D1%95%D0%A0%C2%BB%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A0%D1%91%D0%A0%D1%94%D0%A0%C2%B0_%D0%A0%D0%86_%D0%A0%D1%95%D0%A1%E2%80%9A%D0%A0%D0%85%D0%A0%D1%95%D0%A1%E2%82%AC%D0%A0%C2%B5%D0%A0%D0%85%D0%A0%D1%91%D0%A0%D1%91_%D0%A0%D1%95%D0%A0%C2%B1%D0%A1%D0%82%D0%A0%C2%B0%D0%A0%C2%B1%D0%A0%D1%95%D0%A1%E2%80%9A%D0%A0%D1%94%D0%A0%D1%91_%D0%A0%D1%97%D0%A0%C2%B5%D0%A1%D0%82%D0%A1%D0%83%D0%A0%D1%95%D0%A0%D0%85%D0%A0%C2%B0%D0%A0%C2%BB%D0%A1%D0%8A%D0%A0%D0%85%D0%A1%E2%80%B9%D0%A1%E2%80%A6_%D0%A0%D2%91%D0%A0%C2%B0%D0%A0%D0%85%D0%A0%D0%85%D0%A1%E2%80%B9%D0%A1%E2%80%A6.pdf"
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
        <img src="images/min/home/thanks.svg" class="fullHeightMinWidth__thanks-img">
        <p class="fullHeightMinWidth__thanks-tit">Спасибо, что обратились в нашу кампанию!</p>
        <p class="fullHeightMinWidth__thanks-descr">Мы перезвоним в течение 20 минут.</p>
        <a href="{{route('case.index')}}" class="button">НАШИ КЕЙСЫ</a>
    </div>
    <!--full height, form END--> <!--home news blocks START--> <div class="newsBlocks">
        <!--news home menu START-->
        <div class="horizMenu _bgWhite">
            <ul class="horizMenu__menu" id="newsMenu">
                <li class="horizMenu__menu__item active material-section" data-order="0">
                    <a class="horizMenu__menu__item__link" data-id="0">ВСЕ СТАТЬИ</a>
                </li>
                <li class="horizMenu__menu__item material-section" data-order="1">
                    <a class="horizMenu__menu__item__link"
                       data-id="5">СОЦСЕТИ</a>
                </li>
                <li class="horizMenu__menu__item material-section" data-order="2">
                    <a class="horizMenu__menu__item__link"
                       data-id="6">МАРКЕТИНГ</a>
                </li>
                <li class="horizMenu__menu__item material-section" data-order="3">
                    <a class="horizMenu__menu__item__link"
                       data-id="7">ЛАЙФХАКИ</a>
                </li>
                <li class="horizMenu__menu__item material-section" data-order="4">
                    <a class="horizMenu__menu__item__link"
                       data-id="8">РЕПУТАЦИЯ</a>
                </li>
                <li class="horizMenu__menu__item material-section" data-order="5">
                    <a class="horizMenu__menu__item__link"
                       data-id="12">Работа в digital</a>
                </li>
                <li class="horizMenu__menu__item material-section" data-order="6">
                    <a class="horizMenu__menu__item__link"
                       data-id="13">Блог Екатерины Тулянкиной</a>
                </li>
                <li class="dd_menu">
                    <button class="dropdown-toggle" type="button">
                        <span class="dropdown-toggle__point"></span>
                        <span class="dropdown-toggle__point"></span>
                        <span class="dropdown-toggle__point"></span>
                    </button>
                    <ul class="dropdown-menu"></ul>
                </li>
            </ul>


            <a href="{{route('articles.index')}}" class="arrow-link horizMenu__arrow-link">
                <span class="arrow-link__text">Все статьи</span>
                <img src="images/min/icons/grayarrow.svg" alt="" class="arrow-link__arrow">
            </a>
        </div>
        <!--news home menu END-->
        <input type="hidden" name="url" value="main" id="url">
        <div class="newsBlocks__wrapper all-articles">
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite material-item
                                ">
                <picture class="newsMiniBlock__pic">
                    <a href="article/tsifrovoy-sled-kak-my-teryaem-privatnost-i-chto-s-etim-delat/index.html">
                        <img src="upload/dev2fun_opengraph/cd8/o15z1inqmp92sud2hvb3suith0hbnr38.png">
                    </a>
                </picture>

                <div class="newsMiniBlock__cont">
                    <div class="newsMiniBlock__cont__links">
                    </div>

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="article/tsifrovoy-sled-kak-my-teryaem-privatnost-i-chto-s-etim-delat/index.html">Что такое цифровой след и с чем его едят</a></p>
                    <div class="grow-full"></div>
                    <a href="authors/ekaterina-tulyankina/index.html"
                       class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite material-item
                                ">
                <picture class="newsMiniBlock__pic">
                    <a href="article/layfstayl-kontent-v-2025-chto-i-kak-pisatj/index.html">
                        <img src="upload/dev2fun_opengraph/a8e/11olhlvkzzat3yoeja093mlpai22qjcw.png">
                    </a>
                </picture>

                <div class="newsMiniBlock__cont">
                    <div class="newsMiniBlock__cont__links">
                    </div>

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="article/layfstayl-kontent-v-2025-chto-i-kak-pisatj/index.html">Какой лайфстайл контент будет актуален в 2025: о жизни, мироздании и не только</a></p>
                    <div class="grow-full"></div>
                    <a href="authors/mariya-shakhova/index.html"
                       class="newsMiniBlock__cont__name _colorBlue">Мария Шахова</a>
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite material-item
                                ">
                <picture class="newsMiniBlock__pic">
                    <a href="article/cookies-v-marketinge-sladko-no-ne-ochen/index.html">
                        <img src="upload/dev2fun_opengraph/09d/uotsep5amg3thrpu1uvwp7c38x1dlij7.png">
                    </a>
                </picture>

                <div class="newsMiniBlock__cont">
                    <div class="newsMiniBlock__cont__links">
                    </div>

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="article/cookies-v-marketinge-sladko-no-ne-ochen/index.html">Как использовать куки легально и эффективно</a></p>
                    <div class="grow-full"></div>
                    <a href="authors/mariya-shakhova/index.html"
                       class="newsMiniBlock__cont__name _colorBlue">Мария Шахова</a>
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite material-item
                                    material-tag-8                                ">

                <picture class="newsMiniBlock__pic">
                    <a href="article/marketing-vliyaniya-kak-rabotat-s-inflyuenserami/index.html">
                        <img src="https://faros.media/upload/resize_cache/webp/upload/dev2fun_opengraph/907/xnleh97arzoxnaztwuioekfplrfex7g5.webp">
                    </a>
                </picture>

                <div class="newsMiniBlock__cont">
                    <div class="newsMiniBlock__cont__links">
                        <a href="articles/index.html@section_id=8.html"
                           class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                    </div>

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="article/sotsialnoe-dokazatelstvo-chto-eto-i-kak-obernut-v-svoyu-polzu/index.html">Что такое социальное доказательство и как его использовать</a></p>
                    <div class="grow-full"></div>
                    <a href="authors/ekaterina-tulyankina/index.html"
                       class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite material-item
                                ">
                <picture class="newsMiniBlock__pic">
                    <a href="article/marketing-vliyaniya-kak-rabotat-s-inflyuenserami/index.html">
                        <img src="https://faros.media/upload/iblock/ab2/1fzt0hcxp0lses26z2v6eqk4lmhg68pf/%D0%BA%D0%B0%D0%BA%20%D1%8D%D1%84%D1%84%D0%B5%D0%BA%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%20%D0%B2%D1%8B%D1%81%D1%82%D1%80%D0%B0%D0%B8%D0%B2%D0%B0%D1%82%D1%8C%20%D0%B2%D0%B7%D0%B0%D0%B8%D0%BC%D0%BE%D0%B4%D0%B5%D0%B8%CC%86%D1%81%D1%82%D0%B2%D0%B8%D0%B5%20%D1%81%20%D0%B1%D0%BB%D0%BE%D0%B3%D0%B5%D1%80%D0%B0%D0%BC%D0%B8.png">
                    </a>
                </picture>

                <div class="newsMiniBlock__cont">
                    <div class="newsMiniBlock__cont__links">
                    </div>

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="article/marketing-vliyaniya-kak-rabotat-s-inflyuenserami/index.html">Как работать с блогерами в 2025-м году, чтобы не было мучительно больно</a></p>
                    <div class="grow-full"></div>
                    <a href="authors/mariya-shakhova/index.html"
                       class="newsMiniBlock__cont__name _colorBlue">Мария Шахова</a>
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <div class="newsDoubleBlock _bgYellow scene">
                <div class="newsDoubleBlock__left">
                    <p class="newsDoubleBlock__left__descr _colorWhite">КНИГА ОБ УПРАВЛЕНИИ РЕПУТАЦИЕЙ</p>

                    <p class="newsDoubleBlock__left__tit _colorBlack11">На сто кораблей одно море</p>

                    <div class="newsDoubleBlock__left__ava">
                        <picture class="newsDoubleBlock__left__ava__pic">
                            <img src="upload/iblock/3c1/2uslay8qo2cbqcidhgu44k0g2gnkwull/IMG_7470.jpg">
                        </picture>

                        <div class="newsDoubleBlock__left__ava__data">
                            <p class="newsDoubleBlock__left__ava__data__name _colorBlack">Екатерина Тулянкина</p>
                            <p class="newsDoubleBlock__left__ava__data__post _colorBlackOpacity">Основатель и руководитель</p>
                        </div>
                    </div>
                    <a href="http://faros.media/upload/iblock/270/glyz7l50pa91sueaqh3hqip8639v3bsa/%D0%A0%D1%9C%D0%A0%C2%B0%D0%92%C2%A0%D0%A1%D0%83%D0%A1%E2%80%9A%D0%A0%D1%95%20%D0%A0%D1%94%D0%A0%D1%95%D0%A1%D0%82%D0%A0%C2%B0%D0%A0%C2%B1%D0%A0%C2%BB%D0%A0%C2%B5%D0%A0%D1%91%D0%9C%E2%80%A0%20%D0%A0%D1%95%D0%A0%D2%91%D0%A0%D0%85%D0%A0%D1%95%D0%92%C2%A0%D0%A0%D1%98%D0%A0%D1%95%D0%A1%D0%82%D0%A0%C2%B5%20(2).pdf" target="_blank" class="button newsDoubleBlock__left__button">СКАЧАТЬ</a>
                </div>

                <div class="newsDoubleBlock__right">
                    <picture class="newsDoubleBlock__right__pic parallax">
                        <img src="upload/iblock/c79/1nkowixd2gjcznria46tly29830obbgd/newsdoublebg.png" data-depth="0.6">
                    </picture>
                </div>
            </div>
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite material-item
                                ">
                <picture class="newsMiniBlock__pic">
                    <a href="article/kak-povysit-vidimost-i-iks-sayta-proverka-analiz-i-metody-v-2025-godu/index.html">
                        <img src="upload/dev2fun_opengraph/c1c/expwz31ide3t3k3q4ufd5ayfobxwvxii.png">
                    </a>
                </picture>

                <div class="newsMiniBlock__cont">
                    <div class="newsMiniBlock__cont__links">
                    </div>

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="article/kak-povysit-vidimost-i-iks-sayta-proverka-analiz-i-metody-v-2025-godu/index.html">Видимость сайта в 2025: ИКС, YMYL, EEAT и прочие тягости вывода в топ</a></p>
                    <div class="grow-full"></div>
                    <a href="authors/mariya-shakhova/index.html"
                       class="newsMiniBlock__cont__name _colorBlue">Мария Шахова</a>
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->

            <!--1/2 height, max width, news home block START-->

            <!--1/2 height, max width, news home block END-->
        </div>
    </div>
    <!--home news blocks END--> <!--full height, contacts home block START--> <div class="contacts" id="contacts_case">
        <div class="contacts__data">
            <div class="grow-full"></div>

            <div class="contacts__data__logoWrap">
                <img src="images/min/logourl.svg" class="contacts__data__logoWrap__logo"/>
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
                    <a href="team/index.html" class="contacts__data__links__nav__link">Команда</a>
                    <a href="service/index.html" class="contacts__data__links__nav__link">Услуги</a>
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
                                <clipPath id="clip0">
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
    </div> <!--home contacts blocks END-->
@endsection

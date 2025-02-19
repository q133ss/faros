@extends('layouts.app')
@section('title', 'Агентство Faros.Media - управление репутацией и восприятием с 2016 года')
@section('content')
    <!--Full height, big width START-->     <div class="fullHeightBigWidth _first">
        <img src="images/min/home/firstScrBg.svg" alt="Faros Media" class="fullHeightBigWidth__bg-first">

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
                <a href="{{route('index')}}#form" class="button fullHeightBigWidth__wrap__control__button">КОНСУЛЬТАЦИЯ</a>
                <a href="{{route('service.index')}}" class="arrow-link">
                    <span class="arrow-link__text">Все услуги</span>
                    <img src="images/min/icons/yellowarrow.svg" alt="Faros Media" class="arrow-link__arrow">
                </a>
            </div>

            <div class="fullHeightBigWidth__wrap__afterGrow"></div>

            <div class="fullHeightBigWidth__awardsB">
                <div class="fullHeightBigWidth__awardsB__item">
                    <div class="fullHeightBigWidth__awardsB__item__img">
                        <img src="upload/iblock/966/ht1fswgdnz4cz9ih7euchvk7bixz2a8n/RUWARD.png" alt="Faros Media" class="fullHeightMinWidthAwards__awards__item__ico">
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
                        <img src="upload/iblock/b69/gbgfyt3cel1xwffvkbhb3pan38891lhh/REPA_logo.png" alt="Faros Media" class="fullHeightMinWidthAwards__awards__item__ico">
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
                <img src="/images/min/home/gerb.svg" alt="Faros Media" class="fullHeightMinWidth__top__comp__gerb">
                <p class="fullHeightMinWidth__top__comp__amount">170</p>
                <img src="/images/min/home/gerb.svg" alt="Faros Media"
                     class="fullHeightMinWidth__top__comp__gerb fullHeightMinWidth__top__comp__gerb_right">
            </div>

            <p class="fullHeightMinWidth__top__tit">Довольных клиентов</p>
            <p class="fullHeightMinWidth__top__descr">Наш источник вдохновения – это наши клиенты. Мы помогли более 170 компаниям улучшить репутацию и увеличить обороты.</p>

            <a href="{{route('team.index')}}" class="arrow-link">
                <span class="arrow-link__text">Наша команда</span>
                <img src="/images/min/icons/yellowarrow.svg" alt="Faros Media"
                     class="arrow-link__arrow fullHeightMinWidth__top__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidth__bottom">
            <picture class="fullHeightMinWidth__bottom__bg">
                <img src="{{$lastCase->list_img}}" alt="Faros media">
            </picture>
            <div class="fullHeightMinWidth__bottom__content">
                <p class="fullHeightMinWidth__bottom__content__status">НОВЫЙ КЕЙС</p>
                <a class="fullHeightMinWidth__bottom__content__title" href="{{route('case.show', $lastCase->slug)}}">{{$lastCase->list_name}}</a>

                <div class="fullHeightMinWidth__bottom__content__tags">
                    @foreach($lastCase->tags as $tag)
                    <a href="{{route('case.index')}}" class="fullHeightMinWidth__bottom__content__tags__item">#{{$tag->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--Full height, min width, home first END--> <!--Full height, min width, home secщnd START--> <div class="fullHeightMinWidthComentsSlider slider" id="fullHeightMinWidthComentsSlider">
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="/upload/iblock/18c/8miz0v6c8jbkq0mh86fkelj6ixxnmyc3/белый фрегат лого.jpeg" alt="Faros media"
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
            </div>

            <img src="images/min/home/say.svg" alt="Faros media" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="/upload/iblock/18c/8miz0v6c8jbkq0mh86fkelj6ixxnmyc3/белый фрегат лого.jpeg" alt="Faros Media">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Сеть химчисток "Диана"</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Директор по маркетингу</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Благодарность за успешное и плодотворное оказание услуг по репутационному менеджменту с мая 2019 года по настоящий момент. </p>

                <a href="/upload/iblock/3a1/s2pbbosj4o9zrizqtszww3a7ek624n13/drycleanFarosMedia.pdf" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="Faros media" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="{{route('review.index')}}" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt="Faros media"
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="/upload/iblock/26c/qhk4qmnqvr08xazu5ugux9rhcn04b4sm/гемотест лого.jpeg" alt="Faros media"
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
            </div>

            <img src="images/min/home/say.svg" alt="Faros media" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="/upload/iblock/26c/qhk4qmnqvr08xazu5ugux9rhcn04b4sm/гемотест лого.jpeg" alt="Faros Media">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Сеть лабораторий "Гемотест"</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Руководитель отдела интернет-маркетинга</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Благодарим Faros.Media за оказание услуг по мониторингу, анализу и управлению репутацией бренда Гемотест в период с мая 2019 по март 2021 года. </p>

                <a href="http://faros.media/upload/iblock/d6c/mrpurssa48g9sosvqfoi4ryd6qy6lpr1/faros-гемотест.pdf" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="Faros media" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="{{route('review.index')}}" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt="Faros media"
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="/upload/iblock/18c/8miz0v6c8jbkq0mh86fkelj6ixxnmyc3/белый фрегат лого.jpeg" alt="Faros media"
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="{{route('case.index')}}" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="Faros media" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="Faros media" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="/upload/iblock/18c/8miz0v6c8jbkq0mh86fkelj6ixxnmyc3/белый фрегат лого.jpeg" alt="Faros Media">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">ГК "Белый фрегат"</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Спасибо за реализацию сложной задачи: в кратчайшие сроки на основе недоработанного прототипа создали сайт группы компаний с отображением производственных площадок, торговых марок, взаимодействующий с конечными клиентами по форме отзывов и обратной связи. </p>

                <a href="http://faros.media/upload/iblock/1f9/y2exprd80sg16t15wge8wmpfch2vejrx/faros_письмо_белый фрегат.pdf" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="Faros media" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="{{route('review.index')}}" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt="Faros media"
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/fe5/0mgpfzzgmpms3ygie9kqw9de1b3adfho/ross.jpg" alt="Faros media"
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="{{route('case.index')}}" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="Faros media" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="Faros media" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/fe5/0mgpfzzgmpms3ygie9kqw9de1b3adfho/ross.jpg" alt="Faros Media">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Ross Medical Group</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Выражаем агентству Faros.Media благодарность за профессиональную поддержку нашей компании в социальных медиа и оперативное консультирование по вопросам управления репутацией.</p>

                <a href="upload/iblock/e6a/3eubmd07f7nx3529n6se4m0y4xtlg0p5/ross1.jpg" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="Faros media" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="{{route('review.index')}}" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt="Faros media"
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/f54/hrv2n63xjvz84pzxaqzijf9mt2pdpzi6/chees.png" alt="Faros media"
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="{{route('case.index')}}" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="Faros media" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="Faros media" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/f54/hrv2n63xjvz84pzxaqzijf9mt2pdpzi6/chees.png" alt="Faros Media">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Cheeseberry</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Выражаем агентству Faros.Media благодарность за профессиональную поддержку нашей компании в социальных медиа и оперативное консультирование по вопросам управления репутацией.</p>

                <a href="upload/iblock/8e5/07dh2vx67n1uy84l7fc5d1eukzqdlibe/chees1.png" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="Faros media" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="{{route('review.index')}}" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt="Faros media"
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/bd4/dw9pct9lgca27j6wfjzyuvp3oepan40j/donstroy.png" alt="Faros media"
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="{{route('case.index')}}" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="Faros media" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="Faros media" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/bd4/dw9pct9lgca27j6wfjzyuvp3oepan40j/donstroy.png" alt="Faros Media">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Донстрой</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Компания "СМАРТ СЕРВИС" выражает благодарность Екатерине Тулянкиной и компании Faros.Media за профессионализм и плодотворное сотрудничество в сфере управления репутацией. Наша совместная работа длится уже более двух лет, и мы надеемся на ее продолжение в дальнейшем.</p>

                <a href="upload/iblock/701/xszh36rro05z2ockh5apn6yl3nxwb3rs/donstroy1.jpg" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="Faros media" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="{{route('review.index')}}" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt="Faros media"
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/cd1/4pq2clizge31it53t8uf1b9qat4p591c/pavel.jpeg" alt="Faros media"
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="{{route('case.index')}}" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="Faros media" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="Faros media" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/cd1/4pq2clizge31it53t8uf1b9qat4p591c/pavel.jpeg" alt="Faros Media">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Студия интерьеров Павел Полынов</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Студия дизайна интерьеров Павла Полынова выражает благодарность агентству Faros.Media и лично Екатерине Тулянкиной за многолетнее и плодотворное сотрудничество в сфере интернет-маркетинга и управления восприятием бренда. Рекомендуем как надежного и креативного партнера.</p>

                <a href="upload/iblock/4a4/ovmhixuza7v84d5wlhhny61881y4a0yg/pavel1.jpg" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="Faros media" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="{{route('review.index')}}" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt="Faros media"
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/72c/svbsobjrdsln4zlft2zjrzsveb7cv712/cipa.png" alt="Faros media"
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="{{route('case.index')}}" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="Faros media" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="Faros media" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/72c/svbsobjrdsln4zlft2zjrzsveb7cv712/cipa.png" alt="Faros Media">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">Торговая марка Цыпа</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Выражаем благодарность всему творческому коллективу не только за качественную и оперативную работу, которая выполняется профессионально и в срок, но и за высокое чувство стиля и креативный подход к решению поставленных задач, смесь которых лишь подтверждает врожденный утонченный вкус, отшлифованный профильным образованием и опытом работы.</p>

                <a href="upload/iblock/921/wq8ctpdsp33k8iy4pdnew35n2vtk5xif/cipa1.jpg" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="Faros media" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="{{route('review.index')}}" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt="Faros media"
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
        <div class="fullHeightMinWidthComents">
            <div class="fullHeightMinWidthComents__header">
                <div class="fullHeightMinWidthComents__header__logoWrap">
                    <img src="upload/iblock/6e5/prgag0odmjoqw9alrouo68v3li1xvh3q/abn.png" alt="Faros media"
                         class="fullHeightMinWidthComents__header__logoWrap__logo">
                </div>
                <a href="{{route('case.index')}}" target="_blank" class="fullHeightMinWidthComents__header__seemore">
                    <img src="images/min/icons/see.svg" alt="Faros media" class="fullHeightMinWidthComents__header__seemore__ico">
                    <p class="fullHeightMinWidthComents__header__seemore__text">Смотреть кейс</p>
                </a>
            </div>

            <img src="images/min/home/say.svg" alt="Faros media" class="fullHeightMinWidthComents__topMb">

            <div class="fullHeightMinWidthComents__beforeGrow"></div>

            <div class="fullHeightMinWidthComents__cont">
                <div class="fullHeightMinWidthComents__cont__user">
                    <picture class="fullHeightMinWidthComents__cont__user__ava">
                        <img src="upload/iblock/6e5/prgag0odmjoqw9alrouo68v3li1xvh3q/abn.png" alt="Faros Media">
                    </picture>

                    <div class="fullHeightMinWidthComents__cont__user__data">
                        <p class="fullHeightMinWidthComents__cont__user__data__name">АБН Консалт</p>
                        <p class="fullHeightMinWidthComents__cont__user__data__prof">Генеральный директор</p>
                    </div>
                </div>
                <p class="fullHeightMinWidthComents__cont__text">Благодарим агентство Faros.Media (ООО "ПД") за профессиональную поддержку в области управления репутацией и продвижения услуг компании ООО «АБН-Консалт» с июня 2016-го года по настоящий момент. Желаем дальнейших успехов и процветания.</p>

                <a href="upload/iblock/49f/uxi3qloefkdqq77jjrqfkf5b0iqfztrv/abn1.jpg" target="_blank" class="fullHeightMinWidthComents__cont__pdf show_pdf">
                    <img src="images/min/icons/pdf.svg" alt="Faros media" class="fullHeightMinWidthComents__cont__pdf__ico">
                    <p class="fullHeightMinWidthComents__cont__pdf__text">Благодарственное письмо</p>
                </a>
            </div>

            <div class="fullHeightMinWidthComents__afterGrow"></div>

            <a href="{{route('review.index')}}" class="arrow-link fullHeightMinWidthComents__arrow-link">
                <span class="arrow-link__text">Все отзывы</span>
                <img src="images/min/icons/yellowarrow.svg" alt="Faros media"
                     class="arrow-link__arrow fullHeightMinWidthComents__arrow-link__arrow">
            </a>
        </div>
    </div> <!--Full height, min width, home secщnd END-->     <!--Full height, min width, home awards START-->
    <div class="fullHeightMinWidthAwards scene">
        <p class="fullHeightMinWidthAwards__tit">Наши награды</p>

        <div class="fullHeightMinWidthAwards__awards">
            <div class="fullHeightMinWidthAwards__awards__item">
                <div class="fullHeightMinWidthAwards__awards__item__img">
                    <img src="upload/iblock/966/ht1fswgdnz4cz9ih7euchvk7bixz2a8n/RUWARD.png" class="fullHeightMinWidthAwards__awards__item__ico" alt="Faros Media">
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
                    <img src="upload/iblock/b69/gbgfyt3cel1xwffvkbhb3pan38891lhh/REPA_logo.png" class="fullHeightMinWidthAwards__awards__item__ico" alt="Faros Media">
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
            <img src="images/min/home/awardsbg.png" alt="Faros Media" data-depth="0.6">
        </picture>
    </div>
    <!--Full height, min width, home awards END-->
    <!--home mMini blocks START--> <div class="homeMiniBlocks">

        @php $caseIndex = 1; @endphp
        @foreach($cases as $case)
            @php $caseIndex++; @endphp

            @if($caseIndex == 4)
                <div class="miniCenterBlock _bgWhite">
                    <div class="miniCenterBlock__layer">
                        <div class="miniCenterBlock__layer__pic">
                            <img src="images/min/home/flesh.svg" alt="Faros Media">
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

                <div class="miniBlock _bgDarkBlue scene"
                     style="background-color: {{$case->bg_color}}"
                >
                    <div class="miniBlock__layer">
                        <picture class="miniBlock__layer__pic parallax">
                            <img src="{{$case->list_img}}" alt="Faros Media" data-depth="0.6">
                        </picture>
                    </div>

                    <div class="miniBlock__wrap">
                        @if($case->logo != null)
                        <picture class="miniBlock__wrap__pic">
                            <img src="{{$case->logo}}" alt="Faros Media">
                        </picture>
                        @endif

                        <a href="{{route('case.show', $case->slug)}}"
                           class="miniBlock__wrap__tit _colorWhite"
                           style="color: #6b2421;"
                        >{{$case->list_name}}</a>

                        <div class="miniBlock__wrap__hashWrap">
                            @foreach($case->tags as $tag)
                                <a href="{{route('case.index')}}" class="miniBlock__wrap__hashWrap__link _colorSky"
                                   style="color: #6b2421"
                                >#{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
                <div class="miniBlock _bgDarkBlue scene"
                     style="background-color: {{$case->bg_color}}"
                >
                    <div class="miniBlock__layer">
                        <picture class="miniBlock__layer__pic parallax">
                            <img src="{{$case->list_img}}" data-depth="0.6" alt="Faros Media">
                        </picture>
                    </div>

                    <div class="miniBlock__wrap">

                        @if($case->logo != null)
                            <picture class="miniBlock__wrap__pic">
                                <img src="{{$case->logo}}" alt="Faros Media">
                            </picture>
                        @endif


                        <a href="{{route('case.show', $case->slug)}}"
                           class="miniBlock__wrap__tit _colorWhite"
                           style="color: {{$case->text_color}};"
                        >{{$case->list_name}}</a>

                        <div class="miniBlock__wrap__hashWrap">
                            @foreach($case->tags as $tag)
                                <a href="{{route('case.index')}}" class="miniBlock__wrap__hashWrap__link _colorSky"
                                   style="color: {{$case->text_color}}"
                                >#{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endforeach


    </div> <!--home mMini blocks END--> <!--full height, form START--> <div class="formBlockWrap _bgLightGray" id="form">
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
        <img src="images/min/home/thanks.svg" class="fullHeightMinWidth__thanks-img" alt="Faros Media">
        <p class="fullHeightMinWidth__thanks-tit">Спасибо, что обратились в нашу кампанию!</p>
        <p class="fullHeightMinWidth__thanks-descr">Мы перезвоним в течение 20 минут.</p>
        <a href="{{route('case.index')}}" class="button">НАШИ КЕЙСЫ</a>
    </div>
    <!--full height, form END--> <!--home news blocks START--> <div class="newsBlocks">
        <!--news home menu START-->
        <div class="horizMenu _bgWhite">
            <ul class="horizMenu__menu" id="newsMenu">
                <li class="horizMenu__menu__item active material-section" data-order="0">
                    <a class="horizMenu__menu__item__link" data-id="0" onclick="indexCategory(0)">ВСЕ СТАТЬИ</a>
                </li>
                @foreach($categories as $category)
                <li class="horizMenu__menu__item material-section" data-order="1" onclick="indexCategory({{$category->id}})">
                    <a class="horizMenu__menu__item__link"
                       data-id="5">{{$category->name}}</a>
                </li>
                @endforeach
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
                <img src="images/min/icons/grayarrow.svg" alt="Faros media" class="arrow-link__arrow">
            </a>
        </div>
        <!--news home menu END-->
        <input type="hidden" name="url" value="main" id="url">
        <div class="newsBlocks__wrapper all-articles">
            @php $articlesIndex = 0; @endphp
            @foreach($articles as $article)
                @php $articlesIndex++; @endphp
            <div class="newsMiniBlock _bgWhite material-item">
                <picture class="newsMiniBlock__pic">
                    <a href="{{route('articles.show', $article->slug)}}">
                        <img src="{{$article->list_img}}" alt="Faros Media">
                    </a>
                </picture>

                <div class="newsMiniBlock__cont">
                    <div class="newsMiniBlock__cont__links">
                    </div>

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('articles.show', $article->slug)}}">{{$article->list_name}}</a></p>
                    <div class="grow-full"></div>
                    <a href="{{route('team.show', $article->author?->slug)}}"
                       class="newsMiniBlock__cont__name _colorBlue">{{$article->author?->name}}</a>
                </div>
            </div>

            @if($articlesIndex == 5)
            <div class="newsDoubleBlock _bgYellow scene">
                <div class="newsDoubleBlock__left">
                    <p class="newsDoubleBlock__left__descr _colorWhite">КНИГА ОБ УПРАВЛЕНИИ РЕПУТАЦИЕЙ</p>

                    <p class="newsDoubleBlock__left__tit _colorBlack11">На сто кораблей одно море</p>

                    <div class="newsDoubleBlock__left__ava">
                        <picture class="newsDoubleBlock__left__ava__pic">
                            <img src="upload/iblock/3c1/2uslay8qo2cbqcidhgu44k0g2gnkwull/IMG_7470.jpg" alt="Faros Media">
                        </picture>

                        <div class="newsDoubleBlock__left__ava__data">
                            <p class="newsDoubleBlock__left__ava__data__name _colorBlack">Екатерина Тулянкина</p>
                            <p class="newsDoubleBlock__left__ava__data__post _colorBlackOpacity">Основатель и руководитель</p>
                        </div>
                    </div>
                    <a href="/upload/iblock/270/glyz7l50pa91sueaqh3hqip8639v3bsa/На сто кораблей одно море (2).pdf" target="_blank" class="button newsDoubleBlock__left__button">СКАЧАТЬ</a>
                </div>

                <div class="newsDoubleBlock__right">
                    <picture class="newsDoubleBlock__right__pic parallax">
                        <img src="upload/iblock/c79/1nkowixd2gjcznria46tly29830obbgd/newsdoublebg.png" alt="Faros Media" data-depth="0.6">
                    </picture>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
    <!--home news blocks END--> <!--full height, contacts home block START--> <div class="contacts" id="contacts_case">
        <div class="contacts__data">
            <div class="grow-full"></div>

            <div class="contacts__data__logoWrap">
                <img src="images/min/logourl.svg" class="contacts__data__logoWrap__logo" alt="Faros Media" />
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
                    <a href="{{route('team.index')}}" class="contacts__data__links__nav__link">Команда</a>
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

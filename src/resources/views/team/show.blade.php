@extends('layouts.team')
@section('title', $author->name)
@section('content')
    <div class="authorWrap">
        <div class="authorWrap__left">
            <ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="/" title="Главная" itemprop="item">
                        <span itemprop="name">Главная</span>
                        <meta itemprop="position" content="0">
                    </a>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="{{route('team.index')}}" title="Команда" itemprop="item">
                        <span itemprop="name">Команда</span>
                        <meta itemprop="position" content="1">
                    </a>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="{{$author->name}}" itemprop="item">
                        <span itemprop="name">{{$author->name}}</span>
                        <meta itemprop="position" content="2">

                    </a>
                </li>
            </ul>
            <div class="user-sticky sticker">
                <div class="user">
                    <div class="user__data">
                        <picture class="user__data__pic">
                            <img src="{{$author->img}}">
                        </picture>

                        <div class="user__data__info">
                            <h1 class="user__data__info__name">{{$author->name}}</h1>
                            <p class="user__data__info__post">{{$author->post}}</p>
                        </div>
                    </div>

                    <div class="user__soc">

                        <div class="subscribeWrap subscribe_max1000">
                            <button class="subscribe toggleSoc-js" type="button">
                                <img src="../../images/min/icons/subscribe.svg" alt="" class="subscribe__ico">
                                <span class="subscribe__text">Подписаться</span>
                            </button>

                            <div class="subscribeWrap__soc completed">
                                <form class="subscriptions subscribeInp form">
                                    <input name="author_id" type="hidden" value="28" required>
                                    <input name="email" class="subscribeInp__inp" type="email" placeholder="email"
                                           required/>
                                    <button type="submit" class="button">Ok</button>
                                </form>
                                <div class="subscribeInp text">
                                    <p class="subscribeInp__text">Вы подписаны</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blogBG"></div>

                <div class="indicators">
                    <div class="indicators__wrap">
                        @if($author->rating != 0)
                        <div class="indicators__item">
                            <img src="../../images/min/author/star.svg" alt=""
                                 class="indicators__item__ico">

                            <div class="indicators__item__data">
                                <p class="indicators__item__data__title">Рейтинг</p>
                                <p class="indicators__item__data__quant">{{$author->rating}}</p>
                            </div>
                        </div>
                        @endif
                        @if($author->post_count != '')
                        <div class="indicators__item">
                            <img src="../../images/min/author/micro.svg" alt=""
                                 class="indicators__item__ico">

                            <div class="indicators__item__data">
                                <p class="indicators__item__data__title">Написано</p>
                                <p class="indicators__item__data__quant">{{$author->post_count}}</p>
                            </div>
                        </div>
                        @endif
                        @if($author->smi_count != '')
                        <div class="indicators__item">
                            <img src="../../images/min/author/megaphone.svg" alt=""
                                 class="indicators__item__ico">

                            <div class="indicators__item__data">
                                <p class="indicators__item__data__title">СМИ</p>
                                <p class="indicators__item__data__quant">{{$author->smi_count}}</p>
                            </div>
                        </div>
                       @endif
                    </div>
                    <div class="subscribeWrap subscribe_min1000">
                        <button class="subscribe toggleSoc-js" type="button">
                            <img src="../../images/min/icons/subscribe.svg" alt="" class="subscribe__ico">
                            <span class="subscribe__text">Подписаться</span>
                        </button>

                        <div class="subscribeWrap__soc">
                            <form class="subscriptions subscribeInp form">
                                <input type="hidden" name="author_id" value="28" required>
                                <input name="email" class="subscribeInp__inp" type="email" placeholder="email"
                                       required/>
                                <button type="submit" class="button">Ok</button>
                            </form>
                            <div class="subscribeInp text">
                                <p class="subscribeInp__text">Вы подписаны</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blogBG blogBG__noBottom blogBG__autor__noviz600"></div>
            </div>

            <!--news home menu START-->
            <div class="horizMenu horizMenu__autor">
                <input type="hidden" name="url" value="author" id="url">
                <input type="hidden" name="author_id" value="28" id="author_id">
                <ul class="horizMenu__menu horizMenu__menu__author" id="newsMenu">
                    <li class="horizMenu__menu__item active material-section" data-order="0">
                        <a class="horizMenu__menu__item__link" data-id="-1">
                            <img src="../../images/min/bluebook.svg" alt="" class="horizMenu__menu__item__link__ico">
                            <span>БИОГРАФИЯ</span>
                        </a>
                    </li>
                    <li class="dd_menu">
                        <button class="dropdown-toggle" type="button">
                            <span class="dropdown-toggle__point"></span>
                            <span class="dropdown-toggle__point"></span>
                            <span class="dropdown-toggle__point"></span>
                        </button>
                        <ul class="dropdown-menu"></ul>
                    </li>
                    <li class="horizMenu__menu__item  material-section" data-order="1">
                        <a href="{{route('articles.index')}}" class="horizMenu__menu__item__link" data-id="0">
                            ВСЕ СТАТЬИ
                        </a>
                    </li>
                    <li class="horizMenu__menu__item material-section" data-order="2">
                        <a class="horizMenu__menu__item__link"
                           data-id="5">СОЦСЕТИ</a>
                    </li>
                    <li class="horizMenu__menu__item material-section" data-order="3">
                        <a class="horizMenu__menu__item__link"
                           data-id="6">МАРКЕТИНГ</a>
                    </li>
                    <li class="horizMenu__menu__item material-section" data-order="4">
                        <a class="horizMenu__menu__item__link"
                           data-id="7">ЛАЙФХАКИ</a>
                    </li>
                    <li class="horizMenu__menu__item material-section" data-order="5">
                        <a class="horizMenu__menu__item__link"
                           data-id="8">РЕПУТАЦИЯ</a>
                    </li>
                    <li class="horizMenu__menu__item material-section" data-order="6">
                        <a class="horizMenu__menu__item__link"
                           data-id="11">ВАКАНСИИ</a>
                    </li>
                    @if($author->slug == 'ekaterina-tulyankina')
                    <li class="horizMenu__menu__item material-section" data-order="7">
                        <a class="horizMenu__menu__item__link"
                           data-id="12">Работа в digital</a>
                    </li>
                    <li class="horizMenu__menu__item material-section" data-order="8">
                        <a class="horizMenu__menu__item__link"
                           data-id="13">Блог Екатерины Тулянкиной</a>
                    </li>
                    @endif
                </ul>

                <div class="selectWrap author-tags" style="display: none">
                    <button class="horizMenu__filter" type="button">
                        <span class="horizMenu__filter__text">Теги</span>
                        <span class="horizMenu__filter__quant">0</span>
                        <img src="../../images/min/icons/arroworange.svg" alt="" class="horizMenu__filter__arrow">
                    </button>

                    <select class="selectWrap__sel" id="authSel" multiple="multiple">
                        <option value="smm">smm</option>
                        <option value=" tone of voice бренда"> tone of voice бренда</option>
                        <option value=" для smm-щика"> для smm-щика</option>
                        <option value=" нивелирование негатива"> нивелирование негатива</option>
                        <option value=" регламенты"> регламенты</option>
                        <option value="лояльность потребителей">лояльность потребителей</option>
                        <option value="FarosMedia">FarosMedia</option>
                        <option value=" управление репутацией"> управление репутацией</option>
                        <option value=" гайды в соцсетях"> гайды в соцсетях</option>
                        <option value=" лояльность потребителей"> лояльность потребителей</option>
                        <option value="KPI">KPI</option>
                        <option value=" NPS"> NPS</option>
                        <option value="Контент-маркетинг">Контент-маркетинг</option>
                        <option value=" лайфхаки для бизнеса"> лайфхаки для бизнеса</option>
                        <option value=" Статистика"> Статистика</option>
                        <option value="необычные аксессуары">необычные аксессуары</option>
                        <option value=" продвижение интернет-магазина"> продвижение интернет-магазина</option>
                        <option value="баланс">баланс</option>
                        <option value=" Бизнес"> Бизнес</option>
                        <option value=" деловая репутация"> деловая репутация</option>
                        <option value=" микроэкономика"> микроэкономика</option>
                        <option value=" финансовая отчетность"> финансовая отчетность</option>
                        <option value="Репутация">Репутация</option>
                        <option value=" поведение потребителя"> поведение потребителя</option>
                        <option value="NPS">NPS</option>
                        <option value=" доверие клиентов"> доверие клиентов</option>
                        <option value="лучшие подрядчики по ORM">лучшие подрядчики по ORM</option>
                        <option value=" рейтинг агентств по репутации"> рейтинг агентств по репутации</option>
                        <option value="психология восприятия">психология восприятия</option>
                        <option value=" маркетинговые приемы"> маркетинговые приемы</option>
                        <option value=" влияние на потребителя"> влияние на потребителя</option>
                        <option value="чат-бот">чат-бот</option>
                        <option value="Facebook">Facebook</option>
                        <option value=" Telegram"> Telegram</option>
                        <option value=" Аудитория"> Аудитория</option>
                        <option value=" чат-бот"> чат-бот</option>
                        <option value="CPC">CPC</option>
                        <option value=" GoogleAdwords"> GoogleAdwords</option>
                        <option value=" YandexDirect"> YandexDirect</option>
                        <option value=" КМС"> КМС</option>
                        <option value=" Контекстная реклама"> Контекстная реклама</option>
                        <option value=" Персонализация сайта"> Персонализация сайта</option>
                        <option value=" Показатель отказов"> Показатель отказов</option>
                        <option value=" РСЯ"> РСЯ</option>
                        <option value=" Сайт"> Сайт</option>
                        <option value=" Сегментация ЦА"> Сегментация ЦА</option>
                        <option value="Показатель отказов">Показатель отказов</option>
                        <option value=" Скорость загрузки"> Скорость загрузки</option>
                        <option value="Аудитория">Аудитория</option>
                        <option value="Зарубежный опы">Зарубежный опы</option>
                        <option value=" Instagram"> Instagram</option>
                        <option value=" Контент-маркетинг"> Контент-маркетинг</option>
                        <option value="GoogleAnalytics">GoogleAnalytics</option>
                        <option value=" YandexMetrika"> YandexMetrika</option>
                        <option value=" Веб-аналитика"> Веб-аналитика</option>
                        <option value="Instagram">Instagram</option>
                        <option value=" Stories"> Stories</option>
                        <option value="Вимм-Билль-Данн">Вимм-Билль-Данн</option>
                        <option value="квизы">квизы</option>
                        <option value=" quiz-маркетинг"> quiz-маркетинг</option>
                        <option value=" опросы"> опросы</option>
                        <option value=" коммуникации"> коммуникации</option>
                        <option value="аналитика">аналитика</option>
                        <option value=" стимулирование сбыта"> стимулирование сбыта</option>
                        <option value=" Маркетинг влияния"> Маркетинг влияния</option>
                        <option value="как удалить негатив">как удалить негатив</option>
                        <option value=" обратная связь"> обратная связь</option>
                        <option value="Маркетинг">Маркетинг</option>
                        <option value=" стратегия"> стратегия</option>
                        <option value=" digital профессии"> digital профессии</option>
                        <option value=" smm-щик"> smm-щик</option>
                        <option value="рейтинг">рейтинг</option>
                        <option value=" культура отмены"> культура отмены</option>
                        <option value="поведение потребителя">поведение потребителя</option>
                    </select>
                </div>

                <div class="horizMenu__filter horizMenu__filter_mw author-sort" style="display: none">
                    <img src="../../images/min/icons/top_bottom.svg" alt=""
                         class="horizMenu__filter__sort horizMenu__filter__sort_abs">
                    <select class="selectWrap__sel" id="sortSel">
                        <option value="popular">По популярности</option>
                        <option value="new">Новые</option>
                        <option value="old">Старые</option>
                    </select>
                    <img src="../../images/min/icons/arroworange.svg" alt=""
                         class="horizMenu__filter__arrow horizMenu__filter__arrow_abs">
                </div>
            </div>
            <!--news home menu END-->
            <div class="author1 about">
                <p class="author1__partName">Слова от автора</p>

                <div class="author1__partCont">
                    <p class="author1__partCont__text">{!! $author->from_author !!}</p>
                </div>

                <p class="author1__partName">Образование</p>

                <div class="author1__partCont">
                    <p class="author1__partCont__tit">{!! $author->education !!}</p>
                    <p class="author1__partCont__date">
                        <br>
                    </p>                        </div>
                <p class="author1__partName">Дополнительное образование</p>

                <div class="author1__partCont">{!! $author->additional_educational !!}</div>
            </div>
            <div class="author allarticles all-articles" style="display: none;">
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/chto-takoe-klipovoe-myshlenie/index.html">
                            <img src="../../upload/iblock/cc2/6pb20geinape2go32r1fua0pqvwrl0i7/stat_mark.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/chto-takoe-klipovoe-myshlenie/index.html">Клиповое мышление: что это такое, как оно помогает и мешает бизнесу, чем вредит пользователю</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="/" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-7                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/kak-stroit-uznavaemost-kliniki/index.html">
                            <img src="../../upload/iblock/c23/e0wb4ozz380q2lr8olrovisj2lr5vhv6/stat_life.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">ЛАЙФХАКИ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/kak-stroit-uznavaemost-kliniki/index.html">Узнаваемость клиники: как и зачем формировать?</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-5                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/10_pravil_obscheniya_v_smm_lifehack/index.html">
                            <img src="../../upload/iblock/055/mtm1mo2ymr7pzrvo8q1nxzkbqv1e366b/stat_soc.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">СОЦСЕТИ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/10_pravil_obscheniya_v_smm_lifehack/index.html">10 правил общения с клиентом в соцмедиа</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/delovaya-reputatsiya-rukovoditelya-kompanii/index.html">
                            <img src="../../upload/iblock/638/526aflcdkpbr8qafk6x4l8nvvfeklmqj/rc.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/delovaya-reputatsiya-rukovoditelya-kompanii/index.html">Деловая репутация руководителя компании</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/segmentatciya-tcelevoy-auditorii/index.html">
                            <img src="../../upload/iblock/105/dfc030ivsg5s1e4gztqqzf445436be8e/webpc-passthru&#32;(7).webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/segmentatciya-tcelevoy-auditorii/index.html">Как сегментировать целевую аудиторию</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-7                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/analiz_reputacii_prakticheskoe_rukovodstvo/index.html">
                            <img src="../../upload/iblock/ad5/vzr6vo7e8rbj4nsr4w5t4tu3f6p11zv1/express_p.png">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">ЛАЙФХАКИ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/analiz_reputacii_prakticheskoe_rukovodstvo/index.html">Как провести экспресс-анализ репутации на примере медлаборатории Хеликс</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/chto-takoe-sarafannoe-radio/index.html">
                            <img src="../../upload/resize_cache/webp/iblock/8b3/d0rgxln69ljs7s1td3v2gg9y9u727lca/russkaya-krasavica-2937113_1280-e1620914276881.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/chto-takoe-sarafannoe-radio/index.html">Что такое сарафанное радио в интернете </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/9-etapov-v-upravlenii-reputatsiej-brenda/index.html">
                            <img src="../../upload/iblock/7b9/70tk7tfmgcup1t1ayi8v6ggo9p175pq6/webpc-passthru&#32;(2).webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/9-etapov-v-upravlenii-reputatsiej-brenda/index.html">9 этапов в управлении репутацией бренда</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-5                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/kak-obshhatsya-s-klientami-v-sotssetyah-v-2021-godu-pravila-i-trendy/index.html">
                            <img src="../../upload/resize_cache/webp/iblock/524/0mozpl3zyqhab1wtrhrtwngrsy4f2cry/friends-distracted-with-social-networks.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">СОЦСЕТИ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/kak-obshhatsya-s-klientami-v-sotssetyah-v-2021-godu-pravila-i-trendy/index.html">Как общаться с клиентами в 2021 году</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/chto-takoe-indeks-nps-metrika/index.html">
                            <img src="../../upload/resize_cache/webp/iblock/b45/j1x0jyi8tvips9fcdmjvwm1jbuzlfy6p/nps.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/chto-takoe-indeks-nps-metrika/index.html">Индекс NPS: значение и роль для бизнеса
                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/v-poiskah-formuly-uspeshnogo-kontent-marketinga/index.html">
                            <img src="../../upload/iblock/377/v9ratk6h10otdtf0zvyxytypng80rr9h/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/v-poiskah-formuly-uspeshnogo-kontent-marketinga/index.html">В поисках формулы успешного контент-маркетинга

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-7                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/prodvizhenie-magazina-aksessuarov/index.html">
                            <img src="../../upload/iblock/dc8/c4l0g3n60z3jwjj0oyikvwgklmbekh11/mj.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">ЛАЙФХАКИ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/prodvizhenie-magazina-aksessuarov/index.html">Лайфхаки по продвижению магазина мужских аксессуаров</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/chto-takoe-delovaya-reputatsiya/index.html">
                            <img src="http://faros.media/upload/iblock/ab1/7n20lfcq0h38f7jwyskn3yvtx6nzyv1i/%D0%A0%D1%94%D0%A0%C2%B0%D0%A0%D1%94%20%D0%A0%D1%95%D0%A1%E2%80%A0%D0%A0%C2%B5%D0%A0%D0%85%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A1%D0%8A%20%D0%A0%D2%91%D0%A0%C2%B5%D0%A0%C2%BB%D0%A0%D1%95%D0%A0%D0%86%D0%A1%D1%93%D0%A1%D0%8B%20%D0%A1%D0%82%D0%A0%C2%B5%D0%A0%D1%97%D0%A1%D1%93%D0%A1%E2%80%9A%D0%A0%C2%B0%D0%A1%E2%80%A0%D0%A0%D1%91%D0%A1%D0%8B%20%D0%A0%D1%94%D0%A0%D1%95%D0%A0%D1%98%D0%A0%D1%97%D0%A0%C2%B0%D0%A0%D0%85%D0%A0%D1%91%D0%A0%D1%91%20-%20%D0%A0%D1%96%D0%A1%D1%93%D0%A0%D2%91%D0%A0%D0%86%D0%A0%D1%91%D0%A0%C2%BB%D0%A0%C2%BB.png">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/chto-takoe-delovaya-reputatsiya/index.html">Понятие и принятие деловой репутации компании: где менеджмент, а где гудвилл</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/putj-potrebitelya-k-vyboru-tovara/index.html">
                            <img src="http://faros.media/upload/resize_cache/webp/iblock/f2f/twt93xkrqoa5y11kd4xgej7he8o1yprk/%D0%A0%D1%94%D0%A0%C2%B0%D0%A0%D1%94%20%D0%A0%D1%97%D0%A0%D1%95%D0%A0%D0%85%D0%A1%D0%8F%D0%A1%E2%80%9A%D0%A1%D0%8A%20%D0%A0%D1%97%D0%A0%D1%95%D0%A1%E2%80%9A%D0%A1%D0%82%D0%A0%C2%B5%D0%A0%C2%B1%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A0%C2%B5%D0%A0%C2%BB%D0%A1%D0%8F%20%D0%A0%D1%91%20%D0%A0%D1%97%D0%A1%D0%83%D0%A0%D1%91%D0%A1%E2%80%A6%D0%A0%D1%95%D0%A0%C2%BB%D0%A0%D1%95%D0%A0%D1%96%D0%A0%D1%91%D0%A1%D0%8B%20%D0%A0%C2%B5%D0%A0%D1%96%D0%A0%D1%95%20%D0%A0%D0%86%D0%A1%E2%80%B9%D0%A0%C2%B1%D0%A0%D1%95%D0%A1%D0%82%D0%A0%C2%B0.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/putj-potrebitelya-k-vyboru-tovara/index.html">Как потребитель выбирает товары в интернете

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/zachem-nuzhna-loyalnost-klientov/index.html">
                            <img src="http://faros.media/upload/resize_cache/webp/iblock/000/2kucygpgvvrarevv6bih35d943g4j92o/%D0%A1%E2%80%A1%D0%A1%E2%80%9A%D0%A0%D1%95%20%D0%A0%C2%B6%D0%A0%D2%91%D0%A1%D0%8F%D0%A1%E2%80%9A%20%D0%A0%D1%95%D0%A1%E2%80%9A%20%D0%A0%C2%BB%D0%A0%D1%95%D0%A1%D0%8F%D0%A0%C2%BB%D0%A1%D0%8A%D0%A0%D0%85%D0%A0%D1%95%D0%A0%D1%96%D0%A0%D1%95%20%D0%A0%D1%94%D0%A0%C2%BB%D0%A0%D1%91%D0%A0%C2%B5%D0%A0%D0%85%D0%A1%E2%80%9A%D0%A0%C2%B0%20%D0%A0%D1%91%20%D0%A0%D1%94%D0%A0%C2%B0%D0%A0%D1%94%20%D0%A0%C2%B5%D0%A0%D1%96%D0%A0%D1%95%20%D0%A0%D1%97%D0%A0%D1%95%D0%A0%C2%BB%D0%A1%D1%93%D0%A1%E2%80%A1%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A1%D0%8A.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/zachem-nuzhna-loyalnost-klientov/index.html">Что такое клиентская лояльность, как ее формировать
                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-13                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/faros-media-v-top-4-agentstv-po-upravleniyu-reputatsiej/index.html">
                            <img src="../../upload/iblock/6d0/v9s77x1kmd2y2cfnt9egr27atrsaum6m/2019-01-12-12-45-03.png">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">Блог Екатерины Тулянкиной</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/faros-media-v-top-4-agentstv-po-upravleniyu-reputatsiej/index.html">Faros.Media в топ-4 агентств по управлению репутацией

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/3-psihologicheskih-priema-v-marketinge/index.html">
                            <img src="http://faros.media/upload/resize_cache/webp/iblock/3d4/pxxldz11zza9maglde85xfeu3i7qishi/%D0%A0%D1%94%D0%A0%C2%B0%D0%A0%D1%94%20%D0%A0%D1%97%D0%A1%D0%83%D0%A0%D1%91%D0%A1%E2%80%A6%D0%A0%D1%95%D0%A0%C2%BB%D0%A0%D1%95%D0%A0%D1%96%D0%A0%D1%91%D0%A1%D0%8F%20%D0%A0%D1%97%D0%A0%D1%95%D0%A0%D1%98%D0%A0%D1%95%D0%A0%D1%96%D0%A0%C2%B0%D0%A0%C2%B5%D0%A1%E2%80%9A%20%D0%A1%E2%80%9E%D0%A0%D1%95%D0%A1%D0%82%D0%A0%D1%98%D0%A0%D1%91%D0%A1%D0%82%D0%A0%D1%95%D0%A0%D0%86%D0%A0%C2%B0%D0%A1%E2%80%9A%D0%A1%D0%8A%20%D0%A0%D0%86%D0%A0%D1%95%D0%A1%D0%83%D0%A0%D1%97%D0%A1%D0%82%D0%A0%D1%91%D0%A1%D0%8F%D0%A1%E2%80%9A%D0%A0%D1%91%D0%A0%C2%B5.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/3-psihologicheskih-priema-v-marketinge/index.html">Психологическое воздействие на потребителя: как привлечь клиента и сформировать выгодное восприятие в его глазах
                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/sila-otzyva-7-sovetov-po-ispolzovaniyu-rekomendatsij-dlya-prodvizheniya-brenda/index.html">
                            <img src="../../upload/iblock/c24/60b9pmo9146k2k0r34cijpd17zsg8pxr/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/sila-otzyva-7-sovetov-po-ispolzovaniyu-rekomendatsij-dlya-prodvizheniya-brenda/index.html">Сила отзыва: 7 советов по использованию рекомендаций для продвижения бренда

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/10-kreativnyh-idej-po-ispolzovaniyu-chat-botov/index.html">
                            <img src="../../upload/iblock/bd8/yrd0poqsy7be60qpz0n5e24vlmn6xjo0/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/10-kreativnyh-idej-po-ispolzovaniyu-chat-botov/index.html">Необходимые задачи, которые может решать чат-бот для бизнеса - идеи автоматизации
                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-13                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/luchshee-agentstvo-po-klientorientirovannosti-i-kachestvu-servisa-2017/index.html">
                            <img src="../../upload/iblock/0b2/nuj0dtyfmwmo1fep3h2p5neikg3plg31/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">Блог Екатерины Тулянкиной</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/luchshee-agentstvo-po-klientorientirovannosti-i-kachestvu-servisa-2017/index.html">Лучшее агентство по клиентоориентированности и качеству сервиса 2017

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/o-chat-bote-zamolvite-slovo/index.html">
                            <img src="../../upload/iblock/d14/7xcy6st27dapdlct8v2gyskfngsu362v/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/o-chat-bote-zamolvite-slovo/index.html">О чат-боте замолвите слово!</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/nazad-v-budushhee-kontekstnoj-reklamy/index.html">
                            <img src="../../upload/iblock/969/35oirxizpns95ekmoq0u9xv5dif3gnuh/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/nazad-v-budushhee-kontekstnoj-reklamy/index.html">Назад в будущее контекстной рекламы

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/posetiteli-zakryvayut-medlennye-sajty-chto-delat/index.html">
                            <img src="../../upload/iblock/df0/k89mka9l4pseaidkry01kgdsv3zszro3/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/posetiteli-zakryvayut-medlennye-sajty-chto-delat/index.html">Как увеличить скорость загрузки сайта без потери качества
                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/kak-personalizirovat-svoj-website/index.html">
                            <img src="../../upload/iblock/6a2/u6v1oyjua0f9iqjrdl0e5e7n2ax7g36e/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/kak-personalizirovat-svoj-website/index.html">Как персонализировать свой сайт и увеличить продажи

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/klaviatura-bolshe-ne-nuzhna-vse-delayu-golosom/index.html">
                            <img src="../../upload/iblock/f98/ajm73g21egwrk1rh2riz57jfck9fiupc/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/klaviatura-bolshe-ne-nuzhna-vse-delayu-golosom/index.html">Клавиатура стала не нужна — все делаю голосом!

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/kommyuniti-menedzhery-vash-vyhod/index.html">
                            <img src="../../upload/iblock/b62/th2ouoy7b89kuqibrllzajsw97hvimlu/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/kommyuniti-menedzhery-vash-vyhod/index.html">Коммьюнити-менеджеры, ваш выход!

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/kak-analizirovat-stranitcy-uhoda-s-website/index.html">
                            <img src="../../upload/iblock/cfa/c8gcxixtrwyemmiuoopwvgf6s8xsdm3w/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/kak-analizirovat-stranitcy-uhoda-s-website/index.html">Хороший сайт, но я еще похожу — посмотрю
                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/a-sejchas-my-s-druzyami-snimem-paru-sketchej-v-instagram/index.html">
                            <img src="../../upload/iblock/7b2/q1rx8chp4d1vpyn44cpoj5lhs79vclnr/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/a-sejchas-my-s-druzyami-snimem-paru-sketchej-v-instagram/index.html">А сейчас мы с друзьями снимем пару скетчей в Instagram

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/skazhi-mne-est-li-u-tebya-chat-bot/index.html">
                            <img src="../../upload/iblock/ce6/w2lercfw8jnrxpvwpq7pop0pnkitj0wi/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/skazhi-mne-est-li-u-tebya-chat-bot/index.html">Скажи мне, есть ли у тебя чат-бот, и я скажу, в тренде ли твой бизнес

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-13                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/v-gostyah-horosho-a-doma-luchshe/index.html">
                            <img src="../../upload/iblock/6dc/2xeb3mnh38d4sf14hk15hys979uomk2p/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">Блог Екатерины Тулянкиной</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/v-gostyah-horosho-a-doma-luchshe/index.html">В гостях хорошо, а дома лучше

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/situatsiya-vyshla-iz-pod-kontrolya-kak-vimm-bill-dann-spravlyalsya-s-lozhnoj-informatsiej-ob-isporchennyh-produktah-firmy/index.html">
                            <img src="../../upload/iblock/a4f/royiqdesr7h3s9yg9k14b347m3wk1oyi/webpc-passthru.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/situatsiya-vyshla-iz-pod-kontrolya-kak-vimm-bill-dann-spravlyalsya-s-lozhnoj-informatsiej-ob-isporchennyh-produktah-firmy/index.html">Информационные войны как методы борьбы с конкурентами</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-13                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/pochemu-faros-media/index.html">
                            <img src="../../upload/resize_cache/webp/iblock/87a/0ss8oyy758zhavsbk112uje5br9ggqhg/15195885_2020652538161334_5034692378629371339_o.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">Блог Екатерины Тулянкиной</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/pochemu-faros-media/index.html">Почему faros.media?

                            </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-11                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="http://faros.media/articles/vakansiya-iyunya-pomoshchnik-shef-redaktora-stazher/">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">ВАКАНСИИ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="http://faros.media/articles/vakansiya-iyunya-pomoshchnik-shef-redaktora-stazher/">Вакансия июня: помощник шеф-редактора, стажер</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-11                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="http://faros.media/articles/vakansiya-1-ofis-menedzher-lichnyy-pomoshchnik/">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">ВАКАНСИИ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="http://faros.media/articles/vakansiya-1-ofis-menedzher-lichnyy-pomoshchnik/">Вакансия №1. Офис-менеджер/личный помощник</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-11                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="http://faros.media/articles/vakansiya-2-krutoy-talantlivyy-prodavets/">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">ВАКАНСИИ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="http://faros.media/articles/vakansiya-2-krutoy-talantlivyy-prodavets/">Вакансия №2. Крутой талантливый продавец!</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-11                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="http://faros.media/articles/vakansii-3-i-4-ishchem-menedzherov-proektov/">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">ВАКАНСИИ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="http://faros.media/articles/vakansii-3-i-4-ishchem-menedzherov-proektov/">Вакансии №3 и №4: ищем менеджеров проектов!</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/chto-takoe-quiz-marketing-i-kak-ego-primenyat-v-biznese/index.html">
                            <img src="../../upload/resize_cache/webp/dev2fun_opengraph/34c/g45962rrq0qosuz75l562voosumpdbdv.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/chto-takoe-quiz-marketing-i-kak-ego-primenyat-v-biznese/index.html">Квизы в продвижении: цели применения, виды, этапы создания</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/stimulirovanie-sbyta-v-magazinakh-i-torgovykh-setyakh/index.html">
                            <img src="http://faros.media/upload/resize_cache/webp/iblock/e00/nr2f15i655r704dpjpq9ah3vgez8hqya/%D0%A0%D1%94%D0%A0%C2%B0%D0%A0%D1%94%20%D0%A0%D1%97%D0%A0%D1%95%D0%A0%D1%97%D0%A1%D0%82%D0%A0%D1%95%D0%A1%D0%83%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A1%D0%8A%20%D0%A0%D1%95%D0%A1%D0%83%D0%A1%E2%80%9A%D0%A0%C2%B0%D0%A0%D0%86%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A1%D0%8A%20%D0%A0%D1%95%D0%A1%E2%80%9A%D0%A0%C2%B7%D0%A1%E2%80%B9%D0%A0%D0%86%20(334%20x%20221%20px)%20(20).webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/stimulirovanie-sbyta-v-magazinakh-i-torgovykh-setyakh/index.html">Достижение окупаемости за счет стимулирования сбыта: как организовать и зачем</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/chto-delat-s-agressivnymi-klientami-metody-nivelirovaniya-konflikta/index.html">
                            <img src="http://faros.media/upload/resize_cache/webp/iblock/39c/wvflqid35ba8u57szomw9m2twnc2vn33/%D0%A0%D1%94%D0%A0%C2%B0%D0%A0%D1%94%20%D0%A0%D0%86%D0%A1%E2%80%B9%D0%A1%D0%8F%D0%A0%D0%86%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A1%D0%8A%20%D0%A0%C2%B0%D0%A0%D1%96%D0%A1%D0%82%D0%A0%C2%B5%D0%A1%D0%83%D0%A1%D0%83%D0%A0%D1%91%D0%A1%D0%8B%20%D0%A0%D1%97%D0%A0%D1%95%D0%A1%E2%80%9A%D0%A1%D0%82%D0%A0%C2%B5%D0%A0%C2%B1%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A0%C2%B5%D0%A0%C2%BB%D0%A1%D0%8F%20%D0%A0%D1%91%20%D0%A0%D1%97%D0%A0%D1%95%D0%A0%C2%B1%D0%A0%C2%B5%D0%A0%D2%91%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A1%D0%8A%20%D0%A0%C2%B5%D0%A0%C2%B5%20%D0%A0%D0%85%D0%A0%C2%B5%20%D0%A0%C2%B7%D0%A0%C2%B0%D0%A0%D1%96%D0%A1%D1%93%D0%A0%C2%B1%D0%A0%D1%91%D0%A0%D0%86%20%D0%A1%D0%83%D0%A0%D0%86%D0%A0%D1%95%D0%A0%D1%91%D0%9C%E2%80%A0%20%D0%A0%D1%91%D0%A0%D1%98%D0%A0%D1%91%D0%A0%D2%91%D0%A0%C2%B6.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/chto-delat-s-agressivnymi-klientami-metody-nivelirovaniya-konflikta/index.html">Агрессия - частое проявление эмоций со стороны клиента. Как нивелировать негатив?</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/kontseptsiya-marketing-miks-chto-takoe-kompleks-marketinga-model-4p/index.html">
                            <img src="http://faros.media/upload/resize_cache/webp/iblock/a42/v0j175segabkm325x1dz9citw095cjnb/%D0%A0%D1%94%D0%A0%C2%B0%D0%A0%D1%94%20%D0%A0%D1%97%D0%A0%D1%95%D0%A0%D1%97%D0%A1%D0%82%D0%A0%D1%95%D0%A1%D0%83%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A1%D0%8A%20%D0%A0%D1%95%D0%A1%D0%83%D0%A1%E2%80%9A%D0%A0%C2%B0%D0%A0%D0%86%D0%A0%D1%91%D0%A1%E2%80%9A%D0%A1%D0%8A%20%D0%A0%D1%95%D0%A1%E2%80%9A%D0%A0%C2%B7%D0%A1%E2%80%B9%D0%A0%D0%86%20(334%20x%20221%20px)%20(23).webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/kontseptsiya-marketing-miks-chto-takoe-kompleks-marketinga-model-4p/index.html">Маркетинг-микс как основа маркетинговой стратегии и достижения бизнес-целей</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-12                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/chem-zanimaetsya-khoroshiy-smm-shchik-tseli-i-zadachi-spetsialista-po-sotsialnym-setyam/index.html">
                            <img src="http://faros.media/upload/resize_cache/webp/iblock/820/ziwa1dr2el5cpz2951wzqtgliyusaloq/%D0%A0%C2%B1%D0%A1%D1%93%D0%A0%D2%91%D0%A0%D0%85%D0%A0%D1%91%20%D0%A1%D0%83%D0%A0%D1%98%D0%A0%D1%98%D0%A1%E2%80%B0%D0%A0%D1%91%D0%A0%D1%94%D0%A0%C2%B0.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">Работа в digital</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/chem-zanimaetsya-khoroshiy-smm-shchik-tseli-i-zadachi-spetsialista-po-sotsialnym-setyam/index.html">Чем занимается SMM-специалист: поиск мемов, создание стратегии продвижения и многое другое</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-13                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/teper-sami-importozameshchenie-v-rossii-2022/index.html">
                            <img src="http://faros.media/upload/iblock/493/b259fcl8j7uig84xekv8wfozhii0667f/%D0%A0%D1%91%D0%A0%D1%98%D0%A0%D1%97%D0%A0%D1%95%D0%A1%D0%82%D0%A1%E2%80%9A%D0%A0%D1%95%D0%A0%C2%B7%D0%A0%C2%B0%D0%A0%D1%98%D0%A0%C2%B5%D0%A1%E2%80%B0%D0%A0%C2%B5%D0%A0%D0%85%D0%A0%D1%91%D0%A0%C2%B5%20%D0%A0%D0%86%20%D0%A1%D0%82%D0%A0%D1%95%D0%A1%D0%83%D0%A1%D0%83%D0%A0%D1%91%D0%A0%D1%91%202022.png">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">Блог Екатерины Тулянкиной</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/teper-sami-importozameshchenie-v-rossii-2022/index.html">Чего ждать от импортозамещения в России? - будем ли готовы победить санкции?</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/kak-konkurentnaya-razvedka-pomogaet-biznesu/index.html">
                            <img src="../../upload/iblock/022/lqrlvph57ulok357rc7czbrt47ubie5y/small27.png">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/kak-konkurentnaya-razvedka-pomogaet-biznesu/index.html">Стремление к лидерству: методы и правила конкурентной разведки </a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/priemy-i-metody-formirovaniya-korporativnoy-kultury-v-noveyshey-istorii-rossii/index.html">
                            <img src="../../upload/dev2fun_opengraph/91f/v4selwuo87txur9r37ovvxzzv8bi2ekc.png">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/priemy-i-metody-formirovaniya-korporativnoy-kultury-v-noveyshey-istorii-rossii/index.html">Корпоративная культура: как изменились стандарты и подходы в 2023 году в России?</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/newsweek-i-statista-opredelili-naibolee-doverennye-kompanii-mira-v-23-otraslyakh/index.html">
                            <img src="http://faros.media/upload/iblock/bde/8lqo19bpf2dw7hpha3ggfy299mskqoy1/newsweek%20%D0%A1%D0%82%D0%A0%C2%B5%D0%A0%D1%91%D0%9C%E2%80%A0%D0%A1%E2%80%9A%D0%A0%D1%91%D0%A0%D0%85%D0%A0%D1%96%20%D0%A0%D1%98%D0%A0%D1%91%D0%A1%D0%82%D0%A0%D1%95%D0%A0%D0%86%D0%A1%E2%80%B9%D0%A1%E2%80%A6%20%D0%A0%C2%B1%D0%A1%D0%82%D0%A0%C2%B5%D0%A0%D0%85%D0%A0%D2%91%D0%A0%D1%95%D0%A0%D0%86.png">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/newsweek-i-statista-opredelili-naibolee-doverennye-kompanii-mira-v-23-otraslyakh/index.html">NewsWeek опубликовал рейтинг надежных мировых компаний совместно со Statista</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/osoznannoe-potreblenie-v-rossii-tendentsii-i-vyzovy-razuma/index.html">
                            <img src="../../upload/resize_cache/webp/dev2fun_opengraph/420/a1zuu88qgf2jv375k4do0d74s6jlj8u0.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/osoznannoe-potreblenie-v-rossii-tendentsii-i-vyzovy-razuma/index.html">Разумное потребление и покупательское поведение в России с 2022 года</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/chto-takoe-benchmarking-polnyy-gid-ot-obyasneniya-do-primeneniya/index.html">
                            <img src="../../upload/dev2fun_opengraph/2ca/waxpad45lcqewxp9fniy1q9ks9ocs2da.png">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/chto-takoe-benchmarking-polnyy-gid-ot-obyasneniya-do-primeneniya/index.html">Как использовать бенчмаркинг в бизнесе: современные практики и результаты</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/etika-v-pr-kak-provodit-kampanii-chestno-i-prozrachno/index.html">
                            <img src="http://faros.media/upload/iblock/559/9pzrz2fs8m02vwgylcq875ll8ryb6b34/%D0%A1%D0%8C%D0%A1%E2%80%9A%D0%A0%D1%91%D0%A1%E2%80%A1%D0%A0%D0%85%D0%A1%E2%80%B9%D0%A0%D1%91%D0%9C%E2%80%A0%20%D0%A0%D1%97%D0%A0%D1%91%D0%A0%C2%B0%D0%A1%D0%82%20%D0%A1%D0%83%D0%A1%E2%80%9A%D0%A0%C2%B0%D0%A0%D0%85%D0%A0%D2%91%D0%A0%C2%B0%D0%A1%D0%82%D0%A1%E2%80%9A%D0%A1%E2%80%B9.png">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/etika-v-pr-kak-provodit-kampanii-chestno-i-prozrachno/index.html">Этический пиар: зачем и реально ли?</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-6                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/kak-organizovat-rezultativnyy-blog-tur-dlya-prodvizheniya-lokatsii/index.html">
                            <img src="http://faros.media/upload/resize_cache/webp/iblock/385/bb2pyg0ir7fe24xedvwxr7lu7f7ns6wl/%D0%A0%D1%94%D0%A0%C2%B0%D0%A0%D1%94%20%D0%A0%D1%95%D0%A1%D0%82%D0%A0%D1%96%D0%A0%C2%B0%D0%A0%D0%85%D0%A0%D1%91%D0%A0%C2%B7%D0%A0%D1%95%D0%A0%D0%86%D0%A0%C2%B0%D0%A1%E2%80%9A%D0%A1%D0%8A%20%D0%A0%C2%B1%D0%A0%C2%BB%D0%A0%D1%95%D0%A0%D1%96-%D0%A1%E2%80%9A%D0%A1%D1%93%D0%A1%D0%82.webp">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">МАРКЕТИНГ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/kak-organizovat-rezultativnyy-blog-tur-dlya-prodvizheniya-lokatsii/index.html">Блог-туры как инструменты продвижения туристических мест</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/tsifrovoy-sled-kak-my-teryaem-privatnost-i-chto-s-etim-delat/index.html">
                            <img src="../../upload/dev2fun_opengraph/cd8/o15z1inqmp92sud2hvb3suith0hbnr38.png">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/tsifrovoy-sled-kak-my-teryaem-privatnost-i-chto-s-etim-delat/index.html">Что такое цифровой след и с чем его едят</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
                <!--1/2 height, min width, news home block START-->
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item
                                            material-tag-8                                    ">
                    <picture class="newsMiniBlock__pic">
                        <a href="../../articles/sotsialnoe-dokazatelstvo-chto-eto-i-kak-obernut-v-svoyu-polzu/index.html">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        <div class="newsMiniBlock__cont__links">
                            <a href="index.html#" class="newsMiniBlock__cont__links__part">РЕПУТАЦИЯ</a>
                        </div>

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="../../articles/sotsialnoe-dokazatelstvo-chto-eto-i-kak-obernut-v-svoyu-polzu/index.html">Что такое социальное доказательство и как его использовать</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="index.html#" class="newsMiniBlock__cont__name _colorBlue">Екатерина Тулянкина</a>
                    </div>
                </div>
                <!--1/2 height, min width, news home block END-->
            </div>
        </div>

        <div class="vidgets">
            @include('inc.articles')
            <div class="blogBG blogBG_big"></div>
            <div class="authVidget">
                <div class="authVidget__header">
                    <p class="authVidget__header__tit">Авторы недели</p>

                    <a href="../../team/index.html" class="arrow-link">
                        <span class="arrow-link__text">Все авторы</span>
                        <img src="../../images/min/icons/yellowarrow.svg" alt="" class="arrow-link__arrow">
                    </a>
                </div>

                <div class="authVidget__body">
                    @foreach(\App\Models\Author::whereIn('id', [1,2,10])->get() as $author)
                    <div class="authVidget__body__item">
                        <picture class="authVidget__body__item__pic">
                            <a href="index.html">
                                <img src="{{$author->img}}">
                            </a>
                        </picture>

                        <div class="authVidget__body__item__data">
                            <a href="index.html"
                               class="authVidget__body__item__data__name">{{$author->name}}</a>
                            <p class="authVidget__body__item__data__post">{{$author->list_post}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>        </div>

    <!--full height, contacts home block START-->
    <div class="contacts contacts__vertical">
        <div class="contacts__data">
            <div class="grow-full"></div>

            <div class="contacts__data__logoWrap">
                <img src="../../images/min/logourl.svg" class="contacts__data__logoWrap__logo"/>
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
                    <a href="../../team/index.html" class="contacts__data__links__nav__link">Команда</a>
                    <a href="../../service/index.html" class="contacts__data__links__nav__link">Услуги</a>
                    <a href="../../case/index.html" class="contacts__data__links__nav__link">Кейсы</a>
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
    </div>
    <!--full height, contacts home block END-->
@endsection

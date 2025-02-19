@extends('layouts.team')
@section('title', $author->name)
@section('content')
    <div class="authorWrap">
        <div class="authorWrap__left">
            <ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="{{route('index')}}" title="Главная" itemprop="item">
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
                            <img src="{{$author->img}}" title="Faros Media" alt="Faros Media">
                        </picture>

                        <div class="user__data__info">
                            <h1 class="user__data__info__name">{{$author->name}}</h1>
                            <p class="user__data__info__post">{{$author->post}}</p>
                        </div>
                    </div>

                    <div class="user__soc">

                        <div class="subscribeWrap subscribe_max1000">
                            <button class="subscribe toggleSoc-js" type="button">
                                <img src="../../images/min/icons/subscribe.svg" alt="Faros media" class="subscribe__ico">
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
                            <img src="../../images/min/author/star.svg" alt="Faros media"
                                 class="indicators__item__ico">

                            <div class="indicators__item__data">
                                <p class="indicators__item__data__title">Рейтинг</p>
                                <p class="indicators__item__data__quant">{{$author->rating}}</p>
                            </div>
                        </div>
                        @endif
                        @if($author->post_count != '')
                        <div class="indicators__item">
                            <img src="../../images/min/author/micro.svg" alt="Faros media"
                                 class="indicators__item__ico">

                            <div class="indicators__item__data">
                                <p class="indicators__item__data__title">Написано</p>
                                <p class="indicators__item__data__quant">{{$author->post_count}}</p>
                            </div>
                        </div>
                        @endif
                        @if($author->smi_count != '')
                        <div class="indicators__item">
                            <img src="../../images/min/author/megaphone.svg" alt="Faros media"
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
                            <img src="../../images/min/icons/subscribe.svg" alt="Faros media" class="subscribe__ico">
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
                        <a class="horizMenu__menu__item__link" data-id="-1" onclick="goToBiografy()">
                            <img src="../../images/min/bluebook.svg" alt="Faros media" class="horizMenu__menu__item__link__ico">
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
                        <a class="horizMenu__menu__item__link" data-id="0" onclick="getArticleForAuthor({{$author->id}}, 0)">
                            ВСЕ СТАТЬИ
                        </a>
                    </li>
                    @foreach($categories as $category)
                    <li class="horizMenu__menu__item material-section" onclick="getArticleForAuthor({{$author->id}},{{$category->id}})">
                        <a class="horizMenu__menu__item__link">{{$category->name}}</a>
                    </li>
                    @endforeach
                </ul>

                <div class="selectWrap author-tags" style="display: none">
                    <button class="horizMenu__filter" type="button">
                        <span class="horizMenu__filter__text">Теги</span>
                        <span class="horizMenu__filter__quant">0</span>
                        <img src="../../images/min/icons/arroworange.svg" alt="Faros media" class="horizMenu__filter__arrow">
                    </button>

                    <select class="selectWrap__sel" id="authSel" multiple="multiple">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="horizMenu__filter horizMenu__filter_mw author-sort" style="display: none">
                    <img src="../../images/min/icons/top_bottom.svg" alt="Faros media"
                         class="horizMenu__filter__sort horizMenu__filter__sort_abs">
                    <select class="selectWrap__sel" id="sortSel">
                        <option value="popular">По популярности</option>
                        <option value="new">Новые</option>
                        <option value="old">Старые</option>
                    </select>
                    <img src="../../images/min/icons/arroworange.svg" alt="Faros media"
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

                @foreach($author->articles->take(8) as $post)
                <div class="newsMiniBlock _bgWhite author__newsMiniBlock material-item material-tag-6">
                    <picture class="newsMiniBlock__pic">
                        <a href="{{route('articles.show', $post->slug)}}">
                            <img src="{{$post->list_img}}" title="Faros Media" alt="Faros Media">
                        </a>
                    </picture>

                    <div class="newsMiniBlock__cont">
                        @if($post->category)
                        <div class="newsMiniBlock__cont__links">
                            <a href="{{route('articles.index')}}?category={{$post->category_id}}" class="newsMiniBlock__cont__links__part">{{$post->category?->name}}</a>
                        </div>
                        @endif

                        <p class="newsMiniBlock__cont__tit _colorBlack">
                            <a href="{{route('articles.show', $post->slug)}}">{{$post->list_name}}</a>
                        </p>

                        <div class="grow-full"></div>

                        <a href="{{route('team.show', $post->author?->slug)}}" class="newsMiniBlock__cont__name _colorBlue">{{$post->author?->name}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="vidgets">
            @include('inc.articles')
            <div class="blogBG blogBG_big"></div>
            <div class="authVidget">
                <div class="authVidget__header">
                    <p class="authVidget__header__tit">Авторы недели</p>

                    <a href="{{route('team.index')}}" class="arrow-link">
                        <span class="arrow-link__text">Все авторы</span>
                        <img src="../../images/min/icons/yellowarrow.svg" alt="Faros media" class="arrow-link__arrow">
                    </a>
                </div>

                <div class="authVidget__body">
                    @foreach(\App\Models\Author::whereIn('id', [1,2,10])->get() as $author)
                    <div class="authVidget__body__item">
                        <picture class="authVidget__body__item__pic">
                            <a href="{{route('team.show', $author->slug)}}">
                                <img src="{{$author->img}}" title="Faros Media" alt="Faros Media">
                            </a>
                        </picture>

                        <div class="authVidget__body__item__data">
                            <a href="{{route('team.show', $author->slug)}}"
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
                <img src="../../images/min/logourl.svg" alt="Faros Media" class="contacts__data__logoWrap__logo"/>
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
    </div>
    <!--full height, contacts home block END-->
@endsection

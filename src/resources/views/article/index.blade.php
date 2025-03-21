<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-uii">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('inc.style')
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    @include('inc.header')
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
        <!--news home menu START-->
        <div class="horizMenu _bgWhite">
            <input type="hidden" name="url" value="materials" id="url">

            <ul class="horizMenu__menu horizMenu__menu__allarticles" id="newsMenu">
                <li class="horizMenu__menu__item active material-section" data-order="0" onclick="articleCategory(0)">
                    <a class="horizMenu__menu__item__link" data-id="0">ВСЕ СТАТЬИ</a>
                </li>
                @foreach($categories as $category)
                <li class="horizMenu__menu__item material-section" onclick="articleCategory({{$category->id}})" data-order="1"
                    data-id="{{$category->id}}">
                    <a class="horizMenu__menu__item__link"
                       data-id="{{$category->id}}">{{$category->name}}</a>
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
            <div class="search">
                <input type="text" placeholder="Поиск.." name="q" id="article-search-input">
            </div>

            <div class="selectWrap">
                <button class="horizMenu__filter" type="button">
                    <span class="horizMenu__filter__text">Теги</span>
                    <span class="horizMenu__filter__quant">0</span>
                    <img src="../images/min/icons/arroworange.svg" loading="lazy" alt="Faros Media" class="horizMenu__filter__arrow">
                </button>

                <select class="selectWrap__sel articleTags" id="authSel" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>

                <button class="horizMenu__reset" id="tagreset"></button>
            </div>

            <div class="horizMenu__filter horizMenu__filter_mw">
                <img src="../images/min/icons/top_bottom.svg" loading="lazy" alt="Faros Media"
                     class="horizMenu__filter__sort horizMenu__filter__sort_abs">
                <select class="selectWrap__sel article-sort-select" id="sortSel">
                    <option value="new">Новые</option>
                    <option value="old">Старые</option>
                    <option value="popular">По популярности</option>
                </select>
                <img src="../images/min/icons/arroworange.svg" loading="lazy" alt="Faros Media"
                     class="horizMenu__filter__arrow horizMenu__filter__arrow_abs">
            </div>
        </div>
        <!--news home menu END-->

        <div class="allarticles all-articles">
            @foreach($articles as $post)
            <div class="newsMiniBlock _bgWhite allarticles__newsMiniBlock " >

                <picture class="newsMiniBlock__pic">
                    <a href="{{route('articles.show', $post->slug)}}">
                        <img src="{{$post->list_img}}" loading="lazy" alt="Faros Media" title="Faros Media">
                    </a>
                </picture>


                <div class="newsMiniBlock__cont">
                    <div class="newsMiniBlock__cont__links">
                        @if($post->category)
                            <div class="newsMiniBlock__cont__links">
                                <li class="horizMenu__menu__item" data-order="0">
                                    <a href="?category={{$post->category?->id}}"
                                       class="horizMenu__menu__item__link"
                                       data-id="8">{{$post->category?->name}}</a>
                                </li>
                            </div>
                        @endif
                    </div>

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('articles.show', $post->slug)}}">{{$post->list_name}}</a></p>
                    <div class="grow-full"></div>

                    <a href="{{route('team.show', $post->author?->slug)}}"
                       class="newsMiniBlock__cont__name _colorBlue">{{$post->author?->name}}</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="allarticlesFooter">
            <button type="button" class="allarticlesFooter__but show-more-items" onclick="loadMore()">
                <img src="../images/min/icons/reload_orange.svg" loading="lazy" class="allarticlesFooter__but__ico" alt="Faros media">
                <p class="allarticlesFooter__but__text">ЗАГРУЗИТЬ ЕЩЕ СТАТЬИ</p>
            </button>
        </div>
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
<script defer>
    let currentPage = 1;
    let lastPage = parseInt("{{$articles->lastPage()}}", 10);

    function loadMore() {
        currentPage++;

        // Создаем XMLHttpRequest для выполнения AJAX-запроса
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `/articles/page/${currentPage}`, true);

        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                // Если запрос успешен
                const response = xhr.responseText;

                // Удаляем кнопку "Показать еще", если достигнута последняя страница
                if (currentPage === lastPage) {
                    const showMoreButton = document.querySelector('.show-more-items');
                    if (showMoreButton) {
                        showMoreButton.remove();
                    }
                }

                // Убираем класс 'hidden' у элемента с id="hidden"
                const hiddenElement = document.getElementById('hidden');
                if (hiddenElement) {
                    hiddenElement.classList.remove('hidden');
                }

                // Добавляем полученный HTML в контейнер .allarticles
                const articlesContainer = document.querySelector('.allarticles');
                if (articlesContainer) {
                    articlesContainer.insertAdjacentHTML('beforeend', response);
                }
            } else {
                // Обработка ошибки
                console.error('Ошибка выполнения запроса:', xhr.statusText);
            }
        };

        xhr.onerror = function () {
            // Обработка сетевой ошибки
            console.error('Сетевая ошибка при выполнении запроса.');
        };

        xhr.send();
    }
</script>
<script src="/js/script.js" data-detail="true" defer></script>
</body>
</html>

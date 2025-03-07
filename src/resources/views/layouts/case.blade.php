<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-uii">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('inc.style')
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    @include('inc.seo')
</head>
<body class="custom">
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
    <!--news home menu START-->
    <div class="horizMenu _bgWhite cases" id="cases">
        <input type="hidden" name="url" value="cases" id="url">

        <ul class="horizMenu__menu horizMenu__menu__allarticles" id="newsMenu">
            <li class="horizMenu__menu__item active case-section" data-order="0">
                <a class="horizMenu__menu__item__link" data-id="0">ВСЕ КЕЙСЫ</a>
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
        <div class="search">
            <input type="text" placeholder="Поиск.." name="search" id="case-search-input">
        </div>

        <div class="selectWrap">
            <button class="horizMenu__filter" type="button">
                <span class="horizMenu__filter__text">Теги</span>
                <span class="horizMenu__filter__quant">0</span>
                <img src="../images/min/icons/arroworange.svg" loading="lazy" alt="Faros media" class="horizMenu__filter__arrow">
            </button>

            <select class="selectWrap__sel" id="authSel" multiple="multiple">
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>

            <button class="horizMenu__reset" id="tagreset"></button>
        </div>

        <div class="horizMenu__filter horizMenu__filter_mw">
            <img src="../images/min/icons/top_bottom.svg" loading="lazy" alt="Faros media"
                 class="horizMenu__filter__sort horizMenu__filter__sort_abs">
            <select class="selectWrap__sel caseSortSelect" id="sortSel">
                <option value="new">Новые</option>
                <option value="old">Старые</option>
                <option value="popular">По популярности</option>
            </select>
            <img src="../images/min/icons/arroworange.svg" loading="lazy" alt="Faros media"
                 class="horizMenu__filter__arrow horizMenu__filter__arrow_abs">
        </div>
    </div>
    <!--news home menu END-->
    <div class="wrapper wrapper_cases" id="wrapper">
        @yield('content')
    </div>
</div><br>
<!--PDF POPUP-->
<div class="pdf-popap" style="display: none;" id="pdfPopUp">
    <div class="pdf-popap__close"></div>
    <div class="pdf-popap__dark">
        <div class="pdf-popap__block" id="pdfPopup">
            <embed src="/" width="100%" class="pdf-popap__embed"  />
        </div>
    </div>
</div>
<script src="/js/script.js" defer></script>
</body>
</html>

<header class="header" id="header">
    <div class="header__dt">
        <a href="{{route('index')}}" class="header__logoWrap">
            <img src="/images/min/logo.svg" alt="Faros media" class="header__logoWrap__logo">
            <img src="/images/min/logourl.svg" alt="Faros media" class="header__logoWrap__logo-hover">
        </a>

        <nav class="header__menu hide-scroll">
            <a href="{{route('index')}}#form" class="header__menu__item">
                <div class="header__menu__item__icoWrap">
                    <img src="/images/min/icons/start.svg" alt="Faros media" class="header__menu__item__ico">
                </div>
                <span class="header__menu__item__name">Начать проект</span>
                <a href="{{route('service.index')}}" class="header__menu__item">
                    <div class="header__menu__item__icoWrap">
                        <img src="/images/min/icons/services.svg" alt="Faros media" class="header__menu__item__ico">
                    </div>
                    <span class="header__menu__item__name">Услуги</span>
                </a>
                <a href="{{route('case.index')}}" class="header__menu__item">
                    <div class="header__menu__item__icoWrap">
                        <img src="/images/min/icons/keyses.svg" alt="Faros media" class="header__menu__item__ico">
                    </div>
                    <span class="header__menu__item__name">Кейсы</span>
                </a>
                <a href="{{route('team.index')}}" class="header__menu__item">
                    <div class="header__menu__item__icoWrap">
                        <img src="/images/min/icons/teams.svg" alt="Faros media" class="header__menu__item__ico">
                    </div>
                    <span class="header__menu__item__name">Команда</span>
                </a>
                <a href="{{route('articles.index')}}" class="header__menu__item">
                    <div class="header__menu__item__icoWrap">
                        <img src="/images/min/icons/blogs.svg" alt="Faros media" class="header__menu__item__ico">
                    </div>
                    <span class="header__menu__item__name">Статьи</span>
                </a>
                <a href="{{route('video.index')}}" class="header__menu__item">
                    <div class="header__menu__item__icoWrap">
                        <img src="/images/min/icons/media.svg" alt="Faros media" class="header__menu__item__ico">
                    </div>
                    <span class="header__menu__item__name">Мы в эфире</span>
                </a>
                <a href="{{route('smi.index')}}" class="header__menu__item">
                    <div class="header__menu__item__icoWrap">
                        <img src="/images/min/icons/videos.svg" alt="Faros media" class="header__menu__item__ico">
                    </div>
                    <span class="header__menu__item__name">СМИ</span>
                </a>
                <a href="{{route('pay.index')}}" class="header__menu__item">
                    <div class="header__menu__item__icoWrap">
                        <img src="/images/min/icons/onlinepay.svg" alt="Faros media" class="header__menu__item__ico">
                    </div>
                    <span class="header__menu__item__name">Online-оплата</span>
                </a>
        </nav>

        <div class="header__footer">
            <div class="header__footer__wrap">
                <a href="{{route('index')}}#form">
                    <img src="/images/min/lighthouse.svg" alt="Faros media" class="header__footer__wrap__ico">
                    <span class="header__menu__item__name">Консультация</span>
                </a>
            </div>
        </div>
    </div>

    <div class="header__mb mobMenuContainer">
        <div class="burger" id="burger"></div>

        <a href="{{route('index')}}" class="header__mobLogoWrap">
            <img src="/images/min/logomob.svg" alt="Faros media" class="header__mobLogoWrap__ico">
        </a>

        <a href="{{route('index')}}#form" class="header__phoneWrap">
            <img src="/images/min/icons/phone.svg" alt="Faros media" class="header__phoneWrap__ico">
        </a>
    </div>
</header>

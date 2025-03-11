const isTouchDevice = () => 'ontouchstart' in window;
if (isTouchDevice()) {
    document.body.classList.add('touch');
}

// Проверка поддержки сенсорного ввода
const isTouch = !!("ontouchstart" in window);

// Проверка, является ли устройство macOS или iOS (но не сенсорным)
const isMacOs =
    /iPad|iPhone|iPod|MacIntel/.test(navigator.platform) && !isTouch;

// Проверка, используется ли браузер Firefox
const isFireFox = navigator.userAgent.includes("Gecko/") && !navigator.userAgent.includes("WebKit");

// Проверка, используется ли браузер Safari
const isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);

// Вычисление максимальной позиции горизонтальной прокрутки
const maxPosition = document.body.scrollWidth - document.body.clientWidth;

// Флаг для блокировки прокрутки
let blockScroll = false;

// Проверка, является ли устройство macOS или iOS
if (/iPad|iPhone|iPod|MacIntel/.test(navigator.platform)) {
    document.body.classList.add("apple");
}

// Отключение автоматического восстановления позиции прокрутки в истории браузера
if ("scrollRestoration" in history) {
    history.scrollRestoration = "manual";
}

// Проверка, используется ли браузер Opera
const isOpera = !!navigator.userAgent.match(/Opera|OPR\//);

// Проверка, используется ли браузер Chrome (но не Opera)
const isChrome = !isOpera && navigator.userAgent.indexOf("Chrome") > -1;

// Проверка, используется ли браузер Edge
const isEdge = !!navigator.userAgent.match(/Edge|Edg\//);


function reverse(e) {
    e.stopPropagation();

    // Предотвращаем стандартное поведение для определенных браузеров
    if ((isOpera && !isMacOs || isEdge || isFireFox && isMacOs) && !isTouch) {
        e.preventDefault();
    }

    // Вертикальная прокрутка -> горизонтальная
    if (Math.abs(e.deltaY) > 3 && !isTouch) {
        e.preventDefault();
        if (isOpera) {
            document.body.scrollBy(1.5 * e.deltaY, 0);
            window.scrollBy(1.5 * e.deltaY, 0);
        } else if (isSafari) {
            document.body.scrollBy(2 * e.deltaY, 0);
        } else {
            document.body.scrollBy(2 * e.deltaY, 0);
            window.scrollBy(2 * e.deltaY, 0);
        }
    }

    // Горизонтальная прокрутка
    if (Math.abs(e.deltaX) > 3) {
        const currentScroll = window.scrollX;
        const newScroll = currentScroll + 0.3 * e.deltaX;

        if (newScroll < 0 && currentScroll === 0 || newScroll > maxPosition && currentScroll === maxPosition) {
            return false;
        }

        if (newScroll < 0) {
            window.scrollTo(0, 0);
        } else if (newScroll > maxPosition) {
            window.scrollTo(maxPosition, 0);
        } else {
            window.scrollBy(0.3 * e.deltaX, 0);
        }
    }
}

let isMobile = null;
let isHorizontal = false;

function scroller() {
    const isMobileNow = window.innerWidth <= 768 || window.innerWidth <= window.innerHeight;

    if (isMobile !== isMobileNow) {
        if (isMobileNow) {
            // Мобильное устройство
            if (isMobile !== null) {
                document.body.classList.remove("horizontal");
                document.documentElement.style.overflow = "visible";
                if (isHorizontal) {
                    isHorizontal = false;
                    document.body.removeEventListener("wheel", reverse);
                }
            }
        } else {
            const currentScript = document.currentScript;
            const isDetail = currentScript?.getAttribute('data-detail');
            if(!isDetail) {
                document.body.classList.add("horizontal");
                document.documentElement.style.overflow = "hidden";
                if (!isHorizontal) {
                    isHorizontal = true;
                    document.body.addEventListener("wheel", reverse, {passive: false});
                }
            }
        }

        if (isMobile === null) {
            window.addEventListener("resize", scroller);
        }

        isMobile = isMobileNow;
    }
}

const resizeHandlerForBlock = () => {
    // Проверяем, есть ли класс 'horizontal' у body
    const isHorizontal = document.body.classList.contains('horizontal');

    // Находим элементы
    const hiddenDiv = document.getElementById('hidden');
    const wrapperDiv = document.getElementById('wrapper');
    const header = document.getElementById('header');
    const stickies = document.querySelectorAll('.sticker');
    const menuWrap = document.querySelector('#menu .mobilemenu__wrapMenu__menu');

    // Сбрасываем стили
    hiddenDiv.style.width = '';
    hiddenDiv.style.height = '';
    header.style.height = '';
    header.style.transform = '';
    if (menuWrap) menuWrap.style.transform = '';

    // Получаем ширину и высоту окна
    const w = window.innerWidth;
    const h = window.innerHeight;

    // Получаем размеры hiddenDiv
    const hiddenDivW = hiddenDiv.offsetWidth;
    const hiddenDivH = hiddenDiv.offsetHeight;

    // Вычисляем коэффициент масштабирования
    const trans = isHorizontal
        ? h / 1080
        : w > 428
            ? w > 768 && w > h
                ? w / 1920
                : w / 768
            : w / 428;

    // Применяем стили в зависимости от ориентации
    if (isHorizontal) {
        wrapperDiv.style.transform = `scale(${trans})`;
        header.style.transform = `scale(${trans})`;
        hiddenDiv.style.width = `${trans * hiddenDivW}px`;
    } else {
        wrapperDiv.style.transform = `scale(${trans})`;

        if (w > 768 && w > h) {
            header.style.height = `${h / trans}px`;
            header.style.transform = `scale(${trans})`;
        } else {
            const transMenu = isHorizontal
                ? h / 1080
                : w > 428
                    ? w > 768 && !document.body.classList.contains('custom')
                        ? w / 1920
                        : w / 798
                    : w / 465;

            if (menuWrap) menuWrap.style.transform = `scale(${transMenu})`;
        }

        hiddenDiv.style.height = `${trans * hiddenDivH}px`;
    }

    // Обработка sticky-элементов
    if (stickies.length) {
        stickies.forEach((element, idx) => {
            const id = `sticky${idx}`;
            const copyEl = document.getElementById(id);

            // Получаем размеры и позицию элемента
            const rect = element.getBoundingClientRect();
            const top = rect.top + window.pageYOffset;
            const left = rect.left + window.pageXOffset;
            const width = rect.width;
            const height = rect.height;

            if (copyEl) {
                const cloneElem = document.getElementById(`stickyElem${idx}`);
                const overflowElem = document.getElementById(`stickyOverflowElem${idx}`);

                // Обновляем стили существующих элементов
                cloneElem.style.cssText = `width:${width / trans}px;height:${height / trans}px;transform-origin:top left;transform:scale(${trans})`;
                overflowElem.style.cssText = `width:${width}px;height:${height}px;`;
                copyEl.style.cssText = `width:${width}px;height:${height}px;position:absolute;z-index:3;top:0;left:${left}px;margin-top:${top}px;`;
            } else {
                // Создаем клон элемента
                const cloneElem = element.cloneNode(true);
                cloneElem.style.cssText = `width:${width / trans}px;height:${height / trans}px;transform-origin:top left;transform:scale(${trans})`;
                cloneElem.id = `stickyElem${idx}`;
                cloneElem.classList.add('no-opacity');
                cloneElem.classList.remove('sticker');

                // Создаем контейнер для клона
                const overflowElem = document.createElement('div');
                overflowElem.classList.add('stickyOverflowElem');
                overflowElem.id = `stickyOverflowElem${idx}`;
                overflowElem.style.cssText = `width:${width}px;height:${height}px;`;
                overflowElem.appendChild(cloneElem);

                // Создаем обертку для sticky-элемента
                const elem = document.createElement('div');
                elem.id = id;
                elem.style.cssText = `width:${width}px;height:${height}px;position:absolute;z-index:3;top:0;left:${left}px;margin-top:${top}px;`;
                elem.appendChild(overflowElem);

                // Добавляем элемент в DOM
                document.body.appendChild(elem);

                // Инициализируем Sticky
                // new Sticky(`#${overflowElem.id}`);
                overflowElem.classList.add('sticky-container');
                cloneElem.classList.add('css-sticky');
            }
        });

        document.querySelectorAll('.css-sticky').forEach(sticky => {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    entry.target.classList.toggle('stuck', entry.intersectionRatio < 1);
                });
            }, { threshold: [1] });

            observer.observe(sticky);
        });
    }
};

const scrollHeader = () => {
    const offset = isTouchDevice ? 302 : 132;

    // Получаем текущую позицию горизонтальной прокрутки
    const scrollLeft = window.scrollX || document.documentElement.scrollLeft;

    // Находим элемент заголовка
    const header = document.getElementById('header');

    if (scrollLeft > offset) {
        // Добавляем класс 'slim', если его нет
        if (!header.classList.contains('slim')) {
            header.classList.add('slim');
        }
    } else {
        // Удаляем класс 'slim', если он есть
        if (header.classList.contains('slim')) {
            header.classList.remove('slim');
        }
    }
};
////
const currentScript = document.currentScript;
const isDetail = currentScript?.getAttribute('data-detail');
document.addEventListener('DOMContentLoaded', function () {
    document.documentElement.style.overflow = "visible";
    // Инициализация
    if(isDetail != 'true') {
        scroller();
    }
    addedListeners();

    function loadScript(src) {
        return new Promise((resolve, reject) => {
            const script = document.createElement('script');
            script.src = src;
            script.onload = resolve; // Скрипт успешно загружен
            script.onerror = reject; // Ошибка при загрузке
            document.body.appendChild(script); // Добавляем скрипт в DOM
        });
    }

    const responseMenu = () => {
        $('ul.horizMenu__menu li.dd_menu ul.dropdown-menu li.horizMenu__menu__item').appendTo('ul.horizMenu__menu');
        let items = $('ul.horizMenu__menu').find('li.horizMenu__menu__item.active');
        let dataOrder = 0;
        let wW = $(window).width();

        while($('li').is('[data-order=' + String(dataOrder) + ']')){
            if(!$('[data-order=' + String(dataOrder) + ']').hasClass('active')){
                items = items.add($('[data-order=' + String(dataOrder) + ']'));
            }

            dataOrder = dataOrder + 1;
        }

        let max_width = $('ul.horizMenu__menu').width() - $('ul.horizMenu__menu li.dd_menu').outerWidth();
        let width = 0;
        let hide_from = 0;

        $(items).css({'width':'auto'});

        items.each(function(index){
            if (width + $(this).outerWidth() > max_width)
            {
                return false;
            }
            else
            {
                hide_from = index;
                width += $(this).outerWidth();
            }
        });

        $('ul.horizMenu__menu li.dd_menu').hide();

        if(wW > 500 || !isTouch) $('.horizMenu_hide-scroll').removeClass('horizMenu_hide-scroll');
        else $('.horizMenu').addClass('horizMenu_hide-scroll');

        if (hide_from < items.length - 1 && (wW > 500 || !isTouch)) {
            items.eq(hide_from).nextAll('li.horizMenu__menu__item').appendTo('ul.dropdown-menu');
            // items.css({'width':(max_width / (hide_from + 1)) + 'px'});
            $('ul.horizMenu__menu li.dd_menu').show();
        }
        else
        {
            $('ul.horizMenu__menu li.dd_menu').hide();
        }
    }

    // Загружаем скрипты через 3 секунды
    setTimeout(() => {
        if (document.querySelector('div#map')) {
            loadScript('/js/yandex.js')
                .then(() => console.log('yandex.js загружен'))
                .catch((error) => console.error('Ошибка загрузки yandex.js:', error));
        }

        loadScript('/js/sliders.js')
            .then(() => console.log('sliders.js загружен'))
            .catch((error) => console.error('Ошибка загрузки sliders.js:', error));

        loadScript('/js/paralax.js')
            .then(() => console.log('paralax.js загружен'))
            .catch((error) => console.error('Ошибка загрузки paralax.js:', error));
    }, 3000); // Задержка в 3 секунды

    // Проверка наличия элемента #newsMenu
    const newsMenu = document.querySelector('ul#newsMenu');
    if (newsMenu) {
        // Обработчик клика по .dropdown-toggle
        newsMenu.addEventListener('click', (event) => {
            if (event.target.matches('.dropdown-toggle')) {
                const dropdownMenu = event.target.closest('.dropdown').querySelector('.dropdown-menu');
                dropdownMenu.style.display = dropdownMenu.style.display === 'none' ? 'block' : 'none';
            }
        });

        // Обработчик клика по .horizMenu__menu__item
        newsMenu.addEventListener('click', (event) => {
            if (event.target.matches('.horizMenu__menu__item')) {
                document.querySelectorAll('#newsMenu .horizMenu__menu__item').forEach((item) => {
                    item.classList.remove('active');
                });
                event.target.classList.add('active');
                responseMenu();
            }
        });

        // Обработчик изменения размера окна
        window.addEventListener('resize', responseMenu);

        // Инициализация через 1 секунду
        setTimeout(() => {
            window.dispatchEvent(new Event('resize'));
        }, 1000);
    }
    // Проверка наличия элемента #contentButton
    const contentButton = document.querySelector('div#contentButton');
    if (contentButton) {
        contentButton.addEventListener('click', () => {
            contentButton.classList.toggle('open');
            document.querySelector('#content').classList.toggle('open');
        });
    }

    // Проверка наличия элементов #toggleSoc или .toggleSoc-js
    const toggleSocButtons = document.querySelectorAll('#toggleSoc, .toggleSoc-js');
    if (toggleSocButtons.length > 0) {
        toggleSocButtons.forEach((button) => {
            button.addEventListener('click', () => {
                button.classList.toggle('open');
                button.nextElementSibling.classList.toggle('open');
            });
        });
    }

    // Проверка наличия элемента #popapClase
    const popapClase = document.querySelector('img#popapClase');
    if (popapClase) {
        // Добавляем обработчик клика
        popapClase.addEventListener('click', function () {
            // Находим ближайший родительский элемент с классом .dark-popap
            const darkPopap = this.closest('.dark-popap');
            if (darkPopap) {
                // Плавно скрываем элемент, используя CSS transition
                darkPopap.style.transition = 'opacity 0.5s';
                darkPopap.style.opacity = '0';

                // Удаляем элемент из DOM после завершения анимации
                setTimeout(() => {
                    darkPopap.style.display = 'none';
                }, 500);
            }
        });
    }

    // Вызываем функцию resizeHandlerForBlock при загрузке страницы
    resizeHandlerForBlock();
    window.addEventListener('resize', resizeHandlerForBlock);


    // Вызываем функцию scrollHeader при загрузке страницы
    scrollHeader();

    // Добавляем обработчики событий 'scroll' и 'resize'
    window.addEventListener('scroll', scrollHeader);
    window.addEventListener('resize', scrollHeader);
});

// Клик по мобильному меню
const addedListeners = () => {
    // const divs = document.querySelectorAll('div');
    // const selects = document.querySelectorAll('select');
    const header = document.getElementById('header');
    const menu = document.getElementById('menu');
    // const parallax = document.querySelectorAll('.parallax');

    if (document.querySelector('div#burger')) {
        document.getElementById('burger').addEventListener('click', () => {
            document.body.classList.toggle('no-scroll');
            header.classList.toggle('open');
            menu.classList.toggle('open');
        });

        window.addEventListener('resize', () => {
            document.body.classList.remove('no-scroll');
            header.classList.remove('open');
            menu.classList.remove('open');
        });
    }
};

// Правильное отображение на детальных страницах
function detailPageView(){
    const isMobileNow = window.innerWidth <= 768 || window.innerWidth <= window.innerHeight;
    if (!isMobileNow) {
        // Получаем ссылки на необходимые элементы
        const htmlElement = document.documentElement;
        const hiddenElement = document.querySelector('.hidden');
        const bodyElement = document.body;
        htmlElement.style.overflow = 'visible';
        alert(htmlElement.style.overflow)
        if (hiddenElement) {
            hiddenElement.style.overflow = 'auto';
        }
        if (bodyElement.classList.contains('horizontal')) {
            bodyElement.classList.remove('horizontal');
        }
    }
}

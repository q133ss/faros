function includeScripts() {
    return new Promise((resolve, reject) => {
        // Проверяем и добавляем CSS для Slick Carousel
        if (!document.querySelector('link[href="/css/slick-theme.min.css"]')) {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = '/css/slick-theme.min.css';
            document.head.appendChild(link);
        }

        // Функция для загрузки скрипта
        function loadScript(src) {
            return new Promise((resolve, reject) => {
                if (document.querySelector(`script[src="${src}"]`)) {
                    resolve(); // Если скрипт уже загружен, сразу разрешаем промис
                    return;
                }

                const script = document.createElement('script');
                script.src = src;
                script.type = 'text/javascript';

                script.onload = () => resolve();
                script.onerror = () => reject(new Error(`Ошибка загрузки скрипта: ${src}`));

                document.body.appendChild(script);
            });
        }

        // Загружаем jQuery
        loadScript('/js/jquery-3.7.1.slim.min.js')
            .then(() => {
                // После успешной загрузки jQuery загружаем Slick Carousel
                return loadScript('/js/slick.min.js');
            })
            .then(() => {
                console.log('Все скрипты успешно загружены');
                resolve();
            })
            .catch((error) => {
                console.error(error);
                reject(error);
            });
    });
}

function fullWithCommentSlider(){
    $('#fullHeightMinWidthComentsSlider').slick({
        dots: false,
        arrows: true,
        fade: true,
        draggable: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        touchMove: false,
        swipe: false,
        autoplay: true,
        autoplaySpeed: 7000,
        prevArrow: `<button type="button" class="slick-prev">
                        <svg class="slick-prev__arrow" viewBox="0 0 12 19">
                            <path d="M11.127 16.082L4.301 9.256l6.826-6.826L9.015.333.092 9.256l8.923 8.923 2.112-2.097z" fill="#1A1A1A"/>
                        </svg>
                    </button>`,
        nextArrow: `<button type="button" class="slick-next">
                    <svg class="slick-next__arrow" viewbox="0 0 200 200">
                    <circle r="80" cx="100" cy="100"
                            fill="none" stroke-width="3"
                            stroke="#c9d1d8"
                            stroke-dasharray="502,4 502,4"
                            stroke-linecap="round">
                    </circle>
                    <circle r="80" cx="100" cy="100"
                            class="slick-next__arrow__circle slick-next__arrow__circle_trans"
                            fill="none" stroke-width="3"
                            stroke="#FECE2F"  stroke-dashoffset="0"
                            stroke-dasharray="0 500"
                            transform="rotate(0 0 90)"
                            stroke-linecap="round">
                    </circle>
                    <path d="M82.1,73.4l23.4,23.4l-23.4,23.4l7.3,7.2L120,96.9L89.4,66.2L82.1,73.4z" fill="#1A1A1A"/>
                </svg>
                </button>`,
    });

    $('#fullHeightMinWidthComentsSlider .slick-next__arrow__circle').attr('stroke-dasharray', "500, 500");
    $('#fullHeightMinWidthComentsSlider').slick('slickNext');

    $('#fullHeightMinWidthComentsSlider').on('beforeChange', function () {
        $('#fullHeightMinWidthComentsSlider .slick-next__arrow__circle').removeClass('slick-next__arrow__circle_trans');
        $('#fullHeightMinWidthComentsSlider .slick-next__arrow__circle').attr('stroke-dasharray', "0, 500");
    });

    $('#fullHeightMinWidthComentsSlider').on('afterChange', function () {
        $('#fullHeightMinWidthComentsSlider .slick-next__arrow__circle').addClass('slick-next__arrow__circle_trans');
        $('#fullHeightMinWidthComentsSlider .slick-next__arrow__circle').attr('stroke-dasharray', "500, 500");
    });
}

if (document.querySelector('div#fullHeightMinWidthComentsSlider')) {
    // Вызываем includeScripts(), который возвращает Promise
    includeScripts()
        .then(() => {
            // После успешной загрузки всех скриптов вызываем функцию fullWithCommentSlider()
            fullWithCommentSlider();
        })
        .catch((error) => {
            // Обрабатываем возможные ошибки загрузки скриптов
            console.error('Ошибка загрузки скриптов:', error);
        });
}

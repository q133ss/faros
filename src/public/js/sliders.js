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
                const script = document.createElement('script');
                script.src = src;
                script.onload = resolve; // Скрипт успешно загружен
                script.onerror = reject; // Ошибка при загрузке
                document.body.appendChild(script); // Добавляем скрипт в DOM
            });
        }

        // Загружаем jQuery
        loadScript('/js/jquery-3.7.1.slim.min.js')
            .then(() => {
                // После успешной загрузки jQuery загружаем Slick Carousel
                return loadScript('/js/slick.min.js');
            })
            .then(() => {
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

function fullHeightBigWidthSlider(){
    $('#fullHeightBigWidthSlider').slick({
        dots: false,
        arrows: true,
        fade: true,
        draggable: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        touchMove: false,
        swipe: false,
        autoplay: true,
        focusOnSelect: false,
        focusOnChange: false,
        accessibility: false,
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
}

function simpleSlider(){
    $('#simpleSlider').slick({
        dots: false,
        arrows: true,
        autoplay: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: `<button type="button" class="slick-prev">
                    <svg class="slick-prev__arrowSimple" viewBox="0 0 12 19">
                        <path d="M11.127 16.082L4.301 9.256l6.826-6.826L9.015.333.092 9.256l8.923 8.923 2.112-2.097z" fill="#1A1A1A"/>
                    </svg>
                </button>`,
        nextArrow: `<button type="button" class="slick-next">
                    <svg class="slick-next__arrowSimple" viewbox="0 0 200 200">
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
        responsive: [
            {
                breakpoint: 500,
                settings: {slidesToShow: 1},
            }
        ]
    });
}

function blogSlider(){
    $('#blogSlider').slick({
        dots: false,
        arrows: true,
        autoplay: false,
        fade: true,
        prevArrow: `<button type="button" class="slick-prev">
                    <svg class="slick-prev__arrowSimple" viewBox="0 0 12 19">
                        <path d="M11.127 16.082L4.301 9.256l6.826-6.826L9.015.333.092 9.256l8.923 8.923 2.112-2.097z" fill="#1A1A1A"/>
                    </svg>
                </button>`,
        nextArrow: `<button type="button" class="slick-next">
                    <svg class="slick-next__arrowSimple" viewBox="0 0 12 19">
                        <path d="M11.127 16.082L4.301 9.256l6.826-6.826L9.015.333.092 9.256l8.923 8.923 2.112-2.097z" fill="#1A1A1A"/>
                    </svg>
                </button>`,
    });
}

function ormAdvantage(){
    let isSlickOrmAdvantage = false; // Флаг для отслеживания состояния инициализации слайдера

    const slickOrmAdvantageControl = () => {
        if (window.innerWidth <= 768) {
            if (!isSlickOrmAdvantage) {
                isSlickOrmAdvantage = true;
                $('#ormAdvantage').slick({
                    dots: false,
                    arrows: false,
                    autoplay: false,
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 428,
                            slidesToShow: 1,
                        }
                    ]
                });
            }
        } else {
            if (isSlickOrmAdvantage){
                isSlickOrmAdvantage = false;
                $('#ormAdvantage').slick('unslick');
            }
        }
    };

    slickOrmAdvantageControl();

    $(window).on('resize', slickOrmAdvantageControl);
}

function ormWork(){
    let isSlickOrmWork = false; // Флаг для отслеживания состояния инициализации слайдера
    const slickOrmWorkControl = () => {
        if (window.innerWidth <= 428) {
            if (!isSlickOrmWork) {
                isSlickOrmWork = true;
                $('#ormWork').slick({
                    dots: false,
                    arrows: false,
                    autoplay: false,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                });
            }
        } else {
            if (isSlickOrmWork){
                isSlickOrmWork = false;
                $('#ormWork').slick('unslick');
            }
        }
    };

    slickOrmWorkControl();

    $(window).on('resize', slickOrmWorkControl);
}

function ormWe(){
    let isSlickOrmWe = false; // Флаг для отслеживания состояния инициализации слайдера

    const slickOrmWeControl = () => {
        if (window.innerWidth <= 428) {
            if (!isSlickOrmWe) {
                isSlickOrmWe = true;
                $('#ormWe').slick({
                    dots: false,
                    arrows: false,
                    autoplay: false,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                });
            }
        } else {
            if (isSlickOrmWe){
                isSlickOrmWe = false;
                $('#ormWe').slick('unslick');
            }
        }
    };

    slickOrmWeControl();

    $(window).on('resize', slickOrmWeControl);
}

function ormTarif(){
    const slickOrmTarifControl = () => {
        if (window.innerWidth <= 428) {
            if (!isSlickOrmTarif) {
                isSlickOrmTarif = true;
                $('#ormTarif').slick({
                    dots: false,
                    arrows: false,
                    autoplay: false,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                });
            }
        } else {
            if (isSlickOrmTarif){
                isSlickOrmTarif = false;
                $('#ormTarif').slick('unslick');
            }
        }
    };

    slickOrmTarifControl();

    $(window).on('resize', slickOrmTarifControl);
}

function practicSlider(){
    $('#practicSlider').slick({
        dots: false,
        arrows: true,
        autoplay: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: `<button type="button" class="slick-prev">
                    <svg class="slick-prev__arrowSimple" viewBox="0 0 12 19">
                        <path d="M11.127 16.082L4.301 9.256l6.826-6.826L9.015.333.092 9.256l8.923 8.923 2.112-2.097z" fill="#1A1A1A"/>
                    </svg>
                </button>`,
        nextArrow: `<button type="button" class="slick-next">
                    <svg class="slick-next__arrowSimple" viewbox="0 0 200 200">
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
        responsive: [
            {
                breakpoint: 428,
                settings: {slidesToShow: 1},
            }
        ]
    });
}

function scrolltotop(){
    $('#scrolltotop').on('click', () => {
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
}

function slider(){
    $('.slider').slick('slickPrev');
}

// Функция для обработки логики загрузки скриптов и вызова соответствующей функции
function initializeSlider(selector, callback) {
    const element = document.querySelector(selector);
    if (element) {
        includeScripts()
            .then(() => {
                // Вызываем переданную функцию после успешной загрузки скриптов
                callback();
            })
            .catch((error) => {
                console.error('Ошибка загрузки скриптов:', error);
            });
    }
}

// Инициализация слайдеров
initializeSlider('div#fullHeightMinWidthComentsSlider', fullWithCommentSlider);
initializeSlider('div#fullHeightBigWidthSlider', fullHeightBigWidthSlider);
initializeSlider('div#simpleSlider', simpleSlider);
initializeSlider('div#blogSlider', blogSlider);
initializeSlider('div#ormAdvantage', ormAdvantage);
initializeSlider('div#ormWork', ormWork);
initializeSlider('div#ormWe', ormWe);
initializeSlider('div#ormTarif', ormTarif);
initializeSlider('div#practicSlider', practicSlider);
initializeSlider('button#scrolltotop', scrolltotop);
initializeSlider('.slider', slider);

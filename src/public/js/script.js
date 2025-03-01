const isTouchDevice = () => 'ontouchstart' in window;
if (isTouchDevice()) {
    document.body.classList.add('touch');
}
let readyYamps = false;
document.addEventListener('DOMContentLoaded', function () {
    if (!isTouchDevice()) {
        document.body.classList.add('horizontal');

        let scrollPosition = 0;
        let targetScrollPosition = 0;
        let isScrolling = false;

        document.addEventListener('wheel', function (event) {
            event.preventDefault();

            targetScrollPosition += event.deltaY * 5;

            if (!isScrolling) {
                isScrolling = true;
                smoothScroll();
            }
        });

        function smoothScroll() {
            if (isScrolling) {
                scrollPosition += (targetScrollPosition - scrollPosition) * 0.1;
                document.body.scrollLeft = scrollPosition;

                if (Math.abs(targetScrollPosition - scrollPosition) < 0.5) {
                    scrollPosition = targetScrollPosition;
                    isScrolling = false;
                } else {
                    requestAnimationFrame(smoothScroll);
                }
            }
        }
    }

    addedListeners();

    // Проверка на YandexMaps
    if (document.querySelector('div#map')) {
        ymaps.ready(function () {
            readyYamps = true;
            init();
        });
    }

    // Yandex Maps
    if (document.querySelector('div#map')) {
        if (readyYamps) {
            init();
        } else {
            ymaps.ready(init);
        }
    }
});

// Инициализация YandexMaps
function init() {
    if (document.querySelector('#map')) {
        let coordinatesText = document.querySelector('#coordinates').textContent;
        let coordinates = coordinatesText.split(',').map(Number);

        var myMap = new ymaps.Map('map', {
                center: coordinates,
                zoom: 9,
                controls: []
            }, { suppressMapOpenBlock: true }),

            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            ),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: '',
                balloonContent: ''
            }, {
                iconLayout: 'default#image',
                iconImageHref: '/images/logo.svg',
                iconImageSize: [30, 42],
                iconImageOffset: [-5, -38]
            });

        myMap.geoObjects.add(myPlacemark);
    }
}

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

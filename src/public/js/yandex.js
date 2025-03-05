// // Инициализация YandexMaps
// function init() {
//     if (document.querySelector('#map')) {
//         let coordinatesText = document.querySelector('#coordinates').textContent;
//         let coordinates = coordinatesText.split(',').map(Number);
//
//         var myMap = new ymaps.Map('map', {
//                 center: coordinates,
//                 zoom: 9,
//                 controls: []
//             }, { suppressMapOpenBlock: true }),
//
//             MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
//                 '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
//             ),
//
//             myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
//                 hintContent: '',
//                 balloonContent: ''
//             }, {
//                 iconLayout: 'default#image',
//                 iconImageHref: '/images/logo.svg',
//                 iconImageSize: [30, 42],
//                 iconImageOffset: [-5, -38]
//             });
//
//         myMap.geoObjects.add(myPlacemark);
//     }
// }
//
//
// let readyYamps = false;
// // Yandex Maps
// document.addEventListener('DOMContentLoaded', function () {
//     if (document.querySelector('div#map')) {
//         if (readyYamps) {
//             init();
//         } else {
//             ymaps.ready(init);
//         }
//     }
// });

let ymapsLoaded = false;

// Функция для динамической загрузки Yandex Maps API
function loadYandexMapsAPI() {
    return new Promise((resolve, reject) => {
        // Проверяем, уже загружен ли скрипт
        if (window.ymaps) {
            resolve(); // Если загружен, сразу разрешаем промис
            return;
        }

        // Создаем новый тег <script>
        const script = document.createElement('script');
        script.src = '//api-maps.yandex.ru/2.1/?load=package.standard&lang=ru_RU';
        script.type = 'text/javascript';
        script.defer = true;

        // Обрабатываем успешную загрузку
        script.onload = () => {
            ymapsLoaded = true; // Устанавливаем флаг загрузки
            resolve(); // Разрешаем промис
        };

        // Обрабатываем ошибки загрузки
        script.onerror = () => {
            reject(new Error('Ошибка загрузки Yandex Maps API'));
        };

        // Добавляем скрипт в документ
        document.body.appendChild(script);
    });
}

// Инициализация Yandex Maps
function init() {
    if (document.querySelector('#map')) {
        let coordinatesText = document.querySelector('#coordinates').textContent;
        let coordinates = coordinatesText.split(',').map(Number);

        ymaps.ready(function () {
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
        });
    }
}

// Загрузка карты при готовности DOM
document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('div#map')) {
        if (ymapsLoaded) {
            // Если API уже загружено, инициализируем карту
            init();
        } else {
            // Если API не загружено, подгружаем его и инициализируем карту
            loadYandexMapsAPI()
                .then(() => ymaps.ready(init))
                .catch((error) => console.error('Ошибка загрузки Yandex Maps API:', error));
        }
    }
});

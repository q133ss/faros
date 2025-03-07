// Функция для динамической загрузки скрипта
function loadScript(src) {
    return new Promise((resolve, reject) => {
        const script = document.createElement('script');
        script.src = src;
        script.onload = () => resolve();
        script.onerror = () => reject(new Error(`Не удалось загрузить скрипт: ${src}`));
        document.head.appendChild(script);
    });
}

// Находим все элементы с классом parallax
const parallaxElements = document.querySelectorAll('.parallax');

if (parallaxElements.length > 0) {
    // Если элементы найдены, загружаем библиотеку Parallax.js
    loadScript('/js/parallax.min.js')
        .then(() => {
            // После загрузки библиотеки инициализируем параллакс для каждого элемента
            parallaxElements.forEach((element) => {
                new Parallax(element, {
                    relativeInput: true,
                    clipRelativeInput: true,
                    hoverOnly: true,
                    limitY: element.closest('.addY') ? false : 0,
                    limitX: element.closest('.noX') ? 0 : false,
                    inputElement: element.closest('.scene'),
                });
            });
        })
        .catch((error) => {
            console.error(error);
        });
}

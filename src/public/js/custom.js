// Маска для телефона
if (document.querySelectorAll('.phone_mask').length > 0) {
    document.querySelectorAll('.phone_mask').forEach(input => {
        input.addEventListener('input', function () {
            // Удаляем все нецифровые символы
            let value = this.value.replace(/\D/g, '');

            // Если ввод начинается с "8", заменяем его на "7" (для международного формата)
            if (value.startsWith('8')) {
                value = '7' + value.slice(1);
            }

            // Ограничиваем длину номера до 11 цифр (включая код страны)
            if (value.length > 11) {
                value = value.slice(0, 11);
            }

            // Форматируем номер в виде +7 (XXX) XXX-XX-XX
            let formattedValue = '';
            if (value.length >= 1) {
                formattedValue = '+7';
            }
            if (value.length >= 2) {
                formattedValue += ' (' + value.slice(1, 4);
            }
            if (value.length >= 5) {
                formattedValue += ') ' + value.slice(4, 7);
            }
            if (value.length >= 8) {
                formattedValue += '-' + value.slice(7, 9);
            }
            if (value.length >= 10) {
                formattedValue += '-' + value.slice(9, 11);
            }

            // Обновляем значение поля ввода
            this.value = formattedValue;
        });
    });
}

// Обработка отправки формы orderservice_form
document.querySelector('form#orderservice_form')?.addEventListener('submit', function (e) {
    e.preventDefault();
    const form = this;
    fetch('/form/service', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: new FormData(form)
    })
        .then(response => response.json())
        .then(() => {
            form.innerHTML = '<h3>Ваша заявка отправлена, спасибо!</h3>';
        });
});

// Обработка отправки формы audit_form
document.querySelector('form#audit_form')?.addEventListener('submit', function (e) {
    e.preventDefault();
    const form = this;
    fetch('/form/service', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: new FormData(form)
    })
        .then(response => response.json())
        .then(() => {
            form.innerHTML = '<h3>Ваша заявка отправлена, спасибо!</h3>';
        });
});

// Функция показа блока "О себе"
function goToBiografy() {
    document.querySelector('.about').style.display = 'block';
    document.querySelector('.all-articles').style.display = 'none';
}

// Получение статей автора
function getArticleForAuthor(author_id, category_id) {
    fetch(`/filters/author/${author_id}/${category_id}/?author_id=${author_id}&category=${category_id}&sort=${case_sort}`, {
        method: 'GET',
        headers: { 'Content-Type': 'application/json' },
    })
        .then(response => response.text())
        .then(response => {
            console.log(response)
            document.querySelector('.about').style.display = 'none';
            document.querySelector('.all-articles').style.display = 'block';
            document.querySelector('.all-articles').innerHTML = response;
        })
        .catch(error => console.error('Ошибка выполнения запроса:', error));
}

// Поле сортировки для кейсов
let case_sort = 'new';
document.querySelector('.caseSortSelect')?.addEventListener('change', function () {
    case_sort = this.value;
    caseSearch();
    tagsFilter();
});

// Поиск в кейсах с задержкой
const delay = (() => {
    let timer = 0;
    return (callback, ms) => {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();

document.querySelector('#case-search-input')?.addEventListener('input', function () {
    caseSearch();
});

function caseSearch() {
    const input = document.querySelector('#case-search-input');
    delay(() => {
        const query = input.value;
        fetch('/filters/case', {
            method: 'GET',
            headers: { 'Content-Type': 'application/json' },
            params: { search: query, sort: case_sort }
        })
            .then(response => response.text())
            .then(response => {
                document.querySelector('.other-cases')?.remove();
                document.querySelector('.homeMiniBlocks_allcases').innerHTML = response;
            })
            .catch(error => console.error('Ошибка выполнения запроса:', error));
    }, 500); // Задержка в 500 миллисекунд
}

// Обработчик для выбора тегов
document.getElementById('authSel')?.addEventListener('change', function () {
    tagsFilter();
});

function tagsFilter() {
    const authSel = document.getElementById('authSel');
    const selectedTags = Array.from(authSel.selectedOptions).map(option => option.value);

    // Обновляем количество выбранных тегов
    const count = selectedTags.length;
    document.querySelector('.horizMenu__filter__quant').textContent = count;

    // Отправляем AJAX-запрос с выбранными тегами
    if (selectedTags.length > 0) {
        fetch('/filters/case', {
            method: 'GET',
            headers: { 'Content-Type': 'application/json' },
            params: { tags: selectedTags.join(',') }
        })
            .then(response => response.text())
            .then(response => {
                document.querySelector('.other-cases')?.remove();
                document.querySelector('.homeMiniBlocks_allcases').innerHTML = response;
            })
            .catch(error => console.error('Ошибка выполнения запроса:', error));
    } else {
        console.log('Нет выбранных тегов');
    }
}

// Обработчик для кнопки сброса
document.getElementById('tagreset')?.addEventListener('click', function () {
    const authSel = document.getElementById('authSel');
    authSel.selectedIndex = -1; // Сбрасываем выбранные значения
    authSel.dispatchEvent(new Event('change')); // Триггерим событие change
    document.querySelector('.horizMenu__filter__quant').textContent = '0';
    document.getElementById('case-search-input').value = '';

    fetch('/filters/case/reset', {
        method: 'GET'
    })
        .then(response => response.text())
        .then(response => {
            document.querySelector('.wrapper_cases').innerHTML = response;
        })
        .catch(error => console.error('Ошибка выполнения запроса:', error));
});

// Поле сортировки для статей
let article_sort = 'new';
document.querySelector('.article-sort-select')?.addEventListener('change', function () {
    article_sort = this.value;
    articleCaseSearch();
    articleTagsFilter();
});

// Поиск в статьях
document.getElementById('article-search-input')?.addEventListener('input', function () {
    articleCaseSearch();
});

function articleCaseSearch() {
    const input = document.getElementById('article-search-input');
    delay(() => {
        const query = input.value;
        fetch('/filters/articles?search='+query+'&sort='+article_sort, {
            method: 'GET',
            headers: { 'Content-Type': 'application/json' }
        })
            .then(response => response.text())
            .then(response => {
                document.querySelector('.show-more-items')?.remove();
                document.querySelector('.allarticles').innerHTML = response;
            })
            .catch(error => console.error('Ошибка выполнения запроса:', error));
    }, 500); // Задержка в 500 миллисекунд
}

// Обработчик для выбора тегов в статьях
document.querySelector('.articleTags')?.addEventListener('change', function () {
    articleTagsFilter();
});

function articleTagsFilter() {
    const articleTags = document.querySelector('.articleTags');
    const selectedTags = Array.from(articleTags.selectedOptions).map(option => option.value);

    // Обновляем количество выбранных тегов
    const count = selectedTags.length;
    document.querySelector('.horizMenu__filter__quant').textContent = count;

    // Отправляем AJAX-запрос с выбранными тегами
    fetch('/filters/articles?tags='+selectedTags.join(','), {
        method: 'GET',
        headers: { 'Content-Type': 'application/json' },
        //params: { tags: selectedTags.join(',') }
    })
        .then(response => response.text())
        .then(response => {
            document.querySelector('.show-more-items')?.remove();
            document.querySelector('.allarticles').innerHTML = response;
        })
        .catch(error => console.error('Ошибка выполнения запроса:', error));
}

// Фильтрация статей по категории
function articleCategory(id) {
    if (id === 0) id = null;

    fetch('/filters/articles', {
        method: 'GET',
        headers: { 'Content-Type': 'application/json' },
        params: { category: id, sort: article_sort }
    })
        .then(response => response.text())
        .then(response => {
            document.querySelector('.show-more-items')?.remove();
            document.querySelector('.allarticles').innerHTML = response;
        })
        .catch(error => console.error('Ошибка выполнения запроса:', error));
}

function indexCategory(id) {
    if (id === 0) id = null;

    fetch('/filters/index?category='+id, {
        method: 'GET',
        headers: { 'Content-Type': 'application/json' },
    })
        .then(response => response.text())
        .then(response => {
            console.log(response)
            document.querySelector('.newsDoubleBlock')?.remove();
            document.querySelector('.all-articles').innerHTML = response;
        })
        .catch(error => console.error('Ошибка выполнения запроса:', error));
}
// Форма обратной связи
document.getElementById('feedback')?.addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('/feedback', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
    })
        .then(response => response.json())
        .then(() => {
            document.querySelector('.formBlockWrap').style.display = 'none';
            document.querySelector('.fullHeightMinWidth_thanks').style.display = 'block';
        })
        .catch(error => console.error(error));
});

// Получение параметров из URL
function getUrlParameter(sParam) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(sParam) || false;
}


// Подписка
document.querySelector('form.subscriptions')?.addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('/ajax/subscriptions.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(res => {
            if (res.success) {
                document.querySelector('.subscribeWrap__soc .button')
                    .closest('.subscribeWrap__soc')
                    .classList.add('completed');
            } else {
                console.log(res);
            }
        })
        .catch(error => console.error(error));
});

// Показать попап
document.querySelector('.show-popup')?.addEventListener('click', function () {
    document.querySelector('.dark-popap.review').style.display = 'block';
});

// Отправка отзыва
if (document.querySelector('#send_review')) {
    document.querySelector('#send_review').addEventListener('submit', e => {
        e.preventDefault();
        const file = document.querySelector('#send_review input[type=file]').files[0];
        const cName = document.querySelector('#send_review #cName').value;
        const cEmail = document.querySelector('#send_review #cEmail').value;
        const cPhone = document.querySelector('#send_review #cPhone').value;
        const cText = document.querySelector('#send_review #cText').value;
        const form = document.querySelector('#send_review');

        const b64toBlob = (b64Data, contentType, sliceSize) => {
            contentType = contentType || '';
            sliceSize = sliceSize || 512;
            const byteCharacters = atob(b64Data);
            const byteArrays = [];
            for (let offset = 0; offset < byteCharacters.length; offset += sliceSize) {
                const slice = byteCharacters.slice(offset, offset + sliceSize);
                const byteNumbers = new Array(slice.length);
                for (let i = 0; i < slice.length; i++) {
                    byteNumbers[i] = slice.charCodeAt(i);
                }
                const byteArray = new Uint8Array(byteNumbers);
                byteArrays.push(byteArray);
            }
            return new Blob(byteArrays, { type: contentType });
        };

        const sendForm = fileData => {
            const parts = fileData ? fileData.split(',') : false;
            const type = parts ? parts[0].split(';')[0].split(':')[1] : false;
            const base64Data = parts ? parts[1] : false;

            const formData = new FormData();
            const blobImage = base64Data ? b64toBlob(base64Data, type) : false;

            formData.append('name', cName);
            formData.append('email', cEmail);
            formData.append('phone', cPhone);
            formData.append('text', cText);
            if (blobImage) formData.append('pdf', blobImage, file.name);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', form.getAttribute('action'), true);
            xhr.onload = () => {
                document.querySelector('#send_review').innerHTML = 'Спасибо за ваш отзыв';
            };
            xhr.send(formData);
        };

        if (file) {
            const reader = new FileReader();
            reader.onload = e => sendForm(e.target.result);
            reader.readAsDataURL(file);
        } else {
            sendForm(null);
        }
    });
}

// Обработчик для ссылок PDF
document.querySelectorAll('a.show_pdf').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const href = link.getAttribute('href');
        document.querySelector('#pdfPopup embed').setAttribute('src', href);
        document.querySelector('#pdfPopUp').style.display = 'block';
    });
});

document.querySelector('.pdf-popap__close')?.addEventListener('click', () => {
    document.querySelector('#pdfPopUp').style.display = 'none';
});

// Генерация оглавления
document.querySelectorAll("h1, h2, h3").forEach((header, i) => {
    header.setAttribute("id", "title" + i);
    const listItem = document.createElement('li');
    const link = document.createElement('a');
    link.setAttribute("id", "link" + i);
    link.setAttribute("href", "#title" + i);
    link.setAttribute("title", header.tagName);
    link.textContent = header.textContent;
    listItem.appendChild(link);
    document.querySelector(".top-content ul")?.appendChild(listItem);
});

if ($('.phone_mask').length) {
    $(".phone_mask").mask("+7 (999) 999-9999");
}
// $('form#feedback').submit(function () {
//     let form = $(this);
//     $.ajax({
//         url: '/ajax/send.php',
//         type: 'post',
//         dataType: 'json',
//         data: form.serialize(),
//         success: function (res) {
//             if (res.success) {
//                 $('.formBlockWrap').hide();
//                 $('.fullHeightMinWidth_thanks').show();
//                 // form.addClass('res-message')
//                 // form.html(res.msg);
//             }
//         }
//     });
//     return false;
// });

$('form#orderservice_form').submit(function () {
    let form = $(this);
    $.ajax({
        url: '/ajax/send.php',
        type: 'post',
        dataType: 'json',
        data: form.serialize(),
        success: function (res) {
            if (res.success) {
                form.html(res.msg);
            }
        }
    });
    return false;
});
$('form#audit_form').submit(function () {
    let form = $(this);
    $.ajax({
        url: '/ajax/send.php',
        type: 'post',
        dataType: 'json',
        data: form.serialize(),
        success: function (res) {
            if (res.success) {
                form.html(res.msg);
            }
        }
    });
    return false;
});

function filterMaterials(section_id = null) {
    if (section_id == null) {
        section_id = $('.material-section.active a').data('id');
    }
    let url = $('#url').val();
    let sort = $('#sortSel').val();
    let tags = $('#authSel').val();
    let authorId = $('#author_id').val();
    let q = $('#search-input').val();
    if (section_id < 0) {
        $('.allarticles').hide();
        $('.author1.about').show();
        $('.author-tags').hide();
        $('.author-sort').hide();

        return false;
    }
    $('.author1.about').hide();
    $('.allarticles').show();
    $('.author-tags').show();
    $('.author-sort').show();
    $.ajax({
        url: '/ajax/materials.php',
        type: 'post',
        data: {section_id: section_id, url: url, sort: sort, tags: tags, author_id: authorId, q:q},
        dataType: 'json',
        success: function (res) {
            if (res.success) {

                $('.allarticlesFooter').remove();
                $('.all-articles').html(res.html);
                $('.horizMenu__filter__quant').text(tags.length);
            }
            $(window).resize();
        }
    });
    return false;
}

// Поле сортировки для кейсов
let case_sort = 'new';
$('.caseSortSelect').on('change', function() {
    case_sort = $(this).val();
    // todo а если дефолт????
    caseSearch();
    tagsFilter();
});

// Поиск в кейсах
var delay = (function() {
    var timer = 0;
    return function(callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();
$('#case-search-input').on('input', function() {
    caseSearch();
});

function caseSearch(){
    var $this = $('#case-search-input');
    delay(function() {
        var query = $this.val();
        $.ajax({
            url: '/filters/case',
            method: 'GET',
            data: {
                search: query,
                sort: case_sort
            },
            success: function(response) {
                $('.other-cases').remove();
                $('.homeMiniBlocks_allcases').html(response);
            },
            error: function(xhr, status, error) {
                console.error('Ошибка выполнения запроса:', error);
            }
        });
    }, 500);  // Задержка в 500 миллисекунд
}

// Обработчик для выбора тегов
$('#authSel').on('change', function() {
    tagsFilter();
});

function tagsFilter(){
    var selectedTags = $('#authSel').val();  // Получаем массив выбранных значений

    // Обновляем количество выбранных тегов
    var count = selectedTags ? selectedTags.length : 0;
    $('.horizMenu__filter__quant').text(count);

    // Отправляем AJAX-запрос с выбранными тегами
    if (selectedTags && selectedTags.length > 0) {
        $.ajax({
            url: '/filters/case',
            method: 'GET',
            data: {
                tags: selectedTags.join(','),
                //sort: case_sort У нас уже есть сортировка там, но можно добавлять если что и доп!
            },
            success: function(response) {
                $('.other-cases').remove();
                $('.homeMiniBlocks_allcases').html(response);
            },
            error: function(xhr, status, error) {
                console.error('Ошибка выполнения запроса:', error);
            }
        });
    } else {
        console.log('Нет выбранных тегов');
    }
}

// Обработчик для кнопки сброса
$('#tagreset').on('click', function() {
    $('#authSel').val([]).trigger('change');  // Сбрасываем выбранные значения
    $('.horizMenu__filter__quant').text(0);   // Обнуляем счетчик
    $('#case-search-input').val('');         // Обнуляем поиск

    //  заменяем
    $.ajax({
        url: '/filters/case/reset',
        method: 'GET',
        success: function(response) {
            $('.wrapper_cases').html(response);
        },
        error: function(xhr, status, error) {
            console.error('Ошибка выполнения запроса:', error);
        }
    });
});


// Поле сортировки для статей
let article_sort = 'new';
$('.article-sort-select').on('change', function() {
    article_sort = $(this).val();
    articleCaseSearch();
    articleTagsFilter();
});

// Поиск в статьях
$('#article-search-input').on('input', function() {
    articleCaseSearch();
});

function articleCaseSearch(){
    var $this = $('#article-search-input');
    delay(function() {
        var query = $this.val();
            $.ajax({
                url: '/filters/articles',
                method: 'GET',
                data: {
                    search: query,
                    sort: article_sort
                },
                success: function(response) {
                    $('.show-more-items').remove();
                    $('.allarticles').html(response);
                },
                error: function(xhr, status, error) {
                    console.error('Ошибка выполнения запроса:', error);
                }
            });
    }, 500);  // Задержка в 500 миллисекунд
}


// Обработчик для выбора тегов в статьях
$('.articleTags').on('change', function() {
    articleTagsFilter();
});

function articleTagsFilter(){
    var selectedTags = $('.articleTags').val();  // Получаем массив выбранных значений

    // Обновляем количество выбранных тегов
    var count = selectedTags ? selectedTags.length : 0;
    $('.horizMenu__filter__quant').text(count);

    // Отправляем AJAX-запрос с выбранными тегами
    $.ajax({
        url: '/filters/articles',
        method: 'GET',
        data: {
            tags: selectedTags.join(','),
        },
        success: function(response) {
            $('.show-more-items').remove();
            $('.allarticles').html(response);
        },
        error: function(xhr, status, error) {
            console.error('Ошибка выполнения запроса:', error);
        }
    });
}

// Фильтрация статей по категории
function articleCategory(id){
    if(id == 0){
        id = null;
    }
    $.ajax({
        url: '/filters/articles',
        method: 'GET',
        data: {
            category: id,
            sort: article_sort
        },
        success: function(response) {
            $('.show-more-items').remove();
            $('.allarticles').html(response);
        },
        error: function(xhr, status, error) {
            console.error('Ошибка выполнения запроса:', error);
        }
    });
}


// Форма обратной связи
$(document).ready(function () {
    $('#feedback').on('submit', function (e) {
        e.preventDefault(); // Предотвращаем стандартную отправку формы

        // Собираем данные формы
        let formData = $(this).serialize();

        // Отправляем AJAX-запрос
        $.ajax({
            url: '/feedback', // URL для обработки данных
            method: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('.formBlockWrap').hide();
                $('.fullHeightMinWidth_thanks').show();

            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});


// Это убрал я
// $('.material-section a').click(function () {
//     filterMaterials($(this).data('id'));
// });

// $('.case-section a').click(function () {
//     filterCases($(this).data('id'));
//     $('html, body').animate({scrollLeft: 0},500);
//     $('html, body').animate({scrollTop: 0},500);
// });

// Это убрал я
// $('#authSel').on('select2:select', function (e) {
//     let url = $('#url').val();
//     if (url === 'cases') {
//         filterCases();
//     } else {
//         filterMaterials();
//     }
// });

// Это убрал я
// $('#authSel').on('select2:unselect', function (e) {
//     let url = $('#url').val();
//     if (url === 'cases') {
//         filterCases();
//     } else {
//         filterMaterials();
//     }
// });

// Это убрал я
// $('#sortSel').on('select2:select', function (e) {
//     let url = $('#url').val();
//     if (url === 'cases') {
//         filterCases();
//     } else {
//         filterMaterials();
//     }
// });

function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
}

let section_id = getUrlParameter('section_id');
if (section_id) {
    $('.material-section').removeClass('active');
    $('.material-section[data-id="' + section_id + '"]').addClass('active');
    filterMaterials(section_id);
}

let material_tag = getUrlParameter('material_tag');
if (material_tag) {
    $('#authSel').val(material_tag); // Select the option with a value of '1'
    $('#authSel').trigger('change'); // Notify any JS components that the value changed
    filterMaterials();
}

// let case_tag = getUrlParameter('case_tag');
// if (case_tag) {
//     $('#authSel').val(case_tag); // Select the option with a value of '1'
//     $('#authSel').trigger('change'); // Notify any JS components that the value changed
//     filterCases();
// }

$('form.subscriptions').submit(function () {
    let form = $(this);
    $.ajax({
        url: '/ajax/subscriptions.php',
        type: 'post',
        dataType: 'json',
        data: form.serialize(),
        success: function (res) {
            if (res.success) {
                $('.subscribeWrap__soc .button').closest('.subscribeWrap__soc').addClass('completed');
            } else {
                console.log(res);
            }
        }
    });
    return false;
});
$('.show-popup').click(function () {
    $('.dark-popap.review').show();
});


// $('form#send_review').submit(function () {
//     let form = $(this);
//     var file_data = $('#uploadFile').prop('files')[0];
//     var form_data = new FormData();
//     form_data.append('file', file_data);
//
//     $.ajax({
//         url: '/ajax/review.php',
//         type: 'post',
//         data: form_data,
//         dataType: 'json',
//         success: function (res) {
//             if (res.success) {
//                 form.html(res.msg);
//             }
//         }
//     });
//
//
//     return false;
// });


if (document.querySelector('#send_review')) {
    document.querySelector('#send_review').addEventListener('submit', e => {
        e.preventDefault();
        const file = document.querySelector('#send_review input[type=file]').files[0];
        const cName = document.querySelector('#send_review #cName').value;
        const cEmail = document.querySelector('#send_review #cEmail').value;
        const cPhone = document.querySelector('#send_review #cPhone').value;
        const cText = document.querySelector('#send_review #cText').value;
        const form = document.querySelector('#send_review');


        const reader = new FileReader();

        function b64toBlob(b64Data, contentType, sliceSize) {
            contentType = contentType || '';
            sliceSize = sliceSize || 512;

            var byteCharacters = atob(b64Data);
            var byteArrays = [];

            for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
                var slice = byteCharacters.slice(offset, offset + sliceSize);

                var byteNumbers = new Array(slice.length);
                for (var i = 0; i < slice.length; i++) {
                    byteNumbers[i] = slice.charCodeAt(i);
                }

                var byteArray = new Uint8Array(byteNumbers);

                byteArrays.push(byteArray);
            }

            var blob = new Blob(byteArrays, {type: contentType});
            return blob;
        }

        const sendForm = fileData => {


            var parts, type, base64Data;

            parts = fileData ? fileData.split(',') : false;
            type = parts ? parts[0] : false;
            base64Data = parts ? parts[1] : false;

            type = type.split(';')[0].split(':')[1];

            var formData = new FormData(),
                blobImage = base64Data ? b64toBlob(base64Data, type) : false;

            formData.append('name', cName);
            formData.append('email', cEmail);
            formData.append('phone', cPhone);
            formData.append('text', cText);
            if (blobImage) formData.append('pdf', blobImage, file.name);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', form.attr('action'), true);
            xhr.onload = function (e) {
                // console.log('selfreaded ', xhr);
                // form.append(xhr.responseText);
                $('#send_review').html('Спасибо за ваш отзыв');
            };
            xhr.send(formData);
        };

        reader.onload = function (e) {
            sendForm(e.target.result);
        }

        if (file) reader.readAsDataURL(file);
        else {
            sendForm(null);
        }
    });
}
// $('.show-more-items').click(function () {
//     $('.none-display').each(function () {
//         $(this).removeClass('none-display');
//         $(this).show();
//     });
//     $('.allarticlesFooter').remove();
//     $(window).resize();
//
// });
if ($($('select')).is('#sortSelMedia')) {
    $('#sortSelMedia').select2({
        // minimumResultsForSearch: -1,
        theme: "selectWrap__select",
        minimumResultsForSearch: Infinity
    });
}

$('#sortSelMedia').on('select2:select', function (e) {
    let sort = $('#sortSelMedia').val();
    console.log(sort)
    $.ajax({
        url: '/sort/smi?'+sort+'=1',
        type: 'get',
        success: function (res) {
            $('.media').html(res);
        }
    });
    return false;
});
$('a.show_pdf').click(function () {
    // $('#pdfPopup').removeClass('img');
    let href = $(this).attr('href');
    // console.log(href.toLowerCase().indexOf('.pdf'));
    // if(href.toLowerCase().indexOf('.pdf') === -1){
    //     $('#pdfPopup').addClass('img');
    // }
    $('#pdfPopup embed').attr('src', href);
    $('#pdfPopUp').show();
    return false;
});

$('.pdf-popap__close').click(function () {
    $('#pdfPopUp').hide();
    return false;
});

$('#tagreset').click(function () {
    $('#authSel').val(null).trigger('change');
    $('.horizMenu__filter__quant').text(0);
    filterMaterials();
});

$("h1, h2, h3").each(function (i) {
    var current = $(this);
    current.attr("id", "title" + i);
    $(".top-content ul").append("<li><a id='link" + i + "' href='#title" +
        i + "' title='" + current.attr("tagName") + "'>" +
        current.html() + "</a></li>");
});

// Это убрал я
// $('#search-input').keyup(function() {
//     let q = $(this).val();
//     let url = $('#url').val();
//     if(q.length >= 3){
//         if (url === 'cases') {
//             filterCases();
//         } else {
//             filterMaterials();
//         }
//     }else if(q.length === 0){
//         if (url === 'cases') {
//             filterCases();
//         } else {
//             filterMaterials();
//         }
//     }
// });

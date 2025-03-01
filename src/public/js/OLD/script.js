const isTouchDevice = !!('ontouchstart' in window);
if(isTouchDevice) $(document.body).addClass('touch');

let readyYamps = false
if($('div').is('#map')){
    ymaps.ready(() => {
        readyYamps = true;
    });
}

function init(){
    if($('div').is('#map')){
        let coordinates = $('#coordinates').text().split(',');
        var myMap = new ymaps.Map('map', {
                center: coordinates,
                zoom: 9,
                controls: []
            }, {suppressMapOpenBlock: true}),

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



        myMap.geoObjects
            .add(myPlacemark);
    }
}



const scrollHeader = () => {
    const offset = isTouchDevice ? 302 : 132;

    if($(window).scrollLeft() > offset){
        if(!$('#header').hasClass('slim'))$('#header').addClass('slim');
    } else {
        if($('#header').hasClass('slim'))$('#header').removeClass('slim');
    }
};

let trans = 1;

const resizeHadlerForBlock = () => {
    const isHorizont = $('body').hasClass('horizontal');

    const hiddenDiv = $('#hidden');
    const wrapperDiv = $('#wrapper');
    const header = $('#header');
    const stickies = document.querySelectorAll('.sticker');

    $(hiddenDiv).css({'width': ''});
    $(hiddenDiv).css({'height': ''});
    $(header).css({'height': ''});
    $(header).css({'transform': ''});
    $('#menu .mobilemenu__wrapMenu__menu').css({'transform': ''});

    const w = $(window).width();
    const h = $(window).height();
    const hiddenDivW = $(hiddenDiv).width();
    const hiddenDivH = $(hiddenDiv).height();

    trans = isHorizont ? h/1080 : (w > 428 ? ((w > 768 && w > h) ? w/1920 : w/768) : w/428);


    if(isHorizont){
        $(wrapperDiv).css({'transform': `scale(${trans})`});
        $(header).css({'transform': `scale(${trans})`});
        $(hiddenDiv).css({'width': `${trans * hiddenDivW}px`});
    } else {
        $(wrapperDiv).css({'transform': `scale(${trans})`});

        if(w > 768 && w > h){
            $(header).css({'height': `${h / trans}px`});
            $(header).css({'transform': `scale(${trans})`});
        } else {
            const transMenu = isHorizont ? h/1080 : (w > 428 ? ((w > 768 && !$('body').hasClass('custom')) ? w/1920 : w/798) : w/465);
            $('#menu .mobilemenu__wrapMenu__menu').css({'transform': `scale(${transMenu})`});
        }

        $(hiddenDiv).css({'height': `${trans * hiddenDivH}px`});
    }

    if($(stickies).length){
        stickies.forEach((element, idx) => {
            const id = `sticky${idx}`;
            const copyEl = document.getElementById(id);

            const rect = element.getBoundingClientRect();
            const top = rect.top + window.pageYOffset;
            const left = rect.left + window.pageXOffset;
            const w = rect.width;
            const h = rect.height;

            if(copyEl){
                const _cloneElem = document.getElementById(`stickyElem${idx}`);
                const _overflowElem = document.getElementById(`stickyOverflowElem${idx}`);

                _cloneElem.style.cssText = `width:${w / trans}px;height:${h / trans}px;transform-origin:top left;transform:scale(${trans})`;
                _overflowElem.style.cssText = `width:${w}px;height:${h}px;`;
                copyEl.style.cssText = `width:${w}px;height:${h}px;position:absolute;z-index:3;top:0;left:${left}px;margin-top:${top}px;`;
            } else {
                const _cloneElem = element.cloneNode(true);
                _cloneElem.style.cssText = `width:${w / trans}px;height:${h / trans}px;transform-origin:top left;transform:scale(${trans})`;
                _cloneElem.id = `stickyElem${idx}`;
                _cloneElem.classList.add('no-opacity');
                _cloneElem.classList.remove('sticker');

                const _overflowElem = document.createElement('div');
                _overflowElem.classList.add('stickyOverflowElem');
                const _overflowElemId = `stickyOverflowElem${idx}`;
                _overflowElem.style.cssText = `width:${w}px;height:${h}px;`;
                _overflowElem.id = _overflowElemId;
                _overflowElem.appendChild(_cloneElem);

                let _elem = document.createElement('div');

                _elem.id = id;
                _elem.style.cssText = `width:${w}px;height:${h}px;position:absolute;z-index:3;top:0;left:${left}px;margin-top:${top}px;`;
                _elem.appendChild(_overflowElem);

                document.body.appendChild(_elem);

                new Sticky(`#${_overflowElemId}`);
            }
        });
    }
};


//window load


let isMobile = null;

let ctrl = null;

let isSlickOrmAdvantage = false;
let isSlickOrmWork = false;
let isSlickOrmWe = false;
let isSlickOrmTarif = false;

let isHorizontal = false;

if (/iPad|iPhone|iPod|MacIntel/.test(navigator.platform)) {
    $('body').addClass('apple');
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
};


const addedListeners = () => {
    const div = $('div');
    const select = $('select');
    const header = $('#header');
    const menu = $('#menu');
    const parallax = $('.parallax');

    if($(div).is('#burger')){
        $('#burger').on('click', () => {
            $(document.body).toggleClass('no-scroll');
            $(header).toggleClass('open');
            $(menu).toggleClass('open');
        });

        $(window).on('resize', () => {
            $(document.body).removeClass('no-scroll');
            $(header).removeClass('open');
            $(menu).removeClass('open');
        });
    }

    if($(div).is('#fullHeightBigWidthSlider')){
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

        $('#fullHeightBigWidthSlider .slick-next__arrow__circle').attr('stroke-dasharray', "500, 500");
        $('#fullHeightBigWidthSlider').slick('slickNext');

        $('#fullHeightBigWidthSlider').on('beforeChange', function(){
            $('#fullHeightBigWidthSlider .slick-next__arrow__circle').removeClass('slick-next__arrow__circle_trans');
            $('#fullHeightBigWidthSlider .slick-next__arrow__circle').attr('stroke-dasharray', "0, 500");
        });

        $('#fullHeightBigWidthSlider').on('afterChange', function(){
            $('#fullHeightBigWidthSlider .slick-next__arrow__circle').addClass('slick-next__arrow__circle_trans');
            $('#fullHeightBigWidthSlider .slick-next__arrow__circle').attr('stroke-dasharray', "500, 500");
        });
    }
// <img src="images/min/icons/slicknext.svg" alt="" class="slick-next__arrowSimple">
    if($(div).is('#simpleSlider')){
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

    if($(div).is('#fullHeightMinWidthComentsSlider')){
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

        $('#fullHeightMinWidthComentsSlider').on('beforeChange', function(){
            $('#fullHeightMinWidthComentsSlider .slick-next__arrow__circle').removeClass('slick-next__arrow__circle_trans');
            $('#fullHeightMinWidthComentsSlider .slick-next__arrow__circle').attr('stroke-dasharray', "0, 500");
        });

        $('#fullHeightMinWidthComentsSlider').on('afterChange', function(){
            $('#fullHeightMinWidthComentsSlider .slick-next__arrow__circle').addClass('slick-next__arrow__circle_trans');
            $('#fullHeightMinWidthComentsSlider .slick-next__arrow__circle').attr('stroke-dasharray', "500, 500");
        });
    }

    if($(select).is('#mainFormServicies')){
        $('#mainFormServicies').select2({
            minimumResultsForSearch: -1,
            theme: "formBlock__top__select"
        });
    }

    if($('ul').is('#newsMenu')) {
        $('#newsMenu').on('click', '.dropdown-toggle', function () {
            $('.dropdown-menu').toggle();
        });

        $('#newsMenu').on('click', '.horizMenu__menu__item', function () {
            $('#newsMenu .horizMenu__menu__item').removeClass('active');
            $(this).addClass('active');
            responseMenu();
        });

        $(window).on('resize', function () {
            responseMenu();
        });

        setTimeout(() => $(window).trigger('resize'), 1000);
    }

    if($(div).is('#contentButton')) {
        $('#contentButton').on('click', () => {
            $('#contentButton').toggleClass('open');
            $('#content').toggleClass('open');
        });
    }

    if($('button').is('#toggleSoc') || $('button').is('.toggleSoc-js')) {
        $('#toggleSoc, .toggleSoc-js').on('click', function() {
            $(this).toggleClass('open');
            $(this).next().toggleClass('open');
        });
    }

    if($(div).is('#blogSlider')){
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

    if($(div).is('#ormAdvantage')){
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

    if($(div).is('#ormWork')){
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

    if($(div).is('#ormWe')){
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

    if($(div).is('#ormTarif')){
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
//<img src="images/min/icons/slicknext.svg" alt="" class="slick-next__arrowSimple">
    if($(div).is('#practicSlider')){
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

    if($(select).is('#authSel')){
        $('#authSel').select2({
            dir: "rtl",
            theme: "selectWrap__selectHorizontal"
        });
    }

    if($(select).is('#sortSel')){
        $('#sortSel').select2({
            // minimumResultsForSearch: -1,
            theme: "selectWrap__select",
            minimumResultsForSearch: Infinity
        });
    }

    if($('button').is('#scrolltotop')) {
        $('#scrolltotop').on('click', () => {
            $('html,body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });
    }

    if($('img').is('#popapClase')) {
        $('#popapClase').on('click', function (){
            $(this).closest('.dark-popap').fadeOut(500);
        });
    }

    if($(parallax).length) {
        for (let i = 0; i < $(parallax).length; i++) {
            const parallaxInstance = new Parallax($(parallax)[i], {
                relativeInput: true,
                clipRelativeInput: true,
                hoverOnly: true,
                limitY: $(parallax)[i].closest('.addY') ? false : 0,
                limitX: $(parallax)[i].closest('.noX') ? 0 : false,
                inputElement: $(parallax)[i].closest('.scene')
            });
        }
    }
};


$(window).on('load', () => {
    if($(document.body).hasClass('custom')) scroller();

    setTimeout(() => {
        try {
            if ($('.slider').length) $('.slider').slick('slickPrev');
        }catch (e) {
            console.log('no prev');
        }

        $('a[href^="#"]:not([href="#"]), a[href^="/#"]:not([href="/#"])').on("click", function (event) {
            event.preventDefault();
            const id  = $(this).attr('href').replace('/', '').split('?')[0];
            if($('*').is(`${id}`)){
                const wW = $(window).width();
                const wH = $(window).height();

                if(wW > 768 && wW > wH && $('body').hasClass('custom')){
                    const left = $(id).offset().left;
                    $('body,html').animate({scrollLeft: left - 132}, 1000);
                } else {
                    const top = $(id).offset().top;
                    $('body,html').animate({scrollTop: top}, 1000);
                }

                $(window).resize();
            } else {
                window.location.assign($(this).attr('href'));
            }
        });

        $('html').css({overflow: 'visible'});
        if($(document.body).hasClass('custom')) scroller();

        addedListeners();

        resizeHadlerForBlock();
        $(window).on('resize', resizeHadlerForBlock);

        const hash = window.location.hash.split('?')[0];
        if(hash){
            const wW = $(window).width();
            const wH = $(window).height();

            if(wW > 768 && wW > wH && $('body').hasClass('custom')){
                const left = $(hash).offset().left;
                $('body,html').animate({scrollLeft: left - 132/trans}, 0);
            } else {
                const top = $(hash).offset().top;
                $('body,html').animate({scrollTop: top}, 0);
            }
        } else {
            window.scroll(0, 0);
        }

        scrollHeader();
        $(window).on('scroll resize', scrollHeader);

        document.querySelector('#preloader').style.display = 'none';
        if($('div').is('#map')){
            if(readyYamps){
                init();
            }else{
                ymaps.ready(init);
            }
        }
        document.body.classList.remove('no-event');
    }, 1000)});

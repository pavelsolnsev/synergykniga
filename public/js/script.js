$(function () {
    /* Inits */
    initBodyScroll();
    initTopbarDropdown();
    initMore();
    initCarousel();
    initFilters();
    initLazy();
    initScroll();
    initCounter();
    /* Глобальные переменные */
    var windowWidth = parseInt($(window).width());

    /* Шапка */
    function initBodyScroll() {
        $(window).scroll(function () {

            if ($(this).scrollTop() > 0) {
                $('body').addClass('page-scrolled');
            } else {
                $('body').removeClass('page-scrolled');
            }
        });
    }

    /* topbar */
    function initTopbarDropdown() {

        $('.topbar__trigger').click(function () {
            $('.topbar__dropdown').slideToggle('fast');
            $(this).toggleClass('topbar__trigger_open');
            return false;
        });
    }
    /* UPH-7 */
    function initScrollHeader() {
        const header = $('.header');
        const scroll = $(window).scrollTop();
        if (scroll >= 20) {
            header.addClass('active');

        } else {
            header.removeClass('active');
        }
    }
    $(window).scroll(() => initScrollHeader())
    /* UPH-7 */

    

    /* Показать еще */
    function initMore() {

        $('[data-more-btn]').on('init.more click', function (event) {
            var
                $container = $('[data-more-options]', $(this).parent().parent()),
                options = {},
                visible = 0,
                window_width = $(window).width(),
                $items;

            options = $container.data('more-options') || {}

            if (event.type == 'init' && window_width > 1199) {
                visible = options.init;
            } else if (event.type == 'init' && window_width > 991 && window_width <= 1199) {
                visible = options.inittablet;
            } else if (event.type == 'init' && window_width <= 991) {
                visible = options.initmobile;
            } else if (window_width > 1199) {
                visible = options.desktop;
            } else if (window_width > 991 && window_width <= 1199) {
                visible = options.tablet;
            } else if (window_width <= 991) {
                visible = options.mobile;
            }

            $items = $(options.target + '[data-more-hidden]', $container);
            $items.slice(0, visible).removeAttr('data-more-hidden');

            $('html, body')
                .animate({
                    scrollTop: '+=1'
                }, 0)
                .animate({
                    scrollTop: '-=1'
                }, 0);

            if ($items.length - visible <= 0) {
                $(this).addClass('d-none');
                $(this).parents('.more').css('display', 'none');
            }
        })
            .trigger('init.more');


        $('.catalog__button-open').click(function () {
            $(this).parents('.catalog__wrapper').find('[data-more-hidden]').removeAttr('data-more-hidden');
            $(this).parents('.more').css('display', 'none');
            return false;
        });
    }


    /* slick-carousel  */
    function initCarousel() {

        /* SLIDER CARDS */

        let $books_slider = $('.books__cards'),
            settingsBooks = {
                dots: true,
                arrows: false,
                mobileFirst: true,
                slidesToShow: 1,
                responsive: [{
                    breakpoint: 767,
                    settings: "unslick"
                },
                {
                    breakpoint: 567,
                    settings: {
                        slidesToShow: 2
                    }
                }
                ]
            }

        $books_slider.slick(settingsBooks);
        $(window).on('resize', function () {
            if (!$books_slider.hasClass('slick-initialized')) {
                return $books_slider.slick(settingsBooks);
            }
        });
    }

    /* Select */
    // $('input, select').styler();

    /* active */
    $('.header__menu li a, .catalog__link, .services__body-price div').on('click', function (e) {
        e.preventDefault();
        $('.header__menu li a, .services__body-price div').removeClass('active');
        $(this).toggleClass('active');
    })


    /* Filter  */
    function initFilters() {

        $('.filter__name').click(function () {
            $(this).toggleClass('active');

            var subBlock = $(this).parents('.filter');
            var subItem = $(subBlock).find('.filter__drop');
            $(subItem).slideToggle(300);
            if ($(subItem).length) {
                var posright = $('.filters').width() - $(subBlock).position().left - $(subItem).width();

                if (posright < 0) {
                    $(subItem).css('right', 15);
                }
            }

            $(subBlock).siblings('.filter').find('.filter__drop').slideUp('fast');
            return false;
        });
    }

    $('.choice-value-del').click(function () {
        $(this).parents('.choice-value').remove();
    });

    $('.choice-delete').click(function () {
        $(this).parents('.filters').find('.choice-value').remove();
        $(this).css('display', 'none');
    });

    /* Вертикальный ползунок  */
    $(function () {

        $('.filter_author .scrollblock').slimScroll({
            height: '196px',
            railVisible: true,
            alwaysVisible: true,
            color: '#DADEE2',
            size: '4px',
            railOpacity: 0,
            opacity: '1',
        });


        $('.filter_type .scrollblock').slimScroll({
            height: '50px',
            railVisible: true,
            alwaysVisible: true,
            color: '#DADEE2',
            size: '4px',
            railOpacity: 0,
            opacity: '1',
        });

    });

    function initCounter() {
        // Уменьшаем на 1 
        $(document).on('click', '.counter__bottom', function () {
            let total = $(this).next();
            if (total.val() > 1) {
                total.val(+total.val() - 1);
            }
        });

        // Увеличиваем на 1 
        $(document).on('click', '.counter__top', function () {
            let total = $(this).prev();
            total.val(+total.val() + 1);
        });

        // Запрещаем ввод текста 
        $(document).on('input', '.input-number__input', function () {
            if (this.value.match(/[^0-9]/g)) {
                this.value = this.value.replace(/[^0-9]/g, '');
            }
        });
    }

    $('.filter_type__name, .basket__select').styler();

    /* Lazy */
    function initLazy() {

        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }

    function initScroll() {
        if (!$('.scroll').length) return;

        $(document).on('click scroll.init', '.scroll', function (event) {
            event.preventDefault();
            $.fancybox.close();

            var
                hrefId = $(this).attr('href') || $(this).data('href'),
                posTop = $(hrefId).offset().top - $('.header').innerHeight() + 0.5;
            $('html, body').animate({
                scrollTop: posTop
            }, 1000);
        });
    }

});

function check() {
    var check = document.getElementsByTagName('input');
    for (var i = 0; i < check.length; i++) {
        if (check[i].type == 'checkbox') {
            check[i].checked = true;
        }
    }
}

function uncheck() {
    var uncheck = document.getElementsByTagName('input');
    for (var i = 0; i < uncheck.length; i++) {
        if (uncheck[i].type == 'checkbox') {
            uncheck[i].checked = false;
        }
    }
}


// Страница лк
// Переключение пунктов меню
$('.lk-item').on('click', function(){
    event.preventDefault();
    $.fancybox.close();

    $('.account__box-block').hide();
    $('.lk-item').removeClass('active');
    $(this).toggleClass('active');
    let tabname = $(this).attr('data-name');
    $('.account__box-block[data-name="'+tabname+'"').show();
});

// Показ скрытых заказов в лк, по клику на кнопку
var itemsCount = 0,
itemsMax = $('.orders__box').length;

function showNextItems() {
    var pagination = 3;

    for (var i = itemsCount; i < (itemsCount + pagination); i++) {
        $('.orders__box:eq(' + i + ')').removeClass('hidden');
    }

    itemsCount += pagination;

    if (itemsCount > itemsMax) {
        $('.orders__btn').hide();
    }
};

showNextItems();

$('.orders__btn').on('click', function (e) {
    e.preventDefault();
    showNextItems();
});

// Редактирование полей
$('.edit-field').on('click', function(){
    let attr = $(this).attr('data-name');
    $('.form__input[name="'+attr+'"').removeAttr('readonly').focus();
});

$(".form__input").on("change", function(){
    if($(this).val() !== '') {
        $(this).removeClass('error');
        $(this).addClass('changed-input');
    } else {
        $(this).addClass('error');
    }
});


//Попап лк
//Открытие попапа на моб версии
// $('.popup-menu__link').on('click', function(){
//     $.fancybox.close();
//     $('.popup-lk').fancybox.open();
// });
$('.popup-menu__btn .entry').on('click', function(){
    $.fancybox.close();
    $('.popup-lk').fancybox.open();
});


//Переключение между табами
$('.popup-lk__tab').on('click', function(){
    $('.popup-lk__box').hide();
    $('.popup-lk__tab').removeClass('active');
    $(this).toggleClass('active');
    let tabname = $(this).attr('data-name');
    $('.popup-lk__box[data-name="'+tabname+'"').show();
});

//Настройка кнопок входа и регистрации в попапе
$('.popup-lk .btn').on('click', function(){
    $('.popup-lk__tab').removeClass('active');
    $('.popup-lk__box').hide();
    let tabname = $(this).attr('data-name');
    $('.popup-lk__tab[data-name="'+tabname+'"').addClass('active');
    $('.popup-lk__box[data-name="'+tabname+'"').show();
});

//Проверка паролей в попапе лк
const btn = document.querySelector('.popup-lk .button-reg');
const password = document.querySelector('.popup-lk .password');
const corPassword = document.querySelector('.popup-lk .cor_password');

$(btn).on('click', function(e) {
    // e.preventDefault();
    // if(password.value != corPassword.value) {
    //     corPassword.classList.add('error');
    //     button.classList.add('disabled');
    //     $('.popup-lk .error-message').show();
    // } else {
    //     this.submit();
    // }
    console.log('1232');
});

//Проверка паролей на странице лк
const button = document.querySelector('.personal__form button');
const pass = document.querySelector('.personal__form .password');
const corPass = document.querySelector('.personal__form .cor_password');

$('.personal__form .form__button').on('click', function(e) {
    e.preventDefault();
    if(pass.value != corPass.value) {
        corPass.classList.add('error');
        button.classList.add('disabled');
        $('.personal__form .error-message').show();
    } else {
        this.submit();
    }
});
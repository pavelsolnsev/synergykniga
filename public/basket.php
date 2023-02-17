<!DOCTYPE html>


	<?php
	$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
	$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
	$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
	$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
    $version = 'basket';
    include_once $ROOT . 'version.php';
	?>



<html lang="ru">

<head>
	<base href="<?= $BASE_HREF ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= $title ?></title>

	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $desc ?>">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
	<link rel="image_src" href="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

	<link rel="stylesheet" href="css/common.style.css">
	<link rel="stylesheet" href="css/common.responsive.css">
	
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
	


	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-<?= $gtm ?>');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '2487426621502508');
		fbq('track', 'PageView');
	</script>
</head>

<body class="<?= $version ? 'version-' . $version : '' ?>   page-basket">
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2487426621502508&ev=PageView&noscript=1" /></noscript>

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	
	<div class="wrapper">
		
	<header class="header">
    <div class="container">
        <div class="header__box">
            <div class="header__content">
                <div class="header__logo">
                    <img data-src="img/header/logo.svg" alt="Университет синергия | Издательский дом" class="lazy">
                </div>
                <div class="header__contacts">
                    <a href="#popup-menu" data-fancybox class="header__hamburger">
                        <!-- UPH-7 -->
                        <div></div><!-- UPH-7 -->
                        <div></div><!-- UPH-7 -->
                        <div></div><!-- UPH-7 -->
                    </a> <!-- UPH-7 -->
                    <a href="tel:+74958001001" class="header__phone"><img data-src="img/header/phone.svg" alt="" class="lazy"><span>+74958001001<br>доб.2424, 3304</span></a> <!-- UPH-7 -->
                    <a href="/" class="header__basket">
                        <div class="header__number">
                            <img data-src="img/header/basket.svg" alt="" class="lazy">
                            <span>0</span>
                        </div>
                        <span class="header__text">Корзина</span>
                    </a>
                    <a href="#popup-lk" data-fancybox class="header__lk">
                        <img src="img/header/lk.svg" alt="">
                        <span>Личный <br> кабинет</span>
                    </a>
                </div>
            </div>
            <nav class="header__menu">
                <ul>
                    <li>
                        <a href="#catalog" class="scroll">Книги</a> <!-- UPH-7 -->
                    </li>
                    <li>
                        <a href="#newspaper" class="scroll">Журналы</a> <!-- UPH-7 -->
                    </li>
                    <li>
                        <a href="#about" class="scroll">О нас</a> <!-- UPH-7 -->
                    </li>
                    <li>
                        <a href="#info" class="scroll">Информация для авторов</a> <!-- UPH-7 -->
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
	<section class="basket" id="basket">
    <div class="container">
        <div class="basket__general">
            <div class="container-inner">
                <h2 class="basket__title">Корзина</h2>
                <div class="basket__selectors">
                    <label for="">
                        <input class="basket__selectors-check basket__input" type="checkbox" value="Выбрать все" onclick="check();">
                        <span>Выбрать все</span>
                    </label>
                    <label for="">
                        <input class="basket__selectors-uncheck" type="button" value="Удалить выбранные" onclick="uncheck();">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="basket__box" id="wrapper">
            <div class="container-inner">
                <div class="basket__wrapper">
                    <div class="basket__block">
                        <div class="basket__img">
                            <input type="checkbox" name="check_1" id="check_1" class="basket__input">
                            <img data-src="img/basket/card-1.png" alt="" class="lazy">
                        </div>
                        <div class="basket__wrap">
                            <div class="basket__content">
                                <div class="basket__content-title">Никогда-нибудь</div>
                                <div class="basket__content-name">Елена Рязанова</div>
                                <div class="basket__content-desc">Твердый переплёт</div>
                                <a href="/" class="basket__content-link">Удалить</a>
                            </div>
                            <div class="basket__price">
                                <span>899 ₽</span>
                                <select data-placeholder="1" class="basket__select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <a href="/" class="basket__price-link">Удалить</a>
                            </div>
                        </div>
                    </div>
                    <div class="basket__block">
                        <div class="basket__img">
                            <input type="checkbox" name="check_1" id="check_1" class="basket__input">
                            <img data-src="img/basket/card-2.png" alt="" class="lazy">
                        </div>
                        <div class="basket__wrap">
                            <div class="basket__content">
                                <div class="basket__content-title">Никогда-нибудь</div>
                                <div class="basket__content-name">Елена Рязанова</div>
                                <div class="basket__content-desc">Твердый переплёт</div>
                                <a href="/" class="basket__content-link">Удалить</a>
                            </div>
                            <div class="basket__price">
                                <span>899 ₽</span>
                                <select data-placeholder="1" class="basket__select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <a href="/" class="basket__price-link">Удалить</a>
                            </div>
                        </div>
                    </div>
                    <div class="basket__block">
                        <div class="basket__img">
                            <input type="checkbox" name="check_1" id="check_1" class="basket__input">
                            <img data-src="img/basket/card-3.png" alt="" class="lazy">
                        </div>
                        <div class="basket__wrap">
                            <div class="basket__content">
                                <div class="basket__content-title">Никогда-нибудь</div>
                                <div class="basket__content-name">Елена Рязанова</div>
                                <div class="basket__content-desc">Твердый переплёт</div>
                                <a href="/" class="basket__content-link">Удалить</a>
                            </div>
                            <div class="basket__price">
                                <span>899 ₽</span>
                                <select data-placeholder="1" class="basket__select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <a href="/" class="basket__price-link">Удалить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ORDER-->
                <div class="order">
    <div class="order__wrapper">
        <?php if ($version == 'basket') { ?>
            <div class="order__head">
                <span>В корзине</span>
                <div>
                    <span>Товаров</span>
                    <span>3</span>
                </div>
            </div>
            <div class="order__block">
                <div class="order__subtitle">Общая стоимость</div>
                <div class="order__price">1321&nbsp;₽</div>
            </div>
        <?php } else { ?>
            <div class="order__head">
                <span>В наличии</span>
                <div>
                    <span>Твердый переплет</span>
                    <div class="counter">
                        <div class="counter__bottom"></div>
                        <input class="counter__input" type="text" name="" pattern="^[0-9]+$" value="1">
                        <div class="counter__top"></div>
                    </div>
                </div>
            </div>
            <div class="order__price">340&nbsp;₽</div>
        <?php } ?>
        <div class="order__body">
            <div>Выберите пункт самовывоза:</div>
            <div class="order__body_wrap">
                <div>
                    <input type="radio" id="radio_1" name="radio-group" checked>
                    <label for="radio_1">Библиотека <span>Корпус на Семеновской (Измайловский вал,
                            д.2)</span> </label>
                </div>
                <div>
                    <input type="radio" id="radio_2" name="radio-group" checked>
                    <label for="radio_2">Библиотека <span>Корпус на Семеновской (Измайловский вал,
                            д.2)</span> </label>
                </div>
            </div>
        </div>
        <?php if ($version == 'basket') { ?>
            <a href="#popup-reg" class="order__button button" data-fancybox>Оформить заказ</a>
        <?php } else { ?>
            <a href="/" class="order__button button">В корзину</a>
        <?php } ?>
    </div>
</div>
            <!-- ORDER FINISH-->
        </div>
    </div>
</section>
	
<div class="container">
    <section class="books">
        <div class="container-inner">
            <h2 class="books__title"><?= $books_title ?></h2>
            <div class="books__cards cards">
                
                <div class="cards__item">
                    <a href="/" class="cards__block">
                        <div class="cards__new"></div>
                        <img src="img/cards/card/card.png" alt="" class="lazy">
                        <div class="cards__wrap">
                            <div class="cards__sale">
                                <div class="cards__sale-discount">
                                    <div>Скидка 46%</div>
                                    <div>340 &#8381;</div>
                                </div>
                                <div class="cards__sale-price">340 &#8381;</div>
                            </div>
                            <div class="cards__description">Бизнес книга о стратегии ведения бизнеса</div>
                        </div>
                    </a>
                </div>
                
                <div class="cards__item">
                    <a href="/" class="cards__block">
                        <div class="cards__new"></div>
                        <img src="img/cards/card/card-2.png" alt="" class="lazy">
                        <div class="cards__wrap">
                            <div class="cards__sale">
                                <div class="cards__sale-discount">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="cards__sale-price">1 340 &#8381;</div>
                            </div>
                            <div class="cards__description">Бизнес книга о стратегии ведения бизнеса</div>
                        </div>
                    </a>
                </div>
                
                <div class="cards__item">
                    <a href="/" class="cards__block">
                        <div class="cards__new"></div>
                        <img src="img/cards/card/card-3.png" alt="" class="lazy">
                        <div class="cards__wrap">
                            <div class="cards__sale">
                                <div class="cards__sale-discount">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="cards__sale-price">620 &#8381;</div>
                            </div>
                            <div class="cards__description">Бизнес книга о стратегии ведения бизнеса</div>
                        </div>
                    </a>
                </div>
                
                <div class="cards__item">
                    <a href="/" class="cards__block">
                        <div class="cards__new"></div>
                        <img src="img/cards/card/card-4.png" alt="" class="lazy">
                        <div class="cards__wrap">
                            <div class="cards__sale">
                                <div class="cards__sale-discount">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="cards__sale-price">123 &#8381;</div>
                            </div>
                            <div class="cards__description">Бизнес книга о стратегии ведения бизнеса</div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
</div>
	<section class="contacts" id="contacts">
    <div class="container-inner">
        <h2 class="contacts__title">Контакты</h2>
        <div class="contacts__content">
            <div class="contacts__adres">Корпус Университета &laquo;Синергия&raquo; на&nbsp;Семёновской <span>Измайловский вал, 2, каб.&nbsp;303 (304)</span></div>
            <div class="contacts__phone">Телефон: <a href="tel:+74958001001"> +7 (495) 800-1001</a>, доб. <span>4193</span><br><span>Захарова Елена</span></div>
        </div>
    </div>
    <footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="container-inner footer__box">
                <div class="footer__logo">
                    <img src="img/footer/logo-footer.svg" alt="Университет синергия">
                </div>
                <div class="footer__content">
                <div class=""><a class="fancybox-privacy-link footer__link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru">Политика конфиденциальности</a></div>
                    <div>2019г. © Издательство Синергия</div>
                </div>
                <a href="/" class="footer__button button">Требования</a>
            </div>
        </div>
    </div>
</footer>
</section>

		<a href="https://sydi.ru/" class="hidden"></a>
	</div>

	<div class="fixed">
		<a href="#popup-reg" class="fixed__button button">Отправить заявку</a>
	</div>

	<div hidden>
		
		<div class="popups popup-reg" id="popup-reg">
    
<form action="<?=$action?>&form=reg" class="form form_vertical">

            <div class="form__wrapper">
        <h3 class="form__title ">Оформление заказа</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Ваше имя" class="form__input"  required value="" >
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value=""  data-inputmask="'mask': '+7(###)###-##-##'" >
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="" >
    
</div><!-- form__item -->

            

            
        </div><!-- form__items -->
        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности.</a></div>
                <!--  -->
            </label>
        </div>
        <div class="form__item form__item_button"><button class="form__button button" type="submit">Оформить заказ</button></div>
    </div>
</form>

</div>
<div class="popup-menu" id="popup-menu">
   <div class="popup-menu__list"> <!-- UPH-7 -->
        <a href="#catalog" class="popup-menu__link scroll">Книги</a> <!-- UPH-7 -->
        <a href="#newspaper" class="popup-menu__link scroll">Журналы</a> <!-- UPH-7 -->
        <a href="#about" class="popup-menu__link scroll">О нас</a> <!-- UPH-7 -->
        <a href="#info" class="popup-menu__link scroll">Информация для авторов</a> <!-- UPH-7 -->
        <a href="" class="popup-menu__link lk">Личный кабинет</a>
        <a href="/lk.php" class="popup-menu__link lk-item active" data-name="personal-block">Персональные данные</a>
        <a href="/lk.php" class="popup-menu__link lk-item" data-name="orders-block">Мои заказы</a>
        <a href="#popup-lk" data-fancybox class="popup-menu__btn entry">Войти</a>
        <div class="popup-menu__btn exit">Выйти</div>
   </div> <!-- UPH-7 -->
</div>


<div class="popup-lk" id="popup-lk">
    <div class="popup-lk__tabs">
        <div class="popup-lk__tab active" id="lk-reg" data-name="lk-reg">Регистрация</div>
        <span>&nbsp;/&nbsp;</span>
        <div class="popup-lk__tab" id="lk-entry" data-name="lk-entry">Авторизация</div>
    </div>

    <div class="popup-lk__content">
        <div class="popup-lk__box active" data-name="lk-reg">
            <form action="<?=$action?>" class="popup-lk__form-reg form">
                <div class="form__wrapper">
                    <div class="form__items">
                        <div class="form__item">
                            <label class="form__label">Ваше ФИО<span>*</span></label>
                            <input name="name" type="text" class="form__input" placeholder="Фамилия имя отчество">
                        </div>
                        <div class="form__item">
                            <label class="form__label">Ваш телефон<span>*</span></label>
                            <input name="phone" type="phone" class="form__input" placeholder="Введите телефон" data-inputmask="'mask': '+7 ### ###-##-##'">
                        </div>
                        <div class="form__item">
                            <label class="form__label">Ваш емейл<span>*</span></label>
                            <input name="email" type="email" class="form__input" placeholder="Введите емейл">
                        </div>
                        <div class="form__item pass">
                            <label class="form__label">Придумайте пароль<span>*</span></label>
                            <input name="password" type="password" class="form__input password" placeholder="Введите пароль">
                            <span>Пароль должен содержать не менее 6 знаков</span>
                        </div>
                        <div class="form__item pass">
                            <label class="form__label">Повторите пароль<span>*</span></label>
                            <input name="password" type="password" class="form__input cor_password" placeholder="Повторите пароль">
                            <span class="error-message">Пароли не совпадают</span>
                        </div>
                    </div>

                    <div class="form__more">
                        <div><span>*</span> - обязательные поля для заполнения.</div>
                        <label class="form__more-inner">
                            <div class="form__more-checkbox"><input type="checkbox" name="personalDataAgree">
                                <div class="form__more-checkbox-icon lazy"></div>
                            </div>
                            <div class="form__more-text">Я даю согласие на обработку персональных данных и получение информационных рассылок, а также с политикой конфиденциальности.</div>
                        </label>
                    </div>

                    <div class="form__buttons">
                        <button class="form__button reg button-reg">Зарегистрироваться</button>
                        <span>Или</span>
                        <div class="form__button entry btn" data-name="lk-entry">Войти</div>
                    </div>
                </div>
            </form>
        </div>


        <div class="popup-lk__box" data-name="lk-entry">
            <form action="<?=$action?>" class="popup-lk__form-entry form">
                <div class="form__wrapper">
                    <div class="form__items">
                        <div class="form__item">
                            <label class="form__label">Ваш емейл<span>*</span></label>
                            <input name="email" type="email" class="form__input" placeholder="Введите емейл">
                        </div>
                        <div class="form__item">
                            <label class="form__label">Ваш пароль</label>
                            <input name="password" type="password" class="form__input" placeholder="Введите пароль">
                        </div>
                    </div>
                    <div class="form__more">
                        <label class="form__more-inner">
                            <div class="form__more-checkbox"><input type="checkbox" name="personalDataAgree">
                                <div class="form__more-checkbox-icon lazy"></div>
                            </div>
                            <div class="form__more-text">Запомнить меня</div>
                        </label>
                        <div class="form__more-forget">
                            <a href="">Забыли пароль?</a>
                        </div>
                    </div>
                    <div class="form__buttons">
                        <button href="" class="form__button entry">Войти</button>
                        <span>Или</span>
                        <div class="form__button reg btn" data-name="lk-reg">Зарегистрироваться</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
		
		<a href="http://sydi.ru" style="display: none">Synergy Digital</a>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="libs/jquery.formstyler.min.js"></script>
	<script src="libs/jquery.slimscroll.min.js"></script>
	<script src="https://syn.su/js/lander.js?v=2" defer="defer"></script>
	<script src="js/script.js"></script>
</body>

</html>
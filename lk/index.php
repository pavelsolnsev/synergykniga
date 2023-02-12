<!DOCTYPE html>


	<?php
	$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
	$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
	$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
	$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
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
	
    <link rel="stylesheet" href="css/lk.style.css">
    <link rel="stylesheet" href="css/lk.responsive.css">



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

<body class="<?= $version ? 'version-' . $version : '' ?>   page-lk">
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
    <section class="account" id="account">
    <div class="container">
        <div class="account__top">
           <span>Главная / </span>Личный кабинет
        </div>    

        <div class="account__inner">
            <div class="account__sidebar">
                <div class="account__sidebar-item lk-item active" data-name="personal-block">Персональные данные</div>
                <div class="account__sidebar-item lk-item" data-name="orders-block">Мои заказы</div>
                <button class="account__sidebar-btn">Выйти</button>
            </div>

            <div class="account__box">
                <div class="account__box-block active" data-name="personal-block"><div class="personal" id="personal">
    <div class="personal__box">

        <form action="<?=$action?>" class="personal__form form">
            <div class="form__wrapper">
            <h3 class="form__title">Контактные данные</h3>
            <div class="form__items">
                <div class="form__item">
                    <label class="form__label">Фамилия Имя Отчество</label>
                    <div class="form__box">
                        <input name="name" type="text" class="form__input" value="Константинопольский Константин Константинович" placeholder="Фамилия Имя Отчество">
                        <div class="edit-field" data-name="name"></div>
                    </div>
                </div>
                <div class="form__item">
                    <label class="form__label">Телефон</label>
                    <div class="form__box">
                        <input name="phone" type="text" class="form__input" placeholder="Телефон" data-inputmask="'mask': '+7 ### ###-##-##'" value="+7 987 452-31-47" required="" value="" aria-required="true" autocomplete="off" inputmode="tel" data-inputmasks-inited="">
                        <div class="edit-field" data-name="phone"></div>
                    </div>
                </div>
                <div class="form__item">
                    <label class="form__label">Емейл</label>
                    <div class="form__box">
                        <input name="email" type="email" class="form__input" placeholder="Емейл" value="konstantinopolsky@yandex.ru">
                        <div class="edit-field" data-name="email"></div>
                    </div>
                </div>
                <div class="form__item pass">
                    <label class="form__label">Сменить пароль</label>
                    <div class="form__box">
                        <input name="password" type="password" class="form__input password" placeholder="Введите новый пароль">
                        <div data-tooltip="Пароль должен содержать не менее 6 знаков"><img src="img/personal/question.svg" alt=""></div>
                    </div>
                </div>
                <div class="form__item pass">
                    <label class="form__label">Повторите пароль</label>
                    <div class="form__box">
                        <input name="password" type="password" class="form__input cor_password" placeholder="Повторите новый пароль">
                        <div class="error-icon"><img src="img/personal/error.svg" alt=""></div>
                    </div>
                    <span class="error-message">Пароли не совпадают</span>
                </div>
            </div>

            <button type="submit" class="form__button">Сохранить изменения</button>
            </div>
        </form>

    </div>
</div></div>
                <div class="account__box-block" data-name="orders-block">
<div class="orders" id="orders">
    <h3 class="orders__title">Данные о заказах</h3>
    <div class="orders__items">
        
        <div class="orders__box ">

            <div class="orders__box-top">
                <div class="orders__box-order">Заказ №2130 от 05.10.2022</div>
                <div class="orders__box-status not-sent">Принят, ожидается оплата</div>
            </div>

            <div class="orders__box-items">
                
                <div class="orders__item">
                    <img src="img/orders/1.jpg" alt="">
                    <div class="orders__item-box">
                        <a href="" class="orders__item-name">Трансфер спортсмена - источник дохода в индустрии спорта</a>
                        <div class="orders__item-bottom">
                            <div class="orders__item-type">Тип: мягкая обложка</div>
                            <div class="orders__item-count">Кол-во: 1</div>
                            <div class="orders__item-price">550 ₽</div>
                        </div>
                    </div>
                </div>
                
                <div class="orders__item">
                    <img src="img/orders/2.jpg" alt="">
                    <div class="orders__item-box">
                        <a href="" class="orders__item-name">Трансфер спортсмена - источник дохода в индустрии спорта</a>
                        <div class="orders__item-bottom">
                            <div class="orders__item-type">Тип: мягкая обложка</div>
                            <div class="orders__item-count">Кол-во: 1</div>
                            <div class="orders__item-price">1498 ₽</div>
                        </div>
                    </div>
                </div>
                
                <div class="orders__item">
                    <img src="img/orders/1.jpg" alt="">
                    <div class="orders__item-box">
                        <a href="" class="orders__item-name">Трансфер спортсмена - источник дохода в индустрии спорта</a>
                        <div class="orders__item-bottom">
                            <div class="orders__item-type">Тип: мягкая обложка</div>
                            <div class="orders__item-count">Кол-во: 1</div>
                            <div class="orders__item-price">1742 ₽</div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="orders__box-bottom">
                <div class="orders__box-fullprice">Итого: <span>3 550 ₽</span></div>
                <a href="" class="orders__box-pay">Оплатить</a>
                <a href="" class="orders__box-cancel">Отменить</a>
            </div>

        </div>
        
        <div class="orders__box ">

            <div class="orders__box-top">
                <div class="orders__box-order">Заказ №2130 от 05.10.2022</div>
                <div class="orders__box-status not-sent">Принят, ожидается оплата</div>
            </div>

            <div class="orders__box-items">
                
                <div class="orders__item">
                    <img src="img/orders/3.jpg" alt="">
                    <div class="orders__item-box">
                        <a href="" class="orders__item-name">Трансфер спортсмена - источник дохода в индустрии спорта</a>
                        <div class="orders__item-bottom">
                            <div class="orders__item-type">Тип: мягкая обложка</div>
                            <div class="orders__item-count">Кол-во: 1</div>
                            <div class="orders__item-price">1498 ₽</div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="orders__box-bottom">
                <div class="orders__box-fullprice">Итого: <span>1 498 ₽</span></div>
                <a href="" class="orders__box-pay">Оплатить</a>
                <a href="" class="orders__box-cancel">Отменить</a>
            </div>

        </div>
        
        <div class="orders__box ">

            <div class="orders__box-top">
                <div class="orders__box-order">Заказ №2130 от 05.10.2022</div>
                <div class="orders__box-status sent">Отправлено</div>
            </div>

            <div class="orders__box-items">
                
                <div class="orders__item">
                    <img src="img/orders/4.jpg" alt="">
                    <div class="orders__item-box">
                        <a href="" class="orders__item-name">Трансфер спортсмена - источник дохода в индустрии спорта</a>
                        <div class="orders__item-bottom">
                            <div class="orders__item-type">Тип: мягкая обложка</div>
                            <div class="orders__item-count">Кол-во: 1</div>
                            <div class="orders__item-price">548 ₽</div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="orders__box-bottom">
                <div class="orders__box-fullprice">Итого: <span>548 ₽</span></div>
                <a href="" class="orders__box-pay">Оплатить</a>
                <a href="" class="orders__box-cancel">Отменить</a>
            </div>

        </div>
        
        <div class="orders__box  hidden ">

            <div class="orders__box-top">
                <div class="orders__box-order">Заказ №2130 от 05.10.2022</div>
                <div class="orders__box-status sent">Отправлено</div>
            </div>

            <div class="orders__box-items">
                
                <div class="orders__item">
                    <img src="img/orders/4.jpg" alt="">
                    <div class="orders__item-box">
                        <a href="" class="orders__item-name">Трансфер спортсмена - источник дохода в индустрии спорта</a>
                        <div class="orders__item-bottom">
                            <div class="orders__item-type">Тип: мягкая обложка</div>
                            <div class="orders__item-count">Кол-во: 1</div>
                            <div class="orders__item-price">548 ₽</div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="orders__box-bottom">
                <div class="orders__box-fullprice">Итого: <span>548 ₽</span></div>
                <a href="" class="orders__box-pay">Оплатить</a>
                <a href="" class="orders__box-cancel">Отменить</a>
            </div>

        </div>
        
        <div class="orders__btn">Показать еще</div>
    </div>
</div></div>           
            </div>
               
        </div>


    </div>
</section>
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
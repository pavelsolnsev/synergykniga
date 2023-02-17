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

<body class="<?= $version ? 'version-' . $version : '' ?>   ">
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

		
<section class="main" id="main">
    <div class="container">
        <h1 class="main__title">Издательство<br> <span>университета</span> <span>Синергия</span></h1>
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

		
<section class="catalog" id="catalog">
	<div class="container">
		<div class="catalog__wrapper">
			<div class="container-inner">
				<h2 class="catalog__title">Книги <span>300</span></h2>
				<div class="catalog__search">
					<input type="search" placeholder="Поиск книг, авторов" name="search">
					<button type="submit">Найти</button>
				</div>
				<div class="filters-section">
    <div class="filters-section__inner">
        <div class="filters">
            <div class="filters__wrap">
                <div class="filters__group">
                    <div class="choice-delete" title="Сбросить все фильтры">
                        Удалить фильтры
                    </div>
                    <!-- Author -->
                    <div class="filter filter_author">
                        <div class="filter__name item-style">Категории</div>
                        <div class="filter__drop">
                            <div class="scrollblock">
                                <ul class="filter__list">
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>Бизнес-литература</div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>Хобби и досуг</div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>Психология </div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>Научно-популярная</div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>Медицина</div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>История</div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>Публицистика</div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>Саморазвитие</div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>Другие направления</div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>Высшее образование</div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="filter__list-item">
                                        <label class="filter__list-label">
                                            <div>Колледж</div>
                                            <div class="checkbox-box">
                                                <input type="checkbox" name="" value="" class="checkbox"><span class="checkbox-icon"></span>
                                            </div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Author -->

                <div class="choice-value item-style">
                    Бизнес-литература
                    <span class="choice-value-del" title="Сбросить фильтр"></span>
                </div>

                <div class="choice-value item-style">
                    Колледж
                    <span class="choice-value-del" title="Сбросить фильтр"></span>
                </div>

                <div class="choice-value item-style">
                    Медецина
                    <span class="choice-value-del" title="Сбросить фильтр"></span>
                </div>

                <div class="choice-value item-style">
                    Хобби и досуг
                    <span class="choice-value-del" title="Сбросить фильтр"></span>
                </div>

                <div class="choice-value item-style">
                    Психологиягия
                    <span class="choice-value-del" title="Сбросить фильтр"></span>
                </div>

            </div>
            <div class="filter_type">
                <select data-placeholder="Авторы от А до Я" class="filter_type__name">
                    <option value="Авторы от Я до А">Авторы от Я до А</option>
                    <option value="Новинки">Новинки</option>
                    <option value="Популярные">Популярные</option>
                    <option value="Сначала дешёвые">Сначала дешёвые</option>
                    <option value="Сначала дорогие">Сначала дорогие</option>
                </select>
            </div>
        </div>
    </div>
</div> <!-- books__filter -->
				<div class="catalog__cards cards" data-more-options='{"target":".cards__item", "init":8, "inittablet":8, "initmobile":4, "desktop":4, "tablet":4, "mobile":4}'>
					
					<div class="cards__item" data-more-hidden>
						<a href="/" class="cards__block">
							<div class="cards__new">Новинка</div>
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
					
					<div class="cards__item" data-more-hidden>
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
					
					<div class="cards__item" data-more-hidden>
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
					
					<div class="cards__item" data-more-hidden>
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
					
					<div class="cards__item" data-more-hidden>
						<a href="/" class="cards__block">
							<div class="cards__new">Новинка</div>
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
					
					<div class="cards__item" data-more-hidden>
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
					
					<div class="cards__item" data-more-hidden>
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
					
					<div class="cards__item" data-more-hidden>
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
					
					<div class="cards__item" data-more-hidden>
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
					
					<div class="cards__item" data-more-hidden>
						<a href="/" class="cards__block">
							<div class="cards__new">Новинка</div>
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
					
					<div class="cards__item" data-more-hidden>
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
					
					<div class="cards__item" data-more-hidden>
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
					
					<div class="cards__item" data-more-hidden>
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
				<div class="catalog__button">
					<button class="catalog__button-more button" data-more-btn>Показать ещё</button>
					<a href="/" class="catalog__button-open button">Посмотреть все книги</a>
				</div>
			</div>
		</div>
	</div>
</section>

		<section class="newspaper" id="newspaper">
    <div class="newspaper__outside">
        <div class="container-inner">
            <div class="newspaper__wrap">
                <div class="newspaper__block">
                    <h2 class="newspaper__block-title">Журналы</h2>
                    <p>Проекция абсолютной угловой скорости на оси системы координат xyz, в силу третьего закона Ньютона, искажает успокоитель качки. Ньютонометр мал. Если основание движется с постоянным ускорением, центр сил стабилизирует собственный кинетический момент.</p>
                    <a href="#main" class="newspaper__block-button button scroll">Посмотреть все журналы</a>
                </div>

                <div class="newspaper__block">
                    <ul class="newspaper__block-list">
                        <li>
                            <h3>Современная<br> конкуренция</h3>
                            <p>Научно-практический журнал</p>
                            <img src="img/newspaper/arrow.svg" alt="" class="lazy">
                        </li>
                        <li>
                            <h3>Прикладная<br> информатика</h3>
                            <p>Научно-практический журнал</p>
                            <img src="img/newspaper/arrow.svg" alt="" class="lazy">
                        </li>
                        <li>
                            <h3>Вестник<br> академии</h3>
                            <p>Научный журнал Московской академии предпринимательства при Правительстве Москвы</p>
                            <img src="img/newspaper/arrow.svg" alt="" class="lazy">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="img/newspaper/newspaper-picture.png" alt="" class="newspaper__picture lazy">
    </div>
    <div class="newspaper__fon"></div>
</section>

		<section class="about" id="about">
    <div class="container-inner">
        <h2 class="about__title">О нас</h2>
        <div class="about__content">
            <p class="about__content-subtitle desc-subtitle">&laquo;Мы&nbsp;должны перешагнуть рамки учебников, пойти неизведанными боковыми тропками и&nbsp;поведать всему миру о&nbsp;великолепии нашего путешествия&raquo;</p>
            <p class="about__content-text desc-text">&mdash;&nbsp;говорил Джон Хоуп Франклин, известный американский ученый и&nbsp;историк, заслуживший всемирное признание своим упорным трудом и&nbsp;научными работами. И&nbsp;мы&nbsp;с&nbsp;ним абсолютно согласны.</p>
            <p class="about__content-subtitle desc-subtitle">&laquo;Образование&nbsp;&mdash; то, что остается после того, как забывается все, чему учили&raquo;</p>
            <p class="about__content-text desc-text">&mdash;&nbsp;говорил великий Эйнштейн. Издательство университета &laquo;Синергия&raquo; нацелено на&nbsp;то, чтобы вы&nbsp;получили ОБРАЗОВАНИЕ!</p>
            <p class="about__content-text desc-text">Именно для вас мы&nbsp;готовим к&nbsp;печати и&nbsp;издаем широкий перечень учебной и&nbsp;научной литературы. Все выпускаемые издания в&nbsp;обязательном порядке проходят процедуру рецензирования и&nbsp;научного редактирования.</p>
            <p class="about__content-text desc-text">В&nbsp;портфель нашего издательства входят научные журналы, монографии, сборники научных трудов, учебники и&nbsp;учебные пособия для системы высшего и&nbsp;среднего профессионального образования. Вся издаваемая учебная литература соответствует федеральным государственным образовательным стандартам.</p>
            <p class="about__content-text desc-text">Издательство выпускает книги по&nbsp;следующим отраслям знаний: предпринимательство, менеджмент, маркетинг, финансы, экономика, право, бухгалтерский учет, организация торговли и&nbsp;др.</p>
            <p class="about__content-text desc-text">Наши книги вы&nbsp;можете заказать на&nbsp;нашем сайте и&nbsp;приобрести в&nbsp;библиотеке на&nbsp;площадке Семеновская, в&nbsp;киосках магазина Store Synergy, а&nbsp;также, книжных магазинах Москвы и&nbsp;крупных интернет-магазинах.</p>
        </div>
    </div>
</section>

		<section class="info" id="info">
    <div class="container-inner">
        <h2 class="info__title">Информация для авторов</h2>
        <div class="row info__box">
            <div class="col-md-4">
                <div class="info__item">
                    <img data-src="img/info/icon-1.svg" alt="" class="lazy info__img">
                    <h4 class="info__text">Справочник автора</h4>
                    <a href="/" class="info__link">Скачать</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info__item">
                    <img data-src="img/info/icon-2.svg" alt="" class="lazy info__img">
                    <h4 class="info__text">Авторский договор (публичная оферта) на&nbsp;публикацию монографии</h4>
                    <a href="/" class="info__link">Скачать</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info__item">
                    <img data-src="img/info/icon-3.svg" alt="" class="lazy info__img">
                    <h4 class="info__text">Авторский договор (публичная оферта) на&nbsp;публикацию монографии</h4>
                    <a href="/" class="info__link">Скачать</a>
                </div>
            </div>
        </div>
    </div>
</section>

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
{% from './data.njk' import data as catalog %}
<section class="catalog" id="catalog">
	<div class="container">
		<div class="catalog__wrapper">
			<div class="container-inner">
				<h2 class="catalog__title">Книги <span>300</span></h2>
				<div class="catalog__search">
					<input type="search" placeholder="Поиск книг, авторов" name="search">
					<button type="submit">Найти</button>
				</div>
				{% include 'filters/block.php' %}
				<div class="catalog__cards cards" data-more-options='{"target":".cards__item", "init":8, "inittablet":8, "initmobile":4, "desktop":4, "tablet":4, "mobile":4}'>
					{% for item in catalog %}
					<div class="cards__item" data-more-hidden>
						<a href="/" class="cards__block">
							<div class="cards__new">{{item.new | safe}}</div>
							<img src="img/cards/card/{{item.img | safe}}.png" alt="" class="lazy">
							<div class="cards__wrap">
								<div class="cards__sale">
									<div class="cards__sale-discount">
										<div>{{item.percent | safe}}</div>
										<div>{{item.discount | safe}}</div>
									</div>
									<div class="cards__sale-price">{{item.price | safe}}</div>
								</div>
								<div class="cards__description">{{item.description | safe}}</div>
							</div>
						</a>
					</div>
					{% endfor %}
				</div>
				<div class="catalog__button">
					<button class="catalog__button-more button" data-more-btn>Показать ещё</button>
					<a href="/" class="catalog__button-open button">Посмотреть все книги</a>
				</div>
			</div>
		</div>
	</div>
</section>
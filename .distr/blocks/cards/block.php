{% from './data.njk' import data as books %}
<div class="container">
    <section class="books">
        <div class="container-inner">
            <h2 class="books__title"><?= $books_title ?></h2>
            <div class="books__cards cards">
                {% for item in books %}
                <div class="cards__item">
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
        </div>
    </section>
</div>
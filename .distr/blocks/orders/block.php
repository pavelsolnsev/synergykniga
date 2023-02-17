{% from './data.njk' import data as items %}
<div class="orders" id="orders">
    <h3 class="orders__title">Данные о заказах</h3>
    <div class="orders__items">
        {% for item in items %}
        <div class="orders__box {% if loop.index > 3 %} hidden {% endif %}">

            <div class="orders__box-top">
                <div class="orders__box-order">Заказ №{{item.number | safe}} от {{item.date | safe}}</div>
                <div class="orders__box-status {{item.class | safe}}">{{item.status | safe}}</div>
            </div>

            <div class="orders__box-items">
                {% for order in item.orders %}
                <div class="orders__item">
                    <img src="img/orders/{{order.img | safe}}.jpg" alt="">
                    <div class="orders__item-box">
                        <a href="" class="orders__item-name">{{order.text | safe}}</a>
                        <div class="orders__item-bottom">
                            <div class="orders__item-type">Тип: {{order.type | safe}}</div>
                            <div class="orders__item-count">Кол-во: {{order.count | safe}}</div>
                            <div class="orders__item-price">{{order.price | safe}} ₽</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>

            <div class="orders__box-bottom">
                <div class="orders__box-fullprice">Итого: <span>{{item.fullprice | safe}} ₽</span></div>
                <a href="" class="orders__box-pay">Оплатить</a>
                <a href="" class="orders__box-cancel">Отменить</a>
            </div>

        </div>
        {% endfor %}
        <div class="orders__btn">Показать еще</div>
    </div>
</div>
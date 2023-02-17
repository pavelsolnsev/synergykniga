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
                {% include 'order/block.php' %}
            <!-- ORDER FINISH-->
        </div>
    </div>
</section>
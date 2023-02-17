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
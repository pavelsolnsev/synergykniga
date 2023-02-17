<div class="popups popup-reg" id="popup-reg">
    {{ form.form( 'reg', form_class='form_vertical', title='Оформление заказа', button='Оформить заказ', mask='+7(###)###-##-##')}}
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
        <a href="#popup-lk" data-fancybox data-options='{"touch" : false}' class="popup-menu__btn entry">Войти</a>
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
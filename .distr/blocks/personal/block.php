<div class="personal" id="personal">
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
</div>
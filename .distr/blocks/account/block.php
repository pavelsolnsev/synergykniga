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
                <div class="account__box-block active" data-name="personal-block">{% include 'personal/block.php' %}</div>
                <div class="account__box-block" data-name="orders-block">{% include 'orders/block.php' %}</div>           
            </div>
               
        </div>


    </div>
</section>
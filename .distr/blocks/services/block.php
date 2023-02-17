<section class="services" id="services">
    <div class="container">
        <div class="services__wrapper">
            <div class="container-inner">
                <!-- MAIN  -->
                <div class="services__box">
                    <div class="services__logo">
                        <img data-src="img/services/logo-services.png" alt="" class="lazy">
                    </div>
                    <div class="services__content">
                        <div class="services__head">
                            <?php if ($version != 'magazine') { ?>
                                <div class="services__head-name"><?= $services_head_name ?></div>
                            <?php }?>
                            <div class="services__head-title"><?= $services_head_title ?></div>
                            <div class="services__head-text"><?= $services_head_text ?></div>
                            <?php if ($version == 'magazine') { ?>
                                <a href="/" class="services__head-link">Другие выпуски</a>
                            <?php }?>
                        </div>
                        <div class="services__body">
                            <div class="services__body-price">
                                <div class="services__body-block active">
                                    <img data-src="img/services/icon-1.svg" alt="" class="lazy">
                                    <div>
                                        <div>Твердый<br> переплет</div>
                                        <span>340&nbsp;руб.</span>
                                    </div>
                                </div>
                                <div class="services__body-block">
                                    <img data-src="img/services/icon-2.svg" alt="" class="lazy">
                                    <div>
                                        <div>Цифровая<br> книга</div>
                                        <span>230&nbsp;руб.</span>
                                    </div>
                                </div>
                            </div>
                            <a href="/" class="services__body-button button">Читать фрагмент</a>
                        </div>
                        <ul class="services__list">
                            <li><span>Год выпуска</span><span>2018</span></li>
                            <li><span>Кол-во страниц</span><span>416</span></li>
                            <li><span>ISBN</span><span>978-5-00169-003-0</span></li>
                        </ul>
                    </div>
                </div>
                <!-- MAIN FINISH -->


                <!-- DESCRIPTION  -->
                <div class="services__desc">
                    <div class="services__desc-title">Описание</div>
                    <?= $services_desc ?>
                </div>
                <!-- DESCRIPTION  FINISH-->

            </div>

            <!-- ORDER-->
                {% include 'order/block.php' %}
            <!-- ORDER FINISH-->

        </div>
    </div>
</section>
<?php

$lander        = "https://syn.su/lander.php?r=land/index";
$land          = 'serbia';
$type          = 'univer';
$unit          = 'synergy';
$quote_id      = '';
$speaker       = '';
$program       = '';
$gtm           = '';
$title         = 'Издательство университета Синергия';
$desc          = '';

$books_title ='Новинки';

switch ($version) {
    case 'books':
        $services_head_name = 'Константин Шобанов';
        $services_head_title = 'Боль и&nbsp;удовольствие<br> в&nbsp;продажах';
        $services_head_text = 'Для истинных ценителей<br> коммерческого мазохизма';
        $services_desc = '<p class="services__desc-text desc-text">В&nbsp;последние годы тема предназначения волнует все больше людей. Исследования Института Гэллапа свидетельствуют о&nbsp;том, что 63&nbsp;% людей во&nbsp;всем мире не&nbsp;любят свою работу. А&nbsp;по&nbsp;данным ресурса Google Trends, за&nbsp;последнее десятилетие частота запроса &laquo;Предназначение&raquo; выросла в&nbsp;5&nbsp;раз.<p>
        <p class="services__desc-subtitle desc-subtitle">Выбор ниши помогает читателю осознать собственный потенциал, оценить свои умения и&nbsp;возможност<span>Цитата из&nbsp;книги &laquo;Боль и&nbsp;удовольствие в&nbsp;продажах&raquo;</span> </p>
        <p class="services__desc-text desc-text">Значит, чтобы добиться в&nbsp;жизни настоящего успеха, вы&nbsp;должны найти себя в&nbsp;первую очередь.</p>
        <p class="services__desc-text desc-text">Книга &laquo;Предназначение. Выбор ниши&raquo; помогает читателю осознать собственный потенциал, оценить свои умения и&nbsp;возможности, найти ключевые компетенции. Сочетая экономические и&nbsp;психологические знания Гарварда и&nbsp;практики Тибета, информацию в&nbsp;области менеджмента и&nbsp;бизнеса, автор книги дает методику поиска собственного бизнес-сегмента, большое внимание уделяя аспектам духовного роста личности.</p>
        <p class="services__desc-text desc-text">Книга адресована всем, кто хочет лучше понять себя, свои цели и&nbsp;возможности, задумывается</p>';

        $books_title ='Вам может понравиться';
        break;
}

switch ($version) {
    case 'magazine':
        $services_head_name = '';
        $services_head_title = 'Современная<br> конкуренция';
        $services_head_text = 'Том&nbsp;13, &#8470;&nbsp;1(73)';
        $services_desc = '<p class="services__desc-text desc-text">Научно-популярный журнал, публикует новые взгляды на&nbsp;известные исторические события, рассказы о&nbsp;знаменитых людях и&nbsp;их&nbsp;судьбах, информацию о&nbsp;научных и&nbsp;географических открытиях и&nbsp;технических достижениях.</p>';

        $books_title ='Вам может понравиться';
        break;
}

switch ($version) {
    case 'basket':

        break;
}


$action = implode(array(

    $lander,

    '&land=',  $land,
    '&unit=',  $unit,
    '&type=',  $type,
    '&version=',  $version,
    '&partner=',  $partner,
    '&speaker=',  $speaker,
    '&program=',  $program,
    '&quote_id=',  $quote_id,
    '&ignore-thanksall=true'
));

{% extends 'index.php' %}

{% block styles %}
    <link rel="stylesheet" href="css/lk.style.css">
    <link rel="stylesheet" href="css/lk.responsive.css">
{% endblock %}

{% set BASKET_CLASS = 'page-lk' %}
{% block blocks %}
	{% include 'header/block.php' %}
    {% include 'account/block.php' %}
    {% include 'footer/block.php' %}
{% endblock %}
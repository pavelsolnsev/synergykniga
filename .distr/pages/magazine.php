{% extends 'index.php' %}

{% block version %}
	<?php
	$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
	$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
	$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
	$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
    $version = 'magazine';
    include_once $ROOT . 'version.php';
	?>
{% endblock %}

{% set MAGAZINE_CLASS = 'page-magazine' %}
{% block blocks %}
	{% include 'header/block.php' %}
	{% include 'services/block.php' %}
	{% include 'cards/block.php' %}
	{% include 'contacts/block.php' %}
{% endblock %}
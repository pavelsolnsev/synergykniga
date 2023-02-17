'use strict';

/* Плагины */
const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const plugins = gulpLoadPlugins();
const browserSync = require('browser-sync').create();
const runSequence = require('run-sequence');
const del = require('del');
const combine = require('stream-combiner2').obj;
const os = require('os');
const fs = require('fs');


/* Переменные окружения */
const isDevelopment = !process.env.NODE_ENV || process.env.NODE_ENV != 'production';


/* Конфиг */
var CONFIG = {
	output: 'public', /* Корневая папка сайта */
	input: '.distr/', /* Корневая папка дистрибутива */
	pages: '.distr/pages', /* Структура сайта в дистрибутиве */
	templates: '.distr/templates', /* Шаблоны сайта в дистрибутиве */
	blocks: '.distr/blocks', /* Блоки сайта в дистрибутиве */
	proxyPortPhp: 8001, /* Прокси-порт для PHP-сервера */
	proxyPortBs: 8910, /* Прокси-порт для browserSync */
	useAutoprefixer: true, /* Autoprefixer по умолчанию выключен */
	reload: true, /* Перезагрузка браузера по умолчанию влючена */
	phpPath: '', /* Путь к локально установленному PHP (для сборки под Windows), задавать только в gulpconfig.json */
	isSourcemaps: false, /* Флаг, сохранять ли sourcemaps при локальной сборке для отладки (может замедлять сборку при большом количестве блоков и scss-файлов) */
	notify: true, /* Уведомления browserSync */
};

/* Если есть gulpconfig.json, берём параметры из него */
function loadConfig() {
	if (fs.existsSync(__dirname + '/./gulpconfig.json')) {
		let user_config = {};

		user_config = require('./gulpconfig.json');
		CONFIG = Object.assign({}, CONFIG, user_config);
		return CONFIG;
	}
}
loadConfig();


/* Задачи */

/* Задача для поднятия PHP-сервера */
gulp.task('connect', function (callback) {
	console.log('* Запуск gulp-connect-php *');

	let serverConfig = {
		base: CONFIG.output,
		port: CONFIG.proxyPortPhp
	};

	if ( os.type() == 'Windows_NT' ) {
		/* Для запуска под Windows должен быть установлен локальный PHP и путь к нему указан в gulpconfig.json */
		serverConfig.bin = CONFIG.phpPath + 'php.exe';
		serverConfig.ini = CONFIG.phpPath + 'php.ini';
	}

	plugins.connectPhp.server(serverConfig, callback);
});


/* Задача для запуска browserSync, используя в качестве прокси PHP-сервер на порту 8001 */
gulp.task('browserSync', ['connect'], function() {
	console.log('* Запуск browserSync *');

	browserSync.init({
		ui: false,
		notify: CONFIG.notify,
		proxy: '127.0.0.1:' + CONFIG.proxyPortPhp,
		open: false,
		reloadOnRestart: true,
		injectChanges: true,
		port: CONFIG.proxyPortBs
	});
});


/* Задача для очистки конечной сборки (удаляется всё в CONFIG.output) */
gulp.task('clean', function () {
	console.log('* Удаление предыдущей сборки *');

	return del(['**', '!' + CONFIG.input + '**'], {force: true, cwd: CONFIG.output});
});


/* Задача для картинок */
gulp.task('images', function () {
	console.log('* Копирование картинок *');

	return gulp.src(['**/img/**/*.*', '!{~**/**,**/~**}/img/**/*.*', '!**/img/**/{~*.*,*.ps}'], {cwd: CONFIG.blocks, dot: true})
	.pipe( plugins.changed(CONFIG.output + '/img/') )
	.pipe( plugins.rename(function (path) {
		let slash = '/';
		if ( os.type() == 'Windows_NT' ) slash = '\\';
		path.dirname = path.dirname.replace(slash + 'img', ''); /* Замена пути к картинкам для конечного пути: block/img/*.* -> img/block/*.* */
	}) )
	.pipe( gulp.dest(CONFIG.output + '/img/') )
	;
});


/* Задача для JS */
gulp.task('scripts', function () {
	console.log('* Копирование скриптов *');

	return gulp.src(['**/*.js', '!{~**/**,**/~**}/*.js', '!**/~*.js'], {cwd: CONFIG.pages, dot: true})
	.pipe( plugins.if( isDevelopment, plugins.plumber() ) )
	.pipe( plugins.include({
		includePaths: [CONFIG.blocks]
	}) )
	.pipe( gulp.dest(CONFIG.output) )
	;
});


/* Задача для CSS */
gulp.task('styles:css', function () {
	console.log('* Копирование стилей *');

	return gulp.src(['**/*.scss', '!{~**/**,**/~**}/*.scss', '!**/~*.scss'], {cwd: CONFIG.pages, dot: true})
	.pipe( plugins.if( isDevelopment && CONFIG.isSourcemaps, plugins.sourcemaps.init() ) )
	.pipe( plugins.if( isDevelopment, plugins.plumber() ) )
	.pipe( plugins.sass({
		includePaths: [CONFIG.blocks],
		indentType: 'tab',
		indentWidth: 1,
		outputStyle: 'compact',
		outputStyle: !isDevelopment ? 'compressed' : 'expanded'
	}) )
	.pipe( plugins.px2remConverter() )
	.pipe( plugins.if( CONFIG.useAutoprefixer, plugins.autoprefixer({
		browsers: ['last 1 version']
	}) ) )
	.pipe( plugins.if( isDevelopment && CONFIG.isSourcemaps, plugins.sourcemaps.write() ) )
	.pipe( gulp.dest(CONFIG.output) )
	;
});


/* Задача для рендеринга шаблонов Nunjucks */
gulp.task('nunjucks', ['styles:css', 'scripts'], function() {
	console.log('* Рендеринг шаблонов (Nunjucks) *');

	return gulp.src(['**/*.{php,njk}', '!{~**/**,**/~**}/*.{php,njk}', '!**/~*.{php,njk}'], {cwd: CONFIG.pages, dot: true})
	.pipe( plugins.if( isDevelopment, plugins.plumber() ) )
	.pipe( plugins.nunjucksRender({
		path: [CONFIG.templates, CONFIG.blocks],
		inheritExtension: true,
		throwOnUndefined: true
	})
	)
	.pipe( gulp.dest(CONFIG.output) )
	;
});


/* Задача для копирования остальных файлов */
gulp.task('other.pages', ['nunjucks'], function() {
	console.log('* Копирование остальных файлов *');

	return gulp.src(['**/**', '!**/*.{php,scss,js}', '!{~**/**,**/~**}', '!**/~*.*'], {cwd: CONFIG.pages, dot: true})
	.pipe( gulp.dest(CONFIG.output) )
	;
});


/* Задача для слежения за измениями в исходных файлах */
gulp.task('watch', function() {
	/* Копирование, когда изменились картинки  */
	gulp.watch('**/img/*.{jpg,png,gif,svg}', {cwd: CONFIG.blocks}, ['images']);

	/* Пересборка CSS, когда изменились стили  */
	gulp.watch('**/*.scss', {cwd: CONFIG.input}, ['styles:css']);

	/* Пересборка JS, когда изменились скрипты  */
	gulp.watch('**/*.js', {cwd: CONFIG.input}, ['scripts']);

	/* Пересборка HTML, когда изменились страницы, шаблоны или блоки */
	gulp.watch('**/*.{php,njk}', {cwd: CONFIG.input}, ['nunjucks']);

	/* Обработка остальных файлов */
	gulp.watch('**/*.*', {cwd: CONFIG.pages}, ['other.pages']);

	if ( CONFIG.reload ) {
		/* Перезагрузка браузера, когда что-то изменилось в сборке */
		gulp.watch(['**/*.*', '!.distr/**'], {cwd: CONFIG.input}).on('change', browserSync.reload);
	}
});


/* Задача для конечной сборки (для prod) */
gulp.task('build', function(){
	runSequence.options.ignoreUndefinedTasks = true;

	return runSequence(
		!isDevelopment ? 'clean' : null,
		'images',
		['styles:css', 'scripts', 'other.pages'],
		'nunjucks'
		);
});


/* Задача по умолчанию (для dev) */
gulp.task('default', function(){
	return runSequence(
		'build',
		'browserSync',
		'watch'
		);
});


/* Задача для сборки без поднятия сервера */
gulp.task('nosync', function(){
	return runSequence(
		'build',
		'watch'
		);
});

/* Задача для сборки без перезагрузки */
gulp.task('noreload', function(){
	CONFIG.reload = false;

	return runSequence(
		'default'
		);
});

<?php
define("COMPANY_NAME", "РОСТРУД");
define("MAIL_RESEND", "noreply@ultrakresla.ru");

//----Подключене carbon fields
//----Инструкции по подключению полей см. в комментариях themes-fields.php
include "carbon-fields/carbon-fields-plugin.php";

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	require_once __DIR__ . "/themes-fields.php";
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once('carbon-fields/vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}


// Menu ===========================================================================================================
//-----Блок описания вывода меню =========================================================================
// 1. Осмысленные названия для алиаса и для описания на русском.
// если это меню в подвали пишем - Меню в подвале 
// если в шапке то пишем - Меню в шапке 
// если 2 меню в шапке пишем  - Меню в шапке (верхняя часть)

add_action('after_setup_theme', function () {
	register_nav_menus([
		// 'menu_hot' => 'Меню актуальных предложений (рядом с каталогом)',
		'menu_main' => 'Меню основное',
		// 'menu_cat' => 'Меню каталог (в подвале)',
		// 'menu_company' => 'Меню о компании (в подвале)',
		// 'menu_corp' => 'Общекорпоративное меню (верхняя шапка)', 
	]);
});


// Добавление стилей к пунктам меню li
// add_filter('nav_menu_css_class', 'change_menu_item_css_classes', 10, 4);

// function change_menu_item_css_classes($classes, $item, $args, $depth)
// {
// 	// if ($item->ID  && 'menu_cat' === $args->theme_location) {
// 	// 	$classes[] = 'footer-top-wrap-list-item-sublist-item';
// 	// }

// 	// if ($item->ID  && 'menu_company' === $args->theme_location) {
// 	// 	$classes[] = 'footer-top-wrap-list-item-sublist-item';
// 	// }

// 	if ($item->ID  && 'menu_main' === $args->theme_location) {
// 		$classes[] = 'footer__menu-item';
// 	}

// 	return $classes;
// }


// Добавляет атрибут class к ссылке в пунктах меню menu_main
// add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
// function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
// {
// 	if (in_array($args->theme_location, ['menu_main'])) {
// 		$atts['class'] = 'header-bottom-wrap-menu-item__link';

// 		if ($item->current) {
// 			$atts['class'] .= ' menu-link--active'; //активный пункт меню
// 		}
// 	}
// 	return $atts;
// }


// Добавляет иконку к ссылкам меню, прикрепленное к области меню menu_main
// function change_menu_item_args($args)
// {
// 	if ($args->theme_location == 'menu_main') {
// 		$args->link_after = '<img src="' . get_template_directory_uri() . '/img/home/header-menu-arrow-down.svg" alt="" class="header-bottom-wrap-menu-item-down__img">';
// 	}

// 	return $args;
// }
// add_filter('nav_menu_item_args', 'change_menu_item_args');


// Добавляем класс к submenu, прикрепленное к области меню menu_main
// add_filter('nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3);

// function change_wp_nav_menu($classes, $args, $depth)
// {
// 	if ($args->theme_location == 'menu_main') {
// 		$classes[] = 'header-bottom-wrap-menu-item-submenu';
// 		// $classes[] = 'my-css-2';
// 	}

// 	return $classes;
// }


// Изменить css класс submenu 
add_filter('nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3);

function change_wp_nav_menu($classes, $args, $depth)
{
	foreach ($classes as $key => $class) {
		if ($class == 'sub-menu') {
			$classes[$key] = 'header-bottom-wrap-menu-item-submenu';
		}
	}

	return $classes;
}
// === Menu End ========================================================================================================



add_theme_support('post-thumbnails');
set_post_thumbnail_size(185, 185);

add_post_type_support('page', 'excerpt');

// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin()
{
	wp_enqueue_style("style-adm", get_template_directory_uri() . "/style-admin.css");

	wp_localize_script('jquery', 'allAjax', array(
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action('wp_enqueue_scripts', 'my_assets');
function my_assets()
{

	// Подключение стилей 

	$style_version = "1.0.1";
	$scrypt_version = "1.0.1";

	// wp_enqueue_style("style-modal", get_template_directory_uri() . "/css/jquery.arcticmodal-0.3.css", array(), $style_version, 'all'); //Модальные окна (стили)
	wp_enqueue_style("style-lightbox", get_template_directory_uri() . "/css/lightbox.min.css", array(), $style_version, 'all'); //Лайтбокс (стили)
	// wp_enqueue_style("style-slik", get_template_directory_uri() . "/css/slick.css", array(), $style_version, 'all'); //Слайдер (стили)
	// wp_enqueue_style("style-fancybox", get_template_directory_uri() . "/css/fancybox.css", array(), $style_version, 'all'); //fancybox (стили)

	wp_enqueue_style("main-style", get_stylesheet_uri(), array(), $style_version, 'all'); // Подключение основных стилей в самом конце

	// Подключение скриптов

	wp_enqueue_script('jquery'); 

	// wp_enqueue_script('amodal', get_template_directory_uri() . '/js/jquery.arcticmodal-0.3.min.js', array(), $scrypt_version, true); //Модальные окна
	// wp_enqueue_script('mask', get_template_directory_uri() . '/js/jquery.inputmask.bundle.js', array(), $scrypt_version, true); //маска для инпутов
	wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array(), $scrypt_version, true); //Лайтбокс
	// wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array(), $scrypt_version, true); //Слайдер
	// wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), $scrypt_version, true); //fancybox
	wp_enqueue_script('sender', get_template_directory_uri() . '/js/sender.js', array(), $scrypt_version, true); //Отправщик JS
	wp_enqueue_script('vendors', get_template_directory_uri() . '/js/vendors.min.js', array(), $scrypt_version, true); //Библиотеки
	// wp_enqueue_script('html2pdf', get_template_directory_uri() . '/js/html2pdf.bundle.js', array(), $scrypt_version, true); //Create PDF-page 

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), $scrypt_version, true); // Подключение основного скрипта в самом конце


	wp_localize_script('main', 'allAjax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}



// Заготовка для вызова ajax
add_action('wp_ajax_aj_fnc', 'aj_fnc');
add_action('wp_ajax_nopriv_aj_fnc', 'aj_fnc');

function aj_fnc()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}


include "sender.php"   
?>
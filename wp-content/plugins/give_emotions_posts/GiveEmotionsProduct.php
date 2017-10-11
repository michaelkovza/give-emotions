<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 10.10.2017
 * Time: 21:40
 */
?>
<?php
/*
Plugin Name: Give_emotions custom posts
Plugin URI: https://google.com/
Description:
Version: 1.0
Author: Вася Пупкин
License: GPL2
*/
?>
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

class GiveEmotionsProduct
{

	public function __construct()
	{
		add_action('init', [$this, 'wp_init']);
	}

	public function wp_init()
	{
		//Регистрируем типы постов
		register_post_type('product',
			array(
				'labels' => array(
					'name' => __('Каталог'),
					'singular_name' => __('Каталог')
				),
				'menu_position' => 5,
				'public' => true,
				'has_archive' => true,
			)
		);
	}
}

global $GiveEmotionsProduct;
$GiveEmotionsProduct = new GiveEmotionsProduct();
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
        register_post_type('slider',
            array(
                'labels' => array(
                    'name' => __('Слайдер'),
                    'singular_name' => __('Слайдер')
                ),
                'menu_position' => 5,
                'public' => true,
            )
        );
        register_post_type('gallery',
            array(
                'labels' => array(
                    'name' => __('Галерея'),
                    'singular_name' => __('Галерея')
                ),
                'menu_position' => 5,
                'public' => true,
            )
        );
        register_post_type('feedback',
            array(
                'labels' => array(
                    'name' => __('Отзывы'),
                    'singular_name' => __('Отзывы')
                ),
                'menu_position' => 5,
                'public' => true,
            )
        );
        register_post_type('additionalInfo',
            array(
                'labels' => array(
                    'name' => __('Доп. информация'),
                    'singular_name' => __('Доп. информация')
                ),
                'menu_position' => 5,
                'public' => true,
            )
        );
	}
}

global $GiveEmotionsProduct;
$GiveEmotionsProduct = new GiveEmotionsProduct();
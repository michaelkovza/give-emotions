<?php
/*
Plugin Name: Give_emotions custom posts
Plugin URI: https://htc-cs.ru/
Description:
Version: 1.0
Author: Вася Пупкин
License: GPL2
*/
?>
<?php
/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : mzavoiskikh@htc-cs.ru)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
add_action('init', 'create_product_post_type');
add_action('init', 'create_feedback_post_types');
function create_product_post_type()
{
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

function create_feedback_post_types()
{
	register_post_type('feedback', array(
		'public' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'has_archive' => true,
		'publicly_queryable' => true,
		'labels' => array(
			'name' => 'Отзывы',
			'all_items' => 'Отзывы'
		),
	));
}
?>
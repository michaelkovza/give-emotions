<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 08.10.2017
 * Time: 20:35
 */

use GiveEmotionsProduct\GiveEmotionsProduct;

add_action('wp_enqueue_scripts', 'my_assets');
add_action('wp_head', 'js_variables');

if (wp_doing_ajax()) {
    add_action('wp_ajax_get_post_info', 'getPostInfo');
    add_action('wp_ajax_nopriv_get_post_info', 'getPostInfo');
}

function my_assets()
{
    wp_register_script('index_js', get_stylesheet_directory_uri() . '/front/build/index.js', null, null, true);
    wp_enqueue_script('index_js');

    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/front/build/index.css');
}

function js_variables()
{
    $variables = array(
        'ajax_url' => admin_url('admin-ajax.php'),
    );
    echo('<script type="text/javascript">window.wp_data = ' . json_encode($variables) . ';</script>');
}

function getPostInfo()
{
    $postID = $_REQUEST['postId'];
    if ($postID) {
        $product = new GiveEmotionsProduct();

        $result = [
            'productInfo' => $product->getProductInfoById($postID)
        ];
    } else {
        $result = ['error' => 'Can\'t find product with id ' . $postID];
    }

    header('Access-Control-Allow-Origin: *');
    echo json_encode($result);
    wp_die();
}

//Добавляем фильтры
add_filter( 'wpcf7_validate_tel*', 'dco_wpcf7_validate', 10, 2 );

function dco_wpcf7_validate( $result, $tag ) {
    //Получаем параметры тега
    $tag = new WPCF7_FormTag( $tag );

    //Получаем значение поля
    $value = isset( $_POST[ $tag->name ] ) ? trim( wp_unslash( strtr( (string) $_POST[ $tag->name ], "\n", " " ) ) ) : '';

    if (
        $tag->basetype === 'tel' &&
        ( ( $value !== '' && ! preg_match( '/(^\+?[78]\s?\(?\d{3}\)?\s?\d{3}\s?\d{2}\s?\d{2}$)/', $value ) ) ||
          $value === '' ) ) {
        $result->invalidate( $tag, 'Введенный номер телефона не валиден. Попробуйте снова.');
    }
    return $result;
}

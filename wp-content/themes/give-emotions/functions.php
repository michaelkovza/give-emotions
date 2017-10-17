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
    $postID = $_POST['postId'];
    if ($postID) {
        $product = new GiveEmotionsProduct();

        $result = [
            'productInfo' => $product->getProductInfoById($postID)
        ];
    } else {
        $result = ['error' => 'Can\'t find product with id ' . $postID];
    }
    sendJsonResponse($result);
}

/**
 * @param $data
 */
function sendJsonResponse($data)
{
    if ($data['error']) {
        http_response_code(500);
    }
    header('Content-Type: application/json');
    echo json_encode($data);
    wp_die();
}
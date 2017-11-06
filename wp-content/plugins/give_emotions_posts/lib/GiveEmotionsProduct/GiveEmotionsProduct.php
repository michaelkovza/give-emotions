<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 10.10.2017
 * Time: 21:50
 */

namespace GiveEmotionsProduct;

/**
 * Class GiveEmotionsProduct
 * @package GiveEmotionsProduct
 */
class GiveEmotionsProduct
{
    /**
     * @var string
     */
    private $postType = 'product';

    /**
     * @param $id
     *
     * @return array|mixed|null
     */
    public function getProductInfoById($id)
    {
        $args   = [
            'p' => $id
        ];
        $result = $this->getProductsFromArgs($args);
        if ( ! empty($result)) {
            if (count($result) === 1) {
                return $result;
            }

            return array_pop($result);
        }

        return null;
    }

    /**
     * @param array $args
     *
     * @return array
     */
    public function getProductsFromArgs(array $args = [])
    {
        $args = array_merge($args, [
            'post_type' => $this->postType,
            'meta_key' => 'order',
            'orderby' => 'meta_value',
            'order' => 'ASC'
        ]);
        $query = new \WP_Query();
        $queriedPosts = $query->query($args);
        if (empty($queriedPosts)) {
            return [];
        }
        $products = [];
        /** @var $post \WP_Post */
        foreach ($queriedPosts as $post) {
            $products[$post->ID] = [
                'title' => $post->post_title,
            ];

            $additionalFields = get_field_objects($post->ID);
            foreach ($additionalFields as $name => $valueObject) {
                $products[$post->ID][$name] = $valueObject['value'];
            }

            $gallery = get_post_gallery( $post->ID, false );
            $ids = explode( ',', $gallery['ids'] );
            $imageLinks = [];
            foreach( $ids as $id ) {
                $imageLinks [] = wp_get_attachment_url( $id );
            }

            $products[$post->ID]['gallery'] = $imageLinks;
        }
        wp_reset_postdata();

        return $products;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 17.10.2017
 * Time: 21:31
 */

namespace GiveEmotionsProduct;

/**
 * Class GiveEmotionsSlider
 * @package GiveEmotionsProduct
 */
class GiveEmotionsSlider
{
    /**
     * @var string
     */
    private $postType = 'slider';

    /**
     * @return array|null
     */
    public function getSliderImages()
    {
        $args = ['post_type' => $this->postType];
        $query = new \WP_Query('orderby=date&order=DESC');
        $queriedPosts = $query->query($args);
        if ( ! empty($queriedPosts)) {
            /** @var $post \WP_Post */
            $post = array_pop($queriedPosts);

            $gallery = get_post_gallery( $post->ID, false );
            $ids = explode( ',', $gallery['ids'] );
            $imageLinks = [];
            foreach( $ids as $id ) {
                $imageLinks [] = wp_get_attachment_url( $id );
            }
            return $imageLinks;
        }

        return null;
    }
}
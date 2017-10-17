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

            return get_post_gallery_images($post->ID);
        }

        return null;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 22.11.2017
 * Time: 20:38
 */

namespace GiveEmotionsProduct;


class GiveEmotionsAdditionalInfo
{
    private $postType = 'additionalInfo';

    /**
     * @return array|null
     */
    public function getInfo()
    {
        $args = ['post_type' => $this->postType];
        $query = new \WP_Query('orderby=date&order=DESC');
        $queriedPosts = $query->query($args);
        if ( ! empty($queriedPosts)) {
            /** @var $post \WP_Post */
            $post = array_pop($queriedPosts);
            $additionalFields = get_field_objects($post->ID);
            $info = [];
            foreach ($additionalFields as $name => $valueObject) {
                $info[$name] = $valueObject['value'];
            }

            wp_reset_postdata();

            return $info;
        }

        return null;
    }
}
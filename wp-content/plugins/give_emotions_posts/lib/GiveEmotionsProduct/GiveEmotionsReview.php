<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 17.10.2017
 * Time: 21:13
 */

namespace GiveEmotionsProduct;

/**
 * Class GiveEmotionsReview
 * @package GiveEmotionsProduct
 */
class GiveEmotionsReview
{
    /**
     * @var string
     */
    private $postType = 'feedback';

    /**
     * @param array $args
     *
     * @return array|null
     */
    public function getReviews(array $args = [])
    {
        $args = array_merge($args, ['post_type' => $this->postType]);
        $query = new \WP_Query();
        $queriedPosts = $query->query($args);
        if (empty($queriedPosts)) {
            return null;
        }
        $reviews = [];
        /** @var $post \WP_Post */
        foreach ($queriedPosts as $post) {
            $reviews[$post->ID] = [
                'author' => $post->post_title,
                'review' => $post->post_content,
            ];

            $additionalFields = get_field_objects($post->ID);
            foreach ($additionalFields as $name => $valueObject) {
                $reviews[$post->ID][$name] = $valueObject['value'];
            }
        }
        wp_reset_postdata();

        return $reviews;
    }
}
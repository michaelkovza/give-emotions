<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 10.10.2017
 * Time: 21:50
 */

namespace GiveEmotionsProduct;

class GiveEmotionsProduct
{

    /**
     * @var \WP_Post
     */
    private $post;
    private $additionalFields;

    /**
     * @param array $args
     */
    public function __construct(array $args = [])
    {
        $args['post_type'] = 'product';
        $query = new \WP_Query($args);
        $this->post = new \WP_Post($query->post);
        $this->additionalFields = get_field_objects($this->post->ID);
    }

    public function __get($name)
    {
        return ($postValue = $this->getPostValue($name)) ? $postValue : $this->getCustomFieldValue($name);
    }

    private function getPostValue($name)
    {
        if ($name === 'title') {
            return $this->post->post_title;
        }

        return null;
    }

    private function getCustomFieldValue($name)
    {
        return isset($this->additionalFields->$name) ? $this->additionalFields->$name->value : null;
    }

    public function getGalleryImages()
    {
        return get_post_gallery_images($this->post->ID);
    }

    public function getProductInfo()
    {
        $info = [];
        $info['productName'] = $this->getPostValue('title');
        foreach ( $this->additionalFields as $field) {
            $info[$field->name] = $field->value;
        }

        return $info;
    }
}

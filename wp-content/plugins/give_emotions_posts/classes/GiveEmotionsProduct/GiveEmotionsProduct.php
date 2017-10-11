<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 10.10.2017
 * Time: 21:50
 */

namespace GiveEmotions;

class GiveEmotionsProduct {

	/**
	 * @var \WP_Post
	 */
	private $post;

	/**
	 * @param array $args
	 */
	public function __construct(array $args = [] ) {
		$args['post_type'] = 'product';
		$query = new \WP_Query($args);
		$this->post = new \WP_Post($query->post);
	}

	public function __get( $name ) {
		return ($postValue = $this->getPostValue( $name )) ? $postValue : $this->getCustomFieldValue( $name );
	}

	private function getPostValue( $name ) {
		if ( $name === 'title' ) {
			return $this->post->post_title;
		}

		return null;
	}

	private function getCustomFieldValue( $name ) {
		return ($value = get_field( $name )) ? $value : null;
	}
}
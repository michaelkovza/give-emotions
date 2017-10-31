<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 31.10.2017
 * Time: 21:09
 */

use GiveEmotionsProduct\GiveEmotionsReview;

$review = new GiveEmotionsReview();
?>
<div class="information-modal-overlay-wrapper information-modal-overlay-wrapper--closed" id="modal-comments">
    <div class="information-modal-overlay-wrapper__modal-overlay information-modal-overlay-wrapper-modal-overlay modal-overlay-reviews"
         id="modal-close-comments">
        <div class="information-modal-overlay-wrapper-modal-overlay__modal modal-overlay-reviews__modal modal-reviews">
            <h1 class="modal-reviews__title title">Отзывы</h1>
            <button class="modal-reviews__close-button" id="comments-close-button">
            </button>
            <div class="modal-reviews__slider modal-reviews-slider">
                <?php
                $postsCount = 1;
                $reviews = $review->getReviews();
                foreach ($reviews as $review):?>
                    <?php if ($postsCount % 2 !== 0) : ?>
                    <div class="modal-reviews-slider__item">
                        <div class="modal-reviews__card">
                            <img class="modal-reviews__image" src="<?= $review['photo']; ?>" alt="Photo">
                            <div class="modal-reviews__content-wrapper">
                                <p class="modal-reviews__content content"><?= $review['review']; ?></p>
                                <h1 class="modal-reviews__name title"><?= $review['author']; ?></h1>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="modal-reviews__card modal-reviews__card--order">
                            <img class="modal-reviews__image" src="<?= $review['photo']; ?>" alt="Photo">
                            <div class="modal-reviews__content-wrapper">
                                <p class="modal-reviews__content content"><?= $review['review']; ?></p>
                                <h1 class="modal-reviews__name title"><?= $review['author']; ?></h1>
                            </div>
                        </div>
                    </div>
                    <?endif;
                $postsCount++;
                endforeach;
                if ($postsCount % 2 !== 0):?>
                    </div>
                <?endif;?>
            </div>
        </div>
    </div>
</div>

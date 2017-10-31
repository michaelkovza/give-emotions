<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 31.10.2017
 * Time: 20:58
 */

use GiveEmotionsProduct\GiveEmotionsGallery;

$gallery = new GiveEmotionsGallery();

?>
<div class="information-modal-overlay-wrapper information-modal-overlay-wrapper--closed" id="modal-gallery">
    <div class="information-modal-overlay-wrapper__modal-overlay information-modal-overlay-wrapper-modal-overlay modal-overlay-gallery"
         id="modal-close-gallery">
        <div class="information-modal-overlay-wrapper-modal-overlay__modal information-modal-overlay-wrapper-modal-overlay__modal--slider modal-overlay-gallery__modal modal-gallery">
            <h1 class="modal-gallery__title title">Галерея</h1>
            <button class="modal-gallery__close-button" id="gallery-close-button">
            </button>
            <div class="modal-gallery__slider modal-gallery-slider">
                <?php
                $imageCount = 0;
                $galleryImages = $gallery->getGalleryImages();
                foreach ($galleryImages as $galleryImage):?>
                <?php if (($imageCount+1) % 6 != 0):?>
                <div class="modal-gallery-slider__item">
                    <div class="modal-gallery__wrapper">
                        <?php endif; ?>
                        <div class="modal-gallery__image-wrapper">
                            <img class="modal-gallery__image" src="<?= $galleryImage ?>" alt="modal gallery image">
                        </div>
                    <?php if ($imageCount % 6 != 0):?>
                        </div>
                        </div>
                    <?php endif;?>
                    <?php $imageCount++;
                endforeach;
                ?>
            </div>
        </div>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 31.10.2017
 * Time: 21:07
 */

use GiveEmotionsProduct\GiveEmotionsSlider;

$slider = new GiveEmotionsSlider();
?>
<div class="wrapper">
    <div class="wrapper__content wrapper__content--vertical-padding">
        <div class="lamp">
            <div class="lamp__slider lamp-slider">
                <?php
                $sliderImages = $slider->getSliderImages();
                foreach ($sliderImages as $sliderImage):?>
                    <div class="lamp__slider-item lamp-slider__item">
                        <img class="lamp__image lamp-slider__image" src="<?= $sliderImage?>" alt="First lamp">
                    </div>
                    <?php
                endforeach; ?>

            </div>
        </div>
    </div>
</div>

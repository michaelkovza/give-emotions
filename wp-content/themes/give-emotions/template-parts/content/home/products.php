<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 31.10.2017
 * Time: 21:08
 */

use GiveEmotionsProduct\GiveEmotionsProduct;

$products = new GiveEmotionsProduct();
?>
<div class="wrapper">
    <div class="wrapper__content wrapper__content--galery-width">
        <div class="gallery" id="catalog">
            <ul class="gallery__list">
                <?php
                $allProducts = $products->getProductsFromArgs();
                foreach ($allProducts as $id => $product):?>
                <li class="gallery__item" id="<?= $id ?>">
                    <div class="gallery__image-wrapper">
                        <img class="gallery__image" src="<?= $product['main_image'] ?>" alt="<?= $product['title'] ?>">
                        <img class="gallery__image gallery__image--hover"
                             src="<?= $product['background_image']?>">
                    </div>
                    <article class="gallery__description">
                        <h1 class="gallery__title title"><?= $product['title'] ?></h1>
                        <p class="gallery__price title"><?= $product['price'] ?><span class="gallery__currency">&nbsp;руб</span>
                        </p>
                    </article>
                    <button class="gallery__button title">просмотр</button>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

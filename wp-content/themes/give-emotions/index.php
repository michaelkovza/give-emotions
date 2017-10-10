<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 08.10.2017
 * Time: 19:50
 */

//$tes = new WP_Post();
$productArgs = [
	'post_type' => 'product',
	'suppress_filters' => true,
];
$galleryArgs = [
	'post_type' =>'gallery'
];
$products = new WP_Query($productArgs);
$gallery = new WP_Query($galleryArgs);

get_header();?>
<div class="wrapper">
	<div class="wrapper__content">
		<header class="header">
			<img class="header__white-box" src="<?= get_stylesheet_directory_uri() . '/front/build'?>/images/white-box.png" alt="white box image">
			<img class="header__give-emotions" src="<?= get_stylesheet_directory_uri() . '/front/build'?>/images/give-emotions.png" alt="give emotions image">
			<div class="header__content header-content">
				<p class="header-content__text header-content__text--accent">ОРИГИНАЛЬНЫЙ СВЕТИЛЬНИК-НОЧНИК ОТ&nbsp;ПРОИЗВОДИТЕЛЯ</p>
				<p class="header-content__text">ДОСТАВКА ПО&nbsp;ВСЕЙ РОССИИ</p>
			</div>
			<div class="header__contacts header-contacts">
				<ul class="header-contacts__list">
					<li class="header-contacts__item">+8 (999) 362-6000</li>
					<li class="header-contacts__item header-contacts__links-wrapper">
						<a class="header-contacts__link" href="#" title="Viber">
							<img class="header-contacts__image" src="<?=get_stylesheet_directory_uri() . '/front/build'?>/images/viber.svg" alt="viber logo">
						</a>
						<a class="header-contacts__link" href="#" title="Telegram">
							<img class="header-contacts__image" src="<?=get_stylesheet_directory_uri() . '/front/build'?>/images/telegram.svg" alt="telegram logo">
						</a>
						<a class="header-contacts__link" href="#" title="Whatsapp">
							<img class="header-contacts__image" src="<?=get_stylesheet_directory_uri() . '/front/build'?>/images/whatsapp.svg" alt="whatsapp logo">
						</a>
					</li>
					<li class="header-contacts__item header-contacts__item--border-bottom">24&nbsp;часа</li>
					<li class="header-contacts__item">
						<a class="header-contacts__link" href="mailto:InWhiteBox@gmail.com"
						   title="InWhiteBox@gmail.com">InWhiteBox@gmail.com</a>
					</li>
				</ul>
			</div>
		</header>
	</div>
</div>
<div class="wrapper wrapper--with-border">
	<div class="wrapper__content">
		<nav class="navigate">
			<ul class="navigate__list">
				<li class="navigate__item">
					<a class="navigate__link content" href="#" title="Главная">Главная</a>
				</li>
				<li class="navigate__item">
					<a class="navigate__link content" href="#" title="Каталог">Каталог</a>
				</li>
				<li class="navigate__item">
					<a class="navigate__link content" href="#" title="Информация">Информация</a>
				</li>
				<li class="navigate__item">
					<a class="navigate__link content" href="#" title="Доставка и Оплата">Доставка и Оплата</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
<div class="wrapper">
	<div class="wrapper__content wrapper__content--vertical-padding">
		<div class="lamp">
			<div class="lamp__slider lamp-slider">
				<?php
                while ($gallery->have_posts()):
				    $gallery->the_post();
				    $galleryImages = get_post_gallery_images();

				    foreach($galleryImages as $galleryImage):?>
				        <div class="lamp__slider-item lamp-slider__item">
					        <img class="lamp__image lamp-slider__image" src = "<?php echo $galleryImage?>">
				        </div>
				<?php
                    endforeach;
                endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</div>
<div class="wrapper">
	<div class="wrapper__content wrapper__content--width">
		<div class="gallery">
			<ul class="gallery__list">
				<?php while($products->have_posts()):
					$products->the_post()?>
				<li class="gallery__item">
					<div class="gallery__image-wrapper">
						<img class="gallery__image" src="<?= get_field('main_image') ?>" alt="<?php echo get_the_title() ?>">
					</div>
					<article class="gallery__description">
						<h1 class="gallery__title title"><?php the_title()?></h1>
						<p class="gallery__price title"><?= get_field('price')?><span class="gallery__currency">&nbsp;руб</span>
						</p>
					</article>
					<button class="gallery__button title">просмотр</button>
				</li>
				<?php endwhile; wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>
</div>
<div class="wrapper wrapper--with-border">
	<div class="wrapper__content">
		<nav class="navigate">
			<ul class="navigate__list">
				<li class="navigate__item">
					<a class="navigate__link content" href="#" title="Главная">Главная</a>
				</li>
				<li class="navigate__item">
					<a class="navigate__link content" href="#" title="Каталог">Каталог</a>
				</li>
				<li class="navigate__item">
					<a class="navigate__link content" href="#" title="Информация">Информация</a>
				</li>
				<li class="navigate__item">
					<a class="navigate__link content" href="#" title="Доставка и Оплата">Доставка и Оплата</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
<div class="wrapper">
	<div class="wrapper__content">
		<footer class="footer">
			<h1 class="footer__title content">Мы&nbsp;в&nbsp;социальных сетях:</h1>
			<ul class="footer__list">
				<li class="footer__item">
					<a class="footer__link" href="#" title="instagram">
						<img class="footer__image" src="<?=get_stylesheet_directory_uri() . '/front/build'?>/images/inst-wb.svg" alt="instagram">
					</a>
				</li>
				<li class="footer__item">
					<a class="footer__link" href="#" title="facebook">
						<img class="footer__image"
						     src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiI+DQogIDxpbWFnZSBpZD0i0KHQu9C+0LlfMyIgZGF0YS1uYW1lPSLQodC70L7QuSAzIiB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHhsaW5rOmhyZWY9ImRhdGE6aW1nL3BuZztiYXNlNjQsaVZCT1J3MEtHZ29BQUFBTlNVaEVVZ0FBQUNBQUFBQWdDQU1BQUFCRXBJckdBQUFBQkdkQlRVRUFBTEdQQy94aEJRQUFBQ0JqU0ZKTkFBQjZKZ0FBZ0lRQUFQb0FBQUNBNkFBQWRUQUFBT3BnQUFBNm1BQUFGM0NjdWxFOEFBQUFjbEJNVkVVQUFBQlpXVmxaV1ZsWldWbFpXVmxaV1ZsWldWbFlXRmhnWUdCWVdGaFpXVmxiVzF0WldWbGFXbHBhV2xwWldWbFpXVmxaV1ZsaVltSlpXVmxaV1ZsWldWbFpXVmxhV2xwTlRVMVpXVmxaV1ZsWldWbFpXVmxaV1ZsWldWbFpXVmxaV1ZsWldWbG1abVpaV1ZsWldWa0FBQUJ1WjdxeEFBQUFKSFJTVGxNQSt0TEl5ZE5BQndpcDRRNXBNeHFIc0xJTHErZm84NWdFaWFUZ05sZDVtdXhnQTlGU3pIaTVBQUFBQVdKTFIwUUFpQVVkU0FBQUFBbHdTRmx6QUFBTEV3QUFDeE1CQUpxY0dBQUFBSE5KUkVGVU9NdnQwTWNLZ0RBTWdPRm8zYlB1dlgzL1p6VDFKRWdOS09MRi94VElSNkNGbFFpK0FvcktHTk9rUURkTXdDd1pzUGUxSERndVhBTVBDT0NMWlJCeUhrbEFMRUJ5OFV4TGdKUUMyVTJRRjFncFFJVkRmUVlOSEdzcDBGR2dwOEJ3QnVPRXpmdDVISlkzL3VFSEQ4QUd6OHQwVi9MejVOUUFBQUFBU1VWT1JLNUNZSUk9Ii8+DQo8L3N2Zz4NCg=="
						     alt="facebook">
					</a>
				</li>
				<li class="footer__item">
					<a class="footer__link" href="#" title="vk">
						<img class="footer__image" src="<?=get_stylesheet_directory_uri() . '/front/build'?>/images/vk-wb.svg" alt="vk">
					</a>
				</li>
			</ul>
		</footer>
	</div>
</div>
<div class="wrapper wrapper--colontitle">
	<div class="wrapper__content">
		<p class="colontitle">Created with &#10084; by&nbsp;<a class="colontitle__link"
		                                                       href="https://vk.com/prettyboyheaven"
		                                                       title="https://vk.com/prettyboyheaven" target="_blank">Prettyboyheaven</a>
		</p>
	</div>
</div>
<div class="wrapper">
	<div class="wrapper__content wrapper__content--card">
		<div class="modal-overlay modal-overlay--closed">
			<div class="modal-overlay__modal modal">
				<div class="modal__card card">
					<ul class="card__list">
						<li class="card__item card__item--width card__item--margin-right">
							<img class="card__large-image" src="<?=get_stylesheet_directory_uri() . '/front/build'?>/images/house.png" alt="house image">
							<div class="card__slider card-slider">
								<?php //for?>
								<img class="card__small-image card-slider__item" src="<?=get_stylesheet_directory_uri() . '/front/build'?>/images/house.png"
								     alt="house image">
								<?php //end?>
							</div>
						</li>
						<li class="card__item card__item--relative">
							<button class="card__close-button modal-overlay__close-button">
							</button>
							<article class="card__article">
								<h1 class="card__title main-title">светитльник</h1>
								<p class="card__subtitle content">такой-то такой</p>
								<p class="card__content content">В&nbsp;линейке пока только 5&nbsp;разных моделей. Ждем
									студийных фотографий, они должны быть готовы на&nbsp;следующей неделе.</p>
								<p class="card__content content">В&nbsp;линейке пока только 5&nbsp;разных моделей. Ждем
									студийных фотографий, они должны быть готовы на&nbsp;следующей неделе.</p>
								<p class="card__content content">В&nbsp;линейке пока только 5&nbsp;разных моделей. Ждем
									студийных фотографий, они должны быть готовы на&nbsp;следующей неделе.</p>
								<p class="card__price title">1800<span class="card__currency">&nbsp;руб</span>
								</p>
							</article>
							<p class="card__offer title">Закажи прямо сейчас!</p>
							<button class="card__button title">купить</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
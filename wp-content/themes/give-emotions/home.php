<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 08.10.2017
 * Time: 19:50
 */

use GiveEmotionsProduct\GiveEmotionsAdditionalInfo;

$additionalInfoRepository = new GiveEmotionsAdditionalInfo();
$additionalInfo = $additionalInfoRepository->getInfo();
get_header();?>
    <div class="wrapper">
        <div class="wrapper__content">
            <header class="header">
                <img class="header__white-box"
                     src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/white-box.png"
                     alt="white box image">
                <img class="header__give-emotions"
                     src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/give-emotions.png"
                     alt="give emotions image">
                <div class="header__content header-content content">
                    <p class="header-content__text header-content__text--accent">ОРИГИНАЛЬНЫЙ СВЕТИЛЬНИК-НОЧНИК ОТ&nbsp;ПРОИЗВОДИТЕЛЯ</p>
                    <p class="header-content__text">ДОСТАВКА ПО&nbsp;ВСЕЙ РОССИИ</p>
                </div>
                <div class="header__contacts header-contacts">
                    <ul class="header-contacts__list content">
                        <li class="header-contacts__item">
                            <a class="header-contacts__phone" href="tel:89993626000">+8 (999) 362-6000</a>
                        </li>
                        <li class="header-contacts__item header-contacts__links-wrapper">
                            <img class="header-contacts__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>/images/viber.svg" alt="viber logo">
                            <img class="header-contacts__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>/images/telegram.svg" alt="telegram logo">
                            <img class="header-contacts__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>/images/whatsapp.svg" alt="whatsapp logo">
                        </li>
                        <li class="header-contacts__item header-contacts__item--border-bottom">24&nbsp;часа</li>
                        <li class="header-contacts__item">
                            <a class="header-contacts__link" href="mailto:Inwbox@mail.ru"
                               title="InWhiteBox@gmail.com">Inwbox@mail.ru</a>
                        </li>
                    </ul>
                </div>
            </header>
        </div>
    </div>
    <div class="wrapper wrapper--with-border js-fixed-navigate">
        <?php require_once(get_template_directory() . '/template-parts/content/home/menu.php') ?>
    </div>

    <?php require_once(get_template_directory() . '/template-parts/content/home/slider.php') ?>
    <?php require_once(get_template_directory() . '/template-parts/content/home/products.php') ?>

    <div class="wrapper">
        <div class="wrapper__content">
            <div class="delivery" id="delivery">
                <h1 class="delivery__title title">доставка и&nbsp;оплата</h1>
                <ul class="delivery__list delivery-list">
                    <li class="delivery-list__item">
                        <div class="delivery-list__image-wrapper">
                            <img class="delivery-list__image delivery-list__image--curriculum" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/curriculum.svg"
                                 alt="curriculum image">
                        </div>
                        <p class="delivery-list__content content">Для оформления заказа необходимо оставить заявку на нашем сайте, наши менеджеры свяжутся с вами в течении 30 минут. </p>
                    </li>
                    <li class="delivery-list__item">
                        <div class="delivery-list__image-wrapper">
                            <img class="delivery-list__image delivery-list__image--curriculum" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/wallet.svg"
                                 alt="wallet image">
                        </div>
                        <p class="delivery-list__content content">Оплатить заказ возможно через такие платежные сервисы как:
                            &laquo;Сбербанк Онлайн&raquo;, Qiwi, Яндекс деньги, наложенным платежом (при получении
                            товара).</p>
                    </li>
                    <li class="delivery-list__item">
                        <div class="delivery-list__image-wrapper">
                            <img class="delivery-list__image delivery-list__image--dropbox" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/dropbox-logo.svg"
                                 alt="dropbox image">
                        </div>
                        <p class="delivery-list__content content">Светильник надежно упаковывается в&nbsp;пенопласт и&nbsp;гофрированный
                            картон. Изготовление и&nbsp;отгрузка в&nbsp;течение 1-2 рабочих дней.</p>
                    </li>
                    <li class="delivery-list__item">
                        <div class="delivery-list__image-wrapper">
                            <img class="delivery-list__image delivery-list__image--fast-delivery"
                                 src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/fast-delivery.svg" alt="fast-delivery image">
                        </div>
                        <p class="delivery-list__content content">Заказы отправляем службами доставки: СДЭК, ПЭК, Деловые
                            Линии, &laquo;Байкал Сервис&raquo; или &laquo;Почта России&raquo; по&nbsp;пожеланию клиента.
                            Доставка до&nbsp;пункта самовывоза, обычно, не&nbsp;превышает 300&nbsp;руб. Рассчитать точную
                            сумму доставки вам помогут наши операторы.</p>
                    </li>
                    <li class="delivery-list__item">
                        <div class="delivery-list__image-wrapper">
                            <img class="delivery-list__image delivery-list__image--earth" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/earth.svg"
                                 alt="earth image">
                        </div>
                        <p class="delivery-list__content content">Мы&nbsp;работаем&nbsp;По всей территории России, а&nbsp;так&nbsp;же
                            странам ближнего зарубежья.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="wrapper__content wrapper__content--inforamtion-width">
            <div class="information" id="information">
                <h1 class="information__title title">информация</h1>
                <ul class="information__list information-list">
                    <li class="information-list__item information-list__item--lamp" id="lamp-button">
                        <div class="information-list__image-wrapper">
                            <img class="information-list__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/stars.svg" alt="stars image">
                        </div>
                        <h2 class="information-list__title title">Светильник-ночник</h2>
                        <button class="information-list__button title">Узнать подробности</button>
                    </li>
                    <li class="information-list__item information-list__item--contacts" id="contacts-button">
                        <div class="information-list__image-wrapper">
                            <img class="information-list__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/world.svg" alt="world image">
                        </div>
                        <h2 class="information-list__title title">Контакты</h2>
                        <button class="information-list__button title">Узнать подробности</button>
                    </li>
                    <li class="information-list__item information-list__item--comments" id="comments-button">
                        <div class="information-list__image-wrapper">
                            <img class="information-list__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/conversation.svg" alt="conversation image">
                        </div>
                        <h2 class="information-list__title title">Отзывы</h2>
                        <button class="information-list__button title">Узнать подробности</button>
                    </li>
                    <li class="information-list__item information-list__item--gallery" id="gallery-button">
                        <div class="information-list__image-wrapper">
                            <img class="information-list__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/gallery.svg" alt="gallery image">
                        </div>
                        <h2 class="information-list__title title">Галерея</h2>
                        <button class="information-list__button title">Узнать подробности</button>
                    </li>
                </ul>
                <div class="information__offer">
                    <p class="information__offer-content title">Закажи прямо сейчас!</p>
                    <button class="information__offer-button title js-open-form-button">Купить</button>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper--with-border hide-on-mobile">
        <?php require_once(get_template_directory() . '/template-parts/content/home/menu.php') ?>
    </div>
    <div class="wrapper">
        <div class="wrapper__content">
            <footer class="footer">
                <h1 class="footer__title content">Мы&nbsp;в&nbsp;социальных сетях:</h1>
                <ul class="footer__list">
                    <li class="footer__item">
                        <a class="footer__link" href="https://www.instagram.com/inwbox/" target="_blank" title="instagram">
                            <img class="footer__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/instagram.svg" alt="instagram">
                        </a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__link" href="https://vk.com/inwhitebox" target="_blank" title="vk">
                            <img class="footer__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/vk.svg" alt="vk">
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
                                                                   title="https://vk.com/prettyboyheaven"
                                                                   target="_blank">Prettyboyheaven</a>
            </p>
        </div>
    </div>
    <div class="modal-overlay modal-overlay--closed">
        <div class="modal-overlay__modal modal">
            <div class="modal__card card">
                <ul class="card__list">
                    <li class="card__item card__item--width card__item--margin-right">
                        <img class="card__large-image js-modal-photo" src="" alt="house image">
                        <div class="card__slider card-slider"></div>
                    </li>
                    <li class="card__item card__item--relative">
                        <button class="card__close-button modal-overlay__close-button">
                        </button>
                        <article class="card__article">
                            <h1 class="card__title main-title"></h1>
                            <p class="card__content content"></p>
                            <p class="card__price title"><span class="card__currency">&nbsp;руб</span>
                            </p>
                        </article>
                        <p class="card__offer title">Закажи прямо сейчас!</p>
                        <button class="card__button title js-open-form-button">купить</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="modal-overlay-photo modal-overlay-photo--closed" id="modal-photo">
        <button class="modal-overlay-photo__close-button" id="modal-close-photo">
        </button>
        <img class="modal-overlay-photo__photo" src="">
    </div>
    <div class="information-modal-overlay-wrapper information-modal-overlay-wrapper--closed" id="modal-lamp">
        <div class="information-modal-overlay-wrapper__modal-overlay information-modal-overlay-wrapper-modal-overlay modal-overlay-lamp"
             id="modal-close-lamp">
            <div class="information-modal-overlay-wrapper-modal-overlay__modal modal-overlay-lamp__modal-lamp modal-lamp">
                <div class="modal-lamp__content-wrapper">
                    <button class="modal-lamp__close-button" id="lamp-close-button">
                    </button>
                    <div class="modal-lamp__content modal-lamp__content--hidden-on-mobile">
                        <p class="modal-lamp__description modal-lamp__description--crooked-line-to-bottom content">Гарантия
                            на&nbsp;электрику 12&nbsp;мес.</p>
                        <p class="modal-lamp__description content modal-lamp__description--straight-line">Минималистичный
                            дизайн</p>
                        <p class="modal-lamp__description content modal-lamp__description--crooked-line-to-top">Мягкое,
                            теплое свечение</p>
                    </div>
                    <div class="modal-lamp__content modal-lamp__content--width">
                        <h1 class="modal-lamp__title title">светильник&nbsp;&mdash; ночник</h1>
                        <img class="modal-lamp__image" src="<?= $additionalInfo['picture'] ?>" alt="modal-lamp image">
                        <ul class="modal-lamp__list">
                            <li class="modal-lamp__item content modal-lamp__item--zero-line">Объемное, многослойное изображение</li>
                            <li class="modal-lamp__item content modal-lamp__item--first-line">Гарантия на&nbsp;электрику 12&nbsp;мес.</li>
                            <li class="modal-lamp__item content modal-lamp__item--second-line">Минималистичный дизайн</li>
                            <li class="modal-lamp__item content modal-lamp__item--third-line">Мягкое, теплое свечение</li>
                            <li class="modal-lamp__item content modal-lamp__item--fourth-line">Светодиодная подсветка, минимальное потребление энергии</li>
                            <li class="modal-lamp__item content modal-lamp__item--fifth-line">Настоящее фабричное качество</li>
                        </ul>
                        <p class="modal-lamp__offer title">Закажи прямо сейчас!</p>
                        <button class="modal-lamp__button title js-open-form-button">Купить</button>
                    </div>
                    <div class="modal-lamp__content modal-lamp__content--hidden-on-mobile">
                        <p class="modal-lamp__description modal-lamp__description--crooked-revert-right-line content">Объемное, многослойное изображение</p>
                        <p class="modal-lamp__description modal-lamp__description--padding-top modal-lamp__description--crooked-right-line modal-lamp__description--crooked-right-line-position content">
                            Светодиодная подсветка, минимальное потребление энергии</p>
                        <p class="modal-lamp__description modal-lamp__description--crooked-right-line content">Настоящее
                            фабричное качество</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="information-modal-overlay-wrapper information-modal-overlay-wrapper--closed" id="modal-contacts">
        <div class="information-modal-overlay-wrapper__modal-overlay information-modal-overlay-wrapper-modal-overlay modal-overlay-contacts"
             id="modal-close-contacts">
            <div class="information-modal-overlay-wrapper-modal-overlay__modal modal-overlay-contacts__modal modal-contacts">
                <h1 class="modal-contacts__title title">Контакты</h1>
                <button class="modal-contacts__close-button" id="contacts-close-button">
                </button>
                <ul class="modal-contacts__list">
                    <div class="modal-contacts__map-wrapper" id="Ymap" data-lat="<?=$additionalInfo['map']['lat']?>"
                         data-lng="<?=$additionalInfo['map']['lng']?>" data-address="<?=$additionalInfo['map']['address']?>">
                    </div>
                    <li class="modal-contacts__item modal-contacts__item--margin-left modal-contacts__item--width">
                        <address class="modal-contacts__address modal-contacts__information content">426008 УР, г.Ижевск
                            ул. Ленина, д. 108</address>
                        <a class="modal-contacts__phone modal-contacts__link modal-contacts__information content"
                           href="tel:88006409005">+8 (800) 640-90-05</a>
                        <a class="modal-contacts__email modal-contacts__link modal-contacts__information content"
                           href="mailto:Inwbox@mail.ru">Inwbox@mail.ru</a>
                    </li>
                </ul>
                <div class="modal-contacts__offer-wrapper">
                    <p class="modal-contacts__offer title">У&nbsp;вас есть вопросы?</p>
                    <button class="modal-contacts__button title js-open-form-button">заказать обратный звонок</button>
                </div>
            </div>
        </div>
    </div>
    <?php require_once(get_template_directory() . '/template-parts/content/home/reviews.php') ?>
    <?php require_once(get_template_directory() . '/template-parts/content/home/gallery.php') ?>
    <?php require_once(get_template_directory() . '/template-parts/content/home/form.php') ?>
    <div class="information-modal-overlay-wrapper information-modal-overlay-wrapper--closed" id="modal-error">
        <div class="information-modal-overlay-wrapper__modal-overlay information-modal-overlay-wrapper-modal-overlay modal-overlay-error"
             id="modal-close-error">
            <h1 class="modal-overlay-error__stats title">Произошла ошибка сервера, пожалуйста перезагрузите страницу :(</h1>
        </div>
    </div>
<?php get_footer(); ?>
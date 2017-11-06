<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 08.10.2017
 * Time: 19:50
 */

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
                        <li class="header-contacts__item">+8 (999) 362-6000</li>
                        <li class="header-contacts__item header-contacts__links-wrapper">
                            <a class="header-contacts__link" href="#" title="Viber">
                                <img class="header-contacts__image"
                                     src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/viber.svg"
                                     alt="viber logo">
                            </a>
                            <a class="header-contacts__link" href="#" title="Telegram">
                                <img class="header-contacts__image"
                                     src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/telegram.svg"
                                     alt="telegram logo">
                            </a>
                            <a class="header-contacts__link" href="#" title="Whatsapp">
                                <img class="header-contacts__image"
                                     src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/whatsapp.svg"
                                     alt="whatsapp logo">
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
                        <p class="delivery-list__content content">Оставляете заявку на&nbsp;нашем сайте. Наш менеджер
                            свяжется с&nbsp;вами для уточнения деталей в&nbsp;течении 30&nbsp;минут.</p>
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
                        <a class="footer__link" href="#" title="instagram">
                            <img class="footer__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/instagram.svg" alt="instagram">
                        </a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__link" href="#" title="facebook">
                            <img class="footer__image"
                                 src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQ1NS43MyA0NTUuNzMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ1NS43MyA0NTUuNzM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiMzQTU1OUY7IiBkPSJNMCwwdjQ1NS43M2gyNDIuNzA0VjI3OS42OTFoLTU5LjMzdi03MS44NjRoNTkuMzN2LTYwLjM1M2MwLTQzLjg5MywzNS41ODItNzkuNDc1LDc5LjQ3NS03OS40NzUNCgloNjIuMDI1djY0LjYyMmgtNDQuMzgyYy0xMy45NDcsMC0yNS4yNTQsMTEuMzA3LTI1LjI1NCwyNS4yNTR2NDkuOTUzaDY4LjUyMWwtOS40Nyw3MS44NjRoLTU5LjA1MVY0NTUuNzNINDU1LjczVjBIMHoiLz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K"
                                 alt="facebook">
                        </a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__link" href="#" title="vk">
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
                        <img class="card__large-image" src="" alt="house image">
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
                        <img class="modal-lamp__image" src="<?= get_stylesheet_directory_uri() . '/front/build/' ?>images/modal-lamp-image.png" alt="modal-lamp image">
                        <ul class="modal-lamp__list">
                            <li class="modal-lamp__item content">Гарантия на&nbsp;электрику 12&nbsp;мес.</li>
                            <li class="modal-lamp__item content">Минималистичный дизайн</li>
                            <li class="modal-lamp__item content">Мягкое, теплое свечение</li>
                            <li class="modal-lamp__item content">Светодиодная подсветка, минимальное потребление энергии
                            </li>
                            <li class="modal-lamp__item content">Настоящее фабричное качество</li>
                        </ul>
                        <p class="modal-lamp__offer title">Закажи прямо сейчас!</p>
                        <button class="modal-lamp__button title js-open-form-button">Купить</button>
                    </div>
                    <div class="modal-lamp__content modal-lamp__content--hidden-on-mobile">
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
                    <li class="modal-contacts__item">
                        <div class="modal-contacts__map-wrapper" id="Ymap">
                        </div>
                    </li>
                    <li class="modal-contacts__item modal-contacts__item--margin-left modal-contacts__item--width">
                        <address class="modal-contacts__address modal-contacts__information title">426008 УР, г.Ижевск
                            ул. Ленина, д. 108</address>
                        <a class="modal-contacts__phone modal-contacts__link modal-contacts__information title"
                           href="tel:88006409005">+8 (800) 640-90-05</a>
                        <a class="modal-contacts__email modal-contacts__link modal-contacts__information title"
                           href="mailto:InWhiteBox@gmail.com">InWhiteBox@gmail.com</a>
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

<?php get_footer(); ?>
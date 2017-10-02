import $ from 'jquery';
import './css/index.pcss';
import './js/lamp-slider/lamp-slider-theme.pcss';
import './js/lamp-slider/lamp-slider.pcss';
import './js/card-slider/card-slider-theme.pcss';
import './js/reviews-slider/reviews-slider-theme.pcss';
import './js/gallery-slider/gallery-slider-theme.pcss';

import initLampSlick from './js/lamp-slider/lamp-slider';
import initCardSlick from './js/card-slider/card-slider';
import initReviewsSlick from './js/reviews-slider/reviews-slider';
import initGallerySlick from './js/gallery-slider/gallery-slider';

import getCurrentImage from './js/getCurrImage';
import initModalOverlay from './js/modal-overlay';


window.addEventListener('load', () => {
    const LampSliderSelector = $('.lamp-slider');
    initLampSlick(LampSliderSelector);

    const CardSliderSelector = $('.card-slider');
    initCardSlick(CardSliderSelector);

    const ReviewsSliderSelector = $('.modal-reviews-slider');
    initReviewsSlick(ReviewsSliderSelector);

    const GallerySliderSelector = $('.modal-gallery-slider');
    initGallerySlick(GallerySliderSelector);

    const getCurrentImageOptions = {
        largeImageSelector: document.getElementsByClassName('card__large-image')[0],
        smallImagesSelector: document.getElementsByClassName('card__small-image')
    };

    getCurrentImage(getCurrentImageOptions);

    const initModalOverlayOptions = {
        modalOverlaySelector: document.getElementsByClassName('modal-overlay')[0],
        modalOverlayClosedClass: 'modal-overlay--closed',
        closeButtonSelector: document.getElementsByClassName('modal-overlay__close-button')[0],
        previewCardItemsSelector: document.getElementsByClassName('gallery__item')
    };

    initModalOverlay(initModalOverlayOptions);
});


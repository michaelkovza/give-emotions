import $ from 'jquery';
import './css/index.pcss';
import './js/lamp-slider/lamp-slider-theme.pcss';
import './js/lamp-slider/lamp-slider.pcss';
import './js/card-slider/card-slider-theme.pcss';
import './js/reviews-slider/reviews-slider-theme.pcss';
import './js/gallery-slider/gallery-slider-theme.pcss';

import initLampSlick from './js/lamp-slider/lamp-slider';

import initReviewsSlick from './js/reviews-slider/reviews-slider';
import initGallerySlick from './js/gallery-slider/gallery-slider';


import initModalOverlay from './js/modal-overlay';


window.addEventListener('load', () => {
    const LampSliderSelector = $('.lamp-slider');
    initLampSlick(LampSliderSelector);



    const ReviewsSliderSelector = $('.modal-reviews-slider');
    initReviewsSlick(ReviewsSliderSelector);

    const GallerySliderSelector = $('.modal-gallery-slider');
    initGallerySlick(GallerySliderSelector);



    const initModalOverlayOptions = {
        modalOverlaySelector: document.getElementsByClassName('modal-overlay')[0],
        modalOverlayClosedClass: 'modal-overlay--closed',
        closeButtonSelector: document.getElementsByClassName('modal-overlay__close-button')[0],
        previewCardItemsSelector: document.getElementsByClassName('gallery__item')
    };

    initModalOverlay(initModalOverlayOptions);
});


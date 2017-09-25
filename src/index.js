import $ from 'jquery';
import './css/index.pcss';
import './js/lamp-slider/lamp-slider-theme.pcss';
import './js/lamp-slider/lamp-slider.pcss';
import './js/card-slider/card-slider-theme.pcss';

import initLampSlick from './js/lamp-slider/lamp-slider';
import initCardSlick from './js/card-slider/card-slider';

import getCurrentImage from './js/getCurrImage';

window.addEventListener('load', () => {
    const LampSliderSelector = $('.lamp-slider');
    initLampSlick(LampSliderSelector);

    const CardSliderSelector = $('.card-slider');
    initCardSlick(CardSliderSelector);

    const getCurrentImageOptions = {
        largeImageSelector: document.getElementsByClassName('card__large-image')[0],
        smallImagesSelector: document.getElementsByClassName('card__small-image')
    };

    getCurrentImage(getCurrentImageOptions);
});


import $ from 'jquery';
import './css/index.pcss';
import './js/lamp-slider/lamp-slider-theme.pcss';
import './js/lamp-slider/lamp-slider.pcss';

import initLampSlick from './js/lamp-slider/lamp-slider';
import initCardSlick from './js/card-slider/card-slider';

window.addEventListener('load', () => {
    const LampSliderSelector = $('.lamp-slider');
    initLampSlick(LampSliderSelector);

    const CardSliderSelector = $('.card-slider');
    initCardSlick(CardSliderSelector);
});


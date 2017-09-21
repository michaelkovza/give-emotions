import $ from 'jquery';
import './css/index.pcss';
import './js/lamp-slider-theme.pcss';
import './js/lamp-slider.pcss';

import initLampSlick from './js/lamp-slider';

window.addEventListener('load', () => {
    const LampSliderSelector = $('.lamp-slider');
    initLampSlick(LampSliderSelector);
});


import $ from 'jquery';
import 'slick-carousel';

const defaultOptions = {
    dots: true,
    centerMode: false,
    slideToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable: false
};

const initLampSlick = (selector, options = defaultOptions) => {
    selector.slick(options);
};

export default initLampSlick;

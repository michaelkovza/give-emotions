import 'slick-carousel';

const defaultOptions = {
    dots: false,
    centerMode: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: false,
    draggable: false,
    variableWidth: true
};

const initCardSlick = (selector, options = defaultOptions) => {
    selector.slick(options);
};

export default initCardSlick;

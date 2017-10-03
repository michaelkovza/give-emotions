import 'slick-carousel';

const defaultOptions = {
    dots: false,
    centerMode: false,
    slideToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    draggable: false
};

const initGallerySlick = (selector, options = defaultOptions) => {
    selector.slick(options);
};

export default initGallerySlick;
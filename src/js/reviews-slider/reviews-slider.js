import 'slick-carousel';

const defaultOptions = {
    dots: true,
    centerMode: false,
    slideToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable: false
};

const initReviewsSlick = (selector, options = defaultOptions) => {
    selector.not('.slick-initialized').slick(options);
};

export  default initReviewsSlick
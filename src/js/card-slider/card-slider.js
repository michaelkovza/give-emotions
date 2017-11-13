import 'slick-carousel';

const defaultOptions = {
    dots: false,
    centerMode: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: false,
    draggable: true,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1440,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }
    ]
};

const initCardSlick = (selector, options = defaultOptions) => {
    selector.slick(options);
};

export default initCardSlick;

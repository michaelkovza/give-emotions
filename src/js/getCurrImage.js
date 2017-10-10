const getCurrentImage = ({largeImageSelector, smallImagesSelector}) => {
    for (let i = 0; i <= smallImagesSelector.length - 1; i++) {
        smallImagesSelector[i].addEventListener('click', () => {
            let currentImageSrc = smallImagesSelector[i].getAttribute('src');
            largeImageSelector.setAttribute('src', currentImageSrc);
        });
    }
};

export default getCurrentImage;

import initCardSlick from '../js/card-slider/card-slider';
import getCurrentImage from '../js/getCurrImage';

const getCurrentImageOptions = {
    largeImageSelector: document.getElementsByClassName('card__large-image')[0],
    smallImagesSelector: document.getElementsByClassName('card__small-image')
};

const getImagesFromServer = ({url, fragmentContianerSelector, cardSliderSelector, elementId}) => {
    fetch(url)
        .then(res => res.json())
        .then( function (data) {
            let fragment = document.createDocumentFragment();

            data[elementId].forEach((currImage) => {
                let fragmentItem = document.createElement('img');
                fragmentItem.setAttribute('src', currImage);
                fragmentItem.classList.add('card__small-image');
                fragmentItem.classList.add('card-slider__item');
                fragment.appendChild(fragmentItem);
            });

            fragmentContianerSelector.appendChild(fragment);

            initCardSlick(cardSliderSelector);

            getCurrentImage(getCurrentImageOptions);
        })
};

export default getImagesFromServer;
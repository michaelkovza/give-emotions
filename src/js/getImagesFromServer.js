import initCardSlick from '../js/card-slider/card-slider';
import getCurrentImage from '../js/getCurrImage';


/*
const setLargeImageOptions = {
    largeImageSelector: document.getElementsByClassName('card__large-image')[0],
    previewCardItemsSelector: document.getElementsByClassName('gallery__item'),
    modalOverlaySelector: document.getElementsByClassName('modal-overlay')[0]
};

const setLargeImage = ( arrayOfImages ,{largeImageSelector, previewCardItemsSelector, modalOverlaySelector}) => {
    console.log(previewCardItemsSelector);


    const previewCardItemsSelectorArr = Array.prototype.slice.call(previewCardItemsSelector);

    previewCardItemsSelectorArr.forEach((item) => {
        item.addEventListener('click', () => {
            console.log('click');
            let firstArrayImage = arrayOfImages[0];
            console.log(firstArrayImage);
            largeImageSelector.setAttribute('src', '');
            largeImageSelector.setAttribute('src', firstArrayImage);
        })
    });

    modalOverlaySelector.addEventListener('click', () => {
        largeImageSelector.setAttribute('src', '')
    })
};
*/


const getCurrentImageOptions = {
    largeImageSelector: document.getElementsByClassName('card__large-image')[0],
    smallImagesSelector: document.getElementsByClassName('card__small-image')
};

const getImagesFromServer = ({url, fragmentContianerSelector, cardSliderSelector}, elementId) => {
    fetch(url, {
        method: 'POST',
        body: elementId
    })
        .then(res => res.json())
        .then(data => {

            console.log(data[elementId]);


            let fragment = document.createDocumentFragment();

            data[elementId].forEach((currImage) => {
                let fragmentItem = document.createElement('img');
                fragmentItem.setAttribute('src', currImage);
                fragmentItem.classList.add('card__small-image');
                fragmentItem.classList.add('card-slider__item');
                fragment.appendChild(fragmentItem);
            });

            fragmentContianerSelector.appendChild(fragment);

         /*   setLargeImage(data[elementId], setLargeImageOptions);*/

            initCardSlick(cardSliderSelector);

            getCurrentImage(getCurrentImageOptions);
        })
};


export default getImagesFromServer;
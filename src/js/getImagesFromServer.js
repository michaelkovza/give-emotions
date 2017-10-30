import fetch from "isomorphic-fetch";
import initCardSlick from '../js/card-slider/card-slider';
import getCurrentImage from '../js/getCurrImage';


const setLargeImage = ({firstImage, largeImageSelector}) => {

    largeImageSelector.setAttribute('src', firstImage)
};


const getCurrentImageOptions = {
    largeImageSelector: document.getElementsByClassName('card__large-image')[0],
    smallImagesSelector: document.getElementsByClassName('card__small-image')
};

const getImagesFromServer = ({url, fragmentContianerSelector, cardSliderSelector}, elementId) => {
    console.log(elementId);
    fetch(url, {
            method: 'POST',
            body: elementId
        },
        {'mode': 'no-cors'},
    )
        .then(res => res.json())
        .then(data => {

            console.log(data,'datadatadata');

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

            const setLargeImageOptions = {
                'firstImage': data[elementId][0],
                'largeImageSelector': document.getElementsByClassName('card__large-image')[0]
            };

            setLargeImage(setLargeImageOptions);

            initCardSlick(cardSliderSelector);

            getCurrentImage(getCurrentImageOptions);
        })
};


export default getImagesFromServer;
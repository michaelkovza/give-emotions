import $ from 'jquery';

import disableScroll from './disableScroll';
import getImagesFromServer from '../js/getImagesFromServer';


const getImagesFromServerOptions = {
    fragmentContianerSelector: document.querySelectorAll('.card__slider')[0],
    cardSliderSelector: $('.card-slider')
};

const getElementId = (element) => {
    return element.id;
};


const clearSliderImages = (sliderSelector) => {
    sliderSelector.innerHTML = '';
};

const initModalOverlay = ({ modalOverlaySelector, modalOverlayClosedClass, closeButtonSelector, previewCardItemsSelector }) => {
    const previewCardItemsSelectorArr = Array.prototype.slice.call(previewCardItemsSelector);


    const showCard = () => {
        previewCardItemsSelectorArr.forEach((element) => {
            element.addEventListener('click', () => {
                modalOverlaySelector.classList.remove(modalOverlayClosedClass);
                getImagesFromServer(getImagesFromServerOptions, getElementId(element));
                disableScroll(true);
            });
        });
    };

    const hideCardByCloseButton = () => {
        closeButtonSelector.addEventListener('click', () => {
            modalOverlaySelector.classList.add(modalOverlayClosedClass);
            getImagesFromServerOptions.cardSliderSelector.slick('unslick');
            clearSliderImages(getImagesFromServerOptions.fragmentContianerSelector);
            disableScroll(false);
        });
    };

    const hideCardByModalOverlay = () => {
        modalOverlaySelector.addEventListener('click', function (e) {
            let target = e.target;
            while (target === this) {
                if (target.className === 'modal-overlay') {
                    modalOverlaySelector.classList.add(modalOverlayClosedClass);
                    getImagesFromServerOptions.cardSliderSelector.slick('unslick');
                    clearSliderImages(getImagesFromServerOptions.fragmentContianerSelector);
                    disableScroll(false);
                    return;
                }
                target = target.parentNode;
            }
        });
    };

    showCard();
    hideCardByCloseButton();
    hideCardByModalOverlay();
};

export default initModalOverlay;
import $ from 'jquery';

import getImagesFromServer from '../js/getImagesFromServer';

const getImagesFromServerOptions = {
    url: 'http://www.json-generator.com/api/json/get/cfBuyUxPOq?indent=2',
    fragmentContianerSelector: document.querySelectorAll('.card__slider')[0],
    cardSliderSelector: $('.card-slider'),
    elementId: 'firstUl'
};

const clearSliderImages = (sliderSelector) => {
    sliderSelector.innerHTML = '';
};

const initModalOverlay = ({modalOverlaySelector, modalOverlayClosedClass, closeButtonSelector, previewCardItemsSelector}) => {
    const previewCardItemsSelectorArr = Array.prototype.slice.call(previewCardItemsSelector);

    const showCard = () => {
        previewCardItemsSelectorArr.forEach((element) => {
            element.addEventListener('click', () => {
                modalOverlaySelector.classList.remove(modalOverlayClosedClass);
                getImagesFromServer(getImagesFromServerOptions)

            });
        });
    };

    const hideCardByCloseButton = () => {
        closeButtonSelector.addEventListener('click', () => {
            modalOverlaySelector.classList.add(modalOverlayClosedClass);
            getImagesFromServerOptions.cardSliderSelector.slick('unslick');
            clearSliderImages(getImagesFromServerOptions.fragmentContianerSelector)

        });
    };

    const hideCardByModalOverlay = () => {
        modalOverlaySelector.addEventListener('click', function (e) {
            let target = e.target;
            while (target === this) {
                if (target.className === "modal-overlay") {
                    modalOverlaySelector.classList.add(modalOverlayClosedClass);
                    getImagesFromServerOptions.cardSliderSelector.slick('unslick');
                    clearSliderImages(getImagesFromServerOptions.fragmentContianerSelector);
                    return;
                }
                target = target.parentNode;
            }

        })
    };

    showCard();
    hideCardByCloseButton();
    hideCardByModalOverlay();
};

export default initModalOverlay;
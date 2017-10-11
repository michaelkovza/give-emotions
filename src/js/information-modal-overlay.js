import disableScroll from './disableScroll';

const initInformationModalOverlay = ({informationModalButton, informationModalOverlay, informationModalOverlayClose, informationModalCloseButton, closeClass}) => {
    informationModalButton.addEventListener('click', () => {
        informationModalOverlay.classList.remove(closeClass)
        disableScroll(true);
    });

    informationModalCloseButton.addEventListener('click', () => {
        informationModalOverlay.classList.add(closeClass)
        disableScroll(false);
    });

    informationModalOverlayClose.addEventListener('click', function (e) {
        let target = e.target;

        if (target.id === informationModalOverlayClose.id) {
            informationModalOverlay.classList.add(closeClass);
            disableScroll(false);
        }
    });
};

export default initInformationModalOverlay;
import disableScroll from './disableScroll';
import isMobile from './isMobile';

const initPhotoModalOverlay = ({ photoModalOverlayOpenImage, photoModalOverlay, photoModalOverlayImage, photoModalOverlayCloseButton, closeClass }) => {
    if (!isMobile()) {
        for (let i = 0; i < photoModalOverlayOpenImage.length; i++) {
            photoModalOverlayOpenImage[i].addEventListener('click', () => {
                let src = photoModalOverlayOpenImage[i].getAttribute('src');
                photoModalOverlayImage.setAttribute('src', src);
                photoModalOverlay.classList.remove(closeClass);
                disableScroll(true);
            });
        }

        photoModalOverlayCloseButton.addEventListener('click', () => {
            photoModalOverlay.classList.add(closeClass);
            disableScroll(false);
        });

        photoModalOverlay.addEventListener('click', (e) => {
            if (e.target.getAttribute('class') === 'modal-overlay-photo') {
                photoModalOverlay.classList.add(closeClass);
                disableScroll(false);
            }
        });
    }
};

export default initPhotoModalOverlay;

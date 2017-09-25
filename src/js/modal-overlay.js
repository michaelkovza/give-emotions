const initModalOverlay = ({modalOverlaySelector, modalOverlayClosedClass, closeButtonSelector, previewCardItemsSelector}) => {
    const previewCardItemsSelectorArr = Array.prototype.slice.call(previewCardItemsSelector);

    const showCard = () => {
        previewCardItemsSelectorArr.forEach((element) => {
            element.addEventListener('click', () => {
                modalOverlaySelector.classList.remove(modalOverlayClosedClass);
            });
        });
    };

    const hideCardByCloseButton = () => {
        closeButtonSelector.addEventListener('click', () => {
            modalOverlaySelector.classList.add(modalOverlayClosedClass);
        })
    };

    const hideCardByModalOverlay = () => {
        modalOverlaySelector.addEventListener('click', function (e) {
            let target = e.target;
            while (target === this) {
                if (target.className === "modal-overlay") {
                    modalOverlaySelector.classList.add(modalOverlayClosedClass);
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
const initModalOverlay = ({modalOverlaySelector, modalOverlayClosedClass, closeButtonSelector, previewCardItemsSelector}) => {
    const previewCardItemsSelectorArr = Array.prototype.slice.call(previewCardItemsSelector);

    const APIcall = () => {

        previewCardItemsSelectorArr.forEach((element) => {
            element.addEventListener('click', () => {
                let identificator = element.id;
                fetch('https://jsoneditoronline.org/?id=3f596dce6e507c6808c5d430148fcfd0', {'mode': 'no-cors'})
                    .then(res => res.json())
                    .then((out) => {
                        console.log('this json', out);
                        console.log(out.data.poster);
                    })
            });
        });

    };

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
    APIcall();
    showCard();
    hideCardByCloseButton();
    hideCardByModalOverlay();
};

export default initModalOverlay;
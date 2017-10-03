const initModalOverlay = ({modalOverlaySelector, modalOverlayClosedClass, closeButtonSelector, previewCardItemsSelector}) => {
    const previewCardItemsSelectorArr = Array.prototype.slice.call(previewCardItemsSelector);

    /*const APIcall = () => {


        previewCardItemsSelectorArr.forEach((element) => {
            element.addEventListener('click', () => {
                let identificator = element.id;
                fetch('http://www.json-generator.com/api/json/get/cjoktNHjdu?indent=2')
                    .then(res => res.json())
                    .then((data) => {
                        console.log(data.person);
                    });
                    /!*.then(data => console.log(data))*!/
            });
        });

    };*/

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

   /* APIcall();*/
    showCard();
    hideCardByCloseButton();
    hideCardByModalOverlay();
};

export default initModalOverlay;
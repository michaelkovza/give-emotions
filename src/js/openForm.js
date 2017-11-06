const openForm = ({openFormItemSelector, formWrapperSelector, closedClass, closeFormSelector, closeFormSelectorButton}) => {

    for (let i = 0; i < openFormItemSelector.length; i++) {
        openFormItemSelector[i].addEventListener('click', () => {
            formWrapperSelector.classList.remove(closedClass)
        })
    }

    closeFormSelector.addEventListener('click', (e) => {
        let target = e.target;

        if (target === closeFormSelector) {
            formWrapperSelector.classList.add(closedClass);
        }
    });

    closeFormSelectorButton.addEventListener('click', () => {
        formWrapperSelector.classList.add(closedClass);
    })
};

export default openForm;

const openForm = ({openFormItemSelector, formWrapperSelector, closedClass, closeFormSelector}) => {
    openFormItemSelector.addEventListener('click', () => {
        formWrapperSelector.classList.remove(closedClass)
    });

    closeFormSelector.addEventListener('click', (e) => {
        let target = e.target;

        if (target === closeFormSelector) {
            formWrapperSelector.classList.add(closedClass);
        }
    })
};

export default openForm;

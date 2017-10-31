import isMobile from './isMobile.js'


const fixedHeaderOnScroll = () => {

    const getTopCoordinates = (elemSelector) => {
      let elemCoords = elemSelector.getBoundingClientRect();

        let YOffset = window.pageYOffset;

        return {
            top: elemCoords.top + YOffset
        };
    };

    if (isMobile()) {
        let navigationFixedContainerClass = 'wrapper--fixed';
        let navigateWrapper = document.getElementsByClassName('js-fixed-navigate')[0];
        let navigateWrapperTopCoords = getTopCoordinates(navigateWrapper).top;

        window.addEventListener('scroll', () => {

        let clientScroll = window.pageYOffset;


        clientScroll >= navigateWrapperTopCoords
            ?
            navigateWrapper.classList.add(navigationFixedContainerClass)
            :
            navigateWrapper.classList.remove(navigationFixedContainerClass);

        });
    }
};

export default fixedHeaderOnScroll
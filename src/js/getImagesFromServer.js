import fetch from "isomorphic-fetch";
import initCardSlick from '../js/card-slider/card-slider';
import getCurrentImage from '../js/getCurrImage';


const setLargeImage = ({firstImage, largeImageSelector}) => {

    largeImageSelector.setAttribute('src', firstImage)
};

const setTitleAndDescription = ({title, titleSelector, description, descriptionSelector, price, priceSelector}) => {
  titleSelector.innerHTML = '';
  titleSelector.innerHTML = title;
  descriptionSelector.innerHTML = '';
  descriptionSelector.innerHTML = description;
  priceSelector.innerHTML = '';
  priceSelector.innerHTML = price + '<span class="card__currency">&nbsp;руб</span>';

};


const getCurrentImageOptions = {
    largeImageSelector: document.getElementsByClassName('card__large-image')[0],
    smallImagesSelector: document.getElementsByClassName('card__small-image')
};

const getImagesFromServer = ({ fragmentContianerSelector, cardSliderSelector}, elementId) => {
    console.log(elementId);
    fetch(`http://9993626000.myjino.ru/wp-admin/admin-ajax.php?postId=${elementId}&action=get_post_info`, {
            method: 'POST'
        }
    )

        .then(res => res.json())
        .then(data => {

            console.log(data.productInfo[elementId]);


             let fragment = document.createDocumentFragment();

            data.productInfo[elementId].gallery.forEach((currImage) => {
            let fragmentItem = document.createElement('img');
            fragmentItem.setAttribute('src', currImage);
            fragmentItem.classList.add('card__small-image');
            fragmentItem.classList.add('card-slider__item');
            fragment.appendChild(fragmentItem);
            });


            fragmentContianerSelector.appendChild(fragment);

            const setLargeImageOptions = {
            'firstImage': data.productInfo[elementId].main_image,
            'largeImageSelector': document.getElementsByClassName('card__large-image')[0]
            };

            setLargeImage(setLargeImageOptions);

            const setTitleAndDescriptionOptions = {
                'title': data.productInfo[elementId].title,
                'description': data.productInfo[elementId].description,
                'price': data.productInfo[elementId].price,
                'titleSelector': document.getElementsByClassName('card__title')[0],
                'descriptionSelector': document.getElementsByClassName('card__content')[0],
                'priceSelector': document.getElementsByClassName('card__price')[0]
            };

            setTitleAndDescription(setTitleAndDescriptionOptions);

            initCardSlick(cardSliderSelector);

            getCurrentImage(getCurrentImageOptions);
        })
};


export default getImagesFromServer;
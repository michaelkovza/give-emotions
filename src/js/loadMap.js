const loadMap =  (mapSelector) => {
    let map = new ymaps.Map(mapSelector, {
        center:[56.848089067885624,53.260798499999936],
        zoom: 16,
    });

    map.controls.add(
        new ymaps.control.ZoomControl()
    );

    map.controls.add('typeSelector');

    map.controls.add('searchControl');

    map.controls.add('mapTools');

    let myPlacemark = new ymaps.Placemark(map.getCenter(), {
        balloonContentBody: [
            '<address>',
            '<strong>Офис в Ижевске</strong>',
            '<br/>',
            'Адрес: 426008 УР, г.Ижевск, ул. Ленина, д. 108',
            '<br/>',
            '</address>'
        ].join('')
    }, {
        preset: 'islands#redDotIcon'
    });

    map.geoObjects.add(myPlacemark);
};

export default loadMap;
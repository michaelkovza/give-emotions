const loadMap = (mapSelector) => {

    let mapLat = mapSelector.getAttribute('data-lat');
    let mapLng = mapSelector.getAttribute('data-lng');
    let mapAddress = mapSelector.getAttribute('data-address');
    let map = new ymaps.Map(mapSelector, {
        center: [mapLat, mapLng],
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
            mapAddress,
            '<br/>',
            '</address>'
        ].join('')
    }, {
        preset: 'islands#redDotIcon'
    });

    map.geoObjects.add(myPlacemark);
};

export default loadMap;
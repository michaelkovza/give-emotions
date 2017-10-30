const loadMap =  (mapSelector) => {
    let map = new ymaps.Map(mapSelector, {
        center: [55.76, 37.64],
        zoom: 15
    });

    map.controls.add(
        new ymaps.control.ZoomControl()
    );

    map.controls.add('typeSelector');

    map.controls.add('searchControl');

    map.controls.add('mapTools');
};

export default loadMap;
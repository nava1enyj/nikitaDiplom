let center = [55.753663141384095,37.61989419488522];

function init() {
    let map = new ymaps.Map('map-test', {
        center: center,
        zoom: 17
    });


}

ymaps.ready(init);

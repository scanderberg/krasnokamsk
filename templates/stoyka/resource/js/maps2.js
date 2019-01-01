    var map;

    DG.then(function () {
        map = DG.map('map', {
            center: [58.0802, 55.7713],
            zoom: 20
        });
		
	DG.marker([58.08017, 55.7713]).addTo(map).bindPopup('Стройбаза в Краснокамске');
	
	
    });
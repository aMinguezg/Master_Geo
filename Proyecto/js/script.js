function initMap() {
    oviedo = new google.maps.LatLng(43.371937,-5.830986);

    let misOpciones = {
        center: oviedo,
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        //disableDefaultUI: true
        zoomControl: true,
		mapTypeControl: true,
		scaleControl: true,
		streetViewControl: true,
		rotateControl: true
    };
    map = new google.maps.Map(document.getElementById("map-view"), misOpciones);

    /*pizjuan = new google.maps.LatLng(37.384296, -5.970379);
    bernabeu = new google.maps.LatLng(40.453111, -3.688001);
    mestalla = new google.maps.LatLng(39.474819, -0.357796);
    wanda = new google.maps.LatLng(40.436357, -3.599414);
    sanMames = new google.maps.LatLng(43.264307, -2.949408);
    campNou = new google.maps.LatLng(41.381041, 2.122970);
    rosaleda = new google.maps.LatLng(36.733700, -4.426125);
    riazor = new google.maps.LatLng(43.368890, -8.417172);
    molinon = new google.maps.LatLng(43.536507, -5.636966);
    villamarin = new google.maps.LatLng(37.356708, -5.981452);
    google.maps.event.addListener(map, 'click', function (event) {
        addMarker(event.latLng);
        marcador = event.latLng;
    });*/
}
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
    /*
    var ctaLayer = new google.maps.KmlLayer('https://www.spain.info/es/que-quieres/rutas/grandes-rutas/KML/Ruta_por_Oviedo_leyenda_tradicion_sp.kml');
    https://www.google.com/maps/d/kml?mid=11fcZRiMJQ8P3wWiNJOFgKBYrIalZCOoG&forcekml=1
    ctaLayer.setMap(map);*/

    
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



    /*var contador = 1;
    var selected_marker = null;
 
    var WMS_URL = 'http://www.madrid.org:80/geoserver/mam/SIGI_MA_EMB_LAGUNAS/ows?';
    var WMS_Layers = 'SIGI_MA_EMB_LAGUNAS';
    var WMS_URL2 = 'http://www.madrid.org:80/geoserver/mam/SIGI_MA_SENDAS_VERDES_MADRID/ows?';
    var WMS_Layers2 = 'SIGI_MA_SENDAS_VERDES_MADRID';
    var map;
    var markersArray = [];
    var TileWMS = function (coord, zoom) {
        var x = document.getElementById("wms_azul");
        var proj = map.getProjection();
        var zfactor = Math.pow(2, zoom);
        var top = proj.fromPointToLatLng(new google.maps.Point(coord.x * 256 / zfactor, coord.y * 256 / zfactor));
        var bot = proj.fromPointToLatLng(new google.maps.Point((coord.x + 1) * 256 / zfactor, (coord.y + 1) * 256 / zfactor));
        var bbox = top.lng() + "," + bot.lat() + "," + bot.lng() + "," + top.lat();
 
        var myURL = WMS_URL + "SERVICE=WMS&VERSION=1.1.1&REQUEST=GetMap&SRS=EPSG%3A4326&WIDTH=256&HEIGHT=256&FORMAT=image/png&TRANSPARENT=TRUE";
        myURL += "&LAYERS=" + WMS_Layers;
        myURL += "&BBOX=" + bbox;
        x.innerHTML = myURL;
        return myURL;
    }
 
 
    var TileWMS2 = function (coord, zoom) {
        var x = document.getElementById("wms_verde");
        var proj = map.getProjection();
        var zfactor = Math.pow(2, zoom);
        var top = proj.fromPointToLatLng(new google.maps.Point(coord.x * 256 / zfactor, coord.y * 256 / zfactor));
        var bot = proj.fromPointToLatLng(new google.maps.Point((coord.x + 1) * 256 / zfactor, (coord.y + 1) * 256 / zfactor));
        var bbox = top.lng() + "," + bot.lat() + "," + bot.lng() + "," + top.lat();
 
        var myURL = WMS_URL2 + "SERVICE=WMS&VERSION=1.1.1&REQUEST=GetMap&SRS=EPSG%3A4326&WIDTH=256&HEIGHT=256&FORMAT=image/png&TRANSPARENT=TRUE";
        myURL += "&LAYERS=" + WMS_Layers2;
        myURL += "&BBOX=" + bbox;
        x.innerHTML = myURL;
        return myURL;
    }*/



    /*var overlayOptions =
    {
        getTileUrl: TileWMS,
        tileSize: new google.maps.Size(256, 256)
    };
    var overlayWMS = new google.maps.ImageMapType(overlayOptions);
 
    var overlayOptions2 =
    {
        getTileUrl: TileWMS2,
        tileSize: new google.maps.Size(256, 256)
    };
    var overlayWMS2 = new google.maps.ImageMapType(overlayOptions2);
    map.overlayMapTypes.push(overlayWMS);
    map.overlayMapTypes.push(overlayWMS2);
 
    var ctaLayer = new google.maps.KmlLayer('https://www.google.com/maps/d/u/0/kml?hl=es&mid=1aSH7BYgZXMN3bCrMwkupDnVBgBKQtalH&lid=9J3qM4WDiSs&forcekml=1&cid=mp&cv=mFi54sna9Bo.es.', {
        preserveViewport: true,
        map: map
    });*/
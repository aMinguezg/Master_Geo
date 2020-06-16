function initMap() {

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

    var madrid = new google.maps.LatLng(40.414864, -3.707275);
    var misOpciones = {
        zoom: 11,
        center: madrid,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map-view"), misOpciones);

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
}
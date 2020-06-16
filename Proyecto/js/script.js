$(document).ready(function () {

    infowindow = new google.maps.InfoWindow();
    var madrid = new google.maps.LatLng(40.414864, -3.707275);
    var misOpciones = {
        zoom: 10,
        center: madrid,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map-view"), misOpciones);
    var capaKmlActiva = null;


    
    //ACCIONES DE LOS BOTONES KML
    //Muestra el kml con la ruta norte
    $("#btnNorte").click(function () {
        var ctaLayer = new google.maps.KmlLayer('https://www.google.com/maps/d/u/0/kml?hl=es&mid=1JTTAlQBnKBU1Re08dZHZIJD6EPn8F5My&lid=dR0zNxG3BII&forcekml=1&cid=mp&cv=mFi54sna9Bo.es.', {
            preserveViewport: true,
        });
        capaKmlActiva = ctaLayer;
        ctaLayer.setMap(map);
    });

    //Muestra el kml con la ruta sur
    $("#btnSur").click(function () {
        var ctaLayer = new google.maps.KmlLayer('https://www.google.com/maps/d/u/0/kml?hl=es&mid=14LO3I9iKBVQzNoTdMorDjrBeVutcdtvk&forcekml=1&cid=mp&cv=mFi54sna9Bo.es.', {
            preserveViewport: true,
        });
        capaKmlActiva = ctaLayer;
        ctaLayer.setMap(map);
    });

    //Muestra el kml con la ruta del camino de Santiago
    $("#btnSantiago").click(function () {
        var ctaLayer = new google.maps.KmlLayer('https://www.google.com/maps/d/u/0/kml?hl=es&mid=1aSH7BYgZXMN3bCrMwkupDnVBgBKQtalH&lid=9J3qM4WDiSs&forcekml=1&cid=mp&cv=mFi54sna9Bo.es.', {
            preserveViewport: true,
        });
        capaKmlActiva = ctaLayer;
        ctaLayer.setMap(map);
    });

    $("#btnUltima").click(function () {
        capaKmlActiva.setMap(null);
        capaKmlActiva = null;
    });

    //ACCIONES DE LOS BOTONES WMS
    //Muestra la capa wms de zonas de agua de la Comunidad de Madrid
    $("#btnAzul").click(function () {
        var WMS_URL = 'http://www.madrid.org:80/geoserver/mam/SIGI_MA_EMB_LAGUNAS/ows?';
        var WMS_Layers = 'SIGI_MA_EMB_LAGUNAS';
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

        var overlayOptions =
        {
            getTileUrl: TileWMS,
            tileSize: new google.maps.Size(256, 256)
        };
        var overlayWMS = new google.maps.ImageMapType(overlayOptions);
        map.overlayMapTypes.push(overlayWMS);
    })

    //Muestra la capa wms de zonas verdes de la Comunidad de Madrid
    $("#btnVerde").click(function () {
        var WMS_URL = 'http://www.madrid.org:80/geoserver/mam/SIGI_MA_SENDAS_VERDES_MADRID/ows?';
        var WMS_Layers = 'SIGI_MA_SENDAS_VERDES_MADRID';
        var TileWMS = function (coord, zoom) {
            var x = document.getElementById("wms_verde");
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

        var overlayOptions =
        {
            getTileUrl: TileWMS,
            tileSize: new google.maps.Size(256, 256)
        };
        var overlayWMS = new google.maps.ImageMapType(overlayOptions);
        map.overlayMapTypes.push(overlayWMS);
    })

    $("#btnUltimo").click(function () {
        map.overlayMapTypes.pop();
    });

    $("#btnTodas").click(function () {
        map.overlayMapTypes.clear();
    });

    //SERVICIOS DE GOOGLE
    $("#btnTiendas").click(function () {
        map.addListener('click', function(mapsMouseEvent) {
 
            var request = {
                query: 'Tienda de bicicletas',
                fields: ['name', 'geometry'],
                locationBias: mapsMouseEvent.latLng
              };
        
              service = new google.maps.places.PlacesService(map);
        
              service.findPlaceFromQuery(request, function(results, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                  for (var i = 0; i < results.length; i++) {
                    createMarker(results[i]);
                  }      
                }
              });
          });
    });

    function createMarker(place) {
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
    
});
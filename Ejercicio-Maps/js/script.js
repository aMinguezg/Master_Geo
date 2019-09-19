


        let marcador;
        let marcadorMarker = "";
        let posicion;
        let posicionMarker = "";
        let pizjuan;
        let pizjuanMarker;
        let bernabeu;
        let bernabeuMarker;
        let mestalla;
        let mestallaMarker;
        let wanda;
        let wandaMarker;
        let sanMames;
        let sanMamesMarker;
        let campNou;
        let campNouMarker;
        let rosaleda;
        let rosaledaMarker;
        let riazor;
        let riazorMarker;
        let molinon;
        let molinonMarker;
        let villamarin;
        let villamarinMarker;
        let respuestas = [];
        let soluciones = [];
        let puntuacion = 0;
        let puntuacionFinal = 0;
        let map;
        let distanciaKm;
        let circuloVerde;
        let circuloAmarillo;
        let circuloRojo;
        let madrid;
        let i = 1;
        let confirmado = false;






        function addMarker(location) {
            if (marcadorMarker == "") {
                marcadorMarker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
            else {
                marcadorMarker.setMap(null)
                marcadorMarker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }

        }

        function confirmar() {

            respuestas.push(marcadorMarker);

            if(confirmado == false){
                if(i == 1){
                pizjuanMarker = new google.maps.Marker({
                position: pizjuan,
                map: map
            });
            posicion = pizjuan;
            posicionMarker = pizjuanMarker;
            }

            
            if(i == 2){
                bernabeuMarker = new google.maps.Marker({
                position: bernabeu,
                map: map
            });
            posicion = bernabeu;
            posicionMarker = bernabeuMarker;
            }

            if(i == 3){
                mestallaMarker = new google.maps.Marker({
                position: mestalla,
                map: map
            });
            posicion = mestalla;
            posicionMarker = mestallaMarker;
            }

            if(i == 4){
                wandaMarker = new google.maps.Marker({
                position: wanda,
                map: map
            });
            posicion = wanda;
            posicionMarker = wandaMarker;
            }
   
            if(i == 5){
                sanMamesMarker = new google.maps.Marker({
                position: sanMames,
                map: map
            });
            posicion = sanMames;
            posicionMarker = sanMamesMarker;
            }
 
            if(i == 6){
                campNouMarker = new google.maps.Marker({
                position: campNou,
                map: map
            });
            posicion = campNou;
            posicionMarker = campNouMarker;
            }
       
            if(i == 7){
                rosaledaMarker = new google.maps.Marker({
                position: rosaleda,
                map: map
            });
            posicion = rosaleda;
            posicionMarker = rosaledaMarker;
            }
       
            if(i == 8){
                riazorMarker = new google.maps.Marker({
                position: riazor,
                map: map
            });
            posicion = riazor;
            posicionMarker = riazorMarker;
            }
      
            if(i == 9){
                molinonMarker = new google.maps.Marker({
                position: molinon,
                map: map
            });
            posicion = molinon;
            posicionMarker = molinonMarker;
            }
      
            if(i == 10){
                villamarinMarker = new google.maps.Marker({
                position: villamarin,
                map: map
            });
            posicion = villamarin;
            posicionMarker = villamarinMarker;
            }
       

            for (let a = 50000; a < 200000; a += 50000) {

                if (a == 50000) {
                    let circuloOptions = {
                        strokeColor: '#39FF33',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: '#39FF33',
                        fillOpacity: 0.4,
                        map: map,
                        center: posicion,
                        radius: a
                    };
                    circuloVerde = new google.maps.Circle(circuloOptions);
                }
                else if (a == 100000) {
                    let circuloOptions = {
                        strokeColor: '#FFFF33',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: '#FFFF33',
                        fillOpacity: 0.2,
                        map: map,
                        center: posicion,
                        radius: a
                    };
                    circuloAmarillo = new google.maps.Circle(circuloOptions);
                }
                else {
                    let circuloOptions = {
                        strokeColor: '#FF3333',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: '#FF3333',
                        fillOpacity: 0.2,
                        map: map,
                        center: posicion,
                        radius: a
                    };
                    circuloRojo = new google.maps.Circle(circuloOptions);
                }
            }

            if (marcadorMarker == "") {
                puntuacion = 0;
                document.getElementById("distancia").textContent = "NO HAS MARCADO NINGUN PUNTO :("
                document.getElementById("puntos").textContent = "PUNTOS OBTENIDOS: " + puntuacion;
                document.getElementById("puntosTotales").textContent = "PUNTOS TOTALES OBTENIDOS: " + puntuacionFinal;
            }
            else {
                let x = google.maps.geometry.spherical.computeDistanceBetween(posicion, marcador) / 1000;
                let distancia = String(x)
                let algo = distancia.substring(0, distancia.indexOf(".") + 3)
                distanciaKm = algo.concat(" Km");
                let punt = Number(algo)

                if (punt >= 0 && punt <= 50) {
                    puntuacion = 100;
                    puntuacionFinal = puntuacionFinal + 100;
                }
                else if (punt >= 51 && punt <= 100) {
                    puntuacion = 50;
                    puntuacionFinal = puntuacionFinal + 50;
                }
                else if (punt >= 101 && punt <= 150) {
                    puntuacion = 25;
                    puntuacionFinal = puntuacionFinal + 25;
                }
                else {
                    puntuacion = 0
                }
                document.getElementById("distancia").textContent = "LA DISTANCIA ENTRE LO MARCADO Y LA FOTO ES DE: " + distanciaKm;
                document.getElementById("puntos").textContent = "PUNTOS OBTENIDOS: " + puntuacion;
                document.getElementById("puntosTotales").textContent = "PUNTOS TOTALES OBTENIDOS: " + puntuacionFinal;
            }
            confirmado = true;

            }
            else{
                alert("SOLO SE PUEDE CONFIRMAR UNA VEZ")
            }
          



        }

        function sigFoto() {
            if(i == 10){
                alert("EL JUEGO HA TERMINADO, HAS OBTENIDO: " + puntuacionFinal + " PUNTOS!")
                location.reload();
                
            }
            if(confirmado == true){
                if (marcadorMarker == "") {
                    posicionMarker.setMap(null);
                    respuestas.push("No contestado");
                    circuloVerde.setMap(null)
                    circuloAmarillo.setMap(null)
                    circuloRojo.setMap(null)
                    puntuacion = 0
                    document.getElementById("distancia").textContent = "";
                    document.getElementById("puntos").textContent = "";
                    document.getElementById("puntosTotales").textContent = "";
                    i += 1;
                    document.getElementById("fotoPrueba").src = "pictures/foto" + i + ".jpg";
                    confirmado = false;
                }
                else {
                    marcadorMarker.setMap(null);
                    posicionMarker.setMap(null);
                    circuloVerde.setMap(null)
                    circuloAmarillo.setMap(null)
                    circuloRojo.setMap(null)
                    marcadorMarker = "";
                    respuestas.push(marcador);
                    document.getElementById("distancia").textContent = "";
                    document.getElementById("puntos").textContent = "";
                    document.getElementById("puntosTotales").textContent = "";
                    i += 1;
                    document.getElementById("fotoPrueba").src = "pictures/foto" + i + ".jpg";
                    confirmado = false;
                }
            }else{
                alert("POR FAVOR, CONFIRMA PARA PASAR A LA SIGUIENTE FOTO");
            }
          

        }

        function initMap() {
            document.getElementById("fotoPrueba").src = "pictures/foto" + i + ".jpg";
            madrid = new google.maps.LatLng(40.4167, -3.70325);
           
            let misOpciones = {
                center: madrid,
                zoom: 6,
                mapTypeId: google.maps.MapTypeId.SATELLITE,
                disableDefaultUI: true
            };
            map = new google.maps.Map(document.getElementById("map-view"), misOpciones);

            pizjuan = new google.maps.LatLng(37.384296, -5.970379);
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
            });


        }



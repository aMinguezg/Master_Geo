function initMap() {
	var oviedo_eii = new google.maps.LatLng(43.354810,-5.851805);
	var misOpciones = {
		center: oviedo_eii,
		zoom: 14,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("marco_mapa"), misOpciones);
}
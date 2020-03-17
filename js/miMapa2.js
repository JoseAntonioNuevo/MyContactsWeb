window.onload = function() {

    var mymap = L.map('mapid').setView([41.349724, 2.107911], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11'
    }).addTo(mymap);
    L.marker([41.349724, 2.107911]).addTo(mymap)
      .bindPopup("<b>Hola daw2!</b><br />aqui j23.").openPopup();

    var popup = L.popup();
    function onMapClick(e) {
      //alert(e.latlng.lat);
      /*popup
        .setLatLng(e.latlng)
        .setContent("Has clicado el mapa en " + e.latlng.toString())
        .openOn(mymap);*/
        peticion_http = inicializa_xhr();
        if(peticion_http) {
          peticion_http.onreadystatechange = procesaRespuesta;
          var cadena="lat="+e.latlng.lat+"&lon="+e.latlng.lng+"&units=metric&appid=178c6909153e6eee1a2292fe287412cf&lang=es";
          peticion_http.open("GET", "http://api.openweathermap.org/data/2.5/weather?"+cadena, true);
          peticion_http.send(null);
        }
    }
    mymap.on('click', onMapClick);


    var READY_STATE_COMPLETE=4;
    var peticion_http = null;

    function inicializa_xhr() {
    	if (window.XMLHttpRequest) {
    		return new XMLHttpRequest();
    	} else if (window.ActiveXObject) {
    		return new ActiveXObject("Microsoft.XMLHTTP");
    	}
    }


    function procesaRespuesta() {
    	if(peticion_http.readyState == READY_STATE_COMPLETE) {
    		if (peticion_http.status == 200) {

    			//var respuesta = eval("("+peticion_http.responseText+")");
    			var respuesta = JSON.parse(peticion_http.responseText);
          console.log(respuesta.sys.country);
    			//tiempo.innerHTML="El tiempo en "+respuesta.name+", "+respuesta.sys.country+" es de "+ respuesta.main.temp +"° C, "+respuesta.weather[0].description+"<img src='http://openweathermap.org/img/w/"+respuesta.weather[0].icon+".png' >";
          /*popup
            .setContent("El tiempo en "+respuesta.name+", "+respuesta.sys.country+" es de "+ respuesta.main.temp +"° C, "+respuesta.weather[0].description)
            .openOn(mymap);*/
            var myIcon = L.icon({
                iconUrl: "http://openweathermap.org/img/w/"+respuesta.weather[0].icon+".png",
                iconSize: [38, 95],
                iconAnchor: [22, 94],
                popupAnchor: [-3, -76],
                shadowUrl: "http://openweathermap.org/img/w/"+respuesta.weather[0].icon+".png",
                shadowSize: [68, 95],
                shadowAnchor: [22, 94]
            });
            L.marker([respuesta.coord.lat, respuesta.coord.lon], {icon: myIcon}).addTo(mymap).bindPopup("El tiempo en "+respuesta.name+", "+respuesta.sys.country+" es de "+ respuesta.main.temp +"° C, "+respuesta.weather[0].description).openPopup();;



    		}
    	}
    }






  }

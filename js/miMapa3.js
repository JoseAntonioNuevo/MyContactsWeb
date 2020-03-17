window.onload = function() {

  //import L from 'leaflet';
//  import { GeoSearchControl, OpenStreetMapProvider } from 'leaflet-geosearch';

  const provider = new OpenStreetMapProvider();

  const searchControl = new GeoSearchControl({
    provider: provider,
  });

  const map = new L.Map('mapid');
  map.addControl(searchControl);



    // inicializamos el mapa en el div "mapid" en las coordenadas dadas y a zoom 13
    map.setView([41.349728, 2.10805], 13);
    // creamos la capa de los mapas con los datos de su proveedor
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11'
      //id: 'mapbox/satellite-v9'
    }).addTo(mymap);
    // añadimos un marcador clicable y lo abrimos
    L.marker([41.349728, 2.10805]).addTo(mymap)
      .bindPopup("<b>Hola DAW!</b><br />Nos vemos aquí.").openPopup();
    //cremos un popup
    var popup = L.popup();
    // funcion que queremos ejecutar cuando cliquemos en el mapa
    function onMapClick(e) {
      comprobar(e.latlng);
      /*popup
        .setLatLng(e.latlng)
        .setContent("Has clicado el mapa en " + e.latlng.toString())
        .openOn(mymap);*/
    }
    // aqui relacionamos el evento click con la funcion que acabamos de crear
    mymap.on('click', onMapClick);

  //------------------------------LAMADAS AJAX-----------------------------

  var READY_STATE_COMPLETE=4;
  var peticion_http = null;

  function inicializa_xhr() {
  	if (window.XMLHttpRequest) {
  		return new XMLHttpRequest();
  	} else if (window.ActiveXObject) {
  		return new ActiveXObject("Microsoft.XMLHTTP");
  	}
  }

  function comprobar(latLong) {
  	peticion_http = inicializa_xhr();
  	if(peticion_http) {
  		peticion_http.onreadystatechange = procesaRespuesta;
  		var cadena="lat="+latLong.lat+"&lon="+latLong.lng+"&units=metric&appid=178c6909153e6eee1a2292fe287412cf&lang=es";
  		peticion_http.open("GET", "http://api.openweathermap.org/data/2.5/weather?"+cadena, true);

  		//peticion_http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  		peticion_http.send(null);
  	}
  }

  function procesaRespuesta() {
  	if(peticion_http.readyState == READY_STATE_COMPLETE) {
  		if (peticion_http.status == 200) {

  			var respuesta = eval("("+peticion_http.responseText+")");
  			//var respuesta = JSON.encode(this.responseText);
  			//tiempo.innerHTML="El tiempo en "+respuesta.name+", "+respuesta.sys.country+" es de "+ respuesta.main.temp +"° C, "+respuesta.weather[0].description+"<img src='http://openweathermap.org/img/w/"+respuesta.weather[0].icon+".png' >";
        L.marker([respuesta.coord.lat, respuesta.coord.lon]).addTo(mymap)
          .bindPopup("El tiempo en "+respuesta.name+", "+respuesta.sys.country+" es de "+ respuesta.main.temp +"° C, ").openPopup();
  		}
  	}
  }
//-------------------------------FIN LLAMADAS AJAX-------------------------------------------------

  }

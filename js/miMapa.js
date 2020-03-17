window.onload = function() {
    // inicializamos el mapa en el div "mapid" en las coordenadas dadas y a zoom 13
    var mymap = L.map('mapid').setView([41.35001, 2.107932], 16);

    /*//alternativa
    var mymap = L.map('map', {
        center: [51.505, -0.09],
        zoom: 13
    });
    */

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
    L.marker([41.35001, 2.107932]).addTo(mymap)
      .bindPopup("<b>Hola daw2!</b><br />Aquí está j23.").openPopup();

    //cremos un popup
    var popup = L.popup();
    // funcion que queremos ejecutar cuando cliquemos en el mapa
    function onMapClick(e) {
      popup
        .setLatLng(e.latlng)
        .setContent("Has clicado el mapa en " + e.latlng.toString())
        .openOn(mymap);
    }
    // aqui relacionamos el evento click con la funcion que acabamos de crear
    mymap.on('click', onMapClick);
  }
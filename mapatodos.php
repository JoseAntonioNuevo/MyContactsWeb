<html>
<head>
  <?php
echo "<div id='titulos'>";
    
     echo "<div id='divtitulo2'><p class='titulocontacto'><b>Ubicaciones de mis contactos</b></p></div>";
?>
  <meta charset="utf-8" />
  <title>Center the map</title>
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />

  <!-- Load Leaflet from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
  integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
  crossorigin=""></script>


  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@2.3.2/dist/esri-leaflet.js"
  integrity="sha512-6LVib9wGnqVKIClCduEwsCub7iauLXpwrd5njR2J507m3A2a4HXJDLMiSZzjcksag3UluIfuW1KzuWVI5n/cuQ=="
  crossorigin=""></script>


  <style>
    body { margin:0; padding:0; }
    #map { position: absolute; top:0; bottom:0; right:0; left:0; }
  </style>
</head>
<body>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/leaflet.esri.geocoder/2.1.0/esri-leaflet-geocoder.css">
<script src="https://cdn.jsdelivr.net/leaflet.esri.geocoder/2.1.0/esri-leaflet-geocoder.js"></script>

<div id="map" class="mapas">

<script>
var locationes;
   var locationes2; 
   var nombre;

  var geocoder = L.esri.Geocoding.geocodeService();

  var map = L.map('map');

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

</script>

<?php

include "connection.php";

$cont=0;

$query= ("SELECT * FROM contactos");
        $result= mysqli_query($conexion, $query);
        while ($value=mysqli_fetch_array($result)) {
          $cont=$cont+1;
        $direccion1=$value['direccion1'];
        $direccion2=$value['direccion2'];
        $contis=$value['id_contactos'];
        $nombres=$value['nombre'];

$location=$direccion1;
$location2=$direccion2;
$nombre=$nombres;
?>

<script>

   locationes = '<?php echo $location;?>'
   locationes2 = '<?php echo $location2;?>'
   nombre = '<?php echo $nombre;?>'

   alert(nombre);
//aqui te llega el popup a la calle donde tu marques

  geocoder.geocode().address(locationes).run(function (error, response) {
    


    map.fitBounds(response.results[0].bounds);
	L.marker(response.results[0].latlng).addTo(map)
  //aqui escribes dentro del popup
      .bindPopup("<b>Casa de</b><br />"+nombre+" .").openPopup();
  });


  geocoder.geocode().address(locationes2).run(function (error, response) {
    


    map.fitBounds(response.results[0].bounds);
  L.marker(response.results[0].latlng).addTo(map)
  //aqui escribes dentro del popup
      .bindPopup("<b>Trabajo de</b><br />"+nombre+" .").openPopup();
  });

</script>
</div>
<?php
}
?>

</body>
</html>
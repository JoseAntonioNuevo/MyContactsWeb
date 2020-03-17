<?php
  include "../services/connection.php";
  $numero_pokedex=$_REQUEST['numero_pokedex'];
  $nombre=$_REQUEST['nombre'];
  $peso=$_REQUEST['peso'];
  $altura=$_REQUEST['altura'];
  $sql="INSERT INTO pokemon (numero_pokedex, nombre, peso, altura) VALUES ('".$numero_pokedex."','".$nombre."','".$peso."','".$altura."')"; 
  mysqli_query($conn,$sql) or die('{resultado:"NOK"}');
  echo '{resultado:"OK"}';
?>
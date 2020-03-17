<?php
include "connection.php";
if (isset($_REQUEST['id'])) {
$id=$_REQUEST['id'];

$query= ("SELECT nombre, direccion1, direccion2, apellido FROM contactos WHERE id_contactos='$id'");
        $result= mysqli_query($conexion, $query);
        $value=mysqli_fetch_array($result);
        $direccion1=$value['direccion1'];
        $direccion2=$value['direccion2'];
        $nombre=$value['nombre'];
        $apellido=$value['apellido'];
}else{
       $ids=$_SESSION['id'];
$query= ("SELECT nombre, direccion1, direccion2, apellido FROM contactos WHERE user_fk='$ids' AND estado!=3");
        $result= mysqli_query($conexion, $query);
        $value=mysqli_fetch_array($result);
        $direccion1=$value['direccion1'];
        $direccion2=$value['direccion2'];
        $nombre=$value['nombre'];
        $apellido=$value['apellido'];
}

echo "<div id='titulos'>";
    
     echo "<div id='divtitulo'><p class='titulocontacto'><b>Ubicaciones de ".$nombre." ".$apellido."</b></p></div>";
?>
</div>

<div id="mapa" class="mapa2">

        <p>MAPA</p>
<?php
include "mapas.php";
?>
	</div>
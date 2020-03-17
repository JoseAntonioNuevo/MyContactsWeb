
<?php
if (isset($_REQUEST['id'])) {
  $infocontacto="infocontacto2";
  $table_infocontactos="table_infocontactos2";

  $favoritos="favoritos2";
  $editados="editados2";
  $eliminad="eliminad2";

  $fav="fav2";
   $edit="edit2";
   $delete="delete2";
}else{
   $infocontacto="infocontacto1";
   $table_infocontactos="table_infocontactos1";

   $favoritos="favoritos";
   $editados="editados";
   $eliminad="eliminad";

   $fav="fav";
   $edit="edit";
   $delete="delete";
}


echo "<div id='sol' class='$infocontacto'>";  

 echo "<div id='divtitulo'><p class='titulocontacto'><b>Informacion de el contacto</b></p></div>";

echo "<table class='$table_infocontactos'>";

$cont=0;


if (isset($_REQUEST['id'])) {
$id=$_REQUEST['id'];
}else{
       $ids=$_SESSION['id'];

$query= ("SELECT id_contactos FROM contactos WHERE user_fk='$ids' AND estado!=3");
        $result= mysqli_query($conexion, $query);
        $value=mysqli_fetch_array($result);
        $id_con=$value['id_contactos'];
  $id=$id_con;
}


$query= ("SELECT * FROM contactos WHERE id_contactos='$id'");
        $result= mysqli_query($conexion, $query);
        $value=mysqli_fetch_array($result);
        $id_contactos=$value['id_contactos'];
        $foto=$value['foto'];
        $email=$value['email'];
        $nombre=$value['nombre'];
        $apellido=$value['apellido'];
?>

          <th class="th">Foto</th>
          <th class="th">Nombre</th>
          <th class="th">Apellido</th>
          <th class="th">Email</th>
          
          <?php
          $query2= ("SELECT * FROM telefonos WHERE id_contacto='$id_contactos'");
        $result= mysqli_query($conexion, $query2);
        while ($value=mysqli_fetch_array($result)){
   $cont=$cont+1;
   echo "<th class='th'>Telefono".$cont;
        }

  echo " <tr><td class='tds'><b><img style='border-radius: 20px 20px 20px 20px;-moz-border-radius: 20px 20px 20px 20px;-webkit-border-radius: 20px 20px 20px 20px;border: 0px solid #000000; height:50px;' src=./img/".$foto."></b></td>";
       echo "<td class='tds'><b>".$nombre."</td><td>".$apellido."</b></td>";
       echo "<td class='tds'><b>".$email."</b></td>";
        
        $query2= ("SELECT * FROM telefonos WHERE id_contacto='$id_contactos'");
        $result= mysqli_query($conexion, $query2);
        while ($value=mysqli_fetch_array($result)){
          $telefono=$value['telefono'];
           echo "<td class='tds'><b>".$telefono."</b></td>";
        }

 
       ?>
 </tr>  
</table>
      <?php
 echo "<div class='$favoritos'>";
     $query= ("SELECT * FROM contactos WHERE id_contactos='$id'");
        $result= mysqli_query($conexion, $query);
        $value=mysqli_fetch_array($result);
        $favoritos=$value['favoritos'];
        $eliminado=$value['estado'];

echo "<a href='telefnuevo.php?user=".$id."> <img src='./imagenes/edit.png' class='$edit'></a>";

if ($favoritos==1) {
        echo "<a href='change_user.php?option=5&user=".$id."'onclick='modificarFav(".$id.","."5"."); return false'><p style='float: right; position: absolute; margin-left: 6%;'><img src='./imagenes/fav.png' class='$fav'></p></a>";
}else{
        echo "<a href='change_user.php?option=6&user=".$id."'onclick='modificarFav(".$id.","."6"."); return false'><p style='float: right; position: absolute; margin-left: 6%;'><img src='./imagenes/nofav.png' class='$fav'></p></a>";
}
      echo "</div>";

      echo "<div class='$editados'> <div class='btn'> <a href='editar_contactos.php?id=".$id."'>";
      echo "<img src='./imagenes/edit.png' class='$edit'>";
      echo "</a></div></div>";

   echo "<div class='telf'> <div class='btn'> <a href='telefnuevo.php?user=".$id."'>";
      echo "<img src='./imagenes/telefono.png' class='editbb'>";
      echo "</a></div></div>";

 echo "<div class='$eliminad'>";
  
    
if ($eliminado==1) {
        echo "<a href='change_user.php?option=5&user=".$id."'onclick='modificarFav(".$id.","."3"."); return false'> <img src='./imagenes/delete.png' class='$delete'></p></a>";
}else{
        echo "<a href='change_user.php?option=6&user=".$id."'onclick='modificarFav(".$id.","."4"."); return false'> <img src='./imagenes/restore.png' class='$delete'></p></a>";
}
     
      echo "</div>";
      ?>
  </tr>
  </div>
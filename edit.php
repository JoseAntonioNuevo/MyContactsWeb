
<div id="edit">
<div class="editi">
      <form action="contactonuevo.proc.php" style="position: relative;" method="POST">
        <?php
          echo "<h2>Nombre de contacto</h2>";
          echo "<input type='text' name='nombre' value='$nombrez'>";
        echo "<br>";
          echo "<h2>Apellido</h2>";
          echo "<input type='text' name='apellido' value='$apellidoz'>";
        echo "<br>";
          echo "<h2>Email</h2>";
          echo "<input type='text' name='email' value='$emailz'>";
        echo "<br>";
          echo "<h2>Teléfono de contacto</h2>";
          echo "<input type='text' name='telefono' value='$telz'>";
        echo "<br></div><div class='editi2'>";
          echo "<h2>Ubicación - numero 1</h2>";
          echo "<input type='text' name='ubicacion1' value='$ubiz'>";
        echo "<br>";
         echo " <h2>Ubicacion - numero 2</h2>";
          echo "<input type='text' name='ubicacion2' value='$ubiz2'>";
        echo "<br>";
           echo " <h2>Foto</h2>";
            echo "<input type='file' name='foto2' value='$fotoz'>  ";
            
        echo "<br><br><br>";
          echo "<input type='radio' name='fav' value='1'>Favorito";
          echo "<input type='radio' name='fav' value='2' checked> No Favorito<br>";
        echo "<br><br>";
        ?>
    </div>
    <div class="sending">
        <input type="submit" style="width: 20%;" name="enviar">  
    </form>
	</div>
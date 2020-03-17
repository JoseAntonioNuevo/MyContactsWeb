
          <th class="th">Foto de perfil</th>
          <th class="th">User</th>
          <th class="th">Email</th>
          <th class="th">Nombre</th>
          <th class="th">Restaurar</th>
            <?php
                include "connection.php";
            $query= ("SELECT * FROM user INNER JOIN login ON user.id_user=login.fk_user WHERE estado=3");
                $result= mysqli_query($conexion, $query);
               while ($value=mysqli_fetch_array($result)){
                $foto=$value['foto'];
                $id_user=$value['id_user'];
                $user=$value['user'];
                $email=$value['email'];
                $nombre=$value['nombre'];
                $apellido=$value['apellidos'];
               
               echo " <tr><td><b><img class='imgRedonda' src=./img/".$foto."></b></td>";
               echo "<td><b>".$user."</b></td>";
               echo "<td><b>".$email."</b></td>";
               echo "<td><b>".$nombre." ".$apellido."</b></td>";
             echo "<td><b><a href='change_user.php?option=4&user=".$id_user."'onclick='modificarUsuario(".$id_user.","."4"."); return false'><i style='color:green' class='fas fa-redo-alt fa-2x'></i></td></tr></a>";
               }
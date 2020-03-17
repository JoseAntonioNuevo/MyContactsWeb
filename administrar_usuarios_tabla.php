          <th class="th">Foto de perfil</th>
          <th class="th">User</th>
          <th class="th">Email</th>
          <th class="th">Nombre</th>
          <th class="th">Operaciones</th>
            <?php
                include "connection.php";
            $query= ("SELECT * FROM user INNER JOIN login ON user.id_user=login.fk_user WHERE estado!=3");
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
                 echo "<td><a href='edit_user.php?id_user=$id_user'><i style='color:green' class='fas fa-edit fa-2x'></i></a>";
                     if ($value['estado']<>2) {
       echo "<a href='change_user.php?option=1&user=".$id_user."'onclick='modificarUsuario(".$id_user.","."1"."); return false'><i style='color:blue; padding:10px;' class='fas fa-lock fa-2x'></i></a>";
       }else{
        echo "<a href='change_user.php?option=3&user=".$id_user."'onclick='modificarUsuario(".$id_user.","."3"."); return false'><i style='color:blue; padding:10px;' class='fas fa-lock-open fa-2x'></i></a>";
       }
       
             echo "<a href='change_user.php?option=2&user=".$id_user."'onclick='modificarUsuario(".$id_user.","."2"."); return false'><i style='color:red' class='fas fa-trash-alt fa-2x'></i></td></tr></a>";
               }
            ?>
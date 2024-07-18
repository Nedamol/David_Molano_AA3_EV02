<?php

    include("Conexion_asesor.php");

    if (isset($_POST['send'])) {

        if(
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['password']) >= 1 &&
            strlen($_POST['text']) >= 1 &&
            strlen($_POST['email']) >= 1            
        ) {
            $name =trim ($_POST['name']); 
            $password =trim ($_POST['password']);
            $text =trim ($_POST['text']);
            $email =trim ($_POST['email']);
            $consulta = "INSERT INTO login_asesor(nombre,contrasena,correo,cargo)
                         VALUES  ('$name','$password', '$text', '$email')";                         
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
                ?>
                    <h3 class= "success"> Tu registro se completo</h3>
                    <a href="http://localhost:3000/index.php"><input type="button" value="Ir a menu"></a>
                <?php
           } else {
                 ?>
                <h3 class= "error" > Ocurrio un error</h3>
                <?php
           }
        } else {
                ?>
                <h3 class= "error" > Diligenciar todos los datos</h3>
                                <?php
            }

        
 }       

<?php

    include("conexion.php");

    if (isset($_POST['send'])) {

        if(
            strlen($_POST['number']) >= 1&&
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['name2']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['number1']) >= 1 &&
            strlen($_POST['text']) >= 1
        ) {
            $number =trim ($_POST['number']);
            $name =trim ($_POST['name']);
            $name2 =trim ($_POST['name2']);
            $phone =trim ($_POST['phone']);
            $email =trim ($_POST['email']);
            $number1 =trim ($_POST['number1']);
            $text =trim ($_POST['text']);
            $consulta = "INSERT INTO registro_cliente(documento,nombre,apellido,telefono,correo,financiacion,observaciones)
                         VALUES  ('$number', '$name', '$name2', '$phone', '$email', '$number1', '$text')";
                         
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
                ?>
                    <h3 class= "success"> Tu registro se completo</h3>
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



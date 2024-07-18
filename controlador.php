<?php

if(!empty($_POST["iniciar"])) {
   if (empty($_POST["usuario"]) or empty ($_POST["password"])) {
        echo '<div class= "alerta"> Los campos estan vacios</div>';
   } else {
     $usuario=$_POST["usuario"];
     $clave=$_POST["password"];
     $sql= $conexion-> query("select * from login_asesor where nombre='$usuario' and contrasena ='$clave'");
     if ($datos=$sql->fetch_object()){
        header("location:perfil.html");
        }else {

            echo '<div class ="alerta"> ACCESO DENEGADO  usuario o correo incorrecto </div>';
        } 

   }
      }
?>



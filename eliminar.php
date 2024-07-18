<?php

include ("conexion.php");
$conex = mysqli_connect ("localhost","root","","crmgm501");


if(isset($_POST["eliminar"])){
    $documento=$_POST["documento"];
    $nombre=$_POST["Nombre"];
    $apellido=$_POST["apellido"];
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $financiacion=$_POST["financiacion"];
    $observaciones=$_POST["observaciones"];

    $query="DELETE FROM registro_cliente documento=?";
    $sentencia= mysqli_prepare($conex,$query);
    mysqli_stmt_bind_param($sentencia,"i",$id);
    mysqli_stmt_execute($sentencia);
    $afectado=mysqli_stmt_affected_rows($sentencia);
    if ($afectado==1){

        echo"<script> alert('el registro [$nombre]se anulo);location.href= 'http://localhost:3000/Con_agente.php';</script>";
        }else{
        echo"<script> alert('el registro [$nombre]se anulo);location.href= 'http://localhost:3000/Con_agente.php;</script>";
        }

    }
?>

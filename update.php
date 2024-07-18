<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion comercial CRM GM5</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Encabezado responsive</title>
    <title>boton con link</title>
   </head>
 <header>
    <div style="position: absolute; top: 50px; right:100px;">
    <img src="src/bank_2.jpg" alt="logo_inicial" style="float: right;">
</div>
        </header>
 <body>

         <div class="formulario">
        <h1>Consulta el estado de tus clientes</h1><br>   

        <form action= "Con_agente.php" method="POST">

        <input type= "text" name="buscar" placeholder="No cedula">
        <input type= "submit" value="buscar"><br>
        <a href="http://localhost:3000/Perfil.html"><input type="button" value="Ir a menu"></a>    
    </div>
        <h1>RESULTADO</h1>
        <table border="2px">
            <thead>
                <th>Documento</th>
                <th>Nombre</th>           
                <th>Apellido</th>
                <th>Observaciones</th>
                <th>eliminar</th>
                <th>editar</th>
            </thead>
<?php

    include ('read.php'); 
    

    $consulta = "SELECT * from registro_cliente";
    $resultado = mysqli_query($conex, $consulta);
    while ($fila = mysqli_fetch_assoc($resultado)){
            echo"<tr>";
            echo"<td>". $fila["documento"]."</td>";
            echo"<td>". $fila["nombre"]."</td>";     
            echo"<td>". $fila["apellido"]."</td>";
            echo"<td>". $fila["observaciones"]."</td>";
            echo"<td>
                    <form action='http://localhost:3000/eliminar.php' method=post'>
                    <input type='hidden' name = 'documento' value='".$fila["documento"]."'>
                    <input type='hidden' name = 'name' value='".$fila["nombre"]."'>
                    <input type='submit' name = 'eliminiar' value='eliminar'>
                    </form>
                 </td>";
            echo "<td>     
            <form action='http://localhost:3000/Editar.php' method=post'>
            <input type='hidden' name = 'documento' value='".$fila["documento"]."'>
            <input type='hidden' name = 'nombre' value='".$fila["nombre"]."'>
            <input type='hidden' name = 'apellido' value='".$fila["apellido"]."'>
            <input type='hidden' name = 'observaciones' value='".$fila["observaciones"]."'>
            <input type='submit' name = 'editar' value='editar''>
            </form>
            </td>";
            echo "</tr>";
    }       

    ?>

   
</body>






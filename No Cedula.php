<?php
include 'conexion.php';
?>
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

    <form id= 'form' name='form' method="GET">

        Nombre: <input type="text" name="busqueda" value= "nombre default>"> <br>
        Apellido: <input type= "text" name = "Apellido"> <br>
        <input type= "submit" name = "enviar" value= "buscar">
    </form>
    <br><br>

    <?php
        if (!empty($_GET)) {
          if(isset($_GET['nombre']) && isset($_GET['apellido']) && isset($GET["enviar"]))
          {
            var_dump("hicimos bien todo");
          }   
        }
    
    ?>

   
</body>
        

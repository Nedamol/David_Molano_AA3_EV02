<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>gestion comercial CRM GM5</title>
   
</head>
 <header>
    <div style="position: absolute; top: 50px; right:100px;">
    <img src="src/bank_2.jpg" alt="logo_inicial" style="float: right;">
</div>
        </header>
<body>  
    <div class="formulario";>
            <form action= "" method= "post" class="formulario">
            <h1>INICIO DE SESION</h1>
            <?php
                include ("Conexion_pass.php"); 
                include ("controlador.php");
            ?>
            <div class="username">
                <input  type="text" class= "input" name="usuario">
                <label>usuario</label>
              </div>            
                  <div class="username">
                  <input type="password"  name="password">
                  <label> contraseña </label>
            </div>
                <div class="recordar">
                  <a href="http://localhost:3000/Olvido%20contrase%C3%B1a.php">Olvido su contraseña</a>
                </div>
                <div class= "username">
                     <input class= "button" type="submit" value="iniciar" name= "iniciar">
                     </a>
            
            <div class="registrarse">
                   Quiero hacer el <a href="http://localhost:3000/reg_asesor.php">Registro </a>
            </div>
            
        </form>



</body>


</html>


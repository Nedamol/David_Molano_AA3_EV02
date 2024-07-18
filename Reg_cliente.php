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
    <form method="post"autocomplete="off">
        <h1>Radicación clientes nuevos</h1> 

        <div class="input-group">
            <div class="input-container">
               <input type="number" name="number" placeholder="No documento">
                <i class="fa-solid fa-user"></i>        
            </div>
            <div class="input-container">
                <input type="text" name="name2" placeholder="nombre">
                 <i class="fa-solid fa-user"></i>          
             </div>
             <div class="input-container">
                <input type="text" name="name" placeholder="apellido">
                 <i class="fa-solid fa-user"></i>           
             </div>
             <div class="input-container">
                <input type="number" name="phone" placeholder="telefono">
                 <i class="fa-solid fa-phone"></i>          
             </div>
             <div class="input-container">
                <input type="email" name="email" placeholder="correo">
                 <i class="fa-solid fa-envelope"></i>           
             </div>
             <div class="input-container">
                <input type="number" name="number1" placeholder="financiacion">
                 <i class="fa-solid fa-currency"></i>          
             </div>
             <div class="input-container">
                <input type="text" name="text" placeholder="observaciones">
                 <i class="fa-solid fa-user"></i>          
             
        <br><br>
        <a href= "#"> Terminos y condiciones</a> <br><br>
        <input type="submit" name="send" class="btn" value="Enviar Datos">         
        <a href=http://localhost:3000/Perfil.html><input type="button" value="Ir a menu"></a>
        
        
   </form>
         
     <?php
       
         include ("send.php");  
        
     ?>   
</body>
</html>
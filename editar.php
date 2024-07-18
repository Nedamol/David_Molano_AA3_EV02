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

<h1>Actualizar datos del cliente</h1>
    <?php
    
    if (isset($_POST["editar2"])){
        include ("conexion.php");
        $query="UPDATE registro_cliente SET documento= ?, nombre= ?, apellido=?, observaciones=? WHERE documento=?";
        $sentence= mysqli_prepare($conex,$query);
        mysqli_stmt_bind_param($sentencia,"isss",$documento,$nombre,$apellido,$observaciones);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);
        if($afectado==1){
            echo "<script>alert('el empleado $nombre se edito)');location.href= http://localhost:3000/update.php;</script>";
        } else {
            echo "<script>alert('el empleado $nombre no se edito)');location.href= http://localhost:3000/update.php;</script>";
        }
        mysqli_stmt_close($sentencia);
        mysqli_close ($conex);
    }
?>
<form action="editar.php"  method="post">
    <input type="hidden" value= "<?php echo $documento ?>" name="$documento">
    <label for = "documento"> Documento: </label><input type="number" name="documento" id="documento" value= "<?php echo $documento?>">
    <label for = "nombre"> nombre: </label><input type="text" name="nombre" id="nombre" value= "<?php echo $nombre?>">
    <label for = "apellido"> apellido: </label><input type="text" name="apellido" id="apellido" value= "<?php echo $apellido?>">
    <label for = "observaciones"> observaciones: </label><input type="text" name="observaciones" id="observaciones" value= "<?php echo $observaciones?>">
   
<input type="submit" name= "editar2" value="editar">
        
</form>
</body>
</html>
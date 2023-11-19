 <?php include("php/conexion.php"); ?> 
<?php
          $result = select_id("macetas", "bd_codigo", $_GET['id']);   
             $result = delete("macetas", "bd_codigo", $_GET['id']);   
          if ($result) { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/exito.css">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Exito</title>
</head>

<body>

    <div class="content_exito">
        <img src="img/database_success_icon_155525.png" alt="">

        <h2>¡Yay! Dato <big>eliminado</big> con éxito</h2>
        <p>Haz <a href="form_añadir.php">Click aquí</a> para ir al inicio</p>
    </div>
    <meta http-equiv="refresh" content="3; URL=form_añadir.php" >
</body>

</html>
<?php }else{
          include("php/error.php");

          }
          ?>

      
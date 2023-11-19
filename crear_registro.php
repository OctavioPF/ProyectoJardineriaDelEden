<?php include("php/conexion.php"); ?>
<?php
//obtener las variables
$color = $_POST['lst_Color'];
$precio = $_POST['txt_Precio'];
$cantidad = $_POST['txt_Cantidad'];
$area = $_POST['area_observaciones'];
$tamano = $_POST['rad_tamano'];
$categoria = $_POST['lst_Categoria'];
$observaciones = $_POST['area_observaciones'];
?>
<?php                       
$cons = insert('macetas',"NULL,  '$categoria', '$precio', '$cantidad', '$observaciones',  '$tamano', '$color' ");
if ($cons) {
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistemas computacionales">
	<meta name="keywords" content="MySql, Conexión, Wamp">
	<meta name="author" content="Josue Gonzalez, Jose Correa, Jose Palacios, Sistemas">
    <link rel="stylesheet" href="css/exito.css">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Exito</title>
</head>

<body>

    <div class="content_exito">
        <img src="img/database_success_icon_155525.png" alt="">

        <h2>¡Yay! Dato <big>añadido</big> con éxito</h2>
        <p>Haz <a href="form_añadir.php">Click aquí</a> para ir al inicio</p>
        <meta http-equiv="refresh" content="3;URL=form_añadir.php">
    </div>
      <meta http-equiv="refresh" content="3; URL=form_añadir.php" >
</body>

</html>
<?php
} else {
        include ("php/error.php");
}
?>

                    <?php include('php/conexion.php'); ?>

                    <?php
                        //obtener las variables
                        $codigo = $_POST['text_codigo'];
                        $color = $_POST['lst_Color'];
                        $precio = $_POST['txt_Precio'];
                        $cantidad = $_POST['txt_Cantidad'];
                        $area = $_POST['area_observaciones'];
                        $tamano = $_POST['rad_tamano'];
                        $categoria = $_POST['lst_Categoria'];
                        $observaciones = $_POST['area_observaciones'];
                        ?>
                    <!--  <h2>Datos recibidos</h2>
                        <p>Usted ingreso los siguientes datos:</p> -->
                    <?php
                        //mostrar los datos recibidos
                       

                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable

                        $campos = "bd_categoria = '$categoria'";
                        $campos .= ", bd_precio = '$precio'";
                        $campos .= ", bd_cantidad = '$cantidad'";
                        $campos .= ", bd_observaciones = '$observaciones'";
                        $campos .= ", bd_tamano = '$tamano'";
                        $campos .= ", bd_color = '$color'";
                        

                        /* echo $campos; */
                        $where = "bd_codigo = $codigo";

                        $cons = update('macetas', $campos, $where);

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

                            <h2>¡Yay! El dato se <big>actualizo</big> con éxito</h2>
                            <p>Haz <a href="form_añadir.php">Click aquí</a> para ir al inicio</p>
                        </div>
                        <meta http-equiv="refresh" content="3; URL=form_añadir.php">
                    </body>

                    </html>

                    <?php
                        } else {
                            include("php/error.php");

                        }
                        ?>

                    
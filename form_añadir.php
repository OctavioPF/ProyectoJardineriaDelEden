<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <link rel="stylesheet" href="css/crud.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/main.css">
     <link rel="shortcut icon" href="img/favicon.ico">
    <title>Añadir</title>

   
    <?php include("php/conexion.php");  ?>
</head>

<body style="font-family: sans-serif;">
    <div id="container">
        <?php include("php/menu.php");?>


        <div id="content">
            <div id="section">
                <form id="form1" name="form1" method="post" action="crear_registro.php"
                    onsubmit="return validarForm(this);">

                    <!-- NO -->
                    <p><label for="text_codigo">Codigo </label><br>
                        <input type="text" name="text_codigo" id="txt_Codigo" disabled><!-- ID auto_increment -->
                    </p>


                    <p>
                        <label for="lst_Categoria">Categoria</label><br><br>
                        <select name="lst_Categoria" id="lst_Categoria">
                            <option>Selecciona una categoria...</option>
                            <option>Maceta 501</option>
                            <option>Maceta curva conica</option>
                            <option>Tipo madera</option>
                        </select>
                    </p>


                    <p><label for="txt_Precio">Precio </label><br>
                        <input type="text" name="txt_Precio" id="txt_Precio">
                    </p>

                    <p><label for="txt_Cantidad">Cantidad </label><br>
                        <input type="text" name="txt_Cantidad" id="txt_Cantidad">
                    </p>

                    <p>
                    <p>Observaciones</p>
                    <textarea id="area_observaciones" name="area_observaciones"
                        onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                    </p>


                        <!-- side bar -->
                        <p>
                        <p>Tamaño</p>
                        <input type="radio" id="rad_Chica" name="rad_tamano" value="Chica">
                        <label for="rad_Chica">Chica</label><br>

                        <input type="radio" id="rad_Mediana" name="rad_tamano" value="Mediana">
                        <label for="rad_Mediana">Mediana</label><br>

                        <input type="radio" id="rad_Grande" name="rad_tamano" value="Grande">
                        <label for="rad_Grande">Grande</label>
                        </p>
                        <br>

                        <p>
                            <label for="lst_Color">Color</label><br><br>
                            <select name="lst_Color" id="lst_Color">
                                <option>Selecciona un color...</option>
                                <option>Negro</option>
                                <option>Marrón</option>
                                <option>Blanco</option>
                            </select>
                        </p>


                    <button name="btn_guardar" class="btn_muestrame">Guardar</button><br></br><br>

                </form>

                <?php $result = select("macetas");?>

            <div style="overflow-x:auto;"><!-- añadiedo barra de navegacion horizontal -->
                <table>
                    <thead><!-- encabezados -->
                        <td>ID</td>
                        <td>Categoria</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>Tamaño</td>
                        <td>Observaciones</td>
                        <td>Color</td>
                        <td>Modificar</td>
                        <td>Eliminar</td>
                    </thead>


                    <?php
                     if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_object($result)) {
                     ?>

                    <tr>
                        <td><?php echo $row->bd_codigo; ?></td>
                        <td><?php echo $row->bd_categoria; ?></td>
                        <td><?php echo $row->bd_precio; ?></td>
                        <td><?php echo $row->bd_cantidad; ?></td>
                        <td><?php echo $row->bd_tamano; ?></td>
                        <td><?php echo $row->bd_observaciones; ?></td>
                        <td><?php echo $row->bd_color; ?></td>

                        <td><a href="modificar.php?id=<?php echo $row->bd_codigo; ?>
                            "class="buttonDeleteUpdate">Modificar </a></td>

                        <td><a href="eliminar.php?id=<?php echo $row->bd_codigo; ?>
                        "onclick="return confirmation()" class="buttonDelete">Eliminar</a></td></tr>
                    <?php

                }
                    } else {
                     echo "no hay ningun registro";}
                ?>
                </table>

            </div>    <!-- div del contenedor del la tabla responsive -->

            </div>
        </div>


        <!-- ---------------------------------------- -->

        <?php include_once("./php/footer.php");  ?>

    </div>
    <script src="js/validar.js"></script>
    <script >
  function confirmation() {
    if (confirm("¿Realmente desea eliminar el registro?")) {
      return true;
    }
    return false;
  }

</script>
</body>

</html>
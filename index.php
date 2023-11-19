<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/main.css">
  <title>Jardinderia del Edén</title>
</head>

<body>
  <!-- Menu -->
  <?php include("php/menu.php"); ?>

  <!-- Elementos fijos, go top y Whatsapp -->
  <div class="gototop"><a href="#"><img src="img/arrow.png" alt="" width="25px"></a></div>
  <div class="whatsapp"><a href="https://wa.me/527861015488/?text=Hola, ¿Qué tal?" target="_blank">
      <img src="img/whatsapp-icon.png" alt="" width="50px"></a></div>

<!-- hero -->
  <div class="hero">
    <div class="hero__left">
    <h1 class="titulo">Jardinería del Edén</h1>
      <p class="subtitle"> Vive tu vida, vive tus plantas</p>
      <a href="#link" class="btn_muestrame">¡Muestrame! 🌱</a>
    </div>
    <div class="hero__right">
    <img src="img/maceta.jpg" alt="" width="450px">
    </div>
  </div>


  <!-- seccion de productos -->
  <h1 class="title" id="link">Productos</h1>


  <div class="contenedor_tarjeta">

    <div class="tarjeta">
      <div class="contenido_tarjeta">
        <div class="img_tarjeta"><img src="img/macetas_501A.jpg" alt="" width="250px"></div>
        <h2>501 Maceta</h2>
        <span class="label_negro">Negro</span><span class="label_cafe">Café</span><span class="label_blanco">Blanco</span>
        <p><b>Chica:</b> $200 MXN</p>
        <p><b>Mediana:</b> $500 MXN</p>
        <p><b>Grande:</b> $720 MXN</p>
        <button class="btn_tarjetas">Lo quiero</button>
      </div>
    </div>

    <div class="tarjeta">
      <div class="contenido_tarjeta">
        <div class="img_tarjeta"><img src="img/maceta_curva_conica.png" alt="" height="150px"></div>
        <h2>401 Conica curva</h2>
        <span class="label_negro">Negro</span><span class="label_cafe">Café</span><span class="label_blanco">Blanco</span>
        <p><b>Mediana:</b> $450 MXN</p>
        <p><b>Grande:</b> $750 MXN</p>
        <button class="btn_tarjetas">Lo quiero</button>
      </div>
    </div>

    <div class="tarjeta">
      <div class="contenido_tarjeta">
        <div class="img_tarjeta"><img src="img/maceta_tipo_madera_601.png" alt="" height="150px"></div>
        <h2>601 Tipo madera</h2>
        <span class="label_negro">Negro</span><span class="label_cafe">Café</span><span class="label_blanco">Blanco</span>
        <p><b>Mediana:</b> $480 MXN</p>
        <p><b>Grande:</b> $530 MXN</p>
        <button class="btn_tarjetas">Lo quiero</button>
      </div>
    </div>

  </div>

  <!-- MAPA -->
  <h1 class="title">Encuentranos aquí</h1>

  <div class="map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.297644006493!2d-100.5556954850891!3d19.69994818673303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cbb85ee02b51%3A0x470edba264059f8c!2sNicol%C3%A1s%20Bravo%20198%2C%20Centro%2C%2061100%20Cd%20Hidalgo%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1637719704531!5m2!1ses-419!2smx" width="100%" height="450"  allowfullscreen="" loading="lazy"></iframe>
  </div>


  <!-- Blog -->
  <h1 class="title" >Mi blog y cosas que te gustaria leer 🍃🍁</h1>
  <div class="contenedor_tarjeta">
 
    <div class="tarjeta">
      <div class="contenido_tarjeta">
        <div class="img_tarjeta"><img src="https://static01.nyt.com/images/2019/08/05/fashion/01InteligenciaPlantas01/merlin_155848368_ea1d8ed2-8b4b-4ce8-b337-0abca129635c-articleLarge.jpg?quality=75&auto=webp&disable=upscale" alt="" height="170px"></div>
        <h2>¿Las plantas tienen algo que decir?</h2>
        <p>Esperalo, ¡Muy pronto!</p>
        <button class="btn_tarjetas">Leer</button>
      </div>
    </div>

    <div class="tarjeta">
      <div class="contenido_tarjeta">
        <div class="img_tarjeta"><img src="https://miro.medium.com/max/1400/0*QgOSm2q5WIR7Gu0A" alt="" height="160px"></div>
        <h2>La maceta, una elección importante</h2>
        <p>Con cierta frecuenta la mayor atención de nuestros cuidados ...</p>

        <a href="blog.php" class="link_blog"><button class="btn_tarjetas">Leer</button> </a>
      </div>
    </div>

    <div class="tarjeta">
      <div class="contenido_tarjeta">
        <div class="img_tarjeta"><img src="./img/headphones-2595259_128.jpg" alt="" height="160px"></div>
        <h2>Sobre la música y la naturaleza</h2>
        <p>Esperalo, ¡Muy pronto!</p>
        <button class="btn_tarjetas">Leer</button>
      </div>
    </div>

  </div>


  <!-- CONTACTO -->
  <h1 class="title" id="contactanos">Contactanos</h1>

  <div class="container_form">
    <form action="php/email.php">

      <label for="name">Nombre</label>
      <input type="text" id="name" name="name" placeholder="Tu nombre..." required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Tu email..." required>


      <label for="message">Mensaje</label>
      <textarea id="message" name="message" placeholder="Escribe algo...." class="form__txtarea" required></textarea>

      <input type="submit" value="Enviar">

    </form>
  </div>

  <!-- Footer -->
  <?php include("php/footer.php"); ?>
</body>

</html>
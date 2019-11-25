<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tienda enlinea</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
</head>
<body style="background-color:rgba(255,255,255,1.00)">

  <!--Menu principal head-->
  <?php include('navBar.php');?>
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li class="" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="active" data-target="#myCarousel" data-slide-to="2"></li>
        <li class="" data-target="#myCarousel" data-slide-to="3"></li>
        <li class="" data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <center><img src="../img/imacpro.png" alt="First slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>IMAC PRO</h1>
              <p id="nav-tex">La nueva Imac Pro.</p>
               <button type="button" class="btn btn-default" title="Imac Pro" data-container="body" data-toggle="popover" data-placement="top" data-content="27' iMac con visualización Retina 5 K. Con una resolución de visualización de 5120 x 2880, este iMac proporciona 1 mil millones de colores y 500 nits de brillo, que es 43% más brillante que el modelo anterior. La visualización Retina 5 K también cuenta con una amplia gama de colores. Utilizando una p3-based gama de color, la visualización Retina 5 K proporciona una mayor que más igualmente representa el rojo, verde y azul, en comparación con los estándar del espacio de color sRGB pantallas.">
  Ver detalles <i class="fa fa-eye"></i>
  </button>
  <a href="validar.php"> <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button></a>
            </div>
          </div>
        </div>
        <div class="item">
          <center><img src="../img/foco.png" alt="Second slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>FOCO INTELIGENTE</h1>
              <p>Conoce la ultima tecnologia en focos inteligentes.</p>
              <button type="button" class="btn btn-default" title="Smart Focus" data-container="body" data-toggle="popover" data-placement="top" data-content="Las características de cambio de color lo distinguen de otras luces ordinarias, para crear más diversión y alegría en su vida con familias, niños, amantes y amigos.
Conectado con wifi de 2.4 GHz, puede controlar las luces desde cualquier lugar y en cualquier momento.
El control por voz brinda más comodidad en la vida diaria, también es muy útil para los hombres olvidados y las discapacidades.">
  Ver detalles <i class="fa fa-eye"></i>
    </button>
  <a href="validar.php"> <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button></a>
            </div>
          </div>
        </div>
        <div class="item">
          <center><img src="../img/samgung.png" alt="Thrid slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>NOTEBOOK SAMSUNG</h1>
              <p>Con un diseño elegante, conoce el nuevo notebook mas poderoso</p>
              <button type="button" class="btn btn-default" title="Notebook Samsung" data-container="body" data-toggle="popover" data-placement="top" data-content="Viene con estas especificaciones de alto nivel: Procesador Intel Core i3-8130U de octava con 2.2GHz con tecnología Turbo Boost de 3.4GHz, Windows 10 Home, pantalla ancha de 15.6 Full HD ( 1920 x 1080) Pantalla retroiluminada, Intel UHD Graphics 620, 6 GB de memoria de doble canal, disco duro SATA 1TB 5400RPM, 8X DVD de doble capa RW (M-DISC habilitado), lector de tarjetas Secure Digital (SD), Acer True Harmony, dos incorporados Altavoces estéreo, Wi-Fi 802.11ac con tecnología MU-MIMO (banda dual de 2.4GHz y 5GHz), Bluetooth 4.1, cámara web HD (1280 x 720) que admite alto rango dinámico (HDR), 1 - puerto USB 3.1 Tipo C Gen 1 (hasta 5 Gbps), 2 puertos USB 3.0 (uno con carga de encendido), 1 - puerto USB 2.0, 1 - puerto HDMI con soporte HDCP, batería de baterías de 6 celdas (2800 mAh) ), hasta 13.5 -hora Duración de la batería, 5.27 lbs. | 2.39 kg (solo unidad del sistema) (NX.GRYAA.001). Este es un producto de importación, el tec lado tiene configuración en inglés">
  Ver detalles <i class="fa fa-eye"></i>
 </button>
  <a href="validar.php"> <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button></a>
            </div>
          </div>
        </div>
        
        <div class="item">
          <center><img src="../img/echo.png" alt="Fourth slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>ECHO DOT</h1>
              <p>Conoce el nuevo asistente de Google</p>
              <button type="button" class="btn btn-default" title="Echo Dot" data-container="body" data-toggle="popover" data-placement="top" data-content="Echo Dot se entrega listo para que lo conectes a la red Wi-Fi. La app de Alexa es compatible con dispositivos Android y iOS. También está disponible a través del navegador web de tu computadora. Determinados servicios y Skills están sujetos a cambios y es posible que no estén disponibles en todas las regiones y que requieran suscripciones o cargos adicionales.">
  Ver detalles <i class="fa fa-eye"></i>
  </button>
  <a href="validar.php"> <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button></a>
            </div>
          </div>
        </div>
        <div class="item active">
          <center><img src="../img/sonido.png" alt="Fifth slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>EQUIPO DE SONIDO LOGITECH</h1>
              <p>Sumergete en el nuevo sonido de logitech para disfrutar las peliculas en familia</p>
              <button type="button" class="btn btn-default" title="Logitech" data-container="body" data-toggle="popover" data-placement="top" data-content="Actualice a Wi-Fi de CA para sus dispositivos que consumen mucho ancho de banda con el ASUS RT-ACRH13 de doble banda. Los teléfonos y tabletas pueden moverse libremente por toda la casa gracias a cuatro antenas externas que mejoran la cobertura y la estabilidad. La configuración fácil e intuitiva y la administración de la red están a su alcance con ASUSWRT y la aplicación de enrutador ASUS. El rendimiento real de los datos y la cobertura de Wi-Fi variarán según las condiciones de la red y los factores ambientales, incluido el volumen del tráfico de la red, el material de construcción y la construcción, y la sobrecarga de la red, dan como resultado un menor rendimiento real de datos y cobertura inalámbrica. Fuente de alimentación - Entrada de CA - 110V ~ 240V (50 ~ 60Hz), Salida de CC - 12 V con máx. Corriente de 1.5 A.">
  Ver detalles <i class="fa fa-eye"></i>
  </button>
  <a href="validar.php"> <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button></a>
            </div>
          </div>
        </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	
<!--Inicio del contenedor-->
  <div class="container"> 
       <div class="row">
           <br><br>
        <div class="col-lg-4">
        
          <a href=""><img src="../img/dell.jpg" alt="Generic placeholder image"></a>
          
          <h2>DELL XPS 6920</h2>
          <p><span class="badge">Precio $42487 MX</span></p>
          <p>La nueva pc de dell para los gamer que les gusta la
          potencia al maximo, disfruta de esta nueva experiencia unica,
          acompañada con un diseño elegante y poderoso</p>
          <p>
        <button type="button" class="btn btn-default" title="dellxps-6920" data-container="body" data-toggle="popover" data-placement="top" data-content="Pantalla de 15 pulgadas con resolución Full HD (1,920x1,080 pixeles) y con la opción de configurarla hasta con una resolución UHD 4K (3,840x2,160 pixeles)
Procesador Intel Core i7 o Intel Core i7 de séptima generación con una velocidad máxima de 3.8GHz.">
  Ver detalles <i class="fa fa-eye"></i>
 </button>
  <a href="validar.php"> <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button></a>
          
        </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/teclado.jpg"  alt="Generic placeholder image">
          <h2>TECLADO BLUETOOTH</h2>
          <p><span class="badge">Precio $912 MX</span></p>
          <p>El nuevo teclado con bluetooth 5.0 compatible con todos los equipos del mercado.
          Util para los amantes de los juegos y para trabajar a oscuras</p>
          <p>
          <button type="button" class="btn btn-default" title="Teclado Gaming" data-container="body" data-toggle="popover" data-placement="top" data-content="El teclado gaming KB-502 de Vorago, gracias a su diseño ergonómico e iluminación llevarán tu juego a otro nivel, mejorando la experiencia en el campo de batalla. Además cuenta con 12 teclas multimedia para facilitarte el trabajo, y a la hora de jugar puedas utilizarlas con un sólo toque.">
  Ver detalles <i class="fa fa-eye"></i>
  </button>
  <a href="validar.php"> <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button></a> 
          </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/iphone.jpg"  alt="Generic placeholder image">
          <h2>IPHONE 6 PLUS</h2>
          <p><span class="badge">Precio $12634 MX</span></p>
          <p>Conoce el nuevo modelo de la manzana con un diseño super elegante para todo usuario.
          Conoce la nueva camara de 98 pixeles para sacar unas fotos de pelicula.
          </p>
          <p>
          <button type="button" class="btn btn-default" title="Iphone 6 Plus" data-container="body" data-toggle="popover" data-placement="top" data-content=" El iPhone 6 Plus cuenta con una pantalla de 5.8 pulgadas que abarca todo el frente del teléfono, dejando un espacio arriba para acomodar todos los sensores que contribuyen a Face ID, el nuevo método de desbloqueo por rostro, ya que el botón Touch ID desaparece. Con una atípica resolución de 2436 x 1125 pixels, acomoda 458ppi. Por dentro, el iPhone 6 Plus tiene el nuevo procesador A11 Bionic. La cámara es dual de 98 MP similar a la del iPhone X, es resistente al agua y corre iOS 11. ">
  Ver detalles <i class="fa fa-eye"></i>
 </button>
  <a href="validar.php"> <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button></a>
          </p>
        </div><!-- /.col-lg-4 -->
        <?php
        require_once('../Dao/DAOVenta.php');
        $ventas = new DAOVenta();
        $lista=$ventas->all();
        foreach($lista as $fila){
          //var_dump($fila);
          echo '
          <div class="col-lg-4">
  
              <a href=""><img src="../Imagenes/'.$fila["a_Imagen"].'" alt="Generic placeholder image" width="225" height="225"></a>
  
              <h2>'.$fila["aNombre"].'</h2>
              <p><span class="badge">Precio $'.$fila["a_precio"].' MX</span></p>
              <p>'.$fila["a_Desc"].'</p>
              <p>
                  <button type="button" class="btn btn-default" title="'.$fila["aNombre"].'" data-container="body" data-toggle="popover" 
                  data-placement="top" data-content="'.$fila["a_Desc"].'">
                      Ver detalles <i class="fa fa-eye"></i>
                  </button>
                  <a href="validar.php"> <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
                      </button></a>
  
              </p>
          </div><!-- /.col-lg-4 -->';
        }
        ?>


      </div><!-- /.row -->

      
      <!--Pie de pagina footer-->
      <?php include('footer.html'); ?>
  </div>
<!--Fin del contenedor-->


    <script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>

  <script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  $(function () {

      $('[data-toggle="popover"]').popover()

  })
</script>
    
</body>
</html>
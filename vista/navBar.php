
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">
</head>

<body>

<nav class="navbar navbar-default alert-info">
  <div class="container-fluid">
 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../vista/index.php">FMATStore</a>
    </div>

   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" action="Articulos.php" method="get">
        <div class="form-group">
          <input type="text" class="form-control" name="buscar" placeholder="Buscar articulo">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">

      <li><a href="#">Ver carrito</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <?php
              if (isset($_SESSION['Usuario'])) {
                echo '<li>--'.$_SESSION['Usuario'].'</li>';
                echo '<li role="separator" class="divider"></li>';
                echo '<li><a href="../vista/Verperfil.php">Ver Perfil</a></li>';
                echo '<li role="separator" class="divider"></li>';
                echo '<li><a href="../vista/registroArticulos.php">Vender Articulo</a></li>';
                echo '<li role="separator" class="divider"></li>';
              }
            ?>
            <?php
              if (!isset($_SESSION['Usuario'])) {
                echo '<li><a href="../vista/login.php">Iniciar Sesion</a></li>';
                
              }else{
                echo '<li><a href="../Modelo/cerrarSesion.php">Cerrar Sesion</a></li>';
              }
            ?>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>

</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="valida.js"></script>
        <title>Iniciar Sesión</title>
    </head>
    <body class="bg-dark text-white">
            <h1 class="d-flex justify-content-center align-items-center">Iniciar Sesión</h1><br>
            <div class="container">
                <img src="../img/Login.png" class="mx-auto d-block img-fluid">
                <br>
                <div class="row">
                    <div class="d-flex justify-content-center align-items-center container">
                        <form name="login" action="../Modelo/valida.php" method="post">
                            <div class="form-group">
                                <label for="uname" class="control-label">Usuario</label>
                                <input type="uname" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Contraseña:</label>
                                <input type="password" class="form-control" name="pwd" required>
                            </div>
                            <center><button type="submit" class="btn btn-secondary">Enviar</button></center>
                           
                        </form>
                        
                    </div>
                   
                </div>
                <br>
                 <center><p>¿No tienes una cuenta?</p></center>
                 <center><a href="registro.php"><button>Crear</button></a></center>
            </div>
         
    </body>
</html>
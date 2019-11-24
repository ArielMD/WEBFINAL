<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sesión Iniciada con éxito</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body class="bg-dark text-white">
            <?php

            








            if (isset($_POST['uname'])) {
                $_SESSION['user'] = $_POST['uname'];
                header('Location: agregarCarrito.php');
            }else{
                header('Location: iniciar.php');
            }






            ?>
        <div class="d-flex justify-content-center align-items-center">
            <a href="close.php" class="alert-link">Cerrar sesión.</a>
        </div>
    </body>
</html>
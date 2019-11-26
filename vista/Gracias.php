<?php
session_start();
unset($_SESSION['carrito']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Compra exitosa</title>
</head>
<body class="bg-dark text-white mt-8">
<center>
    <h2 class="mt-5">TU COMPRA SE HA REALIZADO CON ÉXITO</h2>
</center>
<br><br><br>
<center><button class="btn btn-primary btn-lg" onclick="location.href=index.php">Darnos más dinero</button></center>
</body>
</html>
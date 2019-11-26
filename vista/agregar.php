<?php
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
        $articulo = $_GET["art"];
        array_push($_SESSION['carrito'], $articulo);
    }else{
        for
    }
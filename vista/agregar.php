<?php
session_start();
$articulo = $_GET["art"];
    if (!isset($_SESSION['carrito'])) {
        $lista = array();
        array_push($lista, $articulo);
        $_SESSION['carrito'] = $lista;
        //var_dump($_SESSION['carrito']);
        header('location:../vista/index.php');
    }else{
            $lista = $_SESSION['carrito'];
            array_push($lista, $articulo);
            $_SESSION['carrito'] = $lista;
            //var_dump($_SESSION['carrito']);
            header('location:../vista/index.php');
    }

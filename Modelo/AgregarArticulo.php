<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Dao/DAOUsuario.php';
include '../Dao/DAOVenta.php';
include '../Modelo/Articulo.php';
include '../Modelo/Venta.php';


$id = $_POST["id"];
$nombre = $_POST["articulo"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$cantidad = $_POST["cantidad"];
//$imagen = $_POST["imagen"];

$hoy = getdate();
$venta = new venta($_SESSION["Usuario"],$id,$hoy["wday"]."-".$hoy["month"]."-".$hoy["year"]);
print_r($_FILES);
$nomArchivo = $_FILES["imagen"]["name"];
$guardado = $_FILES["imagen"]["tmp_name"];
$Articulo = new Articulo($id, $nombre, $precio,  $descripcion, $cantidad,$nomArchivo);
if(file_exists('../Imagenes')){
    if(move_uploaded_file($guardado,"../Imagenes/".$nomArchivo)){

    }
}
function nuevoArticulo($usuario){
    $daoUser = new DAOArticulo();
    $daoVenta = new DAOVenta();
    return $daoUser->insertar($usuario)&&$daoVenta->insertar($venta);
}

$nuevo = nuevoUsuario($Articulo);
if($nuevo){
    header('location:../vista/index.php');
}else{
    header('location:../vista/registroArticulos.php');
}
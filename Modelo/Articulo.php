<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Ariel May
 */
class Articulo {

    private $id;
    private $nombre;
    private $precio;
    private $descripcion;
    private $cantidad;
    private $imagen;


    function __construct($id, $nombre, $precio, $descripcion, $cantidad, $imagen) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->cantidad = $cantidad;
        $this->imagen = $imagen;
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPrecio() {
        return (float)$this->precio;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getCantidad() {
        return (int)$this->cantidad;
    }

    function getImagen(){
        return $this->imagen;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setImagen($imagen){
        $this->imagen = $imagen;
    }

    function dato(){
        return $this->getId()." ".$this->getNombre(); 
    }
}

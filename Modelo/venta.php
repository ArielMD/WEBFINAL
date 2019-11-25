<?php
class venta {

    private $usuario;
    private $articulo;
    private $fechaVen;

    function __construct($usuario, $articulo, $fechaVen) {
        $this->usuario = $usuario;
        $this->articulo = $articulo;
        $this->fechaVen = $fechaVen;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getArticulo() {
        return $this->articulo;
    }

    function getFechaVen() {
        return $this->fechaVen;
    }
    
    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setArticulo($articulo) {
        $this->articulo = $articulo;
    }

    function setFechaVen($fechaVen) {
        $this->fechaVen = $fechaVen;
    }

    function dato(){
        return $this->getUsuario().$this->getArticulo().$this->getFechaVen();
    }
}
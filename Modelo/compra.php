<?php

class Compra {

    private $usuario;
    private $articulo;
    private $fechaCom;

    function __construct($usuario, $articulo, $fechaCom) {
        $this->usuario = $usuario;
        $this->articulo = $articulo;
        $this->fechaCom = $fechaCom;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getArticulo() {
        return $this->articulo;
    }

    function getFechaCom() {
        return $this->fechaCom;
    }
    
    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setArticulo($articulo) {
        $this->articulo = $articulo;
    }

    function setFechaCom($fechaCom) {
        $this->fechaCom = $fechaCom;
    }


}

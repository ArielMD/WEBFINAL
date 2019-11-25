<?php
require_once('../Dao/DAOGeneral.php');
class DAOVenta extends DAOGeneral{
        public function insertar($entidad) {
        $c = $this->getConexion();
        
        $user = $entidad->getUsuario();
        $arti = $entidad->getArticulo();
        $fecha = $entidad->getFechaVen();

       
        $sql = 'insert into vende values ("'.$user.'","'.$arti.'","'.$fecha.'")';
        echo $sql;
        if (!$c->query($sql)) {
            return false;
        } else {
            print '<script languaje="javaScript> alert("Guardado";</script>)';
            return true;
        }
        $c=null;
    }
    
    public function eliminar($condicion) {
        $c = $this->getConexion();
        $id = $entidad->getId();

        $sql = "delete from usuarios where id=$id";
        if (!$c->query($sql)) {
            print "Error al eliminar";
        } else {
            print '<script languaje="javaScript> alert("Eliminado";</script>)';
        }
        
        $c=null;
        
    }
    
    public function modificar($entidad) {
        $id = $entidad->getId();
        $pass = $entidad->getContrasena();
        $nombres = $entidad->getNombres();
        $apellidos = $entidad->getApellido();
        $edad = $entidad->getEdad();
        $correo = $entidad->getCorreo();
        $telefono = $entidad->getTelefono();
        $sexo = $entidad->getSexo();

        $sql = "update usuarios set nombres=$nombre, apellidos=$apellidos, dui=$Dui where id=$id";
        if (!$c->query($sql)) {
            print "Error al modificar";
        } else {
            print '<script languaje="javaScript> alert("modificado";</script>)';
        }
        mysqli_close($c);
    }
    //falta terminar
    public function consultar($condicion) {
        $sql = 'select v.Usuarios_u_Id,v.Articulos_a_Id, a.aNombre, a.a_precio, a.a_Desc,a.a_Imagen
        from vende v
        join articulos a on a.a_Id=v.Articulos_a_Id where aNombre = "'.$condicion.'"';
        $c = $this->getConexion();
        $list = array();
        $c = $this->getConexion();
       foreach ($c->query($sql) as $fila){
          array_push($list, $fila);
        }
       
       return $list;
    }

    public function all(){
        $sql = 'select v.Usuarios_u_Id,v.Articulos_a_Id, a.aNombre, a.a_precio, a.a_Desc,a.a_Imagen
        from vende v
        join articulos a on a.a_Id=v.Articulos_a_Id;';
        $c = $this->getConexion();
        $list = array();
        $c = $this->getConexion();
       foreach ($c->query($sql) as $fila){
          array_push($list, $fila);
        }
       
       return $list;
    }
}
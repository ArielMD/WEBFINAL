<?php
class DAOCompra extends DAOGeneral{
        public function insertar($entidad) {
        $c = $this->getConexion();
        
        $id = $entidad->getId();
        $nombres = $entidad->getNombre();
        $precio = $entidad->getApellido();
        $descripcion = $entidad->getEdad();
        $cantidad = $entidad->getCorreo();
       
        $sql = 'insert into usuarios values ("'.$id.'","'.$nombres.'","'.$precio.'","'.$descripcion.'","'.$cantidad.')';

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
        
    }
}
    
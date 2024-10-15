<?php
class Configuracion extends CI_Model {
    public $tabla="configuraciones";
    public $pk= "configuraciones.clave";
        // Método para obtener todos los registros de una tabla
    
    // Método para obtener un registro por ID
    public function obtener_clave($id) {
        $query = $this->db->get_where($this->tabla, array($this->pk => $id));
        $temp= $query->row_array();
        return $temp["valor"];
    }
    
}
<?php
class Usuarios_model extends CI_Model {
    public $tabla = "usuarios";
    public $pk = "usuarios.usuario_id";

    // Método para obtener todos los registros de la tabla
    public function listar() {
        $query = $this->db->get($this->tabla);
        return $query->result_array();
    }

    // Método para obtener un registro por ID
    public function obtener_por_id($id) {
        $query = $this->db->get_where($this->tabla, array($this->pk => $id));
        return $query->row_array();
    }

    // Método para insertar un nuevo registro
    public function nuevo($datos) {
        return $this->db->insert($this->tabla, $datos);
    }

    // Método para actualizar un registro existente
    public function update($id, $datos) {
        $this->db->where($this->pk, $id);
        return $this->db->update($this->tabla, $datos);
    }

    // Método para eliminar un registro
    public function delete($id) {
        $this->db->where($this->pk, $id);
        return $this->db->delete($this->tabla);
    }
}
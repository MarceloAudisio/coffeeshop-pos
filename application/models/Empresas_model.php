<?php
class Empresas_model extends CI_Model {
    
    private $tabla = "empresas";
    private $empresa_id = "empresa_id";

    public function listar() {
        $query = $this->db->get($this->tabla);
        return $query->result_array();
    }
    public function obtener_por_id($id) {
        $query = $this->db->get_where($this->tabla, array($this->empresa_id => $id));
        return $query->row_array();
    }
    public function nuevo($datos) {
        return $this->db->insert($this->tabla, $datos);
    }
    public function update($id, $datos) {
        $this->db->where($this->empresa_id, $id);
        return $this->db->update($this->tabla, $datos);
    }
    public function delete($id) {
        $this->db->where($this->empresa_id, $id);
        return $this->db->delete($this->tabla);
    }

    public function buscar($razon_social) {
        $this->db->like("razon_social", $razon_social);
        $query = $this->db->get($this->tabla);
        return $query->result_array();
    }

}

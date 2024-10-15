<?php 
class Usuario_model extends CI_Model{

    public function get_by_id($id)
    {
        $this->db->select("usuarios.*,roles.nombre AS rol");
        $this->db->join("roles", "roles.rol_id=usuarios.rol_id", "inner");
        $this->db->from("usuarios");
        $this->db->where("usuario_id", $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function check_login($nombre, $password)
    {
        $this->db->select("usuario_id");
        $this->db->where("nombre", $nombre);
        $this->db->where("password", md5($password));
        $query = $this->db->get("usuarios");
        if ($query->num_rows() > 0) {
            $tmp = $query->row_array();
            return $tmp["usuario_id"];
        } else {
            return false;
        }
    }
    public function nuevo($nombre, $password, $rol)
    {
        $hashed_password = md5($password);
        //lo guardamos en la base de datos 
        $this->db->set('nombre', $nombre);
        $this->db->set('password', $hashed_password); 
        $this->db->set('rol_id', $rol); 
        $this->db->insert('usuarios');
        
        return $this->db->insert_id(); //devuelve que inserto la ultima consulta
    }



}





?>
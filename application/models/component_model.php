<?php

class component_model extends CI_Model
{
    public function all_component()
    {
        return $this->db->get('component');
    }
    public function add_component()
    {
        return $this->db->get('additional');
    }

    public function select_add_id($id)
    {
        return $this->db->get_where('additional', ['id_add' => $id])->row_array();
    }
}

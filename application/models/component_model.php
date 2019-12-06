<?php

class component_model extends CI_Model
{
    public function all_component()
    {
        return $this->db->get('component');
    }
}

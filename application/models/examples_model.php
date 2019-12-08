<?php

class examples_model extends CI_Model
{
    public function allexamples()
    {
        return $this->db->get('examples_code');
    }

    public function all_examples($id)
    {
        return $this->db->get_where('examples_code', ['id' => $id])->row_array();
    }
}

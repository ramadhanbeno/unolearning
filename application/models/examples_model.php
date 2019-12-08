<?php

class examples_model extends CI_Model
{
    public function all_examples()
    {
        return $this->db->get('examples');
    }
}

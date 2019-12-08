<?php

class exercise_model extends CI_Model
{
    public function allexercise()
    {
        return $this->db->get('exercise');
    }

    public function exerciseessay()
    {
        return $this->db->get('exercise_essay');
    }

    public function all_exercise($id)
    {
        return $this->db->get_where('exercise', ['no_exercise' => $id])->row_array();
    }

    public function exercise_essay($id)
    {
        return $this->db->get_where('exercise_essay', ['id' => $id])->row_array();
    }
}

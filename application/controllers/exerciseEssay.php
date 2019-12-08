<?php

class ExerciseEssay extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('file');
    }

    public function essay($id)
    {
        $data['list_essay'] = $this->exercise_model->exerciseessay()->result();
        $data['essay'] = $this->exercise_model->exercise_essay($id);
        $data['exercises'] = $this->exercise_model->allexercise()->result();
        $data['exercise'] = $this->exercise_model->all_exercise($id);
        $data['judul'] = 'Exercise Essay';
        $this->load->view('templates/header', $data);
        $this->load->view('essay/index', $data);
        $this->load->view('templates/footer');
    }
}

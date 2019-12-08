<?php

class Exercise extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('file');
    }

    public function soal($id)
    {
        $data['list_essay'] = $this->exercise_model->exerciseessay()->result();
        $data['essay'] = $this->exercise_model->exercise_essay($id);
        $data['exercises'] = $this->exercise_model->allexercise()->result();
        $data['exercise'] = $this->exercise_model->all_exercise($id);
        $data['judul'] = 'Exercise';
        $this->load->view('templates/header', $data);
        $this->load->view('exercise/index', $data);
        $this->load->view('templates/footer');
        $form = $this->input->post();
        if (isset($form['run1']))
            $baca = read_file('assets/LEDstate.txt');

        if (isset($form['code-id']) && isset($form['jawab_a'])) {
            if ($form['jawab_a'] == $data['exercise']['jawab_a'] && $form['jawab_b'] == $data['exercise']['jawab_b'] && $form['jawab_c'] == $data['exercise']['jawab_c']) {
                if ($baca == '0') {
                    echo '<div class="flash-data" data-flashdata="True"></div>';
                    $write_data = $form['code-id'];
                } else {
                    $write_data = '0';
                }
            } else {
                echo '<div class="flash-data" data-flashdata="False"></div>';
                $write_data = '0';
            }
            write_file('assets/LEDstate.txt', $write_data, 'w');
        }
    }


    public function __destruct()
    {
        $write_data = '0';
        if (!write_file('assets/LEDstate.txt', $write_data, 'w'))
            echo 'Unable to write the file';
        else
            echo 'File written!';
    }
}

<?php

class Examples extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function no($id)
    {
        $data['listexample'] = $this->examples_model->allexamples()->result();
        $data['examples'] = $this->examples_model->all_examples($id);
        $data['judul'] = 'Examples';
        $this->load->view('templates/header', $data);
        $this->load->view('examples/index', $data);
        $this->load->view('templates/footer');
        $form = $this->input->post();
        if (isset($form['run1']))
            $baca = read_file('assets/LEDstate.txt');

        if (isset($form['code-id']) && isset($form['answer_a'])) {
            if ($form['answer_a'] == $data['examples']['answer_a'] && $form['answer_b'] == $data['examples']['answer_b'] && $form['answer_c'] == $data['examples']['answer_c']) {
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

    // public function __destruct()
    // {
    //     $write_data = '0';
    //     if (!write_file('assets/LEDstate.txt', $write_data, 'w'))
    //         echo 'Unable to write the file';
    //     else
    //         echo 'File written!';
    // }
}

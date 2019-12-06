<?php

class Component extends CI_Controller
{
    public function index($id)
    {
        $data['addcomp'] = $this->component_model->select_add_id($id);
        $data['judul'] = 'Additional Component';
        $this->load->view('templates/header', $data);
        $this->load->view('component/index', $data);
        $this->load->view('templates/footer');
    }
}

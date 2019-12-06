<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['comp'] = $this->component_model->all_component()->result();
        $data['judul'] = 'Ard_WebUno';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}

<?php

class Component extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Additional Component';
        $this->load->view('templates/header', $data);
        $this->load->view('component/index');
        $this->load->view('templates/footer');
    }
}

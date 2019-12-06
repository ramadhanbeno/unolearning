<?php

class Examples extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Examples';
        $this->load->view('templates/header', $data);
        $this->load->view('examples/index');
        $this->load->view('templates/footer');
    }
}

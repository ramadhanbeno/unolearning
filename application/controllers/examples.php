<?php

class Examples extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['example'] = $this->examples_model->all_examples()->result();
        $data['judul'] = 'Examples';
        $this->load->view('templates/header', $data);
        $this->load->view('examples/index', $data);
        $this->load->view('templates/footer');
    }
}

<?php

class Progdi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Program Studi - PMB Online USM';
        $this->load->view('theme/header', $data);
        $this->load->view('progdi/index');
        $this->load->view('theme/footer');
    }
}

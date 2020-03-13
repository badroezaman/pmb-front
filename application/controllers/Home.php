<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'PMB Online USM';
        $this->load->view('theme/header', $data);
        $this->load->view('home/index');
        $this->load->view('theme/footer');
    }
}

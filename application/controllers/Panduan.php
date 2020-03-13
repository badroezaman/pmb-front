<?php

class Panduan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Panduan - PMB Online USM';
        $this->load->view('theme/header', $data);
        $this->load->view('panduan/index');
        $this->load->view('theme/footer');
    }
}

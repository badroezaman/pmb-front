<?php

class Pmb_pagi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Pagi - PMB Online USM';
        $this->load->view('theme/header', $data);
        $this->load->view('pmb_pagi/index');
        $this->load->view('theme/footer');
    }
}

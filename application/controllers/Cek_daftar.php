<?php

class Cek_daftar extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Cek Pendaftaran - PMB Online USM';
        $this->load->view('theme/header', $data);
        $this->load->view('cek_daftar/index');
        $this->load->view('theme/footer');
    }
}

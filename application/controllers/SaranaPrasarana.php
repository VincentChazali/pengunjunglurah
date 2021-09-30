<?php

defined('BASEPATH') or exit('No direct script access allowed');
class SaranaPrasarana extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sarana_model', 'spr');
    }
    public function index()
    {
        $data['sarana'] = $this->spr->getsrn();
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Sarana/vw_saranaprasarana', $data);
        $this->load->view('layout/footer');
    }
    public function kesehatan()
    {
        $data['kesehatan'] = $this->spr->getksht();
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Sarana/vw_kesehatan', $data);
        $this->load->view('layout/footer');
    }
    public function sekolah()
    {
        $data['sekolah'] = $this->spr->getsklh();
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Sarana/vw_sekolah', $data);
        $this->load->view('layout/footer');
    }
    public function tempatibadah()
    {
        $data['ibadah'] = $this->spr->getibdah();
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Sarana/vw_ibadah', $data);
        $this->load->view('layout/footer');
    }
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Polling extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Polling_model', 'pol');
    }
    public function index()
    {
        $data['polling'] = $this->pol->get();
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Poling/vw_polling', $data);
        $this->load->view('layout/footer');
    }
    public function soal()
    {
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Poling/vw_soal_polling');
        $this->load->view('layout/footer');
    }
}

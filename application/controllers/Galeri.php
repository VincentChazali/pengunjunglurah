<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model', 'gal');
    }
    public function index()
    {
        $jumlah_data = $this->gal->jumlah_data();
        $config["base_url"] = base_url() . "Galeri";
        $config["total_rows"] = $jumlah_data;
        $config["per_page"] = 10;
        $from = $this->uri->segment(1);
        $this->pagination->initialize($config);
        $data['galeri'] = $this->gal->data($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Galeri/vw_galeri', $data);
        $this->load->view('layout/footer');
    }
    public function detailgaleri()
    {
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Galeri/vw_detail_galeri');
        $this->load->view('layout/footer');
    }
}

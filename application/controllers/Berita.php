<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model', 'brt');
    }
    public function index()
    {
        $jumlah_data = $this->brt->jumlah_data();
        $config["base_url"] = base_url() . "Berita";
        $config["total_rows"] = $jumlah_data;
        $config["per_page"] = 10;
        $from = $this->uri->segment(1);
        $this->pagination->initialize($config);
        $data['berita'] = $this->brt->data($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Berita/vw_berita', $data);
        $this->load->view('layout/footer');
    }
    public function detailberita($id)
    {
        $data['berita'] = $this->brt->getByIdB($id);
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Berita/vw_detail_berita', $data);
        $this->load->view('layout/footer');
    }
}

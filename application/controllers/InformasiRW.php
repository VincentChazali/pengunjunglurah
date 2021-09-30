<?php

defined('BASEPATH') or exit('No direct script access allowed');
class InformasiRW extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RW_model', 'rw');
        $this->load->model('RT_model', 'rt');
    }
    public function index()
    {
        $jumlah_data = $this->rw->jumlah_data();
        $config["base_url"] = base_url() . "InformasiRW";
        $config["total_rows"] = $jumlah_data;
        $config["per_page"] = 10;
        $from = $this->uri->segment(1);
        $this->pagination->initialize($config);
        $data['berita'] = $this->rw->data($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();
        $data['rw'] = $this->rw->get();
        $this->load->view('layout/header');
        $this->load->view('pengunjung/vw_informasiRW', $data);
        $this->load->view('layout/footer');
    }
    public function RT($id)
    {
        $jumlah_data = $this->rt->jumlah_data();
        $config["base_url"] = base_url() . "InformasiRW/RT/" . $id;
        $config["total_rows"] = $jumlah_data;
        $config["per_page"] = 10;
        $from = $this->uri->segment(2);
        $this->pagination->initialize($config);
        $data['berita'] = $this->rt->data($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();
        $data['rt'] = $this->rt->getbyId($id);
        $this->load->view('layout/header');
        $this->load->view('pengunjung/vw_informasiRT', $data);
        $this->load->view('layout/footer');
    }
}

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
        $config["base_url"] = base_url() . "Berita/index";
        $config["total_rows"] = $jumlah_data;
        $config["per_page"] = 10;
        $from = $this->uri->segment(3);

        $config['full_tag_open'] = '<ul class="pagination pagination-lg"><li class="page-item">';
        $config['full_tag_close'] = '</ul></li">';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active" ><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item" >';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

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

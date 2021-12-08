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
        $config["base_url"] = base_url() . "InformasiRW/index";
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
        $data['rw'] = $this->rw->data($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();
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
        $data['rt'] = $this->rt->data($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();
        $data['rt'] = $this->rt->getbyId($id);
        $this->load->view('layout/header');
        $this->load->view('pengunjung/vw_informasiRT', $data);
        $this->load->view('layout/footer');
    }
}

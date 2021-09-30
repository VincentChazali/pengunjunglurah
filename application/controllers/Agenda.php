<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model', 'ag');
    }
    public function index()
    {
        $jumlah_data = $this->ag->jumlah_data();
        $config["base_url"] = base_url() . "Agenda";
        $config["total_rows"] = $jumlah_data;
        $config["per_page"] = 5;
        $from = $this->uri->segment(1);
        $this->pagination->initialize($config);
        $data['Agenda'] = $this->ag->data($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('layout/header');
        $this->load->view('pengunjung/agenda/vw_agenda', $data);
        $this->load->view('layout/footer');
    }
}

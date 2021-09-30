<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        
        $this->load->view('layout/header');
        $this->load->view('pengunjung/profil/vw_profil', );
        $this->load->view('layout/footer');
    }
    public function vm()
    {
        
        $this->load->view('layout/header');
        $this->load->view('pengunjung/profil/vw_visimisi', );
        $this->load->view('layout/footer');
    }
    public function tf()
    {
        
        $this->load->view('layout/header');
        $this->load->view('pengunjung/profil/vw_tugasfungsi', );
        $this->load->view('layout/footer');
    }
    public function sa()
    {
        
        $this->load->view('layout/header');
        $this->load->view('pengunjung/profil/vw_strukturanggota', );
        $this->load->view('layout/footer');
    }
    public function kg()
    {
        
        $this->load->view('layout/header');
        $this->load->view('pengunjung/profil/vw_kondisigeografis', );
        $this->load->view('layout/footer');
    }
}

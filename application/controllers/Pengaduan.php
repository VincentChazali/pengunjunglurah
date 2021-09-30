<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengaduan_model', 'pg');
        $this->load->model('Tipe_model', 'tp');
        $this->load->model('Penduduk_model', 'pd');
    }
    public function index()
    {
        $data['pengaduan'] = $this->pg->get();
        $data['tipe'] = $this->tp->getAll();
        $this->load->view('layout/header', $data);
        $this->load->view('pengunjung/Pengaduan/vw_pengaduan', $data);
        $this->load->view('layout/footer', $data);
    }
    function tambah()
    {
        // $nik = $this->input->post('nik');
        // $nik1 = $this->db->get_where('penduduk',['pndk_id' =>$nik])->row_array();

        $data['tipe'] = $this->tp->getAll();

        $this->form_validation->set_rules('nik', 'NIK', 'required', [
            'required' => 'NIK Wajib Di isi'
        ]);
        $this->form_validation->set_rules('gambar', 'Gambar', 'required', [
            'required' => 'Gambar Wajib Di isi'
        ]);
        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul Wajib Di isi'
        ]);
        $this->form_validation->set_rules('message', 'Message', 'required', [
            'required' => 'Message Wajib Di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view('pengunjung/Pengaduan/vw_tambahpengaduan', $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'pndk_nik' => $this->input->post('nik'),
                'pgdn_judul' => $this->input->post('judul'),
                'pgdn_isi' => $this->input->post('message'),
                'tp_id' => $this->input->post('tipe'),
                'tanggapan' => '',
                'usr_id' => '5',
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = '../assets/images/pengaduan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('pgdn_gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->pg->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class = "alert alert-success" role="role">Pengaduan Berhasil Dikirimkan! </div>');
            redirect('Pengaduan/tambah');
        }
    }
}

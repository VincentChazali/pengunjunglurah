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
        $this->load->view('layout/header');
        $this->load->view('pengunjung/Pengaduan/vw_pengaduan', $data);
        $this->load->view('layout/footer');
    }

    function checkNIK()
    {
        $nik = $this->input->post('nik');
        $data['tipe'] = $this->tp->get();
        $cek = $this->db->get_where('penduduk', ['pndk_nik' => $nik])->num_rows();
        if ($cek > 0) {
            $data['nik'] = $nik;
            $data['valid'] = true;
            $this->load->view("layout/header");
            $this->load->view('pengunjung/Pengaduan/vw_tambahpengaduan', $data);
            $this->load->view("layout/footer");
        } else {
            $data['valid'] = false;
            $this->session->set_flashdata('msg', '<div class = "alert alert-danger" role="role">NIK Tidak Ditemukan!</div>');
            $this->load->view("layout/header");
            $this->load->view('pengunjung/Pengaduan/vw_tambahpengaduan1');
            $this->load->view("layout/footer");
        }
    }
    function cek()
    {
        $this->session->set_flashdata('msg', '<div class = "alert alert-success" role="role">Silahkan Masukkan NIK Anda!</div>');
        $this->load->view("layout/header");
        $this->load->view('pengunjung/Pengaduan/vw_tambahpengaduan1');
        $this->load->view("layout/footer");
    }

    function tambah()
    {
        // $nik = $this->input->post('nik');
        $data['valid'] = false;
        //$data['nik'] = $this->db->get_where('penduduk',['pndk_id' =>$nik])->num_rows();
        $data['tipe'] = $this->tp->get();
        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul Wajib Di isi'
        ]);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
            'required' => 'Keterangan Wajib Di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header");
            $this->load->view('pengunjung/Pengaduan/vw_tambahpengaduan', $data);
            $this->load->view("layout/footer");
        } else {
            $data = [

                'tp_id' => $this->input->post('tp'),
                'pgdn_judul' => $this->input->post('judul'),
                'pgdn_isi' => $this->input->post('keterangan'),
                'pndk_nik' => $this->input->post('nik')
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/pengaduan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('pgdn_gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->pg->insert($data, $upload_image);
            $this->session->set_flashdata('notes', '<div class = "alert alert-success" role="role">Pengaduan Berhasil Dikirimkan! </div>');
            redirect('Pengaduan');
        }
    }
}

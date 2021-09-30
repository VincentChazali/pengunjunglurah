<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
  public $table = 'berita';
  public $id = 'berita.brt_id';

  public function __construct()
  {
    parent::__construct();
  }
  //Get all Data in table
  public function get()
  {
    $this->db->from($this->table);
    $this->db->order_by('brt_id', 'desc');
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get 4 rows in table
  public function get4()
  {
    $this->db->from($this->table);
    $this->db->order_by('brt_id', 'desc');
    $this->db->limit(4);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getByIdB($id)
  {
    $this->db->from($this->table);
    $this->db->where('brt_id', $id);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getByIdP()
  {
    $this->db->select('lk.*, p.nama_perusahaan as nama_p');
    $this->db->from('lowongan lk');
    $this->db->join('perusahaan p', 'p.id_perusahaan = lk.id_perusahaan');
    $this->db->where('p.id_perusahaan', $this->session->userdata('id'));
    $query = $this->db->get();
    return $query->result_array();
  }
  public function update($where, $data)
  {
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
  }
  public function insert($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }
  public function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }

  public function tBerita()
  {
    $this->db->from($this->table);
    $this->db->where('status', 'Dibuka');
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function tBeritaByIdP()
  {
    $this->db->from($this->table);
    $this->db->where('id_perusahaan', $this->session->userdata('id'));
    $this->db->where('status', 'Dibuka');
    $query = $this->db->get();
    return $query->num_rows();
  }

  function data($num, $start)
  {
    $this->db->from($this->table);
    $this->db->order_by('brt_id', 'desc');
    $this->db->limit($num, $start);
    $query = $this->db->get();
    return $query->result_array();
  }

  function jumlah_data()
  {
    return $this->db->get('berita')->num_rows();
  }
}

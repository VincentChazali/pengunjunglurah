<?php
defined('BASEPATH') or exit('No direct script access allowed');

class polling_model extends CI_Model
{
  public $table = 'polling';
  public $id = 'polling.pol_id';

  public function __construct()
  {
    parent::__construct();
  }
  //Get all Data in table
  public function get()
  {
    $this->db->from($this->table);
    $this->db->order_by('pol_id');
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get soal rows in table
  public function gets()
  {
    $this->db->from($this->table);
    $this->db->order_by('pol_id');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getByIdB($id)
  {
    $this->db->from($this->table);
    $this->db->where('pol_id', $id);
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

  public function detaillk($id)
  {
    $this->db->select('lk.*, p.nama_perusahaan as nama_perusahaan');
    $this->db->from('lowongan lk');
    $this->db->join('perusahaan p', 'p.id_perusahaan = lk.id_perusahaan');
    $this->db->where('id_lowongan', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
  public function nonactive($id)
  {
    $data = [
      'status' => 'Ditutup'
    ];
    $this->db->update($this->table, $data, ['id_lowongan' => $id]);
    return $this->db->affected_rows();
  }
  public function aktif($id)
  {
    $data = [
      'status' => 'Dibuka'
    ];
    $this->db->update($this->table, $data, ['id_lowongan' => $id]);
    return $this->db->affected_rows();
  }
  public function tBeritaByIdP()
  {
    $this->db->from($this->table);
    $this->db->where('id_perusahaan', $this->session->userdata('id'));
    $this->db->where('status', 'Dibuka');
    $query = $this->db->get();
    return $query->num_rows();
  }
}

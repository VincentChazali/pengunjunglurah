<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sarana_model extends CI_Model
{
  public $table = 'saprsarana';
  public $id = 'saprsarana.spr_id';

  public function __construct()
  {
    parent::__construct();
  }
  //Get all Data Kesehatan in table
  public function getksht()
  {
    $this->db->select('s.*');
    $this->db->from('saprsarana s');
    $this->db->join('spr_jenis j', 's.sprjns_id = j.sprjns_id');
    $this->db->where('j.sprjns_name', 'Kesehatan');
    $this->db->order_by('spr_id');
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get all Data Sekolah in table
  public function getsklh()
  {
    $this->db->select('s.*');
    $this->db->from('saprsarana s');
    $this->db->join('spr_jenis j', 's.sprjns_id = j.sprjns_id');
    $this->db->where('j.sprjns_name', 'Pendidikan');
    $this->db->order_by('spr_id');
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get all Data Tempat Ibadah in table
  public function getibdah()
  {
    $this->db->select('s.*');
    $this->db->from('saprsarana s');
    $this->db->join('spr_jenis j', 's.sprjns_id = j.sprjns_id');
    $this->db->where('j.sprjns_name', 'Tempat Ibadah');
    $this->db->order_by('spr_id');
    $query = $this->db->get();
    return $query->result_array();
  }
  public function getsrn()
  {
    $this->db->select('s.*, j.sprjns_name as jenis');
    $this->db->from('saprsarana s');
    $this->db->join('spr_jenis j', 's.sprjns_id = j.sprjns_id');
    $this->db->order_by('spr_id');
    $query = $this->db->get();
    return $query->result_array();
  }

  //Get all Data Kesehatan in table
  public function get4ksht()
  {
    $this->db->select('s.*');
    $this->db->from('saprsarana s');
    $this->db->join('spr_jenis j', 's.sprjns_id = j.sprjns_id');
    $this->db->where('j.sprjns_name', 'Kesehatan');
    $this->db->order_by('spr_id');
    $this->db->limit(4);
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get all Data Sekolah in table
  public function get4sklh()
  {
    $this->db->select('s.*');
    $this->db->from('saprsarana s');
    $this->db->join('spr_jenis j', 's.sprjns_id = j.sprjns_id');
    $this->db->where('j.sprjns_name', 'Pendidikan');
    $this->db->order_by('spr_id');
    $this->db->limit(4);
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get all Data Tempat Ibadah in table
  public function get4ibdah()
  {
    $this->db->select('s.*');
    $this->db->from('saprsarana s');
    $this->db->join('spr_jenis j', 's.sprjns_id = j.sprjns_id');
    $this->db->where('j.sprjns_name', 'Tempat Ibadah');
    $this->db->order_by('spr_id');
    $this->db->limit(4);
    $query = $this->db->get();
    return $query->result_array();
  }

  //Get 4 rows in table
  public function get4()
  {
    $this->db->from($this->table);
    $this->db->order_by('spr_id', 'desc');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getByIdB($id)
  {
    $this->db->from($this->table);
    $this->db->where('spr_id', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
}

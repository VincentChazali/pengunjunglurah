<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model
{
  public $table = 'galeri';
  public $id = 'galeri.gal_id';

  public function __construct()
  {
    parent::__construct();
  }
  //Get all Data in table
  public function get()
  {
    $this->db->from($this->table);
    $this->db->order_by('gal_id', 'desc');
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get 4 rows in table
  public function get4()
  {
    $this->db->from($this->table);
    $this->db->order_by('gal_id', 'desc');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getByIdB($id)
  {
    $this->db->from($this->table);
    $this->db->where('gal_id', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
  function data($num, $start)
  {
    $this->db->from($this->table);
    $this->db->order_by('gal_id', 'desc');
    $this->db->limit($num, $start);
    $query = $this->db->get();
    return $query->result_array();
  }

  function jumlah_data()
  {
    return $this->db->get('galeri')->num_rows();
  }
}

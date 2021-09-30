<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RW_model extends CI_Model
{
  public $table = 'rw';
  public $id = 'rw.rw_id';

  public function __construct()
  {
    parent::__construct();
  }
  //Get all Data in table
  public function get()
  {
    $this->db->from($this->table);
    $this->db->order_by('rw_id');
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get 4 rows in table
  public function get4()
  {
    $this->db->from($this->table);
    $this->db->order_by('rw_id');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getByIdB($id)
  {
    $this->db->from($this->table);
    $this->db->where('rw_id', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
  function data($num, $start)
  {
    $this->db->from($this->table);
    $this->db->order_by('rw_id');
    $this->db->limit($num, $start);
    $query = $this->db->get();
    return $query->result_array();
  }

  function jumlah_data()
  {
    return $this->db->get('rw')->num_rows();
  }
}

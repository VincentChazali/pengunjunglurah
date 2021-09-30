<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RT_model extends CI_Model
{
  public $table = 'rt';
  public $id = 'rt.rt_id';

  public function __construct()
  {
    parent::__construct();
  }
  //Get all Data in table
  public function get()
  {
    $this->db->from($this->table);
    $this->db->order_by('rt_id');
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get 4 rows in table
  public function get4()
  {
    $this->db->from($this->table);
    $this->db->order_by('rt_id');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getById($id)
  {
    $this->db->from('rt t');
    $this->db->join('rw w', 'w.rw_id = t.rw_id');
    $this->db->where('t.rw_id', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
  function data($num, $start)
  {
    $this->db->from($this->table);
    $this->db->order_by('rt_id');
    $this->db->limit($num, $start);
    $query = $this->db->get();
    return $query->result_array();
  }

  function jumlah_data()
  {
    return $this->db->get('rt')->num_rows();
  }
}

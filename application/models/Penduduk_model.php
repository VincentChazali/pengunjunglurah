<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_model extends CI_Model
{
  public $table = 'penduduk';
  public $id = 'penduduk.pndk_id';

  public function __construct()
  {
    parent::__construct();
  }
  //Get all Data in table
  public function get()
  {
    $this->db->from($this->table);
    $this->db->order_by('pndk_id', 'desc');
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get 4 rows in table
  public function get4()
  {
    $this->db->from($this->table);
    $this->db->order_by('pndk_id', 'desc');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getByIdB($id)
  {
    $this->db->from($this->table);
    $this->db->where('pndk_id', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
}

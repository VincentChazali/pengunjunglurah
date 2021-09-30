<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_model extends CI_Model
{
  public $table = 'agenda';
  public $id = 'agenda.ag_id';

  public function __construct()
  {
    parent::__construct();
  }
  //Get all Data in table
  public function get()
  {
    $this->db->from($this->table);
    $this->db->order_by('ag_date', 'asc');
    $query = $this->db->get();
    return $query->result_array();
  }
  //Get 4 rows in table
  public function get4()
  {
    $this->db->from($this->table);
    $this->db->order_by('ag_id', 'desc');
    $this->db->limit(4);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getByIdB($id)
  {
    $this->db->from($this->table);
    $this->db->where('ag_id', $id);
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
  public function tAgendaByIdP()
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
    $this->db->order_by('ag_id', 'desc');
    $this->db->limit($num, $start);
    $query = $this->db->get();
    return $query->result_array();
  }

  function jumlah_data()
  {
    return $this->db->get('agenda')->num_rows();
  }

  // function jumlah_data_byMonth($month)
  // {
  //   $this->db->from($this->table);
  //   $this->db->like();
  // }
}

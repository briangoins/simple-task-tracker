<?php
class User_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function create($data)
  {
    $this->db->insert('users', $data);
  }
}

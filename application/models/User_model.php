<?php
class User_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function findAll()
	{
		$query = $this->db->get('users');
    return $query->result_array();
	}

  public function create($data)
  {
    $this->db->insert('users', $data);
  }
}

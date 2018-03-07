<?php
class Task_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function findByUserId($user_id)
  {
    $this->db->where('user_id', $user_id);
    $query = $this->db->get('tasks');
    return $query->result_array();
  }

  public function create($data)
  {
    $this->db->insert('tasks', $data);
  }

  public function delete($id) {
    $this->db->where('id', $id);
		$this->db->delete('tasks');
  }
}

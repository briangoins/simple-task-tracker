<?php
class User_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
    $this->load->model('task_model');
  }

  public function findAll()
	{
		$query = $this->db->get('users');
    $users = array();
    foreach ($query->result_array() as $user) {
      $user['tasks'] = $this->task_model->findByUserId($user['id']);
      $users[] = $user;
    }
    return $users;
	}

  public function create($data)
  {
    $this->db->insert('users', $data);
  }

  public function delete($id) {
    $this->db->where('user_id', $id);
    $this->db->delete('tasks');
    $this->db->where('id', $id);
		$this->db->delete('users');
  }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('task_model');
	}

	public function create($user_id)
	{
		$this->task_model->create(
			array(
				'user_id' => $user_id,
				'title' => $this->input->post('title')
			)
		);

		redirect('/');
	}

	public function destroy($id) {
		$this->task_model->delete($id);
		redirect('/');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
	}

	public function create()
	{
		$this->user_model->create(
			array(
				'username' => $this->input->post('username')
			)
		);

		redirect('/');
	}

	public function destroy($id) {
		$this->user_model->delete($id);
		redirect('/');
	}
}

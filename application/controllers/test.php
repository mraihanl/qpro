<?php

class Test extends CI_Controller {

	public function index()
	{
		$this->load->view('test');
	}

	public function hello()
	{
		$this->load->model('user_model');
		$this->user_model->method();
	}
}

?>
<?php
class C_pagination extends CI_Controller
{
	public function__construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->model('m_master');
	}
}
?>
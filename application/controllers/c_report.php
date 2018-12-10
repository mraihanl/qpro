<?php
class C_report extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_report');
		$this->load->helper(array('form', 'url'));
	}

	public function soh(){
		$data = array(
			'soh' = $this->M_report->stock()		
		);
		$this->load->view('report/stockonhand', $data);
	}
}
?>
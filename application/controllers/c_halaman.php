<?php
class C_halaman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_halaman');
	}

	public function dashboard()
	{		
		$data = array(
			'buku' => $this->m_halaman->totalbuku(),
			'customer' => $this->m_halaman->totalcustomer(),
			'warehouse' => $this->m_halaman->totalwrhs()
		);
		
		$this->load->view('templates/header');
        $this->load->view('home',$data);
        $this->load->view('templates/footer');
	}
}
?>
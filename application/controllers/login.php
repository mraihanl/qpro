<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));		 
		$where = array(
			'username' => $username,			
			'password' => ($password)
			);
		$cek = $this->m_login->cek_login("zus",$where)->num_rows();
		if($cek == 1){
		    $row =	$this->db->get_where('zus',array('username'=>$username))->row();
			$data_session = array(
				'nama' => $username,
				'name' => $row->name,				
				'status' => "login",
				'cabang' => $row->cabang,
				'rocode' => $row->rocode
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/admin/dashboard"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login/index'));
	}
}
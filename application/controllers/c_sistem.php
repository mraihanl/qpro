<?php
class C_sistem extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('m_sistem');
	}

	public function user_input()
	{
		$this->load->view('templates/header');
		$this->load->view('sistem/v_sistem_user_input', array('error' => ' ' ));
		$this->load->view('templates/footer');
		if($this->input->post('username'))
		{
			//ambil data dari ketikkan
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));
			$mail=$this->input->post('mail');
			$name=$this->input->post('name');
			$rocode=$this->input->post('rocode');		

			//data di array-kan
			$data = array(
				'username' => $username,
				'password' => $password,
				'mail' => $mail,
				'name' => $name,
				'rocode' => $rocode				
			);

			//masukkan ke datanya ke model
			$this->m_sistem->inputuser($data);			
		}		
	}//end function input()

	function user_data()
	{
		$query = $this->m_sistem->tampiluser();
  		$data['users'] = null;
  		if($query<1)
  		{
  			echo '';
  		}
  		else
  		{
   		   $data['users'] =  $query;
  		}

		$this->load->view('templates/header');
		$this->load->view('sistem/v_sistem_user_tampil', $data);
		$this->load->view('templates/footer');
	}//end user data

	function user_edit($username){
				$where = array('username' => $username);
				$data['users'] = $this->m_sistem->edituser($where,'zus')->result();
				$this->load->view('templates/header');
				$this->load->view('sistem/v_sistem_user_edit',$data);
				$this->load->view('templates/footer');
	}//end user edit

	function user_update()
	{
			//ambil data dari field
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$mail=$this->input->post('mail');
			$name=$this->input->post('name');
			$rocode=$this->input->post('rocode');		

			//data di array-kan
			$data = array(
				'username' => $username,
				'password' => $password,
				'mail' => $mail,
				'name' => $name,
				'rocode' => $rocode				
			);

			$where = array(
					'username' => $username
				);

			//masukkan ke datanya ke model
			$this->m_sistem->updateuser($where,$data,'zus');
			redirect('/c_sistem/user_data');				
	}//end function update

	function user_hapus($username)
	{
		$where = array('username' => $username);
		$this->m_sistem->hapususer($where,'zus');
		redirect('/c_sistem/user_data');
	}

}//end of file
?>
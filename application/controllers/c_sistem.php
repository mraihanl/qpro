<?php
class C_sistem extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		//$this->db->reconnect();
		$this->load->model('m_sistem');
	}

	public function user_input()
	{
		$this->load->view('templates/header');
		$this->load->view('sistem/v_sistem_user_input', array('error' => ' ' ));
		$this->load->view('templates/footer');
		if($this->input->post('username'))
		{			
			//data di array-kan
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'mail' => $this->input->post('mail'),
				'name' => $this->input->post('name'),
				'cabang' => $this->input->post('cabang'),
				'rocode' => $this->input->post('rocode')				
			);

			//masukkan ke datanya ke model
			$this->m_sistem->inputuser($data);
			$this->session->set_flashdata('sukses',"Data Inserted Successfully");				
			redirect('/c_sistem/user_data');			
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
			$username=$this->input->post('username');
			//data di array-kan
			$data = array(				
				'mail' => $this->input->post('mail'),
				'name' => $this->input->post('name'),
				'cabang' => $this->input->post('cabang'),
				'rocode' => $this->input->post('rocode')			
			);

			$where = array(
					'username' => $username
				);

			//masukkan ke datanya ke model
			$this->m_sistem->updateuser($where,$data,'zus');
			$this->session->set_flashdata('sukses',"Data Inserted Successfully");	
			redirect('/c_sistem/user_data');				
	}//end function update

	function user_hapus($username)
	{
		$where = array('username' => $username);
		$this->m_sistem->hapususer($where,'zus');
		redirect('/c_sistem/user_data');
	}

	function auto_role(){
        if (isset($_GET['term'])) {
            $result = $this->m_sistem->search_role($_GET['term']);
            	if (count($result) > 0) {
            		foreach ($result as $row)
                	$arr_result[] = $row->rolename;
                	echo json_encode($arr_result);
        }}}

}//end of file
?>
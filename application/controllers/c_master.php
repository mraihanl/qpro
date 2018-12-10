<?php
class C_master extends CI_Controller
{
	//Constructor==============================================================
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('m_master');
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('m_master');
	}

	//Modul Buku==============================================================
	public function master_buku_input()
	{
		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_buku_input', array('error' => ' ' ));
		$this->load->view('templates/footer');		

        if($this->input->post('isbn'))
		{
			$data = array(
				'isbn' =>$this->input->post('isbn'),
				'judul' => $this->input->post('judul'),
				'pengarang' => $this->input->post('pengarang'),
				'tahun' => $this->input->post('tahun'),
				'edisi' => $this->input->post('edisi'),
				'cat' => $this->input->post('cat'),
				'sellprice' => $this->input->post('sellprice'),
				'costprice' => $this->input->post('costprice')
				
			);
				//masukkan datanya ke model				
				$this->m_master->inputbuku($data);
				//menyiapkan tampilan pesan sukses
				$this->session->set_flashdata('sukses',"Data Inserted Successfully");
				//mengarahkan ke daftar buku(hasil flash data di tampilkan di view)
				redirect('C_master/master_buku_data/');			
		}			
	}
	function buku_edit($isbn){
				$where = array('isbn' => $isbn);
				$data['bukus'] = $this->m_master->editbuku($where,'xbuku')->result();
				$this->load->view('templates/header');
				$this->load->view('master/v_mstr_buku_edit',$data);
				$this->load->view('templates/footer');
	}
	function update_buku_edit(){
				$isbn = $this->input->post('isbn');
				$data = array(
					'judul' => $this->input->post('judul'),
					'pengarang' => $this->input->post('pengarang'),
					'tahun' => $this->input->post('tahun'),
					'edisi' => $this->input->post('edisi'),
					'cat' => $this->input->post('cat'),
					'sellprice' => $this->input->post('sellprice'),
					'costprice' => $this->input->post('costprice'),
					
				);
			 
				$where = array(
					'isbn' => $isbn
				);			 	
			 				 	
				$this->m_master->updatebuku($where,$data,'xbuku');
				$this->session->set_flashdata('sukses',"Data Inserted Successfully");				
				redirect('/C_master/master_buku_data');
	}
	
	function master_buku_data()
	{
		$params = array();
        $limit_per_page = 5;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->m_master->totalbuku();

         if ($total_records > 0) 
        {
            // get current page records
            $params["results"] = $this->m_master->recordbuku($limit_per_page, $start_index);
             
            $config['base_url'] = base_url() . 'C_master/master_buku_data';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;            
            $config['full_tag_open'] = '<div class="pagination"><ul>';

            $this->pagination->initialize($config);
             
            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
        $this->load->view('templates/header');
        $this->load->view('master/v_mstr_buku_tampil', $params);
        $this->load->view('templates/footer');
	}

	function master_buku_hapus($isbn)
	{
		$where = array('isbn' => $isbn);
		$this->m_master->hapusbuku($where,'xbuku');
		redirect('/C_master/master_buku_data');
	}
	function search_gdkeyword()
	{
		$keyword = $this->input->post('keyword');
		$data['results'] = $this->m_master->search($keyword);
		$this->load->view('v_mstr_buku_tampil',$data);
	}

	//Modul Customer==============================================================
	public function master_cust_input()
	{
		if($this->input->post('name'))
		{
			$code=$this->input->post('code');
			$brcode=$this->input->post('brcode');
			$name=$this->input->post('name');
			$npwp=$this->input->post('npwp');
			$telp=$this->input->post('telp');
			$mail=$this->input->post('mail');
			$contact=$this->input->post('contact');
			$address=$this->input->post('address');

			$data = array(
				'code' => $code,
				'brcode' => $brcode,
				'name' => $name,
				'npwp' => $npwp,
				'telp' => $telp,
				'mail' => $mail,
				'contact' => $contact,
				'address' => $address,
			);
			$this->m_master->inputcust($data);
			$this->session->set_flashdata('sukses',"Data Inserted Successfully");				
			redirect('C_master/master_cust_data/');		
		
		}

		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_cust_input', array('error' => ' ' ));
		$this->load->view('templates/footer');
	}
	function cust_edit($code){
		$where = array('code' => $code);
		$data['custs'] = $this->m_master->editcust($where,'xcust')->result();
		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_cust_edit',$data);
		$this->load->view('templates/footer');
	}
	function master_cust_edit(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$brcode = $this->input->post('brcode');
		$name = $this->input->post('name');
		$npwp = $this->input->post('npwp');
		$telp = $this->input->post('telp');
		$mail = $this->input->post('mail');
	 	$contact = $this->input->post('contact');
	 	$address = $this->input->post('address');

		$data = array(
			'code' => $code,
			'brcode' => $brcode,
			'name' => $name,
			'npwp' => $npwp,
			'telp' => $telp,
			'mail' => $mail,
			'contact' => $contact,
			'address' => $address,
		);
			 
		$where = array(
			'id' => $id
		);
	 
		$this->m_master->updatecust($where,$data,'xcust');
		$this->session->set_flashdata('sukses',"Data Inserted Successfully");
		redirect('/C_master/master_cust_data');
	}
	public function master_cust_data()
	{
		$params = array();
        $limit_per_page = 5;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->m_master->totalcust();

         if ($total_records > 0) 
        {
            // get current page records
            $params["results"] = $this->m_master->recordcust($limit_per_page, $start_index);
             
            $config['base_url'] = base_url() . 'C_master/master_buku_data';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;            
            $config['full_tag_open'] = '<div class="pagination"><ul>';

            $this->pagination->initialize($config);
             
            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_cust_tampil', $params);
		$this->load->view('templates/footer');
	}
	function master_cust_hapus($code)
	{
		$where = array('code' => $code);
		$this->m_master->hapuscust($where,'xcus');
		redirect('/C_master/master_cust_data');
	}

	//Modul Branch==============================================================
	public function c_branch_input()
	{
		if($this->input->post('id'))
		{
			$data = array(
				//'code' => $code,
				'id' => $this->input->post('id'),
				'branch' => $this->input->post('branch'),
				'prefix' => $this->input->post('prefix')
			);

			$this->m_master->m_branch_input($data);		
			$this->session->set_flashdata('sukses',"Data Inserted Successfully");
			redirect('/c_master/c_branch_data');
		}
		$this->load->view('templates/header');
		$this->load->view('master/v_branch_input');
		$this->load->view('templates/footer');
	}
	function c_branch_edit($id){
				$where = array('id' => $id);
				$data['branch'] = $this->m_master->m_branch_edit($where,'xbranch')->result();
				$this->load->view('templates/header');
				$this->load->view('master/v_branch_edit',$data);
				$this->load->view('templates/footer');
	}

	function c_branch_update(){
				$id = $this->input->post('id');
				$data = array(
					//'id' => $this->input->post('id'),
					'branch' => $this->input->post('branch'),
					'prefix' => $this->input->post('prefix')
				);
			 
				$where = array(
					'id' => $id
				);
			 
				$this->m_master->m_branch_update($where,$data,'xbranch');
				$this->session->set_flashdata('sukses',"Data Inserted Successfully");
				redirect('/C_master/c_branch_data');
	}
	function c_branch_data()
	{
		$params = array();
        $limit_per_page = 5;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->m_master->m_total_branch();

         if ($total_records > 0) 
        {
            // get current page records
            $params["results"] = $this->m_master->m_record_branch($limit_per_page, $start_index);
             
            $config['base_url'] = base_url() . 'C_master/c_branch_data';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;            
            $config['full_tag_open'] = '<div class="pagination"><ul>';

            $this->pagination->initialize($config);
             
            // build paging links
            $params["links"] = $this->pagination->create_links();
        }

		$this->load->view('templates/header');
		$this->load->view('master/v_branch_data', $params);
		$this->load->view('templates/footer');
	}
	function c_branch_hapus($code)
	{
		$where = array('code' => $code);
		$this->m_master->hapuswrhs($where,'xbranch');
		redirect('/C_master/c_branch_data');
	}
	



	//Modul Charges==============================================================
	public function master_chgs_input()
	{
		if($this->input->post('code'))
		{
			//ambil data dari ketikkan
			$code=$this->input->post('code');
			$bpcode=$this->input->post('bpcode');
			$name=$this->input->post('name');
			$addsub=$this->input->post('addsub');
			$pct=$this->input->post('pct');
			$amt=$this->input->post('amt');

			//data di array-kan
			$data = array(
				'code' => $code,
				'bpcode' => $bpcode,
				'name' => $name,
				'addsub' => $addsub,
				'pct' => $pct,
				'amt' => $amt
			);

			//masukkan ke datanya ke model
			$this->m_master->inputchgs($data);		
		
		}
		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_chgs_input');
		$this->load->view('templates/footer');
	}
	function chgs_edit($code){
				$where = array('code' => $code);
				$data['chgss'] = $this->m_master->editchgs($where,'ych')->result();
				$this->load->view('templates/header');
				$this->load->view('master/v_mstr_chgs_edit', $data);
				$this->load->view('templates/footer');
	}
	function master_chgs_edit(){
				$code = $this->input->post('code');
				$bpcode = $this->input->post('bpcode');
				$name = $this->input->post('name');
				$addsub = $this->input->post('addsub');
				$pct = $this->input->post('pct');
				$amt = $this->input->post('amt');

				$data = array(
					'bpcode' => $bpcode,
					'name' => $name,
					'addsub' => $addsub,
					'pct' => $pct,
					'amt' => $amt,
				);
			 
				$where = array(
					'code' => $code
				);
			 
				$this->m_master->updatechgs($where,$data,'ych');
				redirect('/C_master/master_chgs_data');
	}
	public function master_chgs_data()
	{
		$query = $this->m_master->tampilchgsall();
  		$data['chgss'] = null;
  		if($query<1)
  		{
  			echo '';
  		}
  		else
  		{
   			$data['chgss'] = $query;
  		}

		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_chgs_tampil', $data);
		$this->load->view('templates/footer');
	}
	function master_chgs_hapus($code)
	{
		$where = array('code' => $code);
		$this->m_master->hapuschgs($where,'ych');
		redirect('/C_master/master_chgs_data');
	}

	//Modul Goods Receipt==============================================================
	public function master_gdrc_input()
	{
		if($this->input->post('code'))
		{
			//ambil data dari ketikkan
			$code=$this->input->post('code');
			$brcode=$this->input->post('brcode');
			$brcodefr=$this->input->post('brcodefr');
			$trandate=$this->input->post('trandate');

			//data di array-kan
			$data = array(
				'code' => $code,
				'brcode' => $brcode,
				'brcodefr' => $brcodefr,
				'trandate' => $trandate,
			);

			//masukkan ke datanya ke model
			$this->m_master->inputgdrc($data);		
		
		}
		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_gdrc_input');
		$this->load->view('templates/footer');
	}
	function gdrc_edit($code){
				$where = array('code' => $code);
				$data['gdrcs'] = $this->m_master->editgdrc($where,'xgr')->result();
				$this->load->view('templates/header');
				$this->load->view('master/v_mstr_gdrc_edit', $data);
				$this->load->view('templates/footer');
	}
	function master_gdrc_edit(){
				$code = $this->input->post('code');
				$brcode = $this->input->post('brcode');
				$brcodefr = $this->input->post('brcodefr');
				$trandate = $this->input->post('trandate');

				$data = array(
					'brcode' => $brcode,
					'brcodefr' => $brcodefr,
					'trandate' => $trandate,
				);
			 
				$where = array(
					'code' => $code
				);
			 
				$this->m_master->updategdrc($where,$data,'xgr');
				redirect('/C_master/master_gdrc_tampil');
	}
	public function master_gdrc_tampil()
	{
		$query = $this->m_master->tampilgdrcall();
  		$data['gdrcs'] = null;
  		if($query<1)
  		{
  			echo '';
  		}
  		else
  		{
   			$data['gdrcs'] = $query;
  		}

		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_gdrc_tampil', $data);
		$this->load->view('templates/footer');
	}
	function master_gdrc_hapus($code)
	{
		$where = array('code' => $code);
		$this->m_master->hapusgdrc($where,'xgr');
		redirect('/C_master/master_gdrc_tampil');
	}

	//Master Supplier=================================================================================
	public function master_sp_input()
	{
		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_sp_input', array('error' => ' ' ));
		$this->load->view('templates/footer');		

        if($this->input->post('nama'))
		{
			$data = array(
				'nama' => $this->input->post('nama')
			);
				//masukkan datanya ke model				
				$this->m_master->inputsp($data);
				//menyiapkan tampilan pesan sukses
				$this->session->set_flashdata('sukses',"Data Inserted Successfully");
				//mengarahkan ke daftar buku(hasil flash data di tampilkan di view)
				redirect('C_master/master_sp_data/');			
		}			
	}
	function master_sp_edit($id){
				$where = array('id' => $id);
				$data['sps'] = $this->m_master->editsp($where,'xsp')->result();
				$this->load->view('templates/header');
				$this->load->view('master/v_mstr_sp_edit',$data);
				$this->load->view('templates/footer');
	}
	function master_sp_update(){
				$id = $this->input->post('id');
				$nama = $this->input->post('nama');
				$data = array(
					'nama' => $nama
				);			 
				$where = array(
					'id' => $id
				);			 	
			 				 	
				$this->m_master->updatesp($where,$data,'xst');
				$this->session->set_flashdata('sukses',"Data Inserted Successfully");				
				redirect('/C_master/master_sp_data');
	}
	
	function master_sp_data()
	{
		$params = array();
        $limit_per_page = 5;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->m_master->totalsp();

         if ($total_records > 0) 
        {
            // get current page records
            $params["results"] = $this->m_master->recordsp($limit_per_page, $start_index);
             
            $config['base_url'] = base_url() . 'C_master/master_sp_data';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;            
            $config['full_tag_open'] = '<div class="pagination"><ul>';

            $this->pagination->initialize($config);
             
            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
        $this->load->view('templates/header');
        $this->load->view('master/v_mstr_sp_tampil', $params);
        $this->load->view('templates/footer');
	}

	function master_sp_hapus($id)
	{
		$where = array('id' => $id);
		$this->m_master->hapussp($where,'xsp');
		redirect('/C_master/master_sp_data');
	}

	//Master Store====================================================================================

	public function master_store_input()
	{
		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_store_input', array('error' => ' ' ));
		$this->load->view('templates/footer');		

        if($this->input->post('nama'))
		{
			$data = array(
				'nama' => $this->input->post('nama')
			);
				//masukkan datanya ke model				
				$this->m_master->inputstore($data);
				//menyiapkan tampilan pesan sukses
				$this->session->set_flashdata('sukses',"Data Inserted Successfully");
				//mengarahkan ke daftar buku(hasil flash data di tampilkan di view)
				redirect('C_master/master_store_data/');			
		}			
	}
	function master_store_edit($id){
				$where = array('id' => $id);
				$data['stores'] = $this->m_master->editstore($where,'xst')->result();
				$this->load->view('templates/header');
				$this->load->view('master/v_mstr_store_edit',$data);
				$this->load->view('templates/footer');
	}
	function master_store_update(){
				$id = $this->input->post('id');
				$nama = $this->input->post('nama');
				$data = array(
					'nama' => $nama
				);			 
				$where = array(
					'id' => $id
				);			 	
			 				 	
				$this->m_master->updatestore($where,$data,'xst');
				$this->session->set_flashdata('sukses',"Data Inserted Successfully");				
				redirect('/C_master/master_store_data');
	}
	
	function master_store_data()
	{
		$params = array();
        $limit_per_page = 5;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->m_master->totalstore();

         if ($total_records > 0) 
        {
            // get current page records
            $params["results"] = $this->m_master->recordstore($limit_per_page, $start_index);
             
            $config['base_url'] = base_url() . 'C_master/master_store_data';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;            
            $config['full_tag_open'] = '<div class="pagination"><ul>';

            $this->pagination->initialize($config);
             
            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
        $this->load->view('templates/header');
        $this->load->view('master/v_mstr_store_tampil', $params);
        $this->load->view('templates/footer');
	}

	function master_store_hapus($id)
	{
		$where = array('id' => $id);
		$this->m_master->hapusstore($where,'xst');
		redirect('/C_master/master_store_data');
	}
}
<?php
class C_master extends CI_Controller
{
	//Constructor==============================================================
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('m_master');
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
	}

	//Modul Buku==============================================================
	public function master_buku_input()
	{
		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_buku_input', array('error' => ' ' ));
		$this->load->view('templates/footer');

		//upload foto
		$config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 720;
        $config['max_height']           = 1280;
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');				

        if($this->input->post('isbn'))
		{
			//ambil data dari ketikkan
			$isbn=$this->input->post('isbn');
			$judul=$this->input->post('judul');
			$pengarang=$this->input->post('pengarang');
			$cat=$this->input->post('cat');
			$imgurl=$this->input->post('imgurl');
			$sellprice=$this->input->post('sellprice');
			$costprice=$this->input->post('costprice');
			$discount=$this->input->post('discount');
			$tax=$this->input->post('tax');			

			//data di array-kan
			$data = array(
				'isbn' => $isbn,
				'judul' => $judul,
				'pengarang' => $pengarang,
				'cat' => $cat,
				'imgurl' => $imgurl,
				'sellprice' => $sellprice,
				'costprice' => $costprice,
				'discount' => $discount,
				'tax' => $tax
			);
				//masukkan datanya ke model				
				$this->m_master->inputbuku($data);
				//menyiapkan tampilan pesan sukses
				$this->session->set_flashdata('sukses',"Data Inserted Successfully");
				//mengarahkan ke daftar buku(hasil flash data di tampilkan disini)
				redirect('c_master/master_buku_data/');			
		}			
	}
	function buku_edit($isbn){
				$where = array('isbn' => $isbn);
				$data['bukus'] = $this->m_master->editbuku($where,'ybk')->result();
				$this->load->view('templates/header');
				$this->load->view('master/v_mstr_buku_edit',$data);
				$this->load->view('templates/footer');
	}
	function update_buku_edit(){
				$isbn = $this->input->post('isbn');
				$judul = $this->input->post('judul');
				$pengarang = $this->input->post('pengarang');
				$cat = $this->input->post('cat');
				$imgurl = $this->input->post('imgurl');
				$sellprice = $this->input->post('sellprice');
			 	$costprice = $this->input->post('costprice');
			 	$discount = $this->input->post('discount');
			 	$tax = $this->input->post('tax');

				$data = array(
					'judul' => $judul,
					'pengarang' => $pengarang,
					'cat' => $cat,
					'imgurl' => $imgurl,
					'sellprice' => $sellprice,
					'costprice' => $costprice,
					'discount' => $discount,
					'tax' => $tax,
				);
			 
				$where = array(
					'isbn' => $isbn
				);			 	
			 				 	
				$this->m_master->updatebuku($where,$data,'ybk');
				$this->session->set_flashdata('sukses',"Data Inserted Successfully");				
				redirect('/c_master/master_buku_data');
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
             
            $config['base_url'] = base_url() . 'c_master/master_buku_data';
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
		$this->m_master->hapusbuku($where,'ybk');
		redirect('/c_master/master_buku_data');
	}

	//Modul Customer==============================================================
	public function master_cust_input()
	{
		if($this->input->post('name'))
		{
			//ambil data dari ketikkan
			//$code=$this->input->post('code');
			$brcode=$this->input->post('brcode');
			$name=$this->input->post('name');
			$npwp=$this->input->post('npwp');
			$telp=$this->input->post('telp');
			$mail=$this->input->post('mail');
			$contact=$this->input->post('contact');
			$address=$this->input->post('address');

			//data di array-kan
			$data = array(
				//'code' => $code,
				'brcode' => $brcode,
				'name' => $name,
				'npwp' => $npwp,
				'telp' => $telp,
				'mail' => $mail,
				'contact' => $contact,
				'address' => $address,
			);

			//masukkan ke datanya ke model
			$this->m_master->inputcust($data);		
		
		}

		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_cust_input', array('error' => ' ' ));
		$this->load->view('templates/footer');
	}
	function cust_edit($code){
				$where = array('code' => $code);
				$data['custs'] = $this->m_master->editcust($where,'ycs')->result();
				$this->load->view('templates/header');
				$this->load->view('master/v_mstr_cust_edit',$data);
				$this->load->view('templates/footer');
	}
	function master_cust_edit(){
				$code = $this->input->post('code');
				$brcode = $this->input->post('brcode');
				$name = $this->input->post('name');
				$npwp = $this->input->post('npwp');
				$telp = $this->input->post('telp');
				$mail = $this->input->post('mail');
			 	$contact = $this->input->post('contact');
			 	$address = $this->input->post('address');

				$data = array(
					'brcode' => $brcode,
					'name' => $name,
					'npwp' => $npwp,
					'telp' => $telp,
					'mail' => $mail,
					'contact' => $contact,
					'address' => $address,
				);
			 
				$where = array(
					'code' => $code
				);
			 
				$this->m_master->updatecust($where,$data,'ycs');
				$this->session->set_flashdata('sukses',"Data Inserted Successfully");
				redirect('/c_master/master_cust_data');
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
             
            $config['base_url'] = base_url() . 'c_master/master_buku_data';
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
		$this->m_master->hapuscust($where,'ycs');
		redirect('/c_master/master_cust_data');
	}

	//Modul Warehouse==============================================================
	public function master_wrhs_input()
	{
		if($this->input->post('name'))
		{
			//ambil data dari ketikkan
			//$code=$this->input->post('code');
			$name=$this->input->post('name');
			$area=$this->input->post('area');
			$telp=$this->input->post('telp');
			$mail=$this->input->post('mail');
			$contact=$this->input->post('contact');
			$address=$this->input->post('address');

			//data di array-kan
			$data = array(
				//'code' => $code,
				'name' => $name,
				'area' => $area,
				'telp' => $telp,
				'mail' => $mail,
				'contact' => $contact,
				'address' => $address
			);

			//masukkan ke datanya ke model
			$this->m_master->inputwrhs($data);		
		
		}
		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_wrhs_input');
		$this->load->view('templates/footer');
	}
	function wrhs_edit($code){
				$where = array('code' => $code);
				$data['wrhss'] = $this->m_master->editbuku($where,'zbr')->result();
				$this->load->view('templates/header');
				$this->load->view('master/v_mstr_wrhs_edit',$data);
				$this->load->view('templates/footer');
	}

	function master_wrhs_edit(){
				$code = $this->input->post('code');
				$name = $this->input->post('name');
				$area = $this->input->post('area');
				$telp = $this->input->post('telp');
				$mail = $this->input->post('mail');
				$contact = $this->input->post('contact');
			 	$address = $this->input->post('address');

				$data = array(
					'name' => $name,
					'area' => $area,
					'telp' => $telp,
					'mail' => $mail,
					'contact' => $contact,
					'address' => $address
				);
			 
				$where = array(
					'code' => $code
				);
			 
				$this->m_master->updatewrhs($where,$data,'zbr');
				redirect('/c_master/master_wrhs_data');
	}
	function master_wrhs_data()
	{
		$query = $this->m_master->tampilwrhsall();
  		$data['wrhss'] = null;
  		if($query<1)
  		{
  			echo '';
  		}
  		else
  		{
   		   $data['wrhss'] =  $query;
  		}

		$this->load->view('templates/header');
		$this->load->view('master/v_mstr_wrhs_tampil', $data);
		$this->load->view('templates/footer');
	}
	function master_wrhs_hapus($code)
	{
		$where = array('code' => $code);
		$this->m_master->hapuswrhs($where,'zbr');
		redirect('/c_master/master_wrhs_data');
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
				redirect('/c_master/master_chgs_data');
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
		redirect('/c_master/master_chgs_data');
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
				redirect('/c_master/master_gdrc_tampil');
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
		redirect('/c_master/master_gdrc_tampil');
	}
}
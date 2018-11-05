<?php
	class C_transaksi extends CI_Controller
	{
		//Constructor======================================================================
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->database('qpro');
			$this->load->model('m_transaksi');
			$this->load->helper('form');
			$this->load->library('pagination');
		}

		//Modul Sales Invoice==============================================================
		public function sales_invoice_input()
		{
			if($this->input->post('isbn'))
			{
				//data di array-kan
				$data = array(
					'isbn' => $this->input->post('isbn'),					
					'customer' => $this->input->post('customer'),
					'trandate' => $this->input->post('trandate'),
					'top' => $this->input->post('top'),				
					'amount' => $this->input->post('amount'),
					'discount' => $this->input->post('discount'),
					'tax' => $this->input->post('tax'),
					'netamount' => $this->input->post('netamount')
				);

				//masukkan ke datanya ke model
				$this->m_transaksi->input_si($data);
			}

		$this->load->view('templates/header');
		$this->load->view('transaksi/v_tran_si_input', array('error' => ' ' ));
		$this->load->view('templates/footer');
		}
		function sales_invoice_edit($code){
					$where = array('code' => $code);
					$data['sis'] = $this->m_transaksi->edit_si($where,'xsi')->result();
					$this->load->view('templates/header');
					$this->load->view('transaksi/v_tran_si_edit', $data);
					$this->load->view('templates/footer');
		}
		function data_sales_invoice_edit(){
					//ambil data dari ketikkan
					$code=$this->input->post('code');					
					$data = array(
					'isbn' => $this->input->post('isbn'),					
					'customer' => $this->input->post('customer'),
					'trandate' => $this->input->post('trandate'),
					'top' => $this->input->post('top'),				
					'amount' => $this->input->post('amount'),
					'discount' => $this->input->post('discount'),
					'tax' => $this->input->post('tax'),
					'netamount' => $this->input->post('netamount')
				);
				 
					$where = array(
						'code' => $code
					);
				 
					$this->m_transaksi->update_si($where,$data,'xsi');
					redirect('/c_transaksi/sales_invoice_data');
			}
			public function sales_invoice_data()
			{
				$query = $this->m_transaksi->tampil_si();
	  			$data['sis'] = null;
	  			if($query<1)
		  		{
		  			echo '';
		  		}
		  		else
	  			{
	   			$data['sis'] =  $query;
	  			}

				$this->load->view('templates/header');
				$this->load->view('transaksi/v_tran_si_tampil', $data);
				$this->load->view('templates/footer');
			}
			function sales_invoice_hapus($code)
			{
				$where = array('code' => $code);
				$this->m_transaksi->hapus_si($where,'xsi');
				redirect('/c_transaksi/sales_invoice_data');
			}


		//Modul Incoming Payment==============================================================
		public function incoming_payment_input()
		{
			if($this->input->post('code'))
			{
				//ambil data dari ketikkan
				$code=$this->input->post('code');
				$brcode=$this->input->post('brcode');
				$cscode=$this->input->post('cscode');
				$trandate=$this->input->post('trandate');
				$sicode=$this->input->post('sicode');
				$amount=$this->input->post('amount');

				//data di array-kan
				$data = array(
					'code' => $code,
					'brcode' => $brcode,
					'cscode' => $cscode,
					'trandate' => $trandate,
					'sicode' => $sicode,
					'amount' => $amount,
				);

				//masukkan ke datanya ke model
				$this->m_transaksi->input_ip($data);
			}

			$this->load->view('templates/header');
			$this->load->view('transaksi/v_tran_ip_input');
			$this->load->view('templates/footer');
		}

		public function incoming_payment_data()
		{
			$query = $this->m_transaksi->tampil_ip();
  			$data['ips'] = null;
  			if($query<1)
	  		{
	  			echo '';
	  		}
	  		else
  			{
   			$data['ips'] =  $query;
  			}

			$this->load->view('templates/header');
			$this->load->view('transaksi/v_tran_ip_tampil', $data);
			$this->load->view('templates/footer');
		}

//Modul Delivery Order==================================================================
		public function delivery_order_input()
		{
			if($this->input->post('code'))
			{
				//ambil data dari ketikkan
				$code=$this->input->post('code');
				$isbn=$this->input->post('isbn');
				$tujuan=$this->input->post('tujuan');
				$trandate=$this->input->post('trandate');

				//data di array-kan
				$data = array(
					'code' => $code,
					'isbn' => $isbn,
					'tujuan' => $tujuan,
					'trandate' => $trandate,
				);

				//masukkan ke datanya ke model
				$this->m_transaksi->input_do($data);
			}
			$this->load->view('templates/header');
			$this->load->view('transaksi/v_tran_do_input');
			$this->load->view('templates/footer');
		}
		function delivery_order_edit($code){
					$where = array('code' => $code);
					$data['dos'] = $this->m_transaksi->edit_do($where,'xdo')->result();
					$this->load->view('templates/header');
					$this->load->view('transaksi/v_tran_do_edit', $data);
					$this->load->view('templates/footer');
		}
		function data_delivery_order_edit(){
					//ambil data dari ketikkan
					$code=$this->input->post('code');
					$isbn=$this->input->post('isbn');
					$tujuan=$this->input->post('tujuan');
					$trandate=$this->input->post('trandate');

					//data di array-kan
					$data = array(
						'isbn' => $isbn,
						'tujuan' => $tujuan,
						'trandate' => $trandate
					);
				 
					$where = array(
						'code' => $code
					);
				 
					$this->m_transaksi->update_do($where,$data,'xdo');
					redirect('/c_transaksi/delivery_order_data');
			}	

		public function delivery_order_data()
		{
			$query = $this->m_transaksi->tampil_do();
	  		$data['dos'] = null;
  			if($query<1)
	  		{
	  			echo '';
	  		}
	  		else
  			{
   			$data['dos'] =  $query;
  			}

			$this->load->view('templates/header');
			$this->load->view('transaksi/v_tran_do_tampil', $data);
			$this->load->view('templates/footer');
		}
		function delivery_order_hapus($code)
			{
				$where = array('code' => $code);
				$this->m_transaksi->hapus_do($where,'xdo');
				redirect('/c_transaksi/delivery_order_data');
			}


			
//Modul Good Issue=========================================================================
		function gi_input(){
		if($this->input->post('isbn')){
			$data = array(
			"isbn" => $this->input->post('isbn'),
			"judul" => $this->input->post('judul'),
			"from" => $this->input->post('from'),
			"to" => $this->input->post('to'),
			"trandate" => $this->input->post('trandate'),
			"qty" => $this->input->post('qty')
			);
			$this->m_transaksi->gi_input($data);

			$this->session->set_flashdata('sukses',"Data Inserted Successfully");
			redirect('c_transaksi/gi_data/');
		// $hasil= $this->db->select('SUM(qty.ybk-qty.xgi)')->from('xgi')
		// 			->join('ybk','xgi.isbn=ybk.isbn')
		}			

		$this->load->view('templates/header');
		$this->load->view('transaksi/v_tran_gi_input', array('error' => ' ' ));
		$this->load->view('templates/footer');	
		}

	    function gi_data()
		{			
			$params = array();
	        $limit_per_page = 5;
	        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	        $total_records = $this->m_transaksi->totalgi();

	         if ($total_records > 0) 
	        {
	            // get current page records
	            $params["results"] = $this->m_transaksi->recordgi($limit_per_page, $start_index);
	             
	            $config['base_url'] = base_url() . 'c_transaksi/gi_data';
	            $config['total_rows'] = $total_records;
	            $config['per_page'] = $limit_per_page;
	            $config["uri_segment"] = 3;            
	            $config['full_tag_open'] = '<div class="pagination"><ul>';

	            $this->pagination->initialize($config);
	             
	            // build paging links
	            $params["links"] = $this->pagination->create_links();
	        }else{
	        	echo '';
	        }
		// $query = $this->m_transaksi->gi_tampil();
  // 		$data['gis'] = null;
  // 		if($query<1)
  // 		{
  // 			echo '';
  // 		}
  // 		else
  // 		{
  //  			$data['gis'] = $query;
  // 		}
			
	        $this->load->view('templates/header');
	        $this->load->view('transaksi/v_tran_gi_tampil', $params);
	        $this->load->view('templates/footer');
		}
		function gi_hapus($isbn)
		{
			$where = array('isbn' => $isbn);
			$this->m_transaksi->gihapus($where,'xgi');
			redirect('/c_transaksi/gi_data');
		}

	//Modul Good Receipt====================================================================
		public function gr_input()
	{
		if($this->input->post('isbn'))
		{
			$data = array(
				'isbn' => $this->input->post('isbn'),
				'judul' => $this->input->post('judul'),
				'from' => $this->input->post('from'),
				'to' => $this->input->post('to'),
				'trandate' => $this->input->post('trandate'),
				'qty' => $this->input->post('qty')
			);

			//masukkan ke datanya ke model
			$this->m_transaksi->inputgdrc($data);		
			$this->session->set_flashdata('sukses',"Data Inserted Successfully");
			redirect('c_transaksi/gr_data/');
		}
		$this->load->view('templates/header');
		$this->load->view('transaksi/v_tran_gr_input');
		$this->load->view('templates/footer');
	}

	function gr_edit($isbn){
				$where = array('isbn' => $isbn);
				$data['gdrcs'] = $this->m_transaksi->editgdrc($where,'xgr')->result();
				$this->load->view('templates/header');
				$this->load->view('transaksi/v_tran_gr_edit', $data);
				$this->load->view('templates/footer');
	}
	function gr_edit_update(){
				$isbn = $this->input->post('isbn');				
				$data = array(
					'judul' => $this->input->post('judul'),
					'trandate' => $trandate,
					'from' => $this->input->post('from'),
					'to' => $this->input->post('to'),
					'trandate' => $this->input->post('trandate'),
					'qty' => $this->input->post('qty')
				);
			 
				$where = array(
					'isbn' => $isbn
				);
			 
				$this->m_transaksi->updategdrc($where,$data,'xgr');
				redirect('/c_transaksi/gr_tampil');
	}
	public function gr_data()
	{
		$params = array();
	        $limit_per_page = 5;
	        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	        $total_records = $this->m_transaksi->totalgr();

	         if ($total_records > 0) 
	        {
	            // get current page records
	            $params["results"] = $this->m_transaksi->recordgr($limit_per_page, $start_index);
	             
	            $config['base_url'] = base_url() . 'c_transaksi/gr_data';
	            $config['total_rows'] = $total_records;
	            $config['per_page'] = $limit_per_page;
	            $config["uri_segment"] = 3;            
	            $config['full_tag_open'] = '<div class="pagination"><ul>';

	            $this->pagination->initialize($config);
	             
	            // build paging links
	            $params["links"] = $this->pagination->create_links();
	        }else{
	        	echo '';
	        }
		// $query = $this->m_transaksi->tampilgdrcall();
  // 		$data['gdrcs'] = null;
  // 		if($query<1)
  // 		{
  // 			echo '';
  // 		}
  // 		else
  // 		{
  //  			$data['gdrcs'] = $query;
  // 		}

		$this->load->view('templates/header');
		$this->load->view('transaksi/v_tran_gr_tampil', $params);
		$this->load->view('templates/footer');
	}
	function gr_hapus($code)
	{
		$where = array('isbn' => $isbn);
		$this->m_transaksi->hapusgdrc($where,'xgr');
		redirect('/c_transaksi/gr_tampil');
	}

	function auto_judul(){
    	if (isset($_GET['term'])) {
        	$result = $this->m_transaksi->search_judul($_GET['term']);
        		if (count($result) > 0) {
            		foreach ($result as $row)
                	$arr_result[] = array(
                	'label' => $row->judul,
                    'description' => $row->isbn,
                    );
                	echo json_encode($arr_result);
        		}
    	}}

    	function auto_wrhs(){
        if (isset($_GET['term'])) {
            $result = $this->m_transaksi->search_wrhs($_GET['term']);
            	if (count($result) > 0) {
            		foreach ($result as $row)
                	$arr_result[] = $row->name;
                	echo json_encode($arr_result);
        }}}

        function auto_supplier(){
        if (isset($_GET['term'])) {
            $result = $this->m_transaksi->search_supplier($_GET['term']);
            	if (count($result) > 0) {
            		foreach ($result as $row)
                	$arr_result[] = $row->nama;
                	echo json_encode($arr_result);
        }}}
	}//end class
?>
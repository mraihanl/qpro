<?php
	class C_transaksi extends CI_Controller
	{
		//Constructor======================================================================
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('m_transaksi');
			$this->load->helper('form');
		}

		//Modul Sales Invoice==============================================================
		public function sales_invoice_input()
		{
			if($this->input->post('code'))
			{
				//ambil data dari ketikkan
				$code=$this->input->post('code');
				$brcode=$this->input->post('brcode');
				$cscode=$this->input->post('cscode');
				$trandate=$this->input->post('trandate');
				$trantipe=$this->input->post('trantipe');
				$top=$this->input->post('top');
				$ponum=$this->input->post('ponum');
				$amount=$this->input->post('amount');
				$discount=$this->input->post('discount');
				$tax=$this->input->post('tax');
				$netamount=$this->input->post('netamount');

				//data di array-kan
				$data = array(
					'code' => $code,
					'brcode' => $brcode,
					'cscode' => $cscode,
					'trandate' => $trandate,
					'trantipe' => $trantipe,
					'top' => $top,
					'ponum' => $ponum,
					'amount' => $amount,
					'discount' => $discount,
					'tax' => $tax,
					'netamount' => $netamount,
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
					$brcode=$this->input->post('brcode');
					$cscode=$this->input->post('cscode');
					$trandate=$this->input->post('trandate');
					$trantipe=$this->input->post('trantipe');
					$top=$this->input->post('top');
					$ponum=$this->input->post('ponum');
					$amount=$this->input->post('amount');
					$discount=$this->input->post('discount');
					$tax=$this->input->post('tax');
					$netamount=$this->input->post('netamount');

					//data di array-kan
					$data = array(
						'brcode' => $brcode,
						'cscode' => $cscode,
						'trandate' => $trandate,
						'trantipe' => $trantipe,
						'top' => $top,
						'ponum' => $ponum,
						'amount' => $amount,
						'discount' => $discount,
						'tax' => $tax,
						'netamount' => $netamount,
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

		//Modul Delivery Order==============================================================
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

		//Modul Sales Credit Memo==============================================================
		public function SC_memo_input()
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
				$discount=$this->input->post('discount');
				$tax=$this->input->post('tax');
				$netamount=$this->input->post('netamount');

				//data di array-kan
				$data = array(
					'code' => $code,
					'brcode' => $brcode,
					'cscode' => $cscode,
					'trandate' => $trandate,
					'sicode' => $sicode,
					'amount' => $amount,
					'discount' => $discount,
					'tax' => $tax,
					'netamount' => $netamount
				);

				//masukkan ke datanya ke model
				$this->m_transaksi->input_sc($data);
			}
			$this->load->view('templates/header');
			$this->load->view('transaksi/v_tran_SC_memo_input');
			$this->load->view('templates/footer');
		}
		function SC_memo_edit($code){
					$where = array('code' => $code);
					$data['rts'] = $this->m_transaksi->edit_sc($where,'xrt')->result();
					$this->load->view('templates/header');
					$this->load->view('transaksi/v_tran_SC_memo_edit', $data);
					$this->load->view('templates/footer');
		}
		function data_SC_memo_edit(){
					//ambil data dari ketikkan
					$code=$this->input->post('code');
					$brcode=$this->input->post('brcode');
					$cscode=$this->input->post('cscode');
					$trandate=$this->input->post('trandate');
					$sicode=$this->input->post('sicode');
					$amount=$this->input->post('amount');
					$discount=$this->input->post('discount');
					$tax=$this->input->post('tax');
					$netamount=$this->input->post('netamount');

					//data di array-kan
					$data = array(
						'brcode' => $brcode,
						'cscode' => $cscode,
						'trandate' => $trandate,
						'sicode' => $sicode,
						'amount' => $amount,
						'discount' => $discount,
						'tax' => $tax,
						'netamount' => $netamount
					);
				 
					$where = array(
						'code' => $code
					);
				 
					$this->m_transaksi->update_sc($where,$data,'xrt');
					redirect('/c_transaksi/SC_memo_data');
			}	

		public function SC_memo_data()
		{
			$query = $this->m_transaksi->tampil_sc();
	  			$data['rts'] = null;
	  			if($query<1)
		  		{
		  			echo '';
		  		}
		  		else
	  			{
	   			$data['rts'] =  $query;
	  			}

			$this->load->view('templates/header');
			$this->load->view('transaksi/v_tran_SC_memo_tampil', $data);
			$this->load->view('templates/footer');
		}
		function SC_memo_hapus($code)
			{
				$where = array('code' => $code);
				$this->m_transaksi->hapus_sc($where,'xrt');
				redirect('/c_transaksi/SC_memo_data');
			}

	}//end class
?>
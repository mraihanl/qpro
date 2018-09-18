<?php
class M_transaksi extends CI_Model
{
	//Modul Sales Invoice==============================================================
	function input_si($data)
	{
		$this->db->insert('xsi', $data);
	}
	function hapus_si($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_si($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_si($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_si()
	{
		$query=$this->db->get('xsi');
		return $query->result();
	}

	//Modul Incoming Payment============================================================
	function input_ip($data)
	{
		$this->db->insert('xip', $data);
	}

	function tampil_ip()
	{
		$query=$this->db->get('xip');
		return $query->result();
	}

	//Modul Delivery Order==============================================================
	function input_do($data)
	{
		$this->db->insert('xdo', $data);
	}
	function hapus_do($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_do($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}
	function update_do($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_do()
	{
		$query=$this->db->get('xdo');
		return $query->result();
	}

	//Modul Sales Credit Memo==============================================================
	function input_sc($data)
	{
		$this->db->insert('xrt', $data);
	}
	function hapus_sc($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_sc($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}
	function update_sc($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_sc()
	{
		$query=$this->db->get('xrt');
		return $query->result();
	}

}
?>
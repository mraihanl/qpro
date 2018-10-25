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

	//Modul Good Issue==================================================================
	function gi_input($data)
	{
		$this->db->insert('xgi', $data);
	}
	function gi_tampil()
	{
		$query=$this->db->get('xgi');
		return $query->result();
	}
	function gihapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function search_isbn($isbn){
		$this->db->like( 'isbn', $isbn , 'both');
		$this->db->order_by('isbn', 'ASC');
		$this->db->limit(10);
		return $this->db->get('ybk')->result();
	}

	function search_wrhs($name){
		$this->db->like( 'name', $name , 'both');
		$this->db->order_by('name', 'ASC');
		$this->db->limit(10);
		return $this->db->get('zbr')->result();
	}

	public function totalgi() 
    {
        return $this->db->count_all("xgi");
    }

    public function recordgi($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("xgi");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }             
            return $data;
        } 
        return false;
    }    

}
?>
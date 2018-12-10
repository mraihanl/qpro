<?php
class M_transaksi extends CI_Model
{
	//Modul Good Sold==============================================================
	function input_gs($data)
	{
		$this->db->insert('xgs', $data);
	}
	function hapus_gs($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_gs($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_gs($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_gs()
	{
		$query=$this->db->get('xgs');
		return $query->result();
	}
	public function totalgs() 
    {
        return $this->db->count_all("xgs");
    }

    public function recordgs($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $sess=$this->session->userdata("cabang");
		$query=$this->db->get_where('xgs',array('cabang'=>$sess));
 
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
		$sess=$this->session->userdata("cabang");
		$query=$this->db->get_where('xgi',array('from'=>$sess));
		return $query->result();
	}
	function gihapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function search_judul($judul){
		$this->db->like( 'judul', $judul , 'both');
		$this->db->order_by('judul', 'ASC');
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
        $sess=$this->session->userdata("cabang");
		$query=$this->db->get_where('xgi',array('from'=>$sess));
 
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

    //Modul Good Receipt======================================================================
    function inputgdrc($data)
	{
		$this->db->insert('xgr', $data);
	}

	function hapusgdrc($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function editgdrc($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function updategdrc($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function tampilgdrcall()
	{
		$query=$this->db->get('xgr');
		return $query->result();
	}
	public function totalgr() 
    {
        return $this->db->count_all("xgr");
    }

    public function recordgr($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $sess=$this->session->userdata("cabang");
		$query=$this->db->get_where('xgr',array('to'=>$sess));
 
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

    function search_supplier($nama){
		$this->db->like( 'nama', $nama , 'both');
		$this->db->order_by('nama', 'ASC');
		$this->db->limit(10);
		return $this->db->get('xsp')->result();
	}    

}
?>
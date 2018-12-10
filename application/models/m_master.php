<?php
class M_master extends CI_Model 
{
	function __construct()
    {
    	parent::__construct();
    }

	//Modul Buku==============================================================
	function inputbuku($data)
	{
		$this->db->insert('xbuku', $data);
	}
	function hapusbuku($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function editbuku($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}
	function updatebuku($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function tampilbukuall()
	{
		$query=$this->db->get('xbuku');
		return $query->result();
	}
	public function recordbuku($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("xbuku");
 
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
    public function totalbuku() 
    {
        return $this->db->count_all("xbuku");
    }

    function search($keyword)
    {
    	$this->db->like('name',$keyword);
    	$query = $this->db->get('xbuku');
    	return $query->result();
    }

	//Modul Customer==============================================================
	function inputcust($data)
	{
		$this->db->insert('xcust', $data);
	}
	function hapuscust($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function editcust($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}
	function updatecust($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function tampilcust()
	{
		$query=$this->db->get('xcust');
		return $query->result();
	}
	public function recordcust($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("xcust");
 
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
    public function totalcust() 
    {
        return $this->db->count_all("xcust");
    }

	//Modul Branch==============================================================
	function m_branch_input($data)
	{
		$this->db->insert('xbranch', $data);
	}

	function m_branch_hapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function m_branch_edit($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function m_branch_update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	public function m_record_branch($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("xbranch");
 
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
    public function m_total_branch() 
    {
        return $this->db->count_all("xbranch");
    }

	//Modul Charges========================================================================
	function inputchgs($data)
	{
		$this->db->insert('ych', $data);
	}

	function hapuschgs($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function editchgs($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function updatechgs($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function tampilchgsall()
	{
		$query=$this->db->get('ych');
		return $query->result();
	}

	//Modul Supplier=========================================================================
	function inputsp($data)
	{
		$this->db->insert('xsp', $data);
	}
	function tampilsp()
	{
		$query=$this->db->get('xsp');
		return $query->result();
	}
	function hapussp($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function editsp($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}
	function updatesp($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
	public function recordsp($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("xsp");
 
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
    public function totalsp() 
    {
        return $this->db->count_all("xsp");
    }

    //Modul Store======================================================================================
    function inputstore($data)
	{
		$this->db->insert('xst', $data);
	}
	function tampilstore()
	{
		$query=$this->db->get('xst');
		return $query->result();
	}
	function hapusstore($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function editstore($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}
	function updatestore($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
	public function recordstore($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("xst");
 
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
    public function totalstore() 
    {
        return $this->db->count_all("xst");
    }
}
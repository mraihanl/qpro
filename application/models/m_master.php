<?php
class M_master extends CI_Model 
{
	//Modul Buku==============================================================
	function inputbuku($data)
	{
		$this->db->insert('ybk', $data);
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
		$query=$this->db->get('ybk');
		return $query->result();
	}
	public function recordbuku($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("ybk");
 
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
        return $this->db->count_all("ybk");
    }

	//Modul Customer==============================================================
	function inputcust($data)
	{
		$this->db->insert('ycs', $data);
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
		$query=$this->db->get('ycs');
		return $query->result();
	}
	public function recordcust($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("ycs");
 
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
        return $this->db->count_all("ycs");
    }

	//Modul Warehouse==============================================================
	function inputwrhs($data)
	{
		$this->db->insert('zbr', $data);
	}

	function hapuswrhs($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function editwrhs($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function updatewrhs($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function tampilwrhsall()
	{
		$query=$this->db->get('zbr');
		return $query->result();
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
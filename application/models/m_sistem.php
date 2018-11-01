<?php
class M_sistem extends CI_Model
{	
	function inputuser($data)
	{
		$this->db->insert('zus', $data);
	}
	function tampiluser()
	{
		$query=$this->db->get('zus');
		return $query->result();
	}
	function edituser($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}
	function updateuser($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapususer($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function search_role($rolename){
		$this->db->like( 'rolename', $rolename , 'both');
		$this->db->order_by('rolename', 'ASC');
		$this->db->limit(10);
		return $this->db->get('zro')->result();
	}
}
?>
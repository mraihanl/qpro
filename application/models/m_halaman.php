<?php
class M_halaman extends CI_Model{

	function totalbuku(){
		return $query = $this->db->count_all("xbuku"); 
	}
	function totalcustomer(){
		return $query = $this->db->count_all("xcust");
	}
	function totalwrhs(){
		return $query = $this->db->count_all("xbranch");
	}
}
?>
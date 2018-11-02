<?php
class M_halaman extends CI_Model{

	function totalbuku(){
		return $query = $this->db->count_all("ybk"); 
	}
	function totalcustomer(){
		return $query = $this->db->count_all("ycs");
	}
	function totalwrhs(){
		return $query = $this->db->count_all("zbr");
	}
}
?>
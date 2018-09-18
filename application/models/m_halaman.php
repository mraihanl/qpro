<?php
class M_halaman extends CI_Model{

	function totalbuku(){
		return $query = $this->db->count_all("ybk"); 
	}
	function totaltransaksi(){
		return $query = $this->db->count_all("xdo");
	}
}
?>
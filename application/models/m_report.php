<?php
class M_report extends CI_Model
{
	public function stock(){
		return $query = $this->db->query("CALL lap_stockonhand(30033)");
	}
}
?>
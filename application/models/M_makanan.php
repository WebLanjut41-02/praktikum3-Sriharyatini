<?php

class M_makanan extends CI_Model{
	
	function show_menu(){
		$hasil=$this->db->query("SELECT * FROM tbl_makanan");
		return $hasil;
	}
	
}
?>
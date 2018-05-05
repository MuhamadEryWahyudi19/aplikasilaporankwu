<?php 
	class Transaksi_model extends CI_Model{
		function getALLData(){
			$this->db->order_by("transaksi_id","DESC");
			$query = $this->db->get("transaksi");
			return $query;
		}
	}
?>
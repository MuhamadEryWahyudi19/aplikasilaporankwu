<?php 
		class Tambah extends CI_Controller{
			function index(){
				$data['content']= "tambah_data";
				$this->load->view("dashboard_view",$data);
		}
	}
?>
<?php 
		class About extends CI_Controller{
			function index(){
				$data['content']= "about_view";
				$this->load->view("dashboard_view",$data);
		}
	}
?>
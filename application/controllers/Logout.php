<?php 
		class Logout extends CI_Controller{
			function index(){
				$data['content']= "logout_view";
				$this->load->view("dashboard_view",$data);
		}
	}
?>
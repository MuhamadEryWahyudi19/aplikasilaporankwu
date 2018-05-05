<?php 
		class Contact extends CI_Controller{
			function index(){
				$data['content']= "contact_view";
				$this->load->view("dashboard_view",$data);
		}
	}
?>
<?php 
		class Dashboard extends CI_Controller{
			function index(){
				$data['content']= "home_view";
				$data['user']=$this->session->userdata('username');
				$this->load->view("dashboard_view",$data);
		}
	}
?>
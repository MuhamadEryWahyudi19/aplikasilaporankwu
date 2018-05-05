<?php 
		class Laporan extends CI_Controller{
			function __construct(){
				parent:: __construct();
				$this->load->model("transaksi_model");
			}
			function index(){
				$data["query"] = $this->transaksi_model->getALLData();
				$data['content']= "laporan_view";
				$this->load->view("dashboard_view",$data);
		}
	}
?>
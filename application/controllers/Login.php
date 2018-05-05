<?php 
		class Login extends CI_Controller{
			function index(){
				$this->load->view("login_view");
		}
		public function keluar(){
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
		public function cek_login()
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$cek=$this->db->get_where('user',['username'=>$username,'password'=>md5($password)]);
			if($cek->num_rows()>0){
				$data_session=array('status'=>'login','username'=>$username);
				$this->session->set_userdata($data_session);
				redirect('Dashboard');
			}
			$insert = $this->db->login("login",$data);
			if($insert){
				echo "
				<script>
					alert('data berhasil di simpan');
				</script>
				";
			}else{
				echo "
				<script>
					alert('data gagal di simpan');
				</script>	
				";
			}
		}
	}
?>
<?php 
		class Transaksi extends CI_Controller{
			function __construct(){
				parent:: __construct();
				$this->load->model("transaksi_model");
			}
			public function index(){
				$data["query"] = $this->transaksi_model->getALLData();
				$data['content']= "transaksi_view";
				$this->load->view("dashboard_view",$data);
		}
		public function tambah(){
			$data['content'] = 'tambah';
			$this->load->view('dashboard_view',$data);
		}
		public function tambah_proses(){
			// echo $this->input->post('total_harga_belsat');
			$pemesan = $this->input->post("pemesan");
			$barang = $this->input->post("barang");
			$jumlah = $this->input->post("jumlah");
			$beli_satuan = $this->input->post("beli_satuan");
			$total_harga_belsat = $this->input->post("total_harga_belsat");
			$jual_satuan = $this->input->post("jual_satuan");
			$total_harga_jusat = $this->input->post("total_harga_jusat");
			$laba = $this->input->post("laba");

			$data = array(
				"transaksi_nama_pemesan" => $pemesan,
				"transaksi_nama_brg" => $barang,
				"transaksi_jml" => $jumlah,
				"transaksi_hasat" => $beli_satuan,
				"transaksi_total_hasat" => $total_harga_belsat,
				"transaksi_haju" => $jual_satuan,
				"transaksi_total_haju" => $total_harga_jusat,
				"laba" => $laba,
			);
			$insert = $this->db->insert("transaksi",$data);
			if($insert){
				echo "
				<script>
					alert('data berhasil di simpan');
					window.location = '".base_url('transaksi')."';
				</script>
				";
			}else{
				echo "
				<script>
					alert('data gagal di simpan');
					window.location = '".base_url('transaksi/tambah_data')."';
				</script>	
				";
			}
		}
		public function hapus($id){
			$where = array('transaksi_id'=>$id);
			$this->db->delete('transaksi',$where);
			redirect('transaksi');
		}
		public function edit($id){
			$data['transaksi'] = $this->db->get_where("transaksi",['transaksi_id'=>$id])->row();
			$data['content']= "transaksi_edit";
			$this->load->view("dashboard_view",$data);
		}
		public function update(){
			$id = $this->input->POST('transaksi_id');
			$pemesan = $this->input->post("pemesan");
			$barang = $this->input->post("barang");
			$jumlah = $this->input->post("jumlah");
			$beli_satuan = $this->input->post("beli_satuan");
			$total_harga_belsat = $this->input->post("total_harga_belsat");
			$jual_satuan = $this->input->post("jual_satuan");
			$total_harga_jusat = $this->input->post("total_harga_jusat");

			$data = array(
				"transaksi_nama_pemesan" => $pemesan,
				"transaksi_nama_brg" => $barang,
				"transaksi_jml" => $jumlah,
				"transaksi_hasat" => $beli_satuan,
				"transaksi_total_hasat" => $total_harga_belsat,
				"transaksi_haju" => $jual_satuan,
				"transaksi_total_haju" => $total_harga_jusat,
			);
			$this->db->where('transaksi_id',$id);
			$insert = $this->db->update("transaksi",$data);
			if($insert){
				echo "
				<script>
					alert('data berhasil di simpan');
					window.location = '".base_url('transaksi')."';
				</script>
				";
			}else{
				echo "
				<script>
					alert('data gagal di simpan');
					window.location = '".base_url('transaksi/tambah_data')."';
				</script>	
				";
			}
		}
		public function cetak(){
			$data["query"] = $this->transaksi_model->getALLData();
			$data['content']= "print";
			$this->load->view("dashboard_view",$data);
		}
	}
?>
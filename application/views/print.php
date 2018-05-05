<div class="panel panel-default" style="border-radius: 0px;">
	<div class="panel-heading">
		<h4 style="padding: 0px;margin:0px;"><strong>DAFTAR DATA KEWIRAUSAHAAN</strong></h4>
	</div>
	<table class="table table-bordered table-striped" style="font-size: 12px;">
	<thead>
		<tr>
			<th class="text-center">NO</th>
			<th class="text-center">NAMA PEMBELI</th>
			<th class="text-center">NAMA BARANG</th>
			<th class="text-center">JUMLAH</th>
			<th class="text-center">HARGA BELI SATUAN</th>
			<th class="text-center">TOTAL HARGA BELI</th>
			<th class="text-center">HARGA JUAL SATUAN</th>
			<th class="text-center">TOTAL HARGA JUAL</th>
			<th class="text-center">LABA</th>
		</tr>
	</thead>
	<button onclick="cetak()" id="tmbl_cetak" class="btn btn-info" style="float:left;margin-left:20px;"> Print</button>
	<br>
		<tbody class="text-center">
		<?php 
			if ($query->num_rows() > 0){
				$no = 0;  
					foreach ($query->result() as $row){
						$no++;
						echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$row->transaksi_nama_pemesan.'</td>
								<td>'.$row->transaksi_nama_brg.'</td>
								<td>'.$row->transaksi_jml.'</td>
								<td>'.$row->transaksi_hasat.'</td>
								<td>'.$row->transaksi_total_hasat.'</td>
								<td>'.$row->transaksi_haju.'</td>
								<td>'.$row->transaksi_total_haju.'</td>
								<td>'.$row->laba.'</td> 
							';
						}
			}else{
				echo '
					<tr>
						<td colspan="10" class="text-center">DATA MASIH KOSONG</td>
					</tr>
				';
			}
		?>
	</tbody>
</table>
</div>
<script type="text/javascript">
	function cetak(){
		document.getElementById('tmbl_cetak').style = "display:none;";
		window.print();
	}
</script>
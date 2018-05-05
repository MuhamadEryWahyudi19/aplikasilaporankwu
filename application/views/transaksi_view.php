<div class="panel panel-default" style="border-radius: 0px;">
	<div class="panel-heading">
		<h4 style="padding: 0px;margin:0px;"><strong>DAFTAR DATA KEWIRAUSAHAAN</strong></h4>
	</div>
	<div class="panel-body">
		<a href="<?php echo base_url('transaksi/tambah');?>" class="btn btn-success"><i class="fa fa-plus"></i>  Tambah Data</a>
		<br>
		<br>
		<table class="table table-bordered table-striped" style="font-size: 12px;">
			<thead>
				<tr>
					<th class="text-center">NO</th>
					<th class="text-center">NAMA PEMBELI</th>
					<th class="text-center">NAMA BARANG</th>
					<th class="text-center">JUMLAH</th>
					<th class="text-center">HARGA BELI SATUAN</th>
					<th class="text-center">TOTAL BELI SATUAN</th>
					<th class="text-center">HARGA JUAL SATUAN</th>
					<th class="text-center">TOTAL BELI SATUAN</th>
					<th class="text-center">LABA</th>
					<th class="text-center">AKSI</th>
				</tr>
			</thead>
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
								<td>
									<a href="'.base_url('transaksi/edit/'.$row->transaksi_id).'" class="btn btn-warning "><i class="fa fa-list"></i> Edit</a>
									<a href="'.base_url('transaksi/hapus/'.$row->transaksi_id).'" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
								</td>
							</tr>
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
</div>
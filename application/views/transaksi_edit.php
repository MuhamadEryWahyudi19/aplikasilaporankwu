<div class="panel panel-default" style="border-radius: 0px;">
    <div class="panel-heading">
        <h4 style="padding: 0px;margin:0px;"><strong>TAMBAH DATA KWU</strong></h4>
    </div>
    <div class="panel-body">
        <!-- <a href="#" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a> -->
        <br>
    <?php echo form_open("Transaksi/update");?>

    <input type="hidden" name="transaksi_id" value=" <?php echo $transaksi->transaksi_id;?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>NAMA PEMBELI :</label>
                    <input type="text" class="form-control" placeholder="" value="<?php echo $transaksi->transaksi_nama_pemesan;?>" name="pemesan">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>NAMA BARANG  :</label>
                    <input type="text" class="form-control" placeholder="" value="<?php echo $transaksi->transaksi_nama_brg;?>" name="barang">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>JUMLAH   :</label>
                    <input type="text" class="form-control" placeholder="" value="<?php echo $transaksi->transaksi_jml;?>" name="jumlah" id="jumlah" onkeyup="hitungSemua()">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>HARGA BELI SATUAN</label>
                    <input type="text" class="form-control" placeholder="" value="<?php echo $transaksi->transaksi_hasat;?>" name="beli_satuan" id="satuan" onkeyup="hitung()">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>TOTAL BELI</label>
                    <input type="text" class="form-control" placeholder="" value="<?php echo $transaksi->transaksi_total_hasat;?>" readonly="" name="total_harga_belsat" id="total">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>HARGA JUAL SATUAN</label>
                    <input type="text" class="form-control" placeholder="" value="<?php echo $transaksi->transaksi_haju;?>" name="jual_satuan" id="jual" onkeyup="hitung_laba()">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>TOTAL JUAL</label>
                    <input type="text" class="form-control" placeholder="" value="<?php echo $transaksi->transaksi_total_haju;?>" readonly="" name="total_harga_jusat" id="total_jual">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>LABA</label>
                    <input type="text" class="form-control" placeholder="" value="<?php echo $transaksi->laba;?>" id="laba">
                </div>
            </div>
        </div>
        <button class="btn btn-info"><i class="fa fa-save"></i> SIMPAN</button>
        <?php echo form_close("");?>
    </div>
</div>

<script type="text/javascript">
    function hitung() {
        var jumlah = document.getElementById('jumlah').value;
        var satuan = document.getElementById('satuan').value;
        var total = jumlah * satuan;
        document.getElementById('total').value = total;
    }
    function hitung_laba() {
        var jumlah = document.getElementById('jumlah').value;
        var jual = document.getElementById('jual').value;
        var total_jual = jumlah * jual;

        var total = document.getElementById('total').value;

        var laba = total_jual - total;

        document.getElementById('total_jual').value = total_jual;
        document.getElementById('laba').value = laba;
    } 
</script>
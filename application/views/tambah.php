<div class="panel panel-default" style="border-radius: 0px;">
    <div class="panel-heading">
        <h4 style="padding: 0px;margin:0px;"><strong>TAMBAH DATA KWU</strong></h4>
    </div>
    <div class="panel-body">
        <br>
    <?php echo form_open("Transaksi/tambah_proses");?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>NAMA PEMBELI :</label>
                    <input type="text" class="form-control" placeholder="Nama Pembeli" value=""  name="pemesan">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>NAMA BARANG  :</label>
                    <input type="text" class="form-control" placeholder="Nama Barang" value="" name="barang">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>JUMLAH   :</label>
                    <input type="text" class="form-control" placeholder="Jumlah Barang" value="" name="jumlah" id="jumlah" onkeyup="hitungSemua()">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>HARGA BELI SATUAN</label>
                    <input type="text" class="form-control" placeholder="Harga Beli Barang Satuan" value="" name="beli_satuan"  id="satuan" onkeyup="hitung()">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>TOTAL BELI</label>
                    <input type="text" class="form-control" placeholder="Total Harga Beli" value="" readonly="" name="total_harga_belsat" id="total">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>HARGA JUAL SATUAN</label>
                    <input type="text" class="form-control" placeholder="Harga Jual Barang Satuan" value="" name="jual_satuan" id="jual" onkeyup="hitung_laba()">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>TOTAL JUAL</label>
                    <input type="text" class="form-control" placeholder="Total Harga Jual" value="" readonly="" name="total_harga_jusat" id="total_jual">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>LABA</label>
                    <input type="text" class="form-control" placeholder="Laba yang di dapat" name="laba" value="" id="laba">
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

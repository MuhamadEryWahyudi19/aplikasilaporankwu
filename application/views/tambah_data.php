<div class="panel panel-default" style="border-radius: 0px;">
    <div class="panel-heading">
        <h4 style="padding: 0px;margin:0px;"><strong>TAMBAH DATA Siswa</strong></h4>
    </div>
    <div class="panel-body">
        <a href="<?php echo base_url('transaksi/tambah');?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
        <br>
        <br>
        <table class="table table-bordered table-striped" style="font-size: 12px;">
            <thead>
                <tr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NO   :</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NISN  :</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NIS  :</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NAMA   :</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>JENIS KELAMIN    :</label><br>
                                <input type="radio" placeholder="" value="L"> Laki-Laki<br>
                                <input type="radio" placeholder="" value="P"> Perempuan
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ALAMAT   :</label>
                                <textarea class="form-control" placeholder="" value="" rows="8" cols="80"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>TEMPAT LAHIR :</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>TANGGAL LAHIR</label>
                                <input type="date" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-info"><i class="fa fa-save"></i> SIMPAN</button>
                </tr>
            </thead>
        </table>
    </div>
</div>
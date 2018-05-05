<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comportable" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>Codeigniter</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-theme.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <style type="text/css">
        body{
            background-color: #6495ED;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"></a>
            </div>
            <ul class="navbar-nav nav" style="color: white;">
                <li class="active" >
                    <?php echo anchor('#','Aplikasi Kewirausahaan')?> 
                </li>
                <li>
                    <?php echo anchor('dashboard','Home')?>
                </li>
                <li>
                    <?php echo anchor('transaksi','Transaksi / Tambah Data') ?>
                </li>
                <li>
                    <?php echo anchor('Cetak','Cetak') ?>
                </li>
                <li>
                    <a href="<?php echo base_url('Login/keluar');?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?php echo $this->load->view($content,'',TRUE);?>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/npm.js');?>"></script>
</body>
</html>
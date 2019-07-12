<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>adaGYM</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url('assets/home/css/bootstrap.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/home/css/bootstrap-responsive.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/home/css/prettyPhoto.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/home/css/flexslider.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/home/css/custom-styles.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/jquery.steps/css/jquery.steps.css');?>">
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/home/css/style-ie.css');?>"/>
<![endif]--> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dropify/dropify/dropify.min.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dropify/css/bootstrap.css'?>">
<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url('assets/home/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/jquery.steps/js/jquery.steps.js');?>"></script>
<script src="<?php echo base_url('assets/parsley.js');?>"></script>
<script src="<?php echo base_url('assets/home/js/jquery.prettyPhoto.js');?>"></script>
<script src="<?php echo base_url('assets/home/js/jquery.flexslider.js');?>"></script>
<script src="<?php echo base_url('assets/home/js/jquery.custom.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/dropify/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/dropify/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/dropify/dropify/dropify.min.js'?>"></script>
</head>

<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.htm"><img src="../assets/adah.png" alt="" /></a>
            <h5>Big Things... Small Packages</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <!--  -->

      </div>
      
      <div class="row" >
      <h6 class="title-bg">Upload Bukti Bayar : <small>Bukti Bayar Pendaftaran</small></h6>
         
        <div class="span6 contact" >            
            <form class="form-horizontal" action="<?php echo base_url().'buktibayar/addBukbar'?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                <h6>No Daftar : </h6>
                    <input class="form-control" name="id" size="16" type="text" placeholder="Masukan No Daftar">
                </div>
               
                <div class="form-group">
                    <h6>Nama Rekening : </h6>
                    <input class="form-control" name="nama_rek" size="16" type="text" placeholder="Masukan Nama Rekening">
                </div>
                
                <div class="form-group">
                <h6>Nama Bank : </h6>
                    <input class="form-control" name="nama_bank" size="16" type="text" placeholder="Masukan Nama Bank">
                </div>
                
                <div class="form-group">
                <h6>Total Bayar : </h6>
                    <input class="form-control" name="total" size="16" type="text" placeholder="Masukan Total Bayar">
                </div>

				<div class="form-group">
                <h6>Masukan Bukti Bayar : </h6>
					<input type="file" name="filefoto" class="dropify" data-height="300">
				</div>
				<div class="form-group">
					<button class="btn btn-inverse" type="submit">Simpan</button>
				</div>
			</form>	 
        </div>
    </div>
<script type="text/javascript">
  

   $('.dropify').dropify({
			messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
	});


</script>

        </div>
        

    <!-- </div> -->
</div>


    <div class="footer-container"><!-- Begin Footer -->
    <div class="color-bar-2 color-bg"></div>
    	<div class="container">
        	<div class="row footer-row">
            <div class="row" style="margin-left:4px"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2019 adaGYM... All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a>ada GYM</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->
            </div>
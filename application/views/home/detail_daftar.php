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
</head>

<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.htm"><img src="../../adagym.com/assets/adah.png" alt="" /></a>
            <h5>Big Things... Small Packages</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <!--  -->

      </div><!-- End Header -->
     
    <!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery-single">

            <div class="row">
                <div class="span6">
                    <img src="../../adagym.com/assets/galery.png" class="align-left thumbnail" alt="image">
                </div>
                <div class="span6">
                    <h2>Custom Illustration</h2>
                    <p class="lead">For an international ad campaign. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

                    <ul class="project-info">
                        <li><h6>Nama GYM :</h6> 09/12/15</li>
                        <li><h6>Alamat   :</h6> John Doe, Inc.</li>
                        <li><h6>No Telp  :</h6> Design, Illustration</li>
                        <li><h6>Email    :</h6> Jane Doe</li>
                        <!-- <li><h6>Designer:</h6> Jimmy Doe</li> -->
                    </ul>

                    <button class="btn btn-inverse pull-left" DATA id="klik" type="button">Daftar Sekarang...</button>
                    <a href="<?php echo base_url('home');?>" class="pull-right"><i class="icon-arrow-left"></i>Back to All Gym</a>
                </div>
            </div>

        </div><!-- End gallery-single-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
	
            

            <!-- modal -->
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div style="display: none" class="modal" id="modal-pesan" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">
                                Daftar GYM
                            </h3>
                        </div>
                        <div class="modal-body">
                            <div class="container" id="wizardx">
                                <h3>Data Diri </h3>
                                <section>
                                    <label for="name-2"> Name *</label>
                                    <input id="txtNama" name="nama" type="text" class="required">
                                    <label for="age-2"> Umur *</label>
                                    <input id="txtUmur" name="umur"type="text">
                                    <div class="form-group">
                                    <label for="name -2">Jenis Kelamin *</label>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="jk" id="txtJk" value="Laki-Laki" checked="">
                                            Laki-Laki
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="jk" id="txtJk" value="Perempuan">
                                            Perempuan
                                            </label>
                                        </div>
                                        </div>
                                    <label for="address-2">No Telp *</label>
                                    <input id="txtTelp" name="tlp" type="number" class="required">
                                    <label for="address-2">Alamat *</label>
                                    <input type="text" name="alamat" id="txtAlamat" class="required">
                                    <label for="email-2">Email *</label>
                                    <input id="txtEmail" name="email" type="text" class="required email">
                                </section>
                                <h3>Data Daftar</h3>
                                <section>
                                    <label for="name-2">Nama GYM</label>
                                    <input type="text">
                                    <label for="name-2">Harga Daftar </label>
                                    <input type="text" name="" id="">
                                    <label for="name-2">Pilih Package</label>
                                    <input type="text">
                                    <label for="name-2">Harga Package</label>
                                    <input type="text">
                                    <label for="name-2">Sub Total</label>
                                    <input type="text">
                                </section>
                                <h3>Transaksi</h3>
                                <section>
                                    
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- endmodal -->
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
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>

<script>
      $(document).ready(function() {
           $("#klik").click(function () { 
            console.log("a");
            $("#modal-pesan").modal("show");
            //     $.ajax({
            //         type    : 'ajax',
            //         method  : 'POST',
            //         url     : 'gym/showData',
            //         data    : {kd_gym=kd_gym},
            //         success:function(data){

            //         }
            //     });
           });

           $("#wizardx").steps({
               
               headerTag: "h3",
               bodyTag: "section",
               autoFocus: true,
               transitionEffect:"slideLeft"
            //    onStepChanging: function(event, indexsekarang, maxindex){
            //        if(indexsekarang<maxindex){
            //            if(indexsekarang===0){
            //                var nama     =  $('input[id=txtNama]').parsley();
            //                var umur     =  $('input[id=txtUmur]').parsley();
            //                var jk       =  $('input[id=txtJk]').parsley();
            //                var telp     =  $('input[id=txtTelp]').parsley();
            //                var alamat   =  $('input[id=txtAlamat]').parsley();
            //                var email    =  $('input[id=txtEmail]').parsley();

            //                 if(nama.isValid() &&
            //                    umur.isValid() &&
            //                    jk.isValid() &&
            //                    telp.isValid() &&
            //                    alamat.isValid() &&
            //                    email.isValid()){
            //                        return true;
            //                    }else{
            //                        nama.validate();
            //                        umur.validate();
            //                        jk.validate();
            //                        telp.validate();
            //                        alamat.validate();
            //                        email.validate();
            //                    }
            //            }
            //            if(indexsekarang===1){


            //            }
            //        }
            //    }
           });
        });
    
        
</script>